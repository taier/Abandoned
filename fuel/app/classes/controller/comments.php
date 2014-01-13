<?php

class Controller_Comments extends Controller_Public {

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
	    $val = Model_Orm_Comments::validate('create');
	    if ($val->run()) {
	    	$date = new DateTime();
	    	$date->setTimezone(new DateTimeZone('Europe/Riga'));
	    	$realDate = $date->format('Y-m-d H:i:sP');
			$comment = Model_Orm_Comments::forge(
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
	
    public function action_edit($id) {

		list(,$user_id) = Auth::get_user_id();
		$comment = Model_Orm_Comments::find($id);
		$user = Model_Orm_User::find($user_id);

		if($user->group == 100) {

		} else if ($comment->user_id != $user_id && $user_id != 0) {
			 Response::redirect('description/index/'.$comment->places_id);
		}
		
		if (Input::method() == 'POST') {

			$date = new DateTime();
	    	$date->setTimezone(new DateTimeZone('Europe/Riga'));
	    	$realDate = $date->format('Y-m-d H:i:sP');
			$new_comment = Model_Orm_Comments::forge(
					array(
					    'comment' =>  $_POST['new_comment'],
					    'places_id' =>  $comment->places_id,
					    'user_id' => 	$comment->user_id,
					    'created' => $realDate)
					);
			 $comment->delete();
			 $new_comment->save();
			 Response::redirect('description/index/'.$new_comment->places_id);
		}
		$data["old_comment"] = $comment->comment;
		return View::forge('comments/edit',$data);	
     }


      public function action_delete($id) {
			list(,$user_id) = Auth::get_user_id();
			$comment = Model_Orm_Comments::find($id);
			$user = Model_Orm_User::find($user_id);
			if($user->group == 100) {

			} else if($comment->user_id != $user_id && $user_id != 0) {
				 Response::redirect('description/index/'.$comment->places_id);
			}
			 $comment->delete();
			 Response::redirect('description/index/'.$comment->places_id);
      }

}