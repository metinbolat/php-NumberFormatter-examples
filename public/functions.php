<?php

if (!function_exists('pretty')) {
    function pretty($content)
    {
        echo "<pre>";

        print_r($content);

        echo "</pre>";
    }
}

if (!function_exists('p')) {
    function p(string $text)
    {
        if (str_contains($text, '<h')) echo $text;

        else echo $text . "<br>";
    }
}
