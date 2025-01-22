<?php

use Illuminate\Support\Facades\Route;
use App\Http\Middleware\Editor;
use App\Http\Middleware\Administrador;

Route::middleware(['auth'])->group(function () {



    Route::get('admin/painel', ['as' => 'admin.home', 'uses' => 'Admin\DashboardController@index']);


    /* pedidos */
    Route::get('admin/pedidos-compras/index', ['as' => 'admin.oder.index', 'uses' => 'Admin\OderCOntroller@index']);
    Route::get('admin/pedidos-compras/show/{id}', ['as' => 'admin.oder.show', 'uses' => 'Admin\OderCOntroller@show']);
    Route::get('admin/pedidos-compras/create', ['as' => 'admin.oder.create', 'uses' => 'Admin\OderCOntroller@create']);
    Route::post('admin/pedidos-compras/store', ['as' => 'admin.oder.store', 'uses' => 'Admin\OderCOntroller@store']);
    Route::get('admin/pedidos-compras/edit/{id}', ['as' => 'admin.oder.edit', 'uses' => 'Admin\OderCOntroller@edit']);
    Route::put('admin/pedidos-compras/update/{id}', ['as' => 'admin.oder.update', 'uses' => 'Admin\OderCOntroller@update']);
    Route::get('admin/pedidos-compras/delete/{id}', ['as' => 'admin.oder.delete', 'uses' => 'Admin\OderCOntroller@destroy']);
    /**payment */
    Route::get('admin/pedidos-compras/pagamentos/{id}', ['as' => 'admin.oder.payment', 'uses' => 'Admin\OderCOntroller@payment']);
    /* end pedidos */

    /* encomedas clientes */
    Route::get('admin/encomenda-clientes/index', ['as' => 'admin.ordersProduct.index', 'uses' => 'Admin\OrdersProductController@index']);
    Route::get('admin/encomenda-clientes/show/{id}', ['as' => 'admin.ordersProduct.show', 'uses' => 'Admin\OrdersProductController@show']);
    Route::get('admin/encomenda-clientes/create', ['as' => 'admin.ordersProduct.create', 'uses' => 'Admin\OrdersProductController@create']);
    Route::post('admin/encomenda-clientes/store', ['as' => 'admin.ordersProduct.store', 'uses' => 'Admin\OrdersProductController@store']);
    Route::get('admin/encomenda-clientes/edit/{id}', ['as' => 'admin.ordersProduct.edit', 'uses' => 'Admin\OrdersProductController@edit']);
    Route::put('admin/encomenda-clientes/update/{id}', ['as' => 'admin.ordersProduct.update', 'uses' => 'Admin\OrdersProductController@update']);
    Route::get('admin/encomenda-clientes/delete/{id}', ['as' => 'admin.ordersProduct.delete', 'uses' => 'Admin\OrdersProductController@destroy']);
    Route::get('admin/encomenda-clientes/print/{id}', ['as' => 'admin.ordersProduct.print', 'uses' => 'Admin\OrdersProductController@print']);

    /**encomedas clientes */

    /* end pedidos */




    Route::middleware(['Administrador'])->group(function () {

        /* User */
        Route::get('admin/user/index', ['as' => 'admin.user.index', 'uses' => 'Admin\UserController@index']);
        Route::get('admin/user/show/{id}', ['as' => 'admin.user.show', 'uses' => 'Admin\UserController@show'])->withoutMiddleware('Administrador');
        Route::get('admin/user/activity/{id}', ['as' => 'admin.user.activity', 'uses' => 'Admin\UserController@activity'])->withoutMiddleware('Administrador');
        Route::get('admin/user/edit/{id}', ['as' => 'admin.user.edit', 'uses' => 'Admin\UserController@edit'])->withoutMiddleware('Administrador');
        Route::put('admin/user/update/{id}', ['as' => 'admin.user.update', 'uses' => 'Admin\UserController@update'])->withoutMiddleware('Administrador');
        Route::get('admin/user/delete/{id}', ['as' => 'admin.user.delete', 'uses' => 'Admin\UserController@destroy']);
        /* end user */


        /* client */
        Route::get('admin/clientes/index', ['as' => 'admin.client.index', 'uses' => 'Admin\ClientController@index']);
        Route::get('admin/clientes/show/{id}', ['as' => 'admin.client.show', 'uses' => 'Admin\ClientController@show'])->withoutMiddleware('Administrador');
        Route::get('admin/clientes/activity/{id}', ['as' => 'admin.client.activity', 'uses' => 'Admin\ClientController@activity'])->withoutMiddleware('Administrador');
        Route::get('admin/clientes/edit/{id}', ['as' => 'admin.client.edit', 'uses' => 'Admin\ClientController@edit'])->withoutMiddleware('Administrador');
        Route::put('admin/clientes/update/{id}', ['as' => 'admin.client.update', 'uses' => 'Admin\ClientController@update'])->withoutMiddleware('Administrador');
        Route::get('admin/clientes/delete/{id}', ['as' => 'admin.client.delete', 'uses' => 'Admin\ClientController@destroy']);
        /* end client */


        /* client */
        Route::get('admin/estatistica/index', ['as' => 'admin.statistic.payment', 'uses' => 'Admin\StatisticController@index']);

        Route::post('admin/relatorio-pagamentos/store', ['as' => 'admin.ReportPayment.store', 'uses' => 'Admin\StatisticController@store']);
        Route::get('admin/relatorio-pagamentos/show/{year}', ['as' => 'admin.ReportPayment.show', 'uses' => 'Admin\StatisticController@show']);


        Route::get('admin/clientes/show/{id}', ['as' => 'admin.client.show', 'uses' => 'Admin\ClientController@show'])->withoutMiddleware('Administrador');
        Route::get('admin/clientes/activity/{id}', ['as' => 'admin.client.activity', 'uses' => 'Admin\ClientController@activity'])->withoutMiddleware('Administrador');
        Route::get('admin/clientes/edit/{id}', ['as' => 'admin.client.edit', 'uses' => 'Admin\ClientController@edit'])->withoutMiddleware('Administrador');
        Route::put('admin/clientes/update/{id}', ['as' => 'admin.client.update', 'uses' => 'Admin\ClientController@update'])->withoutMiddleware('Administrador');
        Route::get('admin/clientes/delete/{id}', ['as' => 'admin.client.delete', 'uses' => 'Admin\ClientController@destroy']);
        /* end client */




        /* slideshow */
        Route::get('admin/slideshow/index', ['as' => 'admin.slideshow.index', 'uses' => 'Admin\SlideShowController@list']);
        Route::get('admin/slideshow/show/{id}', ['as' => 'admin.slideshow.show', 'uses' => 'Admin\SlideShowController@show']);
        Route::get('admin/slideshow/create', ['as' => 'admin.slideshow.create', 'uses' => 'Admin\SlideShowController@create']);
        Route::post('admin/slideshow/store', ['as' => 'admin.slideshow.store', 'uses' => 'Admin\SlideShowController@store']);
        Route::get('admin/slideshow/edit/{id}', ['as' => 'admin.slideshow.edit', 'uses' => 'Admin\SlideShowController@edit']);
        Route::put('admin/slideshow/update/{id}', ['as' => 'admin.slideshow.update', 'uses' => 'Admin\SlideShowController@update']);
        Route::get('admin/slideshow/delete/{id}', ['as' => 'admin.slideshow.delete', 'uses' => 'Admin\SlideShowController@destroy']);
        /* end slideshow */



        /* news */
        Route::get('admin/news/index', ['as' => 'admin.news.index', 'uses' => 'Admin\NewsController@list']);
        Route::get('admin/news/show/{id}', ['as' => 'admin.news.show', 'uses' => 'Admin\NewsController@show']);
        Route::get('admin/news/create', ['as' => 'admin.news.create', 'uses' => 'Admin\NewsController@create']);
        Route::post('admin/news/store', ['as' => 'admin.news.store', 'uses' => 'Admin\NewsController@store']);
        Route::get('admin/news/edit/{id}', ['as' => 'admin.news.edit', 'uses' => 'Admin\NewsController@edit']);
        Route::put('admin/news/update/{id}', ['as' => 'admin.news.update', 'uses' => 'Admin\NewsController@update']);
        Route::get('admin/news/delete/{id}', ['as' => 'admin.news.delete', 'uses' => 'Admin\NewsController@destroy']);
        /* end news */

        /* configuration */
        Route::get('admin/configuration/show', ['as' => 'admin.configuration.show', 'uses' => 'Admin\ConfigurationController@show']);
        Route::get('admin/configuration/edit/{id}', ['as' => 'admin.configuration.edit', 'uses' => 'Admin\ConfigurationController@edit']);
        Route::put('admin/configuration/update/{id}', ['as' => 'admin.configuration.update', 'uses' => 'Admin\ConfigurationController@update']);
        /* end configuration */

        /* servicos */
        Route::get('admin/servicos/index', ['as' => 'admin.service.index', 'uses' => 'Admin\ServiceController@index']);
        Route::get('admin/servicos/show/{id}', ['as' => 'admin.service.show', 'uses' => 'Admin\ServiceController@show']);
        Route::get('admin/servicos/create', ['as' => 'admin.service.create', 'uses' => 'Admin\ServiceController@create']);
        Route::post('admin/servicos/store', ['as' => 'admin.service.store', 'uses' => 'Admin\ServiceController@store']);
        Route::get('admin/servicos/edit/{id}', ['as' => 'admin.service.edit', 'uses' => 'Admin\ServiceController@edit']);
        Route::put('admin/servicos/update/{id}', ['as' => 'admin.service.update', 'uses' => 'Admin\ServiceController@update']);
        Route::get('admin/servicos/delete/{id}', ['as' => 'admin.service.delete', 'uses' => 'Admin\ServiceController@destroy']);
        /* end servicos */


        /* produtos */
        Route::get('admin/produtos/index', ['as' => 'admin.produt.index', 'uses' => 'Admin\ProductController@index']);
        Route::get('admin/produtos/show/{id}', ['as' => 'admin.produt.show', 'uses' => 'Admin\ProductController@show']);
        Route::get('admin/produtos/create', ['as' => 'admin.produt.create', 'uses' => 'Admin\ProductController@create']);
        Route::post('admin/produtos/store', ['as' => 'admin.produt.store', 'uses' => 'Admin\ProductController@store']);
        Route::get('admin/produtos/edit/{id}', ['as' => 'admin.produt.edit', 'uses' => 'Admin\ProductController@edit']);
        Route::put('admin/produtos/update/{id}', ['as' => 'admin.produt.update', 'uses' => 'Admin\ProductController@update']);
        Route::get('admin/produtos/delete/{id}', ['as' => 'admin.produt.delete', 'uses' => 'Admin\ProductController@destroy']);
        /* end produtos */

        /* publicidades */
        Route::get('admin/publicidades/index', ['as' => 'admin.publicity.index', 'uses' => 'Admin\publicityController@index']);
        Route::get('admin/publicidades/show/{id}', ['as' => 'admin.publicity.show', 'uses' => 'Admin\publicityController@show']);
        Route::get('admin/publicidades/create', ['as' => 'admin.publicity.create', 'uses' => 'Admin\publicityController@create']);
        Route::post('admin/publicidades/store', ['as' => 'admin.publicity.store', 'uses' => 'Admin\publicityController@store']);
        Route::get('admin/publicidades/edit/{id}', ['as' => 'admin.publicity.edit', 'uses' => 'Admin\publicityController@edit']);
        Route::put('admin/publicidades/update/{id}', ['as' => 'admin.publicity.update', 'uses' => 'Admin\publicityController@update']);
        Route::get('admin/publicidades/delete/{id}', ['as' => 'admin.publicity.delete', 'uses' => 'Admin\publicityController@destroy']);
        /* end publicidades */

        /* produtos-em-destaque */
        Route::get('admin/produtos-em-destaque/index', ['as' => 'admin.featureProduct.index', 'uses' => 'Admin\FeatureProductControler@index']);
        Route::get('admin/produtos-em-destaque/show/{id}', ['as' => 'admin.featureProduct.show', 'uses' => 'Admin\FeatureProductControler@show']);
        Route::get('admin/produtos-em-destaque/create', ['as' => 'admin.featureProduct.create', 'uses' => 'Admin\FeatureProductControler@create']);
        Route::post('admin/produtos-em-destaque/store', ['as' => 'admin.featureProduct.store', 'uses' => 'Admin\FeatureProductControler@store']);
        Route::get('admin/produtos-em-destaque/edit/{id}', ['as' => 'admin.featureProduct.edit', 'uses' => 'Admin\FeatureProductControler@edit']);
        Route::put('admin/produtos-em-destaque/update/{id}', ['as' => 'admin.featureProduct.update', 'uses' => 'Admin\FeatureProductControler@update']);
        Route::get('admin/produtos-em-destaque/delete/{id}', ['as' => 'admin.featureProduct.delete', 'uses' => 'Admin\FeatureProductControler@destroy']);
        /* end produtos-em-destaque */

        /* produtos-em-destaque */
        Route::get('admin/ofertas-do-dia/index', ['as' => 'admin.dealsDay.index', 'uses' => 'Admin\DealsDayController@index']);
        Route::get('admin/ofertas-do-dia/show/{id}', ['as' => 'admin.dealsDay.show', 'uses' => 'Admin\DealsDayController@show']);
        Route::get('admin/ofertas-do-dia/create', ['as' => 'admin.dealsDay.create', 'uses' => 'Admin\DealsDayController@create']);
        Route::post('admin/ofertas-do-dia/store', ['as' => 'admin.dealsDay.store', 'uses' => 'Admin\DealsDayController@store']);
        Route::get('admin/ofertas-do-dia/edit/{id}', ['as' => 'admin.dealsDay.edit', 'uses' => 'Admin\DealsDayController@edit']);
        Route::put('admin/ofertas-do-dia/update/{id}', ['as' => 'admin.dealsDay.update', 'uses' => 'Admin\DealsDayController@update']);
        Route::get('admin/ofertas-do-dia/delete/{id}', ['as' => 'admin.dealsDay.delete', 'uses' => 'Admin\DealsDayController@destroy']);
        /* end produtos-em-destaque */






        /* configuration */
        Route::get('admin/configuration/show', ['as' => 'admin.configuration.show', 'uses' => 'Admin\ConfigurationController@show']);
        Route::get('admin/configuration/edit/{id}', ['as' => 'admin.configuration.edit', 'uses' => 'Admin\ConfigurationController@edit']);
        Route::put('admin/configuration/update/{id}', ['as' => 'admin.configuration.update', 'uses' => 'Admin\ConfigurationController@update']);
        /* end configuration */
    });
});
