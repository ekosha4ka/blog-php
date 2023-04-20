<?php

require 'config/contstants.php';

// Подключение к базе данных!!!

$connection = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);