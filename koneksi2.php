<?php
$host = "localhost";
$port = "5432";
$dbname = "cloudcomputing2";
$user = "postgres";
$password = "root";
$pg_options = "--client_encoding=UTF8";

$connection_string = "host={$host} port={$port} dbname={$dbname} user={$user} password={$password} options='{$pg_options}'";
$connect2 = pg_connect($connection_string);
