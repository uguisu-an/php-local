<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Hello World</title>
</head>
<body>
<?php
require_once "./init.php";
require_once "./env.php";
require_once "./db.php";

$mysqli = db\connect(env\get_db_config());
if (!$mysqli) {
  die();
}
?>

<table>
  <thead>
    <tr>
      <th>id</th>
      <th>name</th>
      <th>country code</th>
      <th>district</th>
      <th>population</th>
    </tr>
  </thead>
  <tbody>
    <?php
    $cities = $mysqli->query("SELECT * FROM city");
    if ($cities) {
      while ($city = $cities->fetch_assoc()) {
        echo "<tr>";
        echo "<td>".$city["ID"]."</td>";
        echo "<td>".$city["Name"]."</td>";
        echo "<td>".$city["CountryCode"]."</td>";
        echo "<td>".$city["District"]."</td>";
        echo "<td>".$city["Population"]."</td>";
        echo "</tr>";
      }
      $cities->free();
    }
    ?>
  </tbody>
</table>

<?php $mysqli->close(); ?>

</body>
</html>
