
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
		/*$places = Model_Orm_Listing::find($id, array("related" => array('comments')));
		$canAddComments = Auth::has_access('comment.create');
		$places_view = View::forge('description/index', $data);
		$places_view->set("places", $places);
		$places_view->set("canAddComments", $canAddComments);*/
		//$this->template->title = __("ACTION_VIEW_TITLE");
		//$this->template->page_content = $places_view;
		return View::forge('description/index', $data);
	}
}