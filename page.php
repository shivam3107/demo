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

$json = array();
//while($row = pg_fetch_assoc($result))
  //  {
    //    $json[] = $row;
    //}
	
while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
    $json[] = $row;
}
$result->closeCursor();	
	
//$json = $result->fetch(PDO::FETCH_ASSOC);

//$result->closeCursor();

echo json_encode($json);

$fp = fopen('database.json', 'w+');
fwrite($fp, json_encode($json));
fclose($fp);

?>