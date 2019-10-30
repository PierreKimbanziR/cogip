<?php

require 'models/Model.php';

function homePage()
{
    $firstname  = getHome();
    $page_title = 'Home';
    require 'views/HomePage.php';
}

function post()
{

    $post     = getPost($_GET['id']);
    $comments = getComments($_GET['id']);

    require 'postView.php';
}