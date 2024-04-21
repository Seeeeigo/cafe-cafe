<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CafeController;

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
// 初期表示画面
Route::get('/', [CafeController::class, 'showMain'])->name('main');

// メイン画面を表示
Route::get('/main', [CafeController::class, 'showMain'])->name('main');

// お問い合わせ画面を表示
Route::get('/contact', [CafeController::class, 'showContact'])->name('contact');

// お問い合わせをバリデーションして確認画面を表示する
Route::post('/comfirm', [CafeController::class, 'exeComfirm'])->name('comfirm');

// お問い合わせを送信
Route::post('/complete', [CafeController::class, 'exeComplete'])->name('complete');

// 編集画面を表示する
Route::get('/edit/{id}', [CafeController::class, 'showEdit'])->name('edit');

// 更新する
Route::post('/update', [CafeController::class, 'exeUpdate'])->name('update');

// 更新完了画面を表示する
Route::get('/update', [CafeController::class, 'showUpdated'])->name('updated');

//データの削除
Route::post('/delete/{id}', [CafeController::class, 'exeDelete'])->name('delete');