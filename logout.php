<?php

require_once 'config/contstants.php';
session_destroy();
header('location: ' . ROOT_URL);
die();