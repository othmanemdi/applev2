<?php

function get_full_name($prenom, $nom)
{
    $result = $prenom . ' ' . $nom;
    return ucwords($result);
}


function _number_format($number)
{
    return number_format($number, 2, ',', ' ');
}

function e($value)
{
    return trim($value);
}

function dd($value)
{
    echo "<pre>";
    print_r($value);
    echo "</pre>";
    exit;
}


function _class_checkbox($value)
{
    return "
    .btn-outline-$value  {
        --bs-btn-color: $value ;
        --bs-btn-border-color: $value ;
        --bs-btn-hover-color: #fff;
        --bs-btn-hover-bg: $value ;
        --bs-btn-hover-border-color: $value ;
        --bs-btn-focus-shadow-rgb: 13, 110, 253;
        --bs-btn-active-color: #fff;
        --bs-btn-active-bg: $value ;
        --bs-btn-active-border-color: $value ;
        --bs-btn-active-shadow: inset 0 3px 5px rgba(0, 0, 0, 0.125);
        --bs-btn-disabled-color: $value ;
        --bs-btn-disabled-bg: transparent;
        --bs-btn-disabled-border-color: $value ;
        --bs-gradient: none;
    }
    ";
}


function _get_page_name()
{
    // echo $page;
    // $phrase = "Salam lamiae kif tina ?";
    // $exp = explode(' ', $phrase);
    // // $last_key = count($exp) - 1;
    // // echo $exp[$last_key];
    // echo end($exp);
    // dd($exp);

    $page = $_SERVER['SCRIPT_NAME'];
    $url_data = explode('/', $page);
    $page_name = end($url_data);
    return explode('.', $page_name)[0];
}
