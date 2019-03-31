<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () { 
	return redirect('home');
});


Route::get('uploads/{filename}', function ($filename)
{

    $path = storage_path('app/uploads/' . $filename);
    // dd($path);
    if (!File::exists($path)) {
        abort(404);
    }

    $file = File::get($path);
    $type = File::mimeType($path);

    $response = Response::make($file, 200);
    $response->header("Content-Type", $type);

    return $response;
});

Route::get('contact-us', function () { 
	return view('contact-us');
});

Route::post('contact-us', function () { 
	return view('contact-us');
})->name('contact-us.submit-form');

Route::get('{page}/{subs?}', ['uses' => 'PageController@index'])->where(['page' => '^((?!admin).)*$', 'subs' => '.*']);



