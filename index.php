<?php
require 'controllers/controller.php';

$url         = $_GET['p'];
$explode_url = explode('/', $url);

echo "<pre>";
print_r($explode_url);
echo "</pre>";

if ($explode_url[0] == 'contacts') {
    if (!empty($explode_url[1])) {
        echo "this is the contact n°" . $explode_url[1] . " page";
    } else {
        listContacts();
    }

} elseif ($explode_url[0] == 'companies') {
    if (isset($explode_url[1])) {
        echo "this is the company n°" . $explode_url[1] . " page";

    } else {
        echo 'show all companies';
    }
} else {
    echo "Landing main page";
}