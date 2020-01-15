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
    return view('welcome');
});

Route::get('action', 'PagesController@action');
Route::get('about', 'PagesController@about');
Route::get('join', 'PagesController@join');
Route::get('contact', 'PagesController@contact');
Route::get('news', 'PagesController@news');
Route::get('customer', 'PagesController@showCustomer');
// Route::get('/student/{id}', function($id){
//     return "Hello Student . $id . WEP2020A";
// })-> name('show.student');


// // create new route
// Route::get('/teacher/{index}',function($index){
//     $result = "";
//     $outputArray = "";
//     $item;
//     // create new array
//         $teachers = array("Channak","Ronan","Shieha","Rady","Rith");
//         if($index < sizeof($teachers)){
//         $result = "This teacher is : " . $teachers[$index];
//         }else{
       
//         for($i= 0 ; $i < sizeof($teachers); $i++){
//         $countIndex = sizeof($teachers) -1;
//         $outputArray .= "[$i] " .$teachers[$i];
//         if($i < $countIndex){
//         $outputArray .=  ", ";
//         }
//         $result =  "This array is :".$outputArray."<br> No Teacher with this index: " .$index.
//         "<br>The largest index is :" . $countIndex;;
//     }
        
// }
//     return $result;
    
// });