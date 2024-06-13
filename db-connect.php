<?php
//Відкриття доступу до БД
define('HOST','127.0.0.1');
define('USER','host295');
define('PASSWORD','vwImG7zT5rk=');
define('DB','itelit_host295');

$db = mysql_connect(HOST,USER,PASSWORD);

if(!$db){
    exit('Не має доступу до бази даних, помилка - '.mysql_error());
}

if(!mysql_select_db(DB,$db)){
    exit('Не можливо вибрати базу даних, помилка - '.mysql_error());
}
mysql_query('SET NAMES "utf8" ');

?>