<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!--bootstrap-->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
  <!--style css-->
  <link rel="stylesheet" href="./css/style.css">
  <title> PHP OOP 2 </title>
</head>
<body>
  <?php 
    require_once __DIR__.'/classes/Product.php';
    require_once __DIR__.'/database/db-product.php';
  ?>
  <div class="container py-5">
    <div class="row row-gap-3">
      <?php 
        foreach ($products as $product) {
      ?>
      <div class="col-4 col-lg-3 ">
        <div class="card" >
          <img src=" <?= $product-> image ?> " class="card-img-top" alt="<?= $product-> title ?>">
          <div class="card-body">
            <h5 class="card-title"><?= $product-> title ?></h5>
            <h5 class="card-title text-primary"><?= $product-> category->name  == 'dog'? 'cane': 'gatto' ?></h5>
            <p class="card-text"><?= $product-> description ?></p>
            <p class="card-text">
              <strong>
                <?= $product-> formatPriceValue() ?> €
              </strong>
            </p>
          </div>
        </div>
      </div>
      
      <?php 
      }
      ?>
    </div>

  </div>


</body>
</html>