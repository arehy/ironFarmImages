<?php
  foreach ($items as $key => $value) {
    echo '
      <div class="table">
        <input type="checkbox" id="'.$key.'" name="[&'.$key.'=]" onchange="resultWrite(); selectionCopy()">
        <label id="lab'.$key.'" class="checkbox" for="'.$key.'"></label>
        <label class="text" for="'.$key.'">'.$value.'</label>
      </div>';
    //echo " $key => Érték: $value<br>";
  }
?>
