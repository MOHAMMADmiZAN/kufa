<?php
const HOST = 'localhost';
const USER = 'root';
const PASSWORD = '';
const DATABASE = 'socials';
$socialDataBase = new mysqli(HOST, USER, PASSWORD, DATABASE);
if ($socialDataBase->connect_error) :
    die('Connect Error: ' . $socialDataBase->connect_error);
endif;