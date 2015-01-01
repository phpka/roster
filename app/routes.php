<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
	return View::make('hello');
});

Route::get('calendar', function()
{
    $select = DB::table('schedules')->get();
    
    $schedules = array(); 
    foreach ($select as $i)
    {
        $record = array();
        
        $record['id'] = $i->id;
        $record['title'] = $i->title;
        $record['url'] = $i->url;
        $record['class'] = $i->class;
        $record['start'] = strtotime($i->start) . '000';
        $record['end'] = strtotime($i->end) . '000';
        
        $schedules[] = $record;
    }    
    
    return View::make('calendar')->with('schedules', json_encode($schedules));
});