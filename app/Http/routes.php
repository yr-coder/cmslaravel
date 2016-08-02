<?php


use App\Country;
use App\Photo;
use App\Post;
use App\Tag;
use App\User;
use App\Video;

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {

    return view('welcome');

});
//
//Route::get('/about', function () {
//
//    return "Hi About Page";
//
//});
Route::get('/contact', function () {

    return "Contact ME please";

});
//
//Route::get('post/{id}/{name}', function ($id, $name){
//
//    return 'This is post number '. $id . ' ' . $name;
//
//});
//
//Route::get('admin/posts/example', array('as' => 'admin.home', function (){
//
//    $url = route('admin.home');
//
//    return "This url is ".$url;
////
////}));
////Route::get('/post/{anything}/{something}', 'PostController@index');
////Route::resource('posts', 'PostController');
//
//
//
//Route::get('/contact', 'PostController@contact');
//
//
//Route::get('post/{id}/{name}/{age}', 'PostController@show_post');

//
/*
|--------------------------------------------------------------------------
| DATABASE RAW SQL QUERIES
|--------------------------------------------------------------------------
|
*/

//Route::get('/insert', function(){
//
//    DB::insert('insert into posts(title, content) VALUES (?, ?)', ['PHP with Laravel', 'Laravel is the best thing that has happened to PHP']);
//
//});

//Route::get('/read', function (){
//
//    $results = DB::select('select * from posts where id = ?', [1]);
//
//    foreach ($results as $post) {
//        echo $post->title;
//        echo $post->content;
//    }
//
//});

//Route::get('/update', function (){
//
//    $updated = DB::update('update posts set title = "Updated title" where id=?', [1]);
//    return $updated;
//
//
//});

//Route::get('/delete', function (){
//
//   $deleted = DB::delete('delete from posts where id = ?', [1]);
//
//    return $deleted;
//
//});

/*
|--------------------------------------------------------------------------
| ELOQUENT ORM
|--------------------------------------------------------------------------
|
*/
//
//Route::get('/read', function (){
//
//    $posts = Post::all();
//
//    foreach ($posts as $post) {
//        echo $post->title.'<br>';
//    }
//
//});

//Route::get('/find', function (){
//
//   $post = Post::find(2);
//
//    echo $post->title;
//    echo $post->content;
//
//});

//Route::get('/findwhere', function (){
//
//    $posts = Post::where('id', 2)->orderBy('id', 'desc')->take(1)->get();
//
//    return $posts;
//});

//Route::get('/findmore', function (){
//
////    $posts = Post::findOrFail(3);
////
////    return $posts;
//
//    $posts = Post::where('users_count', '<', 50)->firstOrFail();
//
//});

//Route::get('/basicinsert', function (){
//
//    $post = new Post;
//
//    $post->title = 'New ORM title insert';
//    $post->content = 'Eloquent really works';
//
//    $post->save();
//
//});

//Route::get('/update', function (){
//
//    $post = Post::find(2);
//
//    $post->title = 'New ORM title insert';
//    $post->content = 'Eloquent really works';
//
//    $post->save();
//
//});
//
//Route::get('/create', function (){
//
//    Post::create(['title'=>'The create method', 'content'=>'Wow I\'am learning a lot']);
//
//});

//Route::get('/update', function (){
//
//    Post::where('id', 2)->where('is_admin', 0)->update(['title'=>'New PHP title', 'content'=>'Instructor is good']);
//
//});
//
//Route::get('/delete/{id}', function ($id){
//
//    $post = Post::find($id);
//
//    $post->delete();
//
//});
//
//Route::get('/delete2', function (){
//
//    Post::destroy([4,5]);
//
//});
//
//Route::get('/softdelete', function (){
//
//    Post::find(7)->delete();
//
//});
//
//Route::get('/readsoftdelete', function (){
//
////    $post = Post::find(6);
////
////    return $post;
//
//    $post = Post::onlyTrashed()->get();
//
//    return $post;
//
//});
//Route::get('/restore', function (){
//
//    Post::withTrashed()->where('is_admin', 0)->restore();
//
//});

//Route::get('/forcedelete', function (){
//
//    Post::onlyTrashed()->where('is_admin', 0)->forceDelete();
//
//});

/*
|--------------------------------------------------------------------------
| ELOQUENT RELATIONSHIPS
|--------------------------------------------------------------------------
|
*/

//One to One relationship

//Route::get('/user/{id}/post', function ($id){
//
//    return User::find($id)->post->title;
//
//});

//Inverse One to One relationship

//Route::get('/post/{id}/user', function ($id){
//
//    return Post::find($id)->user->name;
//
//});

//One to Many relationship

//Route::get('/posts', function (){
//
//    $user = User::find(1);
//
//    foreach ($user->posts as $post) {
//        echo $post->title.'<br>';
//    }
//});

// Many to Many relationship. Create pivot table first!

//Route::get('/user/{id}/role', function ($id){
//
//    $user = User::find($id);
//
//    foreach ($user->roles as $role) {
//        return $role->name;
//    }
//
//});

// Accessing intermediate (pivot) table

//Route::get('/user/pivot', function (){
//
//    $user = User::find(2);
//
//    foreach ($user->roles as $role) {
//        echo $role->pivot->role_id;
//    }
//
//});

// Has Many Through relationship

//Route::get('/post/country/{id}', function ($id){
//
//    $country = Country::find($id);
//
//    foreach ($country->posts as $post) {
//        echo $post->title;
//
//    }
//
//});

// Polymorphic relationship

//Route::get('/post/{id}/photos', function ($id){
//
//    $post = Post::find($id);
//
//    foreach ($post->photos as $photo) {
//
//        echo $photo->path.'<br>';
//
//    }
//
//});

// Polymorphic inverse

//Route::get('photo/{id}/owner', function ($id){
//
//    $photo = Photo::findOrFail($id);
//
//    return $photo->imageable;
//
//});

// Polymorphic Many to Many

//Route::get('/video/{id}/tag', function ($id){
//    $video = Video::find($id);
//
//    foreach ($video->tags as $tag) {
//        echo $tag->name;
//    }
//
//});

// Polymorphic Many to Many Inverse

//Route::get('tag/{id}/post', function ($id){
//
//    $tag = Tag::findOrFail($id);
//
//    foreach ($tag->posts as $post) {
//        echo $post->title;
//    }
//
//});


/*
|--------------------------------------------------------------------------
| CRUD APPLICATION
|--------------------------------------------------------------------------
|
*/

Route::resource('/posts', 'PostsController');
