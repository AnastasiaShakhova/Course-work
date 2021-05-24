<div class="block-musics">
<table>
<?php 
$username = "root"; 
$password = ""; 
$database = "db_musics"; 
$mysqli = new mysqli("localhost", $username, $password, $database);
$query = "SELECT music.NAME, performer.NAMES,genre.Genre FROM ((music
         INNER JOIN performer ON music.PERFORMER_ID = performer.ID)
         INNER JOIN genre ON music.GENRE_ID = genre.ID)";


echo '<table> 
      <tr> 
          <td> Назва пісні</td> 
          <td> Виконавець</td> 
          <td> Жанр</td> 
      </tr>';

if ($result = $mysqli->query($query)) {
    while ($row = $result->fetch_assoc()) {
        $field2name = $row["NAME"];
        $field3name = $row["NAMES"];
        $field4name = $row["Genre"];

        echo '<tr> 
                  <td>'.$field2name.'</td> 
                  <td>'.$field3name.'</td> 
                  <td>'.$field4name.'</td>
              </tr>';
    }
    $result->free();
} 
?>  
                
</table>
</div>