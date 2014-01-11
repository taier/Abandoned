
<?php
class Controller_Potato extends Controller {

	public function action_index()
	{
		return Response::forge(View::forge('potato/index'));
	}
}