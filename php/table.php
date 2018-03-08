<?php
  $items = array(
    "BGMAAAA" => "Gallowfields",
    "BAYAAAA" => "Halacon",
    "BBIAAAA" => "Cereboth",
    "BKsAAAA" => "Demetra",
    "BJMBAAA" => "Icegate",
    "BOQAAAA" => "Provern Shore",
    "BOwAAAA" => "Nentor",
    "BLQAAAA" => "Lornar's",
    "BL8AAAA" => "Snowhawk Landing",
    "BGUCAAA" => "Wyrmblood",
    "BF4BAAA" => "Oldgate",
    "BEsBAAA" => "Helliot Mine",
    "BP0BAAA" => "Behem"
  );
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
