
<?php
class Controller_Listing extends Controller {

	public function action_index()
	{
		return Response::forge(View::forge('listing/index'));
	}
}