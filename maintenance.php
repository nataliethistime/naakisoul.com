<?php

if (!file_exists(__DIR__ . '/maintenance.txt')) {
  http_response_code(301);
  header('Location: /');
  exit();
}

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <?php require 'components/head.php'; ?>
    <title>Maintenance | Naaki Soul</title>
  </head>

  <body>
    <section class="section">
      <div class="container content has-text-centered">
        <div class="block mb-6">
          <h1 class="title is-size-1">Oops</h1>
        </div>

        <div class="block mb-6 has-text-centered">
          The site is currently undergoing some changes! Please check back later
        </div>
      </div>
    </section>
  </body>
</html>
