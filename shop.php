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

try {
$customer->cart->checkout($customer);
} catch (Exception $e) {
$e->getMessage();
}


echo '<br>';

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

try {
$customer2->cart->checkout($customer2);
} catch (Exception $e) {
$e->getMessage();
}



?>