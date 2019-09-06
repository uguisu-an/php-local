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

$link = db\connect(env\get_db_config());
if (!$link) {
  die();
}

$city = $link->query("SELECT * FROM city");
var_dump($city);

db\disconnect($link);
?>

</body>
</html>
