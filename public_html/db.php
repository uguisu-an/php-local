<?php
namespace db;

function connect($config) {
  var_dump($config);
  return mysqli_connect(
    $config["host"],
    $config["user"],
    $config["password"],
    $config["name"]
  );
}

function disconnect($link) {
  \mysqli_close($link);
}
?>
