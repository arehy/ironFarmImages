<?php include 'php/data.php' ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Iron farm</title>
    <link rel="shortcut icon" href="favicon.png">
    <link href="css\style.css" rel="stylesheet">
    <link href="php\tableStyle.php" rel="stylesheet">
    <link href="css\xantie.css" rel="stylesheet">
    <script src="js\function.js"></script>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script type="text/javascript">
      $(window).load(function() {
      $(".loader").fadeOut("slow");})
    </script>
  </head>
  <body onload="resultWrite(); checkAll(); counterWrite()">
    <div class="loader"></div>
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

    <div id="charactersContent">
      <input type="button" name="" value="reset" onclick="clearAllCookie()">
      <form>
        <?php include 'php/characters.php' ?>
      </form>
    </div>
  </body>
</html>
