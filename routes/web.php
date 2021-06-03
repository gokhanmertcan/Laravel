<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Web;
use App\Http\Controllers\Form;
use App\Http\Controllers\VeritabaniIslemleri;
use App\Http\Controllers\Modelislemleri;
use App\Http\Controllers\Iletisim;




Route::get('/', function () {
    return view('welcome');
});

Route::get("/web",[Web::class,'site'])->name('web');

Route::get("/form",[Form::class,'gorunum']);
Route::middleware('arakontrol')-> post("/form-islemleri",[Form::class,'sonuc'])->name('sonuc');

Route::get("/ekle",[VeritabaniIslemleri::class,'ekle']);
Route::get("/guncelle",[VeritabaniIslemleri::class,'guncelle']);
Route::get("/sil",[VeritabaniIslemleri::class,'sil']);
Route::get("/listele",[VeritabaniIslemleri::class,'listele']);

Route::get("/modellistele",[Modelislemleri::class,'listele']);
Route::get("/modelekle",[Modelislemleri::class,'ekle']);
Route::get("/modelupdate",[Modelislemleri::class,'guncelle']);
Route::get("/modeldelete",[Modelislemleri::class,'sil']);

Route::get("/iletisim",[Iletisim::class,'index']);
Route::post("/iletisimekle",[Iletisim::class,'modelekle'])->name("iletisimekle");
