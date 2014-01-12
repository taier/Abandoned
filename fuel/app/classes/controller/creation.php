
<?php
class Controller_Creation extends Controller {

	public function action_index()
	{
		return Response::forge(View::forge('creation/index'));
	}

	public function action_create() {

	if (Input::method() == 'POST') {
		$date = new DateTime();
	    $date->setTimezone(new DateTimeZone('Europe/Riga'));
		$realDate = $date->format('Y-m-d H:i:sP');
		$val = Model_Orm_Listing::validate('create');
		$places = Model_Orm_Listing::forge(
				array(
				    'title' =>  $_POST['title'],
				    'description' => $_POST['description'],
				    'wtt' =>"all that you need",
				    'address' =>"some cool adress",
				    'date' => $realDate,
				    'user_id' => "1",
				    'photo_id' => "1"
			));
		//$places->title = $title;
		if($places->save()) {
			Response::redirect('listing/index');
		}
	}


			// if (Input::method() == 'POST') {
		 //    $val = Model_Orm_Listing::validate('create');
		 //    if ($val->run()) {
		 //    	$date = new DateTime();
		 //    	$date->setTimezone(new DateTimeZone('Europe/Riga'));
		 //    	$realDate = $date->format('Y-m-d H:i:sP');
			// $place = Model_Orm_Listing::forge(
			// 		array(
			// 		    'title' => $val->validated('title'),
			// 			'date' => $realDate,
			// 			'description' => $val->validated('description')
			// 	));
			
			// $place->wtt ="all that you need";
			// $place->address = "some cool adress";
			// $place->user_id = "1";
			// $place->photo_id = "1";
			// $place->save();

			// 	}

			// }
		return View::forge('creation/index');
}
}