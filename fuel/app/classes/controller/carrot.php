
<?php
class Controller_Carrot extends Controller {

	public function action_index()
	{
		return Response::forge(View::forge('carrot/index'));
	}
}