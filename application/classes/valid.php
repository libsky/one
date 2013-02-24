<?php defined('SYSPATH') or die('No direct script access.');

class Valid extends Kohana_Valid
{
	public static function check_id($value, $tablename)
	{
		$id = (int) $value;
		
		if (! preg_match("/^[a-z_]+$/i", $tablename)) return FALSE;

		$count = DB::select(array('COUNT("*")', 'total_count'))
			->from($tablename)
			->where('id', '=', $id)
			->execute()
			->get('total_count');

		if ($count != 1) return FALSE;
		
		return TRUE;
	}
	
}