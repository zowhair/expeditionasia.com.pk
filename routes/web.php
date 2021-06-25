<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ToursController;

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
    return view('welcome');
});

// Route::get('/tours', 'App\Http\Controllers\ToursController@index');
// Route::get('/tours', 'App\Http\Controllers\ToursController@getAllTours');
Route::get('/tours', function() {
	$tours = DB::table('tours')->get();
	return view('/tours', ['tours' => $tours]);
});
/*
Route::get('/expeditions/{epage}', function($epage) {
	// $k2= DB::table('tours')->where('title','=','k2');
	$k2 =DB::select('select * from tours where title =?', $epage);
	[ToursController::class, 'getExpeditions'];
	return view('/expeditions/{epage}', ['epage'=>$epage]);
	// return $epage;
});
*/
Route::get('/services/{serpage}', [ToursController::class, 'getServices'])->where(['serpage'=>'(\bcamping\b)|(\bhelicopter\b)|(\bsecurity\b)|(\btransport\b)|(\bspecial\b)']);


Route::get('/expeditions/{epage}', [ToursController::class, 'getExpeditions'])->where(['epage' => '(\bk2\b)|(\bbatura\b)|(\bbroadp\b)|(\bchgolisa\b)|(\bdiran\b)|(\bdirifica\b)|(\bgasherbrum\b)|(\bgasherbrum2\b)|(\bgasherbrum3\b)|(\bgasherbrum4\b)|(\bk6\b)|(\bk7\b)|(\bladyfinger\b)|(\blaila\b)|(\blatok\b)|(\bmasherbrum\b)|(\bmingling\b)|(\bmuztagh\b)|(\bnangaparbet\b)|(\bpassu\b)|(\brakaposhi\b)|(\brush\b)|(\bshipton\b)|(\bspantik\b)|(\btango\b)|(\btirich\b)']);

Route::get('/treks/{tpage}', [ToursController::class, 'getTreks'])->where(['tpage'=> '(\bbatura\b)|(\bbiafo\b)|(\bfairymeadow\b)|(\bk2bc\b)|(\bk2bcgondogoro\b)|(\bk2bcgasherbrum\b)|(\bk6bc\b)|(\bmasherbrum\b)|(\bnagar\b)|(\bnaltar\b)|(\bnangaparbetrupal\b)|(\bpatundas\b)|(\brakaposhi\b)|(\bshimshal\b)|(\bspantikbc\b)|(\bthalle\b)|(\btorch\b)|(\bwakhan\b)']);

Route::get('/cultural/{cpage}', [ToursController::class, 'getCultural'])->where(['cpage'=>'(\bbalochistan\b)|(\blahore\b)|(\bmultan\b)|(\bsargodha\b)|(\bborder\b)|(\bdesert\b)|(\bislamabad\b)|(\btaxila\b)|(\bgb\b)|(\bmultan\b)']);

Route::get('/safari/{spage}', [ToursController::class, 'getSafari'])->where(['spage'=>'(\bastore\b)|(\bbalochistan\b)|(\bdeosai\b)|(\bsarfaranga\b)']);

// Route::get('/services/{$serpage}', [ToursController::class, 'getServices'])->where(['serpage'=>'(\bcamping\b)|(\bhelicopter\b)|(\bsecurity\b)|(\bspecial\b)|(\btransport\b)']);



Route::get('/gallery', [ToursController::class, 'getGallery']);
Route::get('/blog', [ToursController::class, 'getBlog']);
Route::get('/about', [ToursController::class, 'getAbout']);
Route::get('/contact', [ToursController::class, 'getContacts']);

// [ToursController::class,'getExpeditions'])->where(['epage' => '(\bk2\b)|(\bbatura\b)|(\bbroadp\b)|(\bchgolisa\b)']);

// Route::get('/{exptrk}/{extrpage}', function($exptrk, $extrpage) {
// 	return $exptrk ;
// })->where(['exptrk'=>'((\bexpeditions\b))|((\btreks\/\b))'], ['extrpage' => '((\bk2\b)|(\bhunza\b))']);
// Route::get('')

