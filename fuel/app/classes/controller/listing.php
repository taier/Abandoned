
<?php
class Controller_Listing extends Controller_Public {

	public function action_index()
	{
		$data["titles"] = Model_Orm_Category::find('all');
		$data["places"] = Model_Orm_Listing::find('all');
		//$articles = Model_Orm_Category::factory('categories')->find_all();
		//$random = array();
		//list(,$user_id) = Auth::get_user_id();
		//is_null($user_id) and Response::redirect("listing/index");
		/*foreach($places_user as $key=>$value) {
				if($value->user_id == $user_id) {
					$random = array_push($value->title);
				}*/
		return View::forge('listing/index', $data);
	}

	public function action_orm() {
		$places_id = 1;
		$places = Model_Orm_Listing::find($places_id);
		echo $places->title;
	}
}