<?php

class Model_Orm_Comment extends Orm\Model {
    
    protected static $_table_name = 'comments';
    protected static $_primary_key = array('id');
    protected static $_properties = array(
	'id',
	'comment',
	'places_id',
	'user_id',
	'created',
	);
	
	protected static $_belongs_to = 
			array(
			    'places' => array(
					'key_from' => 'places_id',
					'model_to' => 'Model_Orm_Listing',
					'key_to' => 'id'			    
				),
                'users' => array(
					'key_from' => 'user_id',
					'model_to' => 'Model_Orm_User',
					'key_to' => 'id'			    
				),
			);
	public function canEdit(){
		list(,$user_id) = Auth::get_user_id();
		return Auth::has_access('comment.update_ultimate') || (Auth::has_access('comment.update') && $user_id && $user_id == $this->user_id);
	}
	public function canDelete(){
		list(,$user_id) = Auth::get_user_id();
		return Auth::has_access('comment.update_ultimate') || (Auth::has_access('comment.delete') && $user_id && $user_id == $this->user_id);
	} 
	public static function validate($factory) {
	$val = Validation::forge($factory);
	$val->add_field('comment', 'Comment', 'required|max_length[10000]');	
	return $val;
    }
}