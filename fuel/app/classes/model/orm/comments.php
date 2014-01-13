<?php

class Model_Orm_Comments extends Orm\Model {
    
    protected static $_table_name = 'comments';
    protected static $_primary_key = array('id');
    protected static $_properties = array(
	'id',
	'comment',
	'places_id',
	'user_id',
	'created',
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
	return $val;
    }
}