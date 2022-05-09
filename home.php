<?php

require_once __DIR__ . '/includes/util.php';

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <?php require 'components/head.php'; ?>
    <title>Naaki Soul</title>
  </head>

  <body>
    <?php require 'components/header.php'; ?>

    <section class="section">
      <div class="container content has-text-centered">

        <div class="block mb-6">
          <h1 class="title is-size-1">Naaki Soul</h1>
        </div>

        <div class="block mb-6">
          <p>Meanjin-based indie rock / midwest emo / shoegaze</p>
        </div>

        <div class="block mb-6">
          <div class="columns is-multiline is-centered is-gallery">
            <div class="column is-narrow">
              <img src="./img/1.jpg">
            </div>

            <div class="column is-narrow">
              <img src="./img/2.jpg">
            </div>

            <div class="column is-narrow">
              <img src="./img/3.jpg">
            </div>

            <div class="column is-narrow">
              <img src="./img/4.jpg">
            </div>

            <div class="column is-narrow">
              <img src="./img/5.jpg">
            </div>
          </div>
        </div>


        <div class="block mb-6">
          <div class="columns">
            <div class="column"></div>
            <div class="column is-two-fifths">

              <nav class="level">
                <div class="level-item">
                  <div>
                    <a href="https://www.facebook.com/naakisoul" class="button is-large is-white is-outlined" target="_blank">
                      <span class="icon">
                        <i class="fab fa-facebook"></i>
                      </span>
                    </a>
                  </div>
                </div>

                <div class="level-item">
                  <div>
                    <a href="https://www.instagram.com/hevyrocky/" class="button is-large is-white is-outlined" target="_blank">
                      <span class="icon">
                        <i class="fab fa-instagram"></i>
                      </span>
                    </a>
                  </div>
                </div>

                <div class="level-item">
                  <div>
                    <a href="https://twitter.com/naakisoul" class="button is-large is-white is-outlined" target="_blank">
                      <span class="icon">
                        <i class="fab fa-twitter"></i>
                      </span>
                    </a>
                  </div>
                </div>

                <div class="level-item">
                  <div>
                    <a href="https://naakisoul.bandcamp.com/" class="button is-large is-white is-outlined" target="_blank">
                      <span class="icon">
                        <i class="fab fa-bandcamp"></i>
                      </span>
                    </a>
                  </div>
                </div>
              <nav>

            </div>
            <div class="column"></div>
          </div>
        </div>

      </div>
    </section>

    <?php require 'components/footer.php'; ?>
  </body>
</html>
