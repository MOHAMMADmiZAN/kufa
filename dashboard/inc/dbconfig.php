<?php
$kufaDataBase = new mysqli('localhost', 'root', '', 'kufa');
if ($kufaDataBase->connect_error) :
    die('Connect Error: ' . $kufaDataBase->connect_error);
endif;