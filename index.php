<?php

// $clients = [
//   'Client Name' => [
//     'link caption' => '//url',
//     // ...
//   ],
// ];
// $tools = [
//   'Tool Name' => [
//     'link caption' => '//url',
//     // ...
//   ],
// ];

$clients = $clients ?? [];
$tools = $tools ?? [];

/**
 * Escape special chars.
 */
function e($txt)
{
    return htmlspecialchars($txt);
}

?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Felds Dev Machine</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha.4/css/bootstrap.min.css" integrity="sha256-SC9pI7daKIBEHzXq0JEtOr9yMl5V7yMMqoowsw8uzNs=" crossorigin="anonymous" />
    <style>
    :root {}
    html, body { min-height: 100%; }
    body {
      background: whitesmoke;
      display: flex;
      align-items: center;
    }
    .section {
      margin: 6rem 0;
    }
    .wrapper { width: 100%; }
    .card {
      /*
       * box-shadow: 0 0 5rem rgba(0,0,0,.125), 0 3rem 3rem -2rem rgba(0,0,0,.125);
      */
box-shadow: 0 2.5rem 1.5rem -1.5rem rgba(0,0,0,.125);
    }
    .card-secondary {
      background-color: #AAA;
      border-color: #AAA;
    }
    @media screen and (max-width: 1024px) {
      .display-1 { font-size: 3rem }
      .display-4 { font-size: 2rem }
      .section { margin: 2rem 0 }
    }
    </style>
  </head>
  <body>
    <div class="wrapper" style="width: 100%;">

      <div class="container">
        <section class="section section__clients">
          <h1 class="display-1">Clientes</h1>
          <div class="row">
            <?php foreach ($clients as $client => $links): ?>
              <div class="col-md-6">
                <div class="card card-block card-info card-inverse">
                  <h3 class="card-title"><?= e($client) ?></h3>
                  <ul class="list-unstyled">
                    <?php foreach ($links as $caption => $url): ?>
                      <li><a href="<?= e($url) ?>" class="card-link"><?= e($caption) ?></a></li>
                    <?php endforeach; ?>
                  </ul>
                </div>
              </div>
            <?php endforeach; ?>
          </div>
        </section>

        <section class="section section__clients">
          <h1 class="display-4">Ferramentas</h1>
          <div class="row">
            <?php foreach ($tools as $tool => $links): ?>
              <div class="col-md-6">
                <div class="card card-block card-inverse card-secondary">
                  <h3 class="card-title"><?= e($tool) ?></h3>
                  <ul class="list-unstyled">
                    <?php foreach ($links as $caption => $url): ?>
                      <li><a href="<?= e($url) ?>" class="card-link"><?= e($caption) ?></a></li>
                    <?php endforeach; ?>
                  </ul>
                </div>
              </div>
            <?php endforeach; ?>
          </div>
        </section>
      </div>
    </div>

    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha.4/js/bootstrap.min.js" integrity="sha256-XyTHD0vVOVZLq0ARVP6l1Y6eFUWG4U28R5v/UrRDYew=" crossorigin="anonymous"></script>
  </body>
</html>
