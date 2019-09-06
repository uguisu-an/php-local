<?php
namespace env;

function get_db_config() {
  return array(
    "host" => get_env("DB_HOST", "localhost"),
    "name" => get_env("DB_NAME", "root"),
    "user" => get_env("DB_USER", "root"),
    "password" => get_env("DB_PASSWORD", "root")
  );
}

function get_env($key, $defaultValue) {
  $value = getenv($key);
  return $value ? $value : $defaultValue;
}
?>
