<?php
    
    Route::get('/', function () {return view('home');});


    Route::get('libro', function () {return view('libro');});
    Route::get('libro2', function () {return view('libro2');});
    Route::get('libro3', function () {return view('libro3');});
    Route::get('libro4', function () {return view('libro4');});

    Route::dispatch();
?>
