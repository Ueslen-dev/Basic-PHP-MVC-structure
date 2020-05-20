<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>basic-PHP-MVC-structure</title>
</head>
<body>
<header>
  <h1>Top Bar</h1>
</header>
<hr>
  <?php $this->loadViewInTemplate($viewName, $data); ?>
  <hr>
  <footer>
    <h3>Footer Bar</h3>
  </footer>
</body>
</html>