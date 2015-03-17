<?php

	namespace Blog\Controller;
	use View;
	use BaseController;

	class Article extends BaseController
	{
		public function showIndex()
		{
			return View::make('index');
		}

		public function getCreate()
		{
			return View::make('create');
		}

		public function postCreate()
		{
			// Handle the creation form.
		}
	}

?>