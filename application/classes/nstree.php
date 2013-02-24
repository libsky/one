<?php defined('SYSPATH') or die('No direct script access.');

/*
CREATE TABLE `tree` (
	`id` INT(10) NOT NULL AUTO_INCREMENT,
	`name` VARCHAR(255) NOT NULL,
	`left_key` INT(10) NOT NULL,
	`right_key` INT(10) NOT NULL,
	`level` INT(10) NOT NULL,
	PRIMARY KEY (`id`),
	INDEX `key` (`left_key`, `right_key`, `level`)
)
COLLATE='utf8_general_ci'
ENGINE=InnoDB
*/

class NSTree
{
	protected $table = NULL;

	public function __construct($tablename)
	{
		$this->table = $tablename;
	}

	// Модифицирует ключи
	protected function modifyNodes($key, $delta)
	{
		$query =
			'UPDATE '.Database::instance()->quote_table($this->table).'
			SET right_key = right_key + '.(int)$delta.'
			WHERE right_key >= '.(int)$key;
		DB::query(Database::UPDATE, $query)->execute();

		$query =
			'UPDATE '.Database::instance()->quote_table($this->table).'
			SET left_key = left_key + '.(int)$delta.'
			WHERE left_key >= '.(int)$key;
		DB::query(Database::UPDATE, $query)->execute();
	}

	public function getNode($id)
	{
		$result = DB::select()
		->from($this->table)
		->where('id', '=', $id)
		->execute();

		if (count($result) == 0)
			throw new Exception('Node id='.$id.' does not exist.');

		return $result->current();
	}

	public function clear($extrafields=array())
	{
		if (!is_array($extrafields))
			throw new Exception('$extrafields must be array.');
		
		DB::query(NULL, 'TRUNCATE '.Database::instance()->quote_table($this->table))->execute();

		DB::delete($this->table)->execute();

		$data = array(
			'id' => 1,
			'name' => '<root>',
			'left_key' => 1,
			'right_key' => 2,
			'level' => 0
		);
		$data = $data + $extrafields;
		list($insert_id, $tmp) = DB::insert($this->table, array_keys($data))->values(array_values($data))->execute();

		return $insert_id;
	}

	public function getTree($id=NULL)
	{
		$id = (int) $id;
		$QTblName = Database::instance()->quote_table($this->table);

		if ($id != 0)
		{
			$node = $this->getNode($id);

			$query =
				'SELECT *
				FROM '.$QTblName.'
				WHERE left_key >= '.(int)$node['left_key'].' AND right_key <= '.(int)$node['right_key'].'
				ORDER BY left_key';
		}
		else
		{
			$query =
				'SELECT *
				FROM '.$QTblName.'
				ORDER BY left_key';
		}

		$result = DB::query(Database::SELECT, $query)->execute();

		return $result;
	}

	public function getPath($id)
	{
		$node = $this->getNode($id);

		$query =
			'SELECT *
			FROM '.Database::instance()->quote_table($this->table).'
			WHERE right_key > '.(int)$node['left_key'].' AND left_key < '.(int)$node['right_key'].'
			ORDER BY left_key';

		$result = DB::query(Database::SELECT, $query)->execute();

		return $result;
	}

	public function insert($id, $extrafields=array())
	{
		if (!is_array($extrafields))
			throw new Exception('$extrafields must be array.');

		// Находим родителя
		$parent = $this->getNode($id);

		DB::query(NULL, 'START TRANSACTION')->execute();

		// Обновляем ключи существующего дерева, узлы стоящие за родительским узлом
		$this->modifyNodes((int)$parent['right_key'], 2);
		
		// Добавляем новый узел
		$node = array(
			'id' => NULL,
			'left_key' => $parent['right_key'],
			'right_key' => $parent['right_key'] + 1,
			'level' => $parent['level'] + 1
		);
		$node = $node + $extrafields;
		list($insert_id, $tmp) = DB::insert($this->table, array_keys($node))->values(array_values($node))->execute();

		DB::query(NULL, 'COMMIT')->execute();
		
		return $insert_id;
	}

	public function delete($id)
	{
		$node = $this->getNode($id);

		DB::query(NULL, 'START TRANSACTION')->execute();

		// Удаляем узел (вместе с веткой)
		$query =
			'DELETE FROM '.Database::instance()->quote_table($this->table).'
			WHERE left_key >= '.(int)$node['left_key'].' AND right_key <= '.(int)$node['right_key'];
		DB::query(Database::DELETE, $query)->execute();

		$width = $node['right_key'] - $node['left_key'] + 1;
		// Обновление последующих узлов
		$this->modifyNodes((int)$node['right_key'], -$width);

		DB::query(NULL, 'COMMIT')->execute();
	}

	// Метод перемещает ноду $id в родительскую ноду $parentId
	public function move($id, $parentId)
	{
		$node = $this->getNode($id);

		DB::query(NULL, 'START TRANSACTION')->execute();

		// Удаляем узел (вместе с веткой)
		$query =
			'DELETE FROM '.Database::instance()->quote_table($this->table).'
			WHERE left_key >= '.(int)$node['left_key'].' AND right_key <= '.(int)$node['right_key'];
		DB::query(Database::DELETE, $query)->execute();

		$width = $node['right_key'] - $node['left_key'] + 1;
		// Обновление последующих узлов
		$this->modifyNodes((int)$node['right_key'], -$width);

//		DB::query(NULL, 'COMMIT')->execute();
	}

	public function check($thorough=FALSE)
	{
		$QTblName = Database::instance()->quote_table($this->table);

		// Тест 1
		$query =
			'SELECT id
			FROM '.$QTblName.'
			WHERE MOD(right_key - left_key, 2) = 0';
		$result = DB::query(Database::SELECT, $query)->execute();

		if (count($result) != 0)
			throw new Exception('Test 1 integrity check failed.');
		
		// Тест 2
		$query =
			'SELECT id
			FROM '.$QTblName.'
			WHERE MOD(left_key - level + 2, 2) = 0';
		$result = DB::query(Database::SELECT, $query)->execute();

		if (count($result) != 0)
			throw new Exception('Test 2 integrity check failed.');

		// Тест 3
		if ($thorough)
		{
			$query =
				'SELECT t1.id, COUNT(t1.id) AS rep, MAX(t3.right_key) AS max_right
				FROM
					'.$QTblName.' AS t1,
					'.$QTblName.' AS t2,
					'.$QTblName.' AS t3
				WHERE
					t1.left_key <> t2.left_key
				  AND
					t1.left_key <> t2.right_key
				  AND
					t1.right_key <> t2.left_key
				  AND
					t1.right_key <> t2.right_key
				GROUP BY
					t1.id
				HAVING
					max_right <> SQRT( 4 * rep + 1 ) + 1';

			$result = DB::query(Database::SELECT, $query)->execute();

			if (count($result) != 0)
				throw new Exception('Test 3 integrity check failed.');
		}

		// Тест 4, проверка level
		$query =
			'SELECT node.id as id, node.level as level
			FROM
				'.$QTblName.' AS node,
				'.$QTblName.' AS parent
			WHERE node.left_key BETWEEN parent.left_key AND parent.right_key
			GROUP BY node.id
			HAVING COUNT(parent.name) - 1 != level
			ORDER BY node.left_key';
		
		$result = DB::query(Database::SELECT, $query)->execute();

		if (count($result) != 0)
			throw new Exception('Test 4 integrity check failed.');

	}
}