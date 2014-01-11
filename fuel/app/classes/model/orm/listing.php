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
	'photo_id',
	);
}
