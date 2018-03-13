<?php
  foreach ($characters as $key => $value) {
    echo '
      <div class="table">
        <div id="counter'.$key.'">
          <script type="text/javascript">

          </script>
        </div>
        <input type="checkbox" id="'.$key.'" name="[&'.$key.'=]" onchange="charactersResultWrite(); createCookie(\''.$key.'\', new Date().getTime()+6*60*60*1000, 24); counterWrite()">
        <label id="lab'.$key.'" class="checkbox" for="'.$key.'"></label>
        <label class="text" for="'.$key.'">'.$value.'</label>
      </div>';
    //echo " $key => Érték: $value<br>";
  }
?>
