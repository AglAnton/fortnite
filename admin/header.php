<?php
  $filename = pathinfo($_SERVER['REQUEST_URI'])['filename'];
?>
<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Админ панель</title>

  <link rel="stylesheet" href="../css/bootstrap.min.css">
  <link rel="stylesheet" href="../css/style.css">
  <link rel="stylesheet" href="../css/admin.css">
  <link rel="stylesheet" href="../css/fontello.css">
</head>
<body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <span class="navbar-brand fw-bold" href="#">Админ панель</span>
      <div class="collapse navbar-collapse me-auto" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link <?= $filename == 'users' ? 'active' : '' ?>" aria-current="page" href="users.php">Пользователи</a>
          </li>
          <!-- <li class="nav-item">
            <a class="nav-link <?= $filename == 'coaches' ? 'active' : '' ?>" href="coaches.php">тренеры</a>
          </li> -->
          <li class="nav-item">
            <a class="nav-link <?= $filename == 'reviews' ? 'active' : '' ?>" href="reviews.php">Отзывы</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>