
<?php
class Controller_Creation extends Controller {

	public function action_index()
	{
		if ( !Auth::has_access('place.create') ) {
		 Response::redirect("listing/index");
		}
		if (Input::method() == 'POST') {
		$date = new DateTime();
	    $date->setTimezone(new DateTimeZone('Europe/Riga'));
		$realDate = $date->format('Y-m-d H:i:sP');
		$category = Model_Orm_Category::find(Input::post("category")+1);
		$val = Model_Orm_Listing::validate('create');
		$places = Model_Orm_Listing::forge(
				array(
				    'title' =>  $_POST['title'],
				    'description' => $_POST['description'],
				    'wtt' =>$_POST['wtt'],
				    'address' =>$_POST['address'],
				    'date' => $realDate,
				    'user_id' => "1",
				    'photo_URL' => $_POST["photo_URL"],
				    'category'=> $category->category_name
			));
		if($places->save()) {
			Response::redirect('listing/index');
		}
	}
		$array = array();	
		$categories =  Model_Orm_Category::find('all');
	 	foreach($categories as $key=>$value) {
			array_push($array,$value->category_name);
		 }

		$data['categories'] = $array;
		return View::forge('creation/index',$data);
	}

}