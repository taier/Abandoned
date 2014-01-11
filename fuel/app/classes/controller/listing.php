
<?php
class Controller_Listing extends Controller {

	public function action_index()
	{
		$data["title"] = "Castle";
		$data["places"] = array('Sigulda','Daugavpils','Valmiera');
		return View::forge('listing/index', $data);
	}
}