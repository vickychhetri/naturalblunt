<?php
class Intro {
  // Properties
  public $imagePath;
  public $category;
  public $fontColor;

  function __construct($category,$imagePath,$fontColor) {
    $this->imagePath = $imagePath;
    $this->fontColor = $fontColor;
    $this->category = $category;
  }

  function getImage() {
    return $this->imagePath;
  }
  function getTitle() {
    return $this->category;
  }
  function getFontColor() {
    return $this->fontColor;
  }
  function PrintDesign() {
    ?>
    <section id="intro">

      <div class="intro-content">
        <h2 style="color: <?php echo $this->fontColor; ?>;"> <?php echo $this->category; ?> </h2>
      </div>

      <div id="intro-carousel" class="owl-carousel" >
        <div class="item" style="background-image: url('<?php echo $this->imagePath; ?>');"></div>
      </div>

    </section>
    <?php

  }

}

?>
