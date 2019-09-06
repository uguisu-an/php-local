<?php
namespace db;

function connect($config) {
  // return mysqli_connect(
  //   $config["host"],
  //   $config["user"],
  //   $config["password"],
  //   $config["name"]
  // );
  return \mysqli_connect("mysql", "user", "password", "world", 3306, "/var/run/mysqld/mysqld.sock");
}

function disconnect($link) {
  \mysqli_close($link);
}
?>
