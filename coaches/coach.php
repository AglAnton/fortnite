<?php
  $id = $_GET['id'];

  $json = file_get_contents('data.json');
  $data = json_decode($json, true);
  $coach = $data[$id];

  if (empty($id) || empty($coach)) {
    header('Location: http://' . $_SERVER['SERVER_NAME'] . '/error/404.html');
    return;
  }
?>

<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>TBP Fortnite</title>

  <link rel="stylesheet" href="/css/fontello.css">
  <link rel="stylesheet" href="/css/slick.css"/>
  <link rel="stylesheet" href="/css/slick-theme.css"/>
  <link rel="stylesheet" href="/css/bootstrap.min.css">
  <link rel="stylesheet" href="/css/style.css">
</head>
<body>

  <section class="lesson" id="lesson">
    <div class="container">
      <div class="row">
        <div class="col-lg-3 col-md-4 offset-lg-1 offset-0">
          <div class="avatar">
            <div class="box"></div>
            <img src="/img/coach/<?= $coach['img'] ?>" class="<?= $coach['img_position'] ?>">
          </div>
        </div>
        <div class="col-lg-6 col-md-8">
          <div class="desc-block mt-4">
            <p class="title nic"><?= $coach['name'] ?></p>
            <ul class="desc">
              <?php foreach($coach['desc'] as $item) { ?>
                <li class="desc-item"><?= $item ?></li>
              <?php } ?>
            </ul>
          </div>
        </div>
      </div>
      <div class="row justify-content-center">
        <div class="col-lg-10 col-12">
          <p class="title subtitle mt-3 text-uppercase"><?= $coach['slogan'] ?></p>
          <p class="title mt-5">Продуктовая линейка</p>
          <ul class="products">
            <?php foreach($coach['products'] as $product) { ?>
              <li class="products-item">
                <span class="name"><?= $product['title'] ?></span>
                <div class="block">
                  <span class="price"><?= $product['price'] ?> рублей</span>
                  <button type="button" class="btn button mini"> Заказать</button>
                </div>
              </li>
            <?php } ?>
          </ul>
        </div>
      </div>
    </div>
  </section>
  
  <script src="/js/jquery.min.js"></script>
  <script type="text/javascript" src="/js/slick.min.js"></script>
  <script src="/js/index.js"></script>
</body>
</html>