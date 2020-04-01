<!DOCTYPE html>

<html>
<head>
    <title>Upload Page </title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
  </script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous">
  </script>

</head>

<body>
    <!-- drop&drag zone-->
    <div id="drop_file_zone"  ondrop="upload_file(event)" ondragover="dragoverHandler(event)">
    <div id="drag_upload_file">

      <!-- 選擇檔案按鈕-->
      <input type = "button" value="選擇檔案" onclick="file_explorer();">
    　<input type="file" id="selectfile" name="file[]" id="file[]" multiple />
          <p>or Drop File Here</p>
    </div>
    </div>
    </form>
    <!--list the data that you upload-->

    <table border='1'>
    <tr>
    <td>Project Data</td>


    <?php  foreach($project_data as $row) {?>
    <tr>
    <td><?php echo '<p><a href ="show.php?data='.$row["data_loc"].'"  target="_blank">' .$row['data_name']. '</a></p>'?></td>
    <td><?php echo '<p><a href="del.php?data_id='.$row["data_id"].'" target="_blank" onclick="closepage()">刪除 </a></p>'?></td>
    <?php } ?>
    </tr>
    </table>

</body>
</html>
