<?php

    $data = file_get_contents('https://api.jikan.moe/v4/anime?q=naruto');
    $data = json_decode($data)->data;

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Bonjour HETIC !</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.9.4/css/bulma.min.css">
</head>
<body>
  <nav class="navbar" role="navigation" aria-label="main navigation">
    <div class="navbar-brand">
      <a class="navbar-item" href="https://bulma.io">
        <img src="https://bulma.io/images/bulma-logo.png" width="112" height="28">
      </a>
  
      <a role="button" class="navbar-burger" aria-label="menu" aria-expanded="false" data-target="navbarBasicExample">
        <span aria-hidden="true"></span>
        <span aria-hidden="true"></span>
        <span aria-hidden="true"></span>
      </a>
    </div>
  
    <div id="navbarBasicExample" class="navbar-menu">
      <div class="navbar-start">
        <a class="navbar-item">
          Home
        </a>
  
        <a class="navbar-item">
          Documentation
        </a>
  
        <div class="navbar-item has-dropdown is-hoverable">
          <a class="navbar-link">
            More
          </a>
  
          <div class="navbar-dropdown">
            <a class="navbar-item">
              About
            </a>
            <a class="navbar-item">
              Jobs
            </a>
            <a class="navbar-item">
              Contact
            </a>
            <hr class="navbar-divider">
            <a class="navbar-item">
              Report an issue
            </a>
          </div>
        </div>
      </div>
  
      <div class="navbar-end">
        <div class="navbar-item">
          <div class="buttons">
            <a class="button is-primary">
              <strong>Sign up</strong>
            </a>
            <a class="button is-light">
              Log in
            </a>
          </div>
        </div>
      </div>
    </div>
  </nav>

  <section class="section">
    <div class="container content">
      <h1 class="title">
        Hello world
      </h1>

      <p>
        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptates illo suscipit earum incidunt. Ad, neque? Dolorum iure eos velit quae iusto, nobis, quos ex impedit maiores deserunt animi fugit harum!
      </p>

      <p>
        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Aspernatur ab quisquam veniam. Maiores quia at, aliquid qui assumenda magnam inventore. Recusandae exercitationem nesciunt enim ut, molestias ipsum maiores at temporibus.
      </p>
    </div>

    <?php foreach ($data as $anime) : ?> 
    <div class="box">
        <h2 class="title is-5">
            <?= $anime->title ?>
        </h2>
        <p>
            <a href="<?= $anime->url ?>">
                <?= $anime->url ?>
            </a>
        </p>
    </div>
    <?php endforeach ?>
  </section>
</body>
</html>