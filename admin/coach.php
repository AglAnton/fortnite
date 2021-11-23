<?php
  require 'header.php';
?>

<section class="section-form bg-white text-dark p-0">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-6 col-12">
        <h2 class="my-3">Тренер #<?= $_GET['id'] ?></h2>

        <form>
          <div class="mb-3">
            <label for="name" class="form-label">Имя</label>
            <input type="name" class="form-control" id="name" name="name" value="Имя">
          </div>
          <div class="mb-3">
            <label for="description" class="form-label">Описание</label>
            <textarea class="form-control" name="description" id="description">оаиолывиоалвылаыв</textarea>
          </div>

          <button type="button" class="btn btn-primary mb-3 login-form">Сохранить</button>
        </form>

      </div>
    </div>
  </div>
</section>

<?php
  require 'footer.php';
?>