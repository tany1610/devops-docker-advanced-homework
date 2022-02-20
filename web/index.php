<html>
  <head>
    <meta charset="UTF-8"/>
    <title>Eternals</title>
  </head>
  <body>
    <div align="center">
      <h1>The Eternals</h1>
      <img src="eternals.png" />
      <table>
        <tr>
          <td>Year</td>
          <td></td>
          <td>2021</td>
        </tr>
        <tr>
          <td>Duration</td>
          <td></td>
          <td>2h 37min</td>
        </tr>
        <tr>
          <td>IMDb Rating</td>
          <td></td>
          <td>6.4/10</td>
        </tr>
      </table>
      <br />
      <h1>The Eternals</h1>
      <table>
<?php
   $database = "marvel";
   $user = "tanya";
   $password  = "Supersecret";
   $host = "db";

   try {
      $connection = new PDO("mysql:host={$host};dbname={$database};charset=utf8", $user, $password);
      $query = $connection->query("SELECT hero_name, power FROM heroes");
      $heroes = $query->fetchAll();

      if (empty($heroes)) {
         echo "<tr><td>No data in the database.</td></tr>\n";
      } else {
         foreach ($heroes as $hero) {
            print "<tr><td>{$hero['hero_name']}</td><td align=\"right\">{$hero['power']}</td></tr>\n";
         }
      }
   }
   catch (PDOException $e) {
      print "<tr><td>No connection to the database.</td></tr>\n";
   }
?>
      </table>
    </div>
  </body>
</html>
