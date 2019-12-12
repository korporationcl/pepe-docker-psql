<h1> WebApplication has been initiased...</h1>
<p> connection to the database needs to be tested </p></br>

<?php
  // This should be handled in a better way, for now passing it as environment variable but we can use AWS
  // Secrets, Vault or something else.
  $db_host = $_SERVER["DB_HOST"];
  $db_password = $_SERVER["DB_PASSWORD"];
  $db_user = $_SERVER["DB_USER"];
  $db_name = $_SERVER["DB_NAME"];

 // no way to make it to production, only for testing connectivity. 
 $db_connection = pg_connect("host={$db_host} port=5432 dbname={$db_name} user={$db_user} password={$db_password}");
 if (!$db_connection) {
   echo "<p>The connection has failed to the database...</p></br>";
   echo "<img src='pepe.png'>";
   echo "</br>";
 } else {
   echo "Connection has been established.";
   echo "</br><img src='happy.jpg'>";
 }
?>