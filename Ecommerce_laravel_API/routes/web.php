<?php


use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
/*
Route::get('/', function () {
    return view('welcome');
});

Route::get("/you", function () {
return "<h1>About viwe</h1>";
});

Route::get("/contact", function () {
    return "<h1>contact view</h1>";
    });
// passing interger data
Route::get("/blog/{id}", function ($id) {
    return "<h1>blog page {$id}</h1>";
    });
Route::get("/blog/{id}", function ($id) {
    return "<h1>blog page {$id}</h1>";
    });
Route::get("/page/{id}", function ($id) {
    if($id=="first"){
        return "<h1>first page</h1>"; 
    }else if($id=="second"){
        return "<h1>second page</h1>";
    }
    else{
        return "<h1>invalid page</h1>";
    }
    });

//multiple parameters 

Route::get("/user/{id}/{name}",function($id,$name){
    return "<h1> User id:{$id} & username:{$name}</h>";
});

//regular expressions constraints
Route::get("/users/{name}",function($name){
    return "<h1>welcome {$name}</h1>";
})->where("name","[A-Za-z]+");

Route::get("/userid/{id}/{name}",function($id,$name){
    return "<h1> User id:{$id} & username:{$name}</h>";
})->where(["id"=>"[0-9]+","name"=>"[a-z]+"]);


//regular expression with helper method
Route::get("/userid/{id}/{name}",function($id,$name){
    return "<h1> User id:{$id} & username:{$name}</h>";
})->whereNumber('id')->whereAlpha('name');

//category
Route::get("/category/{category}",function($category){
    return "<h1>welcome to the category {$category}</h1>";
})->whereIn("category",['movie','song','painting']);

//gobal constraints
Route::get('/user/{id}',function($id){
    return "<h1> sutudent id is {id}</h1>";
});

//encode forward slashes
Route::get("/search/{search}",function($search){
    return $search;
})->where('search','.*');

//routes groups

//without groups
Route::get('gallery/videos',function(){
    return "<h3>video page</h3>";
});
Route::get('gallery/photo',function(){
    return "<h3>photo page</h3>";
});

//with groups using prefix
Route::prefix("gallery")->group(function(){
    Route::get('videos',function(){
        return "<h3>video page</h3>";
    });
    Route::get('photo',function(){
        return "<h3>photo page</h3>";
    });
});


//fallback route
Route::fallback(function () {
    return "<h1>404 error page</h1>";
});
*/

//controllers:

/*use App\Http\Controllers\homecontroller;

Route::get('/',[homecontroller::class,'index']);
Route::get('about/{username}',[homecontroller::class,'about']);
*/


//resource controller
/*use App\http\COntrollers\teachercontroller;

Route::resource('teachers',teachercontroller::class);
*/

/*use App\http\COntrollers\blogcontroller;
Route::get('/',blogcontroller::class);
*/

/*use App\http\controllers\studentcontroller;

Route::get('/',[studentcontroller::class,'output']);

Route::post('store',[studentcontroller::class,'store'])->name('store');
*/
/*use App\http\Controllers\studentcontroller;


Route::get("/", [studentcontroller::class,'index']);
Route::get('about', [studentcontroller::class,'about']);
Route::group(['middleware'=>'custom'],function(){
    Route::get('contact', [studentcontroller::class,'contact']);
   Route::get('service', [studentcontroller::class,'service']);
});


Route::get("about", function () {
    echo "this about";
})->middleware('test'); 
Route::get("contact", function () {
    echo "this contact";
}); 

Route::get("service", function () {
    echo "this service";
})->middleware('test'); ; 

*/

/*use Illuminate\Http\Request;

Route::get("show_data", function (Request $request) {
    dd($request->session()->all());
    //dd(session()->all());
    //particular data
    echo $request->session()->get('username');
    echo '<br>';
    echo $request->session()->get('email');

    // methode two:

    echo session('username');
    echo '<br>';
    echo session('email');
    echo session('mobile');
    if($request->session()->has('mobile')){
        echo session('mobile');
    }else{
        echo "moblile session not avaliable";
    }

});
Route::get('store_data', function(Request $request) {
    $request->session()->put('username','parvathi');
    $request->session()->put('email','parvathi@gmail.com');
   
    //without using the session directly
    session(['username'=>'shiva',
    'email'=>'shiva@gmail.com',
    'mobile'=>'oq111',
]);

//data in the session variable will be put only once
//$request->session()->flash('status','sucess is done');

});

Route::get('delete_data', function(Request $request) {
    //$request->session()->forget('username');
    //multiple data delete
    $request->session()->forget(['email','mobile']);
    //delete all
    //$request->session()->flush();

});
*/
//use App\Http\Controllers\studentcontroller;

//Route::get('/',[studentcontroller::class,'index']);
//Route::get('/show',[studentcontroller::class,'show']);









