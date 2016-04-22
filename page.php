<?php
$dsn = "pgsql:"
    . "host=ec2-23-21-215-184.compute-1.amazonaws.com;"
    . "dbname=d537m61eekdhs3;"
    . "user=kxjngdfdccdptz;"
    . "port=5432;"
    . "sslmode=require;"
    . "password=R9Bot--fiYNg1Uj9Z1nb7VrjGF";

$db = new PDO($dsn);

$query = "SELECT employee_id, last_name, first_name, title "
    . "FROM employees ORDER BY last_name ASC, first_name ASC";
$result = $db->query($query);

$json = pg_fetch_result($result, 1, 0);

echo json_encode($json);

?>