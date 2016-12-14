<?php
$data = json_decode(file_get_contents("php://input"));
$name = mysql_real_escape_string($data->name);
$username = mysql_real_escape_string($data->username);
$email = mysql_real_escape_string($data->email);
$password = mysql_real_escape_string($data->password);
mysql_connect("127.0.0.1","root","");
mysql_select_db("login");
mysql_query("INSERT INTO login VALUES (null,'$name','$username','$email','$password')");
$rows =  mysql_affected_rows();
echo $rows;
?>