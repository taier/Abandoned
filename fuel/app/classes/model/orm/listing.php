<?php

class Model_Orm_Listing extends Orm\Model {
    
    protected static $_table_name = 'places';
    protected static $_primary_key = array('id');
    protected static $_properties = array(
	'id',
	'title',
	'description',
	'wtt',
	'address',
	'date',
	'user_id',
	'photo_URL',
	'category'
	);

	protected static $_has_many = array(
			'comments' => array(
				'key_from' => 'id',
				'model_to' => 'Model_Orm_Comment',
				'key_to' => 'places_id',
				'cascade_save' => true,
				'cascade_delete' => false
			),
	    );
	public static function validate($factory) {
	$val = Validation::forge($factory);
	$val->add_field('title','title', 'required|max_length[10000]');
	$val->add_field('description','description', 'required|max_length[10000]');
	//$val->add_field('wtt','wtt', 'required|max_length[10000]');
	//$val->add_field('address','address', 'required|max_length[10000]');
	return $val;
    }
}
