<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('blade/first', function()
{
	return View::make('fourth');
});

Route::get('home', function()
{
	return View::make('home');
});

Route::get('example', function()
{
	$data['nome'] = 'Fabio';
	$data['empresa'] = 'Operatum'; 
	return View::make('example',$data);
});

#Route with Controller
Route::post('index', 'Blog\Controller\Article@showIndex');

Route::get('article/new', 'ArticleController@newArticle' );

#Route with class Filter
Route::filter('Birthday','BirthdayFilter');
Route::get('class/filter',array(
		'before' => 'birthday',
		function(){
			return View::make('hello');
		}
));

#Routes with muli-filter
Route::get('route/filter/after',array(
		'before' => array('birthday', 'christmas'),
		function(){
			return View::make('hello');
		}
));

Route::get('route/filter/after',array(
		'before' => array('birthday', 'christmas'),
		function(){
			return View::make('hello');
		}
));

#routes with filter
Route::get('route/filter/after',array(
		'after' => 'birthday',
		function(){
			return View::make('hello');
		}
));

Route::get('route/filter/before',array(
		'before' => 'birthday',
		function(){
			return View::make('hello');
		}
));

#routes with shortcuts
Route::get('shortcut/download', function(){
	$file = 'Ebook_Analytics_2.pdf';
	return Response::download($file,418,array('iron','man'));
});


Route::get('shortcut/json', function(){
	$data = array('iron','man','rocks');
	return Response::json($data);
});

#routes with response
Route::get('markdown/response', function(){
	$response = Response::make('***some bold text***',200);
	$response->headers->set('Content-Type','text/x-markdown');
	return $response;
});

#Routes with Redirects
Route::get('first', function()
{
	return Redirect::to('second');
});

Route::get('second', function(){
	return 'Seconde route.';
});

#Routes with views

Route::get('/{squirrel}', function($squirrel)
{
	//return View::make('hello');
	$data['squirrel'] = $squirrel; 
	return View::make('simple', $data);

});

#Routes without views

Route::get('my/page', function()
{
	return 'Hello world!';
});

Route::get('/books', function()
{
	return 'Books index.';
});

Route::get('/books/{genre}', function($genre)
{
	return "Books in the {$genre} category.";
});

Route::get('/bebidas/{genre?}', function($genre = null)
{
	if($genre == null) return 'Bebidas index.';
	return "Bebidas na categoria {$genre}";
});

Route::get('/secao/{genre?}',function($genre = 'Validacao')
{
	return "Voce esta na secao {$genre}";
});