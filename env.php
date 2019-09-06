<?php
namespace env;

function get_db_host() {
  return get_env("DB_HOST", "localhost");
}

function get_db_name() {
  return get_env("DB_NAME", "root");
}

function get_db_user() {
  return get_env("DB_USER", "root");
}

function get_db_password() {
  return get_env("DB_PASSWORD", "root");
}

function get_env($key, $defaultValue) {
  $value = getenv($key);
  return $value ? $value : $defaultValue;
}
?>
