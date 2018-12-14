  <?php
  require_once("../dnd_mysqli_connect_2.php");

  $random_int = rand(1, 39);

  $query = "select * from classes where class_id = $random_int";

  $response = @mysqli_query($dbc, $query);

  if($response)
  {
      echo "<table align= 'left'
      cellspacing='5' cellpadding='8'
      <tr><td align='left'><b>Class Name<b></tb>
      <td align='left'><b>Class Book<b></tb>
      <td align='left'><b>Page Number<b></tb>
      <td align='left'><b>Description<b></tb>";
      /*<td align='left'><b>ID<b></tb></tr>;*/

      while($row = mysqli_fetch_array($response))
      {
          echo '<tr><td align "left>' .
              $row['class'] . '</td><td align "left>' .
              $row['source'] . '</td><td align "left>' .
              $row['Page'] . '</td><td align "left>' .
              $row['Description'] . '</td><td align "left>';
              /*$row['class_id'] . '</td><td align "left>';*/

          echo "</tr>";
      }
      echo "</table>";
  } else
  {
      echo "Error, couldn't issue query! ";
      echo mysqli_error($dbc);
  }

  mysqli_close($dbc);

  ?>
