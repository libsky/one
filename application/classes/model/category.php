<?php defined('SYSPATH') or die('No direct script access.');

class Model_Category
{
	protected $nstree;
    protected $tableName;
	protected $errors = array();

	public function __construct($tableName)
    {
        $this->nstree = new NSTree($tableName);
        $this->tableName = $tableName;
    }

	public function getTree()
    {
		return $this->nstree->getTree();
    }
	
	public function catInsert($parentId, $data = array())
    {
                $data = Arr::extract($data, array('name', 'url'));
                $vData = $data;
                $vData['parentId'] = $parentId;
                $validation = Validation::factory($vData);
                $validation->rule('name', 'not_empty');
                $validation->rule('name', 'alpha_numeric');
                $validation->rule('name', 'min_length', array(':value', '3'));
                $validation->rule('name', 'max_length', array(':value', '250'));
                $validation->rule('parentId', 'check_id', array(':value', $this->tableName));
		$validation->rule('url', 'not_empty');
		$validation->rule('url', 'alpha_numeric');
		$validation->rule('url', 'max_length', array(':value', '200'));
		$validation->rule('url', array($this, 'unique_url'));

        if(!$validation->check())
        {
			$this->errors = $validation->errors('catErrors');
			return FALSE;
        }

		$this->nstree->insert($parentId, $data);
        return TRUE;
    }

	public function getErrors()
    {
        return $this->errors;
    }
	
	public function unique_url($url)
	{
		return ! DB::select(array(DB::expr('COUNT(url)'), 'total'))
			->from($this->tableName)
			->where('url', '=', $url)
			->execute()
			->get('total');
	}
	
	public function getCategoryInfoByUrl($url)
	{
		$data = DB::select()
			->from($this->tableName)
			->where('url', '=', $url)
			->execute()
			->current();
		
			if (!isset($data['id'])) return FALSE;
			return $data;
	}
	
	
}