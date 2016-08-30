<?php
# FileName="Connection_php_mysql.htm"
# Type="MYSQL"
# HTTP="true" 
$hostname_conexionRH = "localhost";
$database_conexionRH = "test";
$username_conexionRH = "root";
$password_conexionRH = "7552519";
$conexionRH = mysql_pconnect($hostname_conexionRH, $username_conexionRH, $password_conexionRH) or trigger_error(mysql_error(),E_USER_ERROR); 
?>