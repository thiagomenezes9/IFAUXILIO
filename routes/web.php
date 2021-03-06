<?php





Route::get('/', array('as' => 'auth.login', 'uses' => 'AuthController@login'));



Route::group(['middleware'=>['web']],function(){
    Route::group(['prefix' => 'auth'], function (){

        Route::get('login',array('as' => 'auth.login', 'uses' => 'AuthController@login'));
        Route::post('login',array('as' => 'login.attempt', 'uses' => 'AuthController@attempt'));


        Route::get('register',array('as' => 'auth.register', 'uses' => 'AuthController@register'));
        Route::post('register',array('as' => 'register.create', 'uses' => 'AuthController@create'));


        Route::post('logout',array('as'=>'auth.logout', 'uses'=>'AuthController@logout'));



    });

    Route::group(['prefix' => 'dashboard','middleware'=>'auth'],function (){
        Route::get('/',array('as' => 'dashboard', 'uses' => 'DashboardController@index'));


    });



    Route::group(['middleware'=>'auth'],function(){


        Route::resource('usuarios','UserController');
        Route::resource('posts','PostController');
        Route::resource('editais','EditaisController');
        Route::resource('selecao','SelecaoController');
        Route::resource('questionarios','QuestionariosController');
        Route::resource('relatorios','RelatorioController');
        Route::resource('avaliacao','AvaliacaoController');
        Route::resource('inscricao','IncricaoController');



    });


    Route::get('password/reset','Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
    Route::post('password/email','Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
    Route::get('password/reset/{token}','Auth\ResetPasswordController@showResetForm')->name('password.reset');
    Route::post('password/reset','Auth\ResetPasswordController@reset');

});
