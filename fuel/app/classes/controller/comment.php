<?php

class Controller_Comment extends Controller_Public {

    public function before() {
        parent::before();
        //loads messages for comment controller
		Lang::load("comment");
    }
    
    public function action_create($places_id = null) {

	is_null($places_id) and Response::redirect("description");
	list(,$user_id) = Auth::get_user_id();
	is_null($user_id) and Response::redirect("description");
	$places = Model_Orm_Listing::find($places_id);
	$user = Model_Orm_User::find($user_id);
	
	if (Input::method() == 'POST') {
	    $val = Model_Orm_Comment::validate('create');
	    if ($val->run()) {
	    	$date = new DateTime();
	    	$date->setTimezone(new DateTimeZone('Europe/Riga'));
	    	$realDate = $date->format('Y-m-d H:i:sP');
			$comment = Model_Orm_Comment::forge(
				array(
				    'comment' => $val->validated('comment'),
					'created' => $realDate
			));
		
		$comment->places = $places;
		$comment->user = $user;

		if ($comment && $comment->save()) {
		    Session::set_flash('success', __("ACTION_VIEW_COMMENT_ADDED"). " \"". $places->title."\"");
		    Response::redirect('description/index' . $places_id);
		} else {
		    Session::set_flash('error', __("ACTION_VIEW_COMMENT_NOT_ADDED"));
		}
	    } else {
		Session::set_flash('error', $val->error());
	    }
	}

	$this->template->title = __("ACTION_VIEW_ADDING"). " \"". $places->title."\"";
	$this->template->content = View::forge('comment/create');
    }
	
    public function action_edit($id = NULL) {
	$comment = Model_Orm_Comment::find($id);
	(!$comment || !$comment->canEdit()) && Response::redirect("description");
	$places = Model_Orm_Listing::find($comment->places_id);
	
	if (Input::method() == 'POST') {
	    $val = Model_Orm_Comment::validate('create');
	    if ($val->run()) {
			$comment->comment = $val->validated('comment');
			$date = new DateTime();
		    $date->setTimezone(new DateTimeZone('Europe/Riga'));
		    $realDate = $date->format('Y-m-d H:i:sP');
		if ($comment->save()) {
		    Session::set_flash('success', 'Edited comment in the event "' . $event->title . '".');
		    Response::redirect('description/index' . $comment->places_id);
		} else {
		    Session::set_flash('error', __("ACTION_VIEW_COMMENT_NOT_ADDED"));
		}
	    } else {
		Session::set_flash('error', $val->error());
	    }
	}

	$this->template->title = __("ACTION_VIEW_COMMENT_EDITING"). " \"". $places->title."\"";
	$this->template->content = View::forge('comment/create');
	!$comment ?: $this->template->content->set('comment', $comment);
    }
	
    public function action_delete($id = null) {
	if ($item = Model_Orm_Comment::find($id)) {
		!$item->canDelete() && Response::redirect("description");	
		
	    $places_id = $item->places_id;
	    $item->delete();

	    Session::set_flash('success', 'Comment deleted');
	} else {
	    Session::set_flash('error', 'Could not delete comment');
	}

	Response::redirect('description/index' . $event_id);
    }

}