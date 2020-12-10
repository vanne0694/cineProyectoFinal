<?php

use App\fuction;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MoviesController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
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


//Route::resourse('nombreRuta', 'nombreControlador');
//Route::resource('movies','MoviesController');
////Route::resource('movies', 'MoviesController');
Route::get('viewTable', 'MoviesController@viewTable');

//Route::resource('consumables', 'ConsumableController');
//Route::resource('rooms', 'RoomController');

Route::resources([
    'movies' => 'MoviesController',
    'consumables' => 'ConsumableController',
    'rooms' => 'RoomController',
    'entrances'=>'EntranceController',
    'fuction'=>'FuctionController',

]);

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//xml
Route::get('movies.xml', 'MoviesController@xml')->name('movies.xml');
Route::get('/moviesxml', function(){
    $movies = App\movies::all();
    return response() ->xml(['movies' => $movies->toArray()]);
});

Route::get('entrance.xml', 'EntranceController@xml')->name('entrance.xml');
Route::get('/entrancexml', function(){
    $entrances = App\entrance::all();
    return response() ->xml(['entrance' => $entrances->toArray()]);
});

Route::get('fuction.xml', 'FuctionController@xml')->name('fuction.xml');
Route::get('/fuctionxml', function(){
    $fuction = App\fuction::all();
    return response() ->xml(['fuction' => $fuction->toArray()]);
});

Route::get('Rooms.xml', 'RoomController@xml')->name('Rooms.xml');
Route::get('/Roomsxml', function(){
    $Rooms = App\Room::all();
    return response() ->xml(['Rooms' => $Rooms->toArray()]);
});

Route::get('consumables.xml', 'ConsumableController@xml')->name('Consumables.xml');
Route::get('/consumablesxml', function(){
    $Consumables = App\Consumable::all();
    return response() ->xml(['Consumables' => $Consumables->toArray()]);
});

route::get('/login', 'LoginController@index')->name('login.css');

//XLS
Route::get('/moviesXLS', 'MoviesController@exportToXls');
Route::get('/consumablesXLS', 'ConsumableController@exportToXls');
Route::get('/roomsXLS', 'RoomController@exportToXls');
Route::get('/entrancesXLS', 'EntranceController@exportToXls');
Route::get('/fuctionsXLS', 'FuctionController@exportToXls');

//CSV
Route::get('/moviesCSV', 'MoviesController@exportToCsv');
Route::get('/consumablesCSV', 'ConsumableController@exportToCsv');
Route::get('/roomsCSV', 'RoomController@exportToCsv');
Route::get('/entrancesCSV', 'EntranceController@exportToCsv');
Route::get('/fuctionsCSV', 'FuctionController@exportToCsv');

//PDF
Route::get('movies-pdf', 'MoviesController@exportToPDF')->name('movies.pdf');
Route::get('consumables-pdf', 'ConsumableController@exportToPDF') ->name('consumables.pdf');
Route::get('rooms-pdf', 'RoomController@exportToPDF') ->name('rooms.pdf');
Route::get('entrances-pdf', 'EntranceController@exportToPDF') ->name('entrances.pdf');
Route::get('fuctions-pdf', 'FuctionController@exportToPDF') ->name('fuctions.pdf');

//Graficas
Auth::routes();
route::get('/home', 'HomeController@index')->name('home');
Route::get('graficas.graficaMovies', 'GraficasController@graficaMovies')->name('movies.grafica');
Route::get('graficas.graficaConsumables', 'GraficasController@graficaConsumables')->name('consumables.grafica');
Route::get('graficas.graficaRooms', 'GraficasController@graficaRooms')->name('rooms.grafica');
Route::get('graficas.graficaEntrances', 'GraficasController@graficaEntrances')->name('entrances.grafica');
Route::get('graficas.graficaFuctions', 'GraficasController@graficaFuctions')->name('fuctions.grafica');