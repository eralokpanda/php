<?php
function database_connect()
{
try{
$db = new PDO("mysql:host=localhost;dbname=elogic","root","");
}
catch (PDOException $e)
{ 
echo "Failed to connect:". $e->getMessage(); 	
}
return($db);
}
?>