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
        <table>
          <tr>
            <td>
              <input type="checkbox" id="selectAll" onchange="checkAll(); selectionCopy()">
              <label class="checkbox" for="selectAll"></label>
            </td>
            <td>
              <label id="lab" class="text" for="selectAll">Mindent</label>
            </td>
          </tr>
          <tr>
            <td>&nbsp</td>
            <td>&nbsp</td>
          </tr>
          <?php include 'php/table.php' ?>
        </table>
      </form>
    </div>
    <!-- <div id="resultContent">&nbsp
    </div> -->
    <textarea style="visibility: hidden;" id="resultContent">
    </textarea>
  </body>
</html>
