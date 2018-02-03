<?php

$conn = mysqli_connect("sql9.freemysqlhosting.net", "sql9218749", "7QzjhnImQi", "sql9218749");

if(!$conn){
	die("Connection failed: ".mysqli_connect_error());
}