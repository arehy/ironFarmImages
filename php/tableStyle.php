<?php
header("Content-type: text/css; charset: UTF-8");
include 'data.php';
foreach ($items as $key => $value) {


//   echo '
//   input[type=checkbox] + label.checkbox {
//     background-image: url("../images/waypoints/gallowfields.jpg");
//     background-position: center center;
//   }
//   input[type=checkbox]:checked + label.checkbox {
//     background-image: url("../images/waypoints/gallowfields_active.jpg");
//     background-position: center center;
//   }';
// }

 ?>
input[type=checkbox] + label.checkbox#lab<?php echo $key; ?> {
  background-image: url("../images/waypoints_code/<?php echo $key; ?>_active.jpg");
  filter: grayscale(1) sepia(50%);
	transition-property: filter;
	transition-duration: 1s;
}
input[type=checkbox]:checked + label.checkbox#lab<?php echo $key; ?> {

  filter: brightness(1.20);
	transition-property: filter;
	transition-duration: 1s;
}
<?php
}


foreach ($characters as $key => $value) {
  ?>
  input[type=checkbox] + label.checkbox#lab<?php echo $key; ?> {
    background-image: url("../images/characters/<?php echo $key; ?>.jpg");
    background-size: 100px;
    border: 3px solid #008f60;
    filter: brightness(1.20);
    transition-property: filter;
    transition-duration: 1s;
  }
  input[type=checkbox]:checked + label.checkbox#lab<?php echo $key; ?> {
    border: 3px solid white;
    filter: grayscale(1) sepia(50%);
    transition-property: filter;
    transition-duration: 1s;
  }
  <?php
}
