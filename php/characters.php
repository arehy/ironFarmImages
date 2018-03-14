<?php
  foreach ($characters as $key => $value) {
    echo '
      <div class="table">
        <div id="counter'.$key.'">
          <script type="text/javascript">

          </script>
        </div>
        <input type="checkbox" id="'.$key.'" name="[&'.$key.'=]" onchange="onChangeCounter(\''.$key.'\')">
        <label id="lab'.$key.'" class="checkbox" for="'.$key.'"></label>
        <label class="text" for="'.$key.'">'.$value.'</label>
      </div>';
    //echo " $key => Érték: $value<br>";
  }
?>
