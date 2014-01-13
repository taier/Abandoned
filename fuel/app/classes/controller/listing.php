
<?php
class Controller_Listing extends Controller_Public {

	public function action_index()
	{
		$data["titles"] = Model_Orm_Category::find('all');
		$data["places"] = Model_Orm_Listing::find('all');
		$comments = Model_Orm_Comments::find('all');
		list(,$user_id) = Auth::get_user_id();
		$data["user_id"] = $user_id;

		if($user_id != 0) {

		$coolArray = array();
		foreach ($comments as $comment) {
			if($comment->user_id == $user_id && $user_id != 0) {
				array_push($coolArray, $comment->comment);
				}
			}
		$data['comment'] = $coolArray[rand(0,count($coolArray)-1)];

		} else {
			$data['comment'] = "Empty";


		}
		return View::forge('listing/index', $data);
	}

	public function action_orm() {
		$places_id = 1;
		$places = Model_Orm_Listing::find($places_id);
		echo $places->title;
	}
}