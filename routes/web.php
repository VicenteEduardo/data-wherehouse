<?php

use Illuminate\Support\Facades\Route;
use Laravel\Socialite\Facades\Socialite;

/* Grupo de rotas autenticadas */

route::get('/', ['as' => 'site.home', 'uses' => 'Site\HomeController@index']);


route::get('/sobre-nos', ['as' => 'site.about', 'uses' => 'Site\AboutController@index']);
/** */


/**search */
route::post('/bebidas', ['as' => 'site.drink', 'uses' => 'Site\SarchController@search']);
route::get('/bebidas/{drink}/{category}', ['as' => 'site.drink.show', 'uses' => 'Site\SarchController@show']);

/**end search */

/**produto */
Route::get('/produtos', ['as' => 'site.produt', 'uses' => 'Site\ProdutController@index']);
Route::get('/produtos/{ref}', ['as' => 'site.produt.show', 'uses' => 'Site\ProdutController@show']);

/**carrinho */
route::get('/carrinho/{id}/produto', ['as' => 'site.cat', 'uses' => 'Site\CatController@addCat']);
route::get('/carrinho/produto', ['as' => 'site.cat.show', 'uses' => 'Site\CatController@show']);
route::get('/carrinho/{id}/delete/produto', ['as' => 'site.cat', 'uses' => 'Site\CatController@delete']);
Route::middleware(['auth'])->group(function () {
    //carrinho
    route::post('/carrinho/produto/checkout', ['as' => 'site.cat.checkout', 'uses' => 'Site\CatController@checkout']);
    route::post('/carrinho/produto/finalizePurchase', ['as' => 'site.cat.finalizePurchase', 'uses' => 'Site\CatController@finalizePurchase']);
});

/**end carrinho */

/**conta usuario */
route::get('/criar-conta', ['as' => 'site.customerAccount.create', 'uses' => 'Site\CustomerAccountController@create']);
route::post('/criar-conta/store', ['as' => 'site.customerAccount.store', 'uses' => 'Site\CustomerAccountController@store']);
/**end conta usuario */


/* contact */
Route::get('/contactos', ['as' => 'site.contact', 'uses' => 'Site\ContactController@index']);
route::post('site/help/email', ['as' => 'site.help.email', 'uses' => 'Site\Email\HelpController@send']);

/* noticias */
Route::get('/noticias', ['as' => 'site.news', 'uses' => 'Site\NewsController@index']);
Route::get('/noticia/{title}', ['as' => 'site.news.show', 'uses' => 'Site\NewsController@show']);
// end news





/* inclui as rotas de autenticação do ficheiro auth.php */
require __DIR__ . '/auth.php';
require __DIR__ . '/admin.php';
