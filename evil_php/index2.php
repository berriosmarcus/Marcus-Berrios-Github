  <?php
  require_once("../poke_mysqli_connect.php");

  $query = "SELECT * FROM pokelist";

  $response = @mysqli_query($dbc, $query);

  if($response)
  {
      echo "<table align= 'left'
      cellspacing='5' cellpadding='8'
      <tr><td align='left'><Pokemon Name<b></tb>
      <td align='left'><b>National Dex<b></tb>
      <td align='left'><b>Type 1<b></tb>
      <td align='left'><b>Type 2<b></tb>";

      while($row = mysqli_fetch_array($response))
      {
          echo '<tr><td align "left>' .
              $row['Name'] . '</td><td align "left>' .
              $row['ndex'] . '</td><td align "left>' .
              $row['type1'] . '</td><td align "left>' .
              $row['type2'] . '</td><td align "left>';

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
