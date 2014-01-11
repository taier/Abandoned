
<?php
class Controller_Listing extends Controller {

	public function action_index()
	{
		$data["title"] = "Hospitals";
		$data["places"] = array('Sigulda','Daugavpils','Valmiera');
		return View::forge('listing/index', $data);
	}

	public function action_orm() {

		$places_id = 1;
		$places = Model_Orm_Listing::find($places_id);
		echo $places->title;
	}
}