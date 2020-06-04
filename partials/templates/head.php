<?php
include_once __DIR__ . '/../../env.php'
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="<?php echo $base_path; ?>dist/css/app.css">
  </head>
  <body>



<header class="main-header">
      <nav class="navbar navbar-dark navbar-expand bg-primary w-100">
        <a class="navbar-brand" href="<?php echo $base_path; ?>">Boolean Hotel</a>

          <ul class="navbar-nav m1-auto">
            <li class="nav-item">
              <a class="nav-link" href="<?php echo $base_path; ?>">Tutte le stanze</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo $base_path; ?>create.php">Nuova stanza</a>
            </li>
          </ul>

      </nav>
</header>


<div id="app" class="pb-2">
