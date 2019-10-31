<?php

require 'models/Model.php';

function homePage()
{
    $firstname  = getHome();
    $page_title = 'Home';
    require 'views/HomePageView.php';
}

function showDashboard()
{
    require 'views/AdminDashboardView.php';
}