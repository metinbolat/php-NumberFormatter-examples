<?php

if (!function_exists('pretty')) {
    function pretty($content) 
    {
        echo "<pre>";

        print_r($content);

        echo "</pre>";
    }
}