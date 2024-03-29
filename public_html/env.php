<?php
namespace env;

function get_db_config() {
  return array(
    "host" => get_env("DB_HOST", "127.0.0.1"),
    "name" => get_env("DB_NAME", ""),
    "user" => get_env("DB_USER", ""),
    "password" => get_env("DB_PASSWORD", "")
  );
}

function get_env($key, $defaultValue) {
  $value = getenv($key);
  return $value ? $value : $defaultValue;
}
