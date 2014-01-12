
<?php
class Controller_Description extends Controller {

	public function action_index($id)
	{		$data = array();
			$entry = Model_Orm_Listing::find('all');
			foreach($entry as $key=>$value) {
				if($value->id == $id) {
					$data["title"] = $value->title;
					$data["description"]= $value->description;
					$data["wwt"] = $value->wtt;
					$data["location"] = $value->address;
					$data["photo_URL"] =$value->photo_URL;
				}
		 }
		return View::forge('description/index', $data);
	}
}