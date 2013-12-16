<?php 

class PostController extends BaseController {


	protected $layout = "layouts.dash";

	public function index(){

		$posts = Post::all();

		return View::make('painel.posts.list')->with('posts', $posts);

	}


}