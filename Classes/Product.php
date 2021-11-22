<?php
class Product {
  // Properties
  public $imagePath;
  public $productName;
  public $description;
  public $linkToOpen;
  public $tag;
  public $category;
  public $star;
  public $items;
  

  function __construct($imagePath,$productName,$description,$linkToOpen,$tag,$category,$star,$items) {
    $this->imagePath = $imagePath;
    $this->productName = $productName;
    $this->description = $description;
    $this->linkToOpen = $linkToOpen;
    $this->tag = $tag;
    $this->category = $category;
    $this->star = $star;
    $this->items = $items;
  }

  function get_image() {
    return $this->imagePath;
  }
  function get_name() {
    return $this->productName;
  }

  function get_description() {
      return $this->description;
    }

  function get_link() {
      return $this->linkToOpen;
    }
  function get_tag() {
      return $this->tag;
    }
    function get_category() {
        return $this->category;
      }
      function get_star() {
        return $this->star;
      }
      function get_items() {
          return $this->items;
        }
}

?>
