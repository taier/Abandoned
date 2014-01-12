
<?php
class Controller_Creation extends Controller {

	public function action_index()
	{
		if (Input::method() == 'POST') {
		$date = new DateTime();
	    $date->setTimezone(new DateTimeZone('Europe/Riga'));
		$realDate = $date->format('Y-m-d H:i:sP');
		$val = Model_Orm_Listing::validate('create');
		$places = Model_Orm_Listing::forge(
				array(
				    'title' =>  $_POST['title'],
				    'description' => $_POST['description'],
				    'wtt' =>$_POST['wtt'],
				    'address' =>$_POST['address'],
				    'date' => $realDate,
				    'user_id' => "1",
				    'photo_id' => "1"
			));
		//$places->title = $title;
		if($places->save()) {
			Response::redirect('listing/index');
		}
	}
		return View::forge('creation/index');
	}

}