<?php

require 'models/Model.php';

function homePage()
{
    $firstname  = getHome();
    $page_title = 'Home';
    require 'views/HomePage.php';
}

function showDashboard()
{

    require 'adminDashboard.php';
}