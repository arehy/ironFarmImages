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
    "BEsBAAA" => "Helliot",
    "BP0BAAA" => "Behem"
  );
  foreach ($items as $key => $value) {
    echo '
    <tr>
      <td>
        <input type="checkbox" id="'.$key.'" name="[&'.$key.'=]" onchange="resultWrite(); selectionCopy()">
        <label class="checkbox" for="'.$key.'"></label>
      </td>
      <td>
        <label class="text" for="'.$key.'">'.$value.'</label>
      </td>
    </tr>';
    //echo " $key => Érték: $value<br>";
  }
?>
