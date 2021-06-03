<?php

function dd($data)
{
    echo '<pre>';
    var_dump($data);
    echo '</pre>';
}

function asset($path = '')
{
    echo App\Application::$ROOT_DIR . "/public$path";
}