<?php

/**
 * Display a flash message
 *
 * @param null $title
 * @param null $message
 * @return \Illuminate\Foundation\Application|mixed
 */

function flash($title = null, $message = null)
{
    $flash = app('App\Http\Flash');

    if(func_num_args() == 0) {
        return $flash;
    }

    return $flash->info($title, $message);
}

/**
 * Path to a give flyer
 *
 * @param Flyer $path
 * @return string
 */
function flyer_path(App\Flyer $flyer) {
    return $flyer->postcode.'/'.str_replace(' ','-',$flyer->street);
}