<?php
  foreach ($characters as $key => $value) {
    echo '
      <div class="table">
      <script type="text/javascript">
         splitCookie("counter'.$key.'");
      </script>
      <div id="counter'.$key.'">
        ide jön a counter
      </div>
        <input type="checkbox" id="'.$key.'" name="[&'.$key.'=]" onchange="charactersResultWrite()">
        <label id="lab'.$key.'" class="checkbox" for="'.$key.'"></label>
        <label class="text" for="'.$key.'">'.$value.'</label>
      </div>';
    //echo " $key => Érték: $value<br>";
  }
?>
