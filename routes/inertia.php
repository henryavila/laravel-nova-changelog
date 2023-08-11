<?php

declare(strict_types=1);

use Illuminate\Support\Facades\Route;
use Laravel\Nova\Http\Requests\NovaRequest;

/*
|--------------------------------------------------------------------------
| Tool Routes
|--------------------------------------------------------------------------
|
| Here is where you may register Inertia routes for your tool. These are
| loaded by the ServiceProvider of the tool. The routes are protected
| by your tool's "Authorize" middleware by default. Now - go build!
|
*/

Route::get('/', fn (NovaRequest $request) => inertia('Changelog', [
	'title' => __('Histórico de Alterações'),
	'error_msg' => __('Não foi possível recuperar as informações. Favor tentar novamente mais tarde')
]));
