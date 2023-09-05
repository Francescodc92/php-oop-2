<?php 
require_once __DIR__.'/../traits/HasName.php';
class Category
{
  use HasName;
  public $icon;

  public function __construct(
    string $name,
    string $icon,
  )
  {
    $this->name =  $name;
    $this->icon =  $icon;
  }
}

?>