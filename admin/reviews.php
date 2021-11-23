<?php
  require 'header.php';
?>

<div class="container">
  <h2 class="text-dark my-3">Отзывы</h2>

  <div class="table-responsive">
    <table class="table table-hover table-striped">
      <thead class="table-light">
        <tr>
          <th scope="col">#</th>
          <th scope="col">Имя</th>
          <th scope="col">Отзыв</th>
          <th scope="col"></th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <th scope="row">1</th>
          <td>Mark</td>
          <td>Otto</td>
          <td><a href="review.php?id=1"><i class="icon-edit"></i></a></td>
        </tr>
      </tbody>
    </table>
  </div>
</div>

<?php
  require 'footer.php';
?>