<?php 
 require_once __DIR__.'/classes/shopClasses/Cart.php';
 require_once __DIR__.'/classes/shopClasses/CreditCard.php';
 require_once __DIR__.'/classes/shopClasses/Customer.php';

//istanza
$customer = new Customer(
  null,
  null, 
  null, 
  new CreditCard(12354866854,'2023-10-06', 124)
);


$productsInCart = [
new Product(
'ciotola per acqua',
'https://img.kwcdn.com/product/Fancyalgo/VirtualModelMatting/2bcac344a6ea873f16f4792b8d552ca4.jpg?imageView2/2/w/800/q/70',
499,
$dogCategory),
new Product(
'ciotola per acqua',
'https://img.kwcdn.com/product/Fancyalgo/VirtualModelMatting/2bcac344a6ea873f16f4792b8d552ca4.jpg?imageView2/2/w/800/q/70',
499,
$dogCategory),

];

$cart = new Cart($productsInCart);

$customer->cart = $cart;


// istanza 2

$customer2 = new Customer(
  null,
  null, 
  null, 
  new CreditCard(12354866854,'2023-10-06', 124)
);


$productsInCart2 = [
new Product(
'ciotola per acqua',
'https://img.kwcdn.com/product/Fancyalgo/VirtualModelMatting/2bcac344a6ea873f16f4792b8d552ca4.jpg?imageView2/2/w/800/q/70',
5099,
$dogCategory),
new Product(
'ciotola per acqua',
'https://img.kwcdn.com/product/Fancyalgo/VirtualModelMatting/2bcac344a6ea873f16f4792b8d552ca4.jpg?imageView2/2/w/800/q/70',
499,
$dogCategory),

];

$cart2 = new Cart($productsInCart2);

$customer2->cart = $cart2;

// istanza 3

$customer3 = new Customer(
  'fra',
  'dc@dc.com', 
  '123', 
  new CreditCard(12354866854,'2023-10-06', 124)
);

$customer3->logIn();

$productsInCart3 = [
new Product(
'ciotola per acqua',
'https://img.kwcdn.com/product/Fancyalgo/VirtualModelMatting/2bcac344a6ea873f16f4792b8d552ca4.jpg?imageView2/2/w/800/q/70',
5099,
$dogCategory),
new Product(
'ciotola per acqua',
'https://img.kwcdn.com/product/Fancyalgo/VirtualModelMatting/2bcac344a6ea873f16f4792b8d552ca4.jpg?imageView2/2/w/800/q/70',
499,
$dogCategory),

];

$cart3 = new Cart($productsInCart3);

$customer3->cart = $cart3;


?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/style.css">
  <title>shop</title>
</head>
<body>
  <table>
    <thead>
      <tr>
        <th>nome</th>
        <th>email</th>
        <th>registrato</th>
        <th>sconto</th>
        <th>esito transazione</th>
      </tr>
    </thead>
    <tbody>
      <tr >
        <td>
          <?php 
           echo $customer->name != null ?  $customer->name: 'non fornito' ;
          ?>
        </td>
        <td>
          <?php 
           echo $customer->email != null ?  $customer->email: 'non fornita' ;
          ?>
        </td>
        <td>
          <?php 
           echo $customer->isRegistered != false ? 'registrato' :'non registrato' ;
          ?>
        </td>
        <td>
          <?php 
           echo $customer->isRegistered != false ? '20%' :'nessuno sconto' ;
          ?>
        </td>
        <td>
          <?php 
            try {
             $customer->cart->checkout($customer);
            }
            catch (Exception $e) {
              echo $e->getMessage();
            }
          ?>
        </td>
      </tr>
      <tr >
        <td>
          <?php 
           echo $customer2->name != null ?  $customer2->name: 'non fornito' ;
          ?>
        </td>
        <td>
          <?php 
           echo $customer2->email != null ?  $customer2->email: 'non fornita' ;
          ?>
        </td>
        <td>
          <?php 
           echo $customer2->isRegistered != false ? 'registrato' :'non registrato' ;
          ?>
        </td>
        <td>
          <?php 
           echo $customer2->isRegistered != false ? '20%' :'nessuno sconto' ;
          ?>
        </td>
        <td>
          <?php 
            try {
             $customer2->cart->checkout($customer2);
            }
            catch (Exception $e) {
              echo $e->getMessage();
            }
          ?>
        </td>
      </tr>
      <tr >
        <td>
          <?php 
           echo $customer3->name != null ?  $customer3->name: 'non fornito' ;
          ?>
        </td>
        <td>
          <?php 
           echo $customer3->email != null ?  $customer3->email: 'non fornita' ;
          ?>
        </td>
        <td>
          <?php 
           echo $customer3->isRegistered != false ? 'registrato' :'non registrato' ;
          ?>
        </td>
        <td>
          <?php 
           echo $customer3->isRegistered != false ? '20%' :'nessuno sconto' ;
          ?>
        </td>
        <td>
          <?php 
            try {
             $customer3->cart->checkout($customer3);
            }
            catch (Exception $e) {
              echo $e->getMessage();
            }
          ?>
        </td>
      </tr>
    </tbody>
  </table>
</body>
</html>