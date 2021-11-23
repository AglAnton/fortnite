<?php
  require 'header.php';
?>

<section class="section-form bg-white text-dark p-0">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-6 col-12">
        <h2 class="my-3">Пользователь #<?= $_GET['id'] ?></h2>

        <form>
          <div class="mb-3">
            <label for="name" class="form-label">Имя</label>
            <input type="name" class="form-control" id="name" name="name" value="Имя">
          </div>
          <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" name="email" value="ads@sadsa.dd">
          </div>
          <div class="mb-3">
            <label for="phone" class="form-label">Телефон</label>
            <input type="tel" class="form-control" id="phone" name="phone" value="79132322323">
          </div>

          <div class="mb-3">
            <div class="form-check">
              <label class="form-check-label">
                <input class="form-check-input" type="checkbox" value="course-1" name="course-1" checked>
                Курс 1
              </label>
            </div>
            <div class="form-check">
              <label class="form-check-label">
                <input class="form-check-input" type="checkbox" value="course-2" name="course-2">
                Курс 2
              </label>
            </div>
            <div class="form-check">
              <label class="form-check-label">
                <input class="form-check-input" type="checkbox" value="course-3" name="course-3">
                Курс 3
              </label>
            </div>
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