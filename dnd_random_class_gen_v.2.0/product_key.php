  <?php
  require_once("../dnd_mysqli_connect_2.php");

  $query = "SELECT * FROM product_key";

  $response = @mysqli_query($dbc, $query);

  if($response)
  {
      echo "<table align= 'left'
      cellspacing='5' cellpadding='8'
      <tr><td align='left'><b>Abb<b></tb>
      <td align='left'><b>Full Name<b></tb></tr>";
      /*<td align='left'><b>ID<b></tb></tr>";*/

      while($row = mysqli_fetch_array($response))
      {
          echo '<tr><td align "left>' .
              $row['abb'] . '</td><td align "left>'.
              $row['full_name'] . '</td><td align "left>';
              /*$row['product_id'] . '</td><td align "left>';*/

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
