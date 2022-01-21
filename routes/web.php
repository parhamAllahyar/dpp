<?php

use App\Http\Controllers\PostController;
use App\Models\Invoice;
use App\Patterns\COR\Verifiers\OrderCanShip;
use App\Patterns\COR\Verifiers\OrderIsExist;
use App\Patterns\COR\Verifiers\UserVerified;
use App\Patterns\Decorator\TaxInvoice;
use App\Patterns\Decorator\VatInvoice;
use App\Patterns\Facade\Facade;
use App\Patterns\Facade\subsystem1;
use App\Patterns\Facade\subsystem2;
use App\TemplateMethod\SoftwareWriter;
use Illuminate\Support\Facades\Route;



Route::get('/', function () {
});

Route::get('/post/proxy', [PostController::class, 'index']);
Route::get('/strategy', [PostController::class, 'strategy']);
Route::get('/factory', [PostController::class, 'factory']);

Route::get('/facade', function () {
    $sub1 = new subsystem1();
    $sub2 = new subsystem2();
    $facade = new Facade($sub1,  $sub2);
    return $facade->opration();
});


Route::get('/decorator', function () {

    $invoice = new Invoice();
    $vat = new VatInvoice($invoice);
    $tax = new TaxInvoice($vat);
    return $tax->Price();
});


Route::get('/template/method', function () {

    $object = new SoftwareWriter();
    return $object->write();
});


Route::get('/cor', function () {

    $a = new OrderCanShip();
    $b = new OrderIsExist();
    $c = new UserVerified();

    $a->succeedWith($b);
    $b->succeedWith($c);
    $a->handle($b, 14);

});



