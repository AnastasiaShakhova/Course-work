
<div class="block-advert">
                <table>
                <?php 
$username = "root"; 
$password = ""; 
$database = "db_musics"; 
$mysqli = new mysqli("localhost", $username, $password, $database);
$query = "SELECT * FROM advertising";


echo '<table action="product.php"> 
      <tr> 
          <td> Номер послуги</td> 
          <td> Ціна послуги</td> 
          <td> Кількість виконання послуги</td> 
      </tr>';

if ($result = $mysqli->query($query)) {
    while ($row = $result->fetch_assoc()) {
        $field1name = $row["id"];
        $field2name = $row["price"];
        $field3name = $row["count"];

        echo '<tr> 
                  <td style="width:250px">'.$field1name.'</td> 
                  <td style="width:250px">'.$field2name.' грн.</td> 
                  <td style="width:350px">'.$field3name.' в день</td> 
              </tr>';
    }
    $result->free();
} 
?>
</table>
</div> 
