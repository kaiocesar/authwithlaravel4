<?php
class UserController extends BaseController {

	public function index() {

		$users = User::all();
		return View::make('user.list')->with('users', $users);

	}

}

