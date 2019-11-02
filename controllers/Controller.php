<?php

require 'models/Model.php';

function showHome()
{
    $firstname  = getHome();
    $page_title = 'Home';
    require 'views/HomePageView.php';
}