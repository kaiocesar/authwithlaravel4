<?php
/**
 * User controller
 * @author Kaio Cesar <tecnico.kaio@gmail.com>
 */

class UserController extends BaseController {


	public function index() {
		$users = User::where('status','1')->get();
		return View::make('user.list')->with('users', $users);
	}

}

