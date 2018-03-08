<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Iron farm</title>
    <link rel="shortcut icon" href="favicon.png">
    <link href="css\style.css" rel="stylesheet">
    <script src="js\function.js"></script>
  </head>
  <body onload="resultWrite(); checkAll()">
    <div id="checkboxContent">
      <form>
        <div class="table">
          <input type="checkbox" id="selectAll" onchange="checkAll(); selectionCopy()">
          <label class="checkbox" for="selectAll"></label>
          <label id="lab" class="text" for="selectAll"></label>
        </div>
        <?php include 'php/table.php' ?>
      </form>
    </div>
    <!-- <div id="resultContent">&nbsp
    </div> -->
    <textarea style="visibility: hidden;" id="resultContent">
    </textarea>
  </body>
</html>
