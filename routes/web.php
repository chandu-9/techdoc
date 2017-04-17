<?php

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
 
Menu::make('MyNavBar', function($menu){
    $menu->add('Voice', 'Manage Items');
    $menu->voice->add('Dashboard', 'dashboard');
    $menu->voice->add('IVR studio', 'ivrstudio');
    $menu->voice->add('conference Monitoring', 'conference');
    $menu->voice->add('Call Logs', 'calllogs');
    $menu->voice->add('Sounds', 'sounds');
    $menu->voice->add('Followup', 'followup');
    $menu->voice->add('Sticky Agents', 'stickyagents');
    $menu->voice->add('Voice Recordings', 'recordings');
    $menu->voice->add('Outbound Calls', 'outbound');
    $menu->voice->add('Bulk Upload', 'bulkupload');
    $menu->voice->add('Manage Campaign', 'campaing');
    $menu->voice->add('SMS Logs', 'smslogs');
    $menu->voice->add('Manage Extensions', 'magageextensions');
    $menu->voice->add('Detailed Call Logs', 'detailedlogs');

    $menu->add('Analytics', 'whoweare');
    $menu->analytics->add('Live View', 'liveview');
    $menu->analytics->add('Overview', 'overview');
    $menu->analytics->add('Agent Analytics', 'agentalalytics');
    $menu->analytics->add('Agent Performance', 'agentperformance');

    $menu->add('others', 'Plugins');

    $menu->others->add('Phonebook', 'phonebook');
    $menu->others->add('Developers', 'developers');
    $menu->others->add('User Plugins', 'plugins');
    $menu->others->add('Reports', 'reports');
    $menu->others->add('Blacklist', 'blacklist');
});	



/*Route::any('/{path}', function ($path = '/') {
	$path = Request::path();
	
	Route::get('{$path}', 'DocsController@index');
});
*/
Route::any('/{path?}', 'DocsController@index');
