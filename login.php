<?php
$data = json_decode(file_get_contents("php://input"));
$username = mysql_real_escape_string($data->username);
$password = mysql_real_escape_string($data->password);
mysql_connect("127.0.0.1","root","");
mysql_select_db("login");
mysql_query("SELECT * FROM login WHERE username = '".$username."' AND password = '".$password."'");
$rows = mysql_affected_rows();
echo $rows;
?>