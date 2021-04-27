<?php
    
    Route::get('/', 'WelcomeController@index');
    Route::get('libro1',function() { return view('Libro1'); });
    Route::get('libro2',function() { return view('Libro2'); });
    Route::get('libro3',function() { return view('Libro3'); });
    Route::get('libro4',function() { return view('Libro4'); });
    
    Route::dispatch();
