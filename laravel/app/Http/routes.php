 <?php

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

Route::get('/', 'WelcomeController@index');

// Route::get('/aa/{id?}', function ($id=10){
//     echo $id;
//     return view('demo.hello');
// });
//RESTFUL 控制路由配置
Route::resource('/stu', 'StuController');
Route::get('/demo','DemoController@index');
Route::get('/demo/{id}','DemoController@show');
// Route::get('home', 'HomeController@index');

// Route::controllers([
// 	'auth' => 'Auth\AuthController',
// 	'password' => 'Auth\PasswordController',
// ]);

//Route::get('/goods/list/{name}-{id}',function($name,$id){
//    echo $name;
//    echo $id;
// })->where('id','\d+')->where('name','[a-zA-Z]+');
//Route::get('Admin/user/add',[
//    'as =>uadd',
//    function(){
//        echo '这是用户添加页面';
//    }]);
//   Route::get('/test',function(){
//   //echo route('uadd');
//     echo "111";
//    abort(404);
//   });
//   Route::get('user/profile', ['as' => 'profile', function () {
//    echo "111";
//}]);
//    Route::get('/ajax',function(){
//     return view('ajax');
//   });
//    Route::post('/post',function(){
//     echo "这是ajax发送的post请求";
//   });
   
//   Route::get('/Home/Goods/show/{id}', ['as'=>'abc', function($id){
//    //普通创建url
//    // echo url('/param/hahah').'<br>';
//    //路由别名创建url
//    $a = route('abc').'<br>';
//    echo $a;
//    //实现页面跳转
//    // return redirect()->route('goods',['id'=>12]);
//    //获取路由名称
//    //return Route::currentRouteName();
//}]);
   
   Route::group(['middleware' => 'login'], function () {
     Route::get('/admin',function(){
     echo "这是后台首页";
   });
    Route::get('/admin/user',function(){
     echo "这是后台用户管理";
   });
});
Route::get('/login',function(){
     echo "登陆";
   });