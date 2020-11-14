<?php
const SERVER = "localhost";
const LOGIN = "root";
const PASSWORD = "";
const DB = "homephplevel1";

$connect = mysqli_connect(SERVER, LOGIN, PASSWORD, DB) or die("Ошибка соединения!");
