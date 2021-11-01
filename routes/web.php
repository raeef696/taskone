<?php

use Illuminate\Support\Facades\Route;

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


Route::get('/show',function(){
    $tasks=[
        'php' => 'هي لغة برمجة نصية شائعة للأغراض العامة',
        'sql' => 'هي لغة قياسية لتخزين ومعالجة واسترجاع البيانات في قواعد البيانات',
        'html' => 'هي لغة الترميز القياسية لصفحات الويب. '
    ];

    return view('show',compact('tasks'));

});
Route::get('viewtask{id}',function($id){
    $tasks=[
        'php' => 'هي لغة برمجة نصية شائعة للأغراض العامة',
        'sql' => 'هي لغة قياسية لتخزين ومعالجة واسترجاع البيانات في قواعد البيانات',
        'html' => 'هي لغة الترميز القياسية لصفحات الويب. '
    ];
    $task = $tasks[$id];
    return view('viewtask',compact('task','id'));

});
