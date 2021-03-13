<?php
$socialDataBase = new mysqli('localhost', 'root', '', 'kufa');
if ($socialDataBase->connect_error) :
    die('Connect Error: ' . $socialDataBase->connect_error);
endif;