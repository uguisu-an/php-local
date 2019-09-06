<?php
namespace db;

function connect($config) {
  return new \mysqli(
    $config["host"],
    $config["user"],
    $config["password"],
    $config["name"]
  );
}
