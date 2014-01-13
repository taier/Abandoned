
<?php
class Controller_Description extends Controller_Public {

	public function action_index($id)
	{		
		list(,$user_id) = Auth::get_user_id();
		if (Input::method() == 'POST') {

			$date = new DateTime();
		    $date->setTimezone(new DateTimeZone('Europe/Riga'));
			$realDate = $date->format('Y-m-d H:i:sP');
			$val = Model_Orm_Comments::validate('create');
			$comments = Model_Orm_Comments::forge(
					array(
					    'comment' =>  $_POST['new_comment'],
					    'places_id' =>  $id,
					    'user_id' => 	$user_id,
					    'created' => $realDate)
					);
			if($comments->save()) {
				Response::redirect('description/index/'.$id);
			}
		}

		$data = array();

			$entry = Model_Orm_Listing::find('all');
			foreach($entry as $key=>$value) {
				if($value->id == $id) {
					$data["title"] = $value->title;
					$data["description"]= $value->description;
					$data["wwt"] = $value->wtt;
					$data["location"] = $value->address;
					$data["photo_URL"] = $value->photo_URL;
					$data["place_id"] = $value->id;
					$data["user_id"] = $user_id;
				}
		 }
		$data["comments"] = Model_Orm_Comments::find('all');
		return View::forge('description/index', $data);
		
	}
}