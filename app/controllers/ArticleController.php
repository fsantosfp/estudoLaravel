<?php

	class ArticleControler extendes BaseController
	{
		public function showIndex()
		{
			return View::make('index');
		}

		public function showSingle($articleId)
		{
			return View::make('single');
		}

		public function newArticle()
		{
			
		}
	}

?>