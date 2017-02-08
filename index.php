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
// $sandbox = [
//   'link caption' => '//url',
//   // ...
// ];

$clients = $clients ?? [];
$tools   = $tools ?? [];
$sandbox = $sandbox ?? [];

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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha256-rr9hHBQ43H7HSOmmNkxzQGazS/Khx+L8ZRHteEY1tQ4=" crossorigin="anonymous" />

    <style>

    :root {}
    html, body { min-height: 100%; }
    body {
      background: dimgray;
      color: white;
      display: flex;
      align-items: center;
    }
    .row {
      display: flex;
      flex-flow: row wrap;
    }
    .row > * {
      margin-bottom: 2rem;
    }
    .section {
      margin: 6rem 0;
    }
    .wrapper { width: 100%; }
    .card {
    }
    .jumbotron { color: #333; }
    .card-secondary {
      background-color: #AAA;
      border-color: #AAA;
    }
    .card-inverse .card-link {
      color: white;
    }
    @media screen and (max-width: 1024px) {
      .display-1 { font-size: 3rem }
      .display-4 { font-size: 2rem }
      .section { margin: 2rem 0 }
    }
    </style>

    <link rel="shortcut icon" href="/favicon.png">
  </head>
  <body>

    <div class="wrapper" style="width: 100%;">
      <div class="jumbotron text-xs-center">
        <div class="container">
          <h1 class="display-3">Checklists!</h1>
          <p class="lead">Antes de começar a fazer alguma coisa, verifique se existe uma checklist sobre o assunto.</p>
          <p><a class="btn btn-lg btn-warning" href="https://github.com/felds/checklists" role="button">Veja as checklists</a></p>
        </div>
      </div>

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

        <section class="section section__tools">
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

        <section class="section section__sandbox">
          <h1 class="display-4">Experiências</h1>
          <div class="row">
              <div class="col-md-12">
                <div class="card card-block card-inverse card-reverse" style="background-color: #333; border-color: #333;">
                  <ul class="list-unstyled">
                    <?php foreach ($sandbox as $caption => $url): ?>
                      <li><a href="<?= e($url) ?>" class="card-link"><?= e($caption) ?></a></li>
                    <?php endforeach; ?>
                  </ul>
                </div>
              </div>
          </div>
        </section>
      </div>
    </div>

    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha.4/js/bootstrap.min.js" integrity="sha256-XyTHD0vVOVZLq0ARVP6l1Y6eFUWG4U28R5v/UrRDYew=" crossorigin="anonymous"></script>
  </body>
</html>
