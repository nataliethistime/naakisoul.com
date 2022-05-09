<?php

if (file_exists(__DIR__ . '/../maintenance.txt')) {
  http_response_code(301);
  header('Location: /maintenance');
  exit();
}

?>
