<?php

$host = getenv('DB_HOST');
$user = getenv('DB_USER');
$password = getenv('DB_PASS');
$db = getenv('DB_NAME');

$mysqli = new mysqli($host, $user, $password, $db);

if ($mysqli->connect_errno)
  echo "Falha na conexão: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;