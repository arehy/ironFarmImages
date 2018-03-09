<?php
include 'data.php';
foreach ($items as $key => $value) {
header("Content-type: text/css; charset: UTF-8");

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
  background-image: url("../images/waypoints_code/<?php echo $key; ?>.jpg");
  background-position: center center;
}
input[type=checkbox]:checked + label.checkbox#lab<?php echo $key; ?> {
  background-image: url("../images/waypoints_code/<?php echo $key; ?>_active.jpg");
  background-position: center center;
}
<?php
}
 ?>

 body:after {
  content: <?php foreach ($items as $key => $value) { echo 'url("../images/waypoints_code/'.$key.'_active.jpg") '; } ?>;
 }
