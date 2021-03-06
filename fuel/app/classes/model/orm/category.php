<?php

class Model_Orm_Category extends Orm\Model {
    
    protected static $_table_name = 'categories';
    protected static $_primary_key = array('id');
    protected static $_properties = array(
    'id',
	'category_name',
	'photo_url'
	);

	public static function validate($factory) {
	$val = Validation::forge($factory);
	return $val;
    }
}
