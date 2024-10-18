<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Crud\CrudAPIController;

Route::group([],function(){
    Route::post('/add', [CrudAPIController::class, 'add']);
    Route::post('/update/{$id}', [CrudAPIController::class, 'update']);
    Route::delete('/delete/{$i}', [CrudAPIController::class, 'delete']);
    
});
?>