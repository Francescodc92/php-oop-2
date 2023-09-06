<?php 
require_once __DIR__.'/database/db.php';

?>

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
  <h1>lista prodotti</h1>
  <div class="container py-5">
    <div class="row row-gap-2">
      <?php 
        foreach ($products as $product) {
      ?>
      <div class="col-6 col-lg-4 ">
        <div class="card" >
          <img src=" <?= $product->image ?> " class="card-img-top" alt="<?= $product-> name ?>">
          <div class="card-body border-top-primary">
            <h5 class="card-title"><?= $product-> name ?></h5>
            <h5 class="card-title text-primary text-uppercase">
              <?= $product->category->icon ?>
              <?= $product->category->name ?>
            </h5>
  
            <p class="card-text">
              <strong>
                <?php 
                  try {
                    echo $product-> formatPriceValue(). '€' ;
                  } catch (Exception $e) {
                    var_dump( $e->getMessage());
                  }
                ?>
                 
              </strong>
            </p>

            <ul>
              <?php 
                if(get_class($product) == 'Food'){
               
              ?>
                <li>
                  scadenza: <?= $product->expiration?>
                </li>
              <?php 
               }
              ?>
              <?php 
                if(get_class($product) == 'Game'){
               
                ?>
                <li>
                materiale: <?= $product->material?>
                </li>
              <?php 
               }
              ?>
              <?php 
                if(get_class($product) == 'Kennel'){
               
                ?>
                <li>
                 imbottitura: <?= $product->padding?>
                </li>
              <?php 
               }
              ?>
              
             
              
            </ul>
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