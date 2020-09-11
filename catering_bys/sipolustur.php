<?php  
//export.php  
$connect = mysqli_connect("localhost", "root", "", "catering_bys");
$connect->set_charset('utf8');

$output = '';


if(isset($_POST["export"]))
{
 $query = "SELECT * FROM siparisler";
 $result = mysqli_query($connect, $query);
 if(mysqli_num_rows($result) > 0)
 {
  $output .= '
   <table class="table" bordered="1">  
                    <tr>  
                         <th>id</th>  
                         <th>Ad Soyad</th>  
                         <th>Telefon Numarası</th>  
       <th>Mail</th>
       <th>Menu</th>
       <th>Adet</th>
       <th>Adres</th>
       <th>Tarih</th>
                    </tr>
  ';
  while($row = mysqli_fetch_array($result))
  {
   $output .= '
    <tr>  
                         <td>'.$row["id"].'</td>  
                         <td>'.$row["ad_soyad"].'</td>  
                         <td>'.$row["telefon_numarasi"].'</td>  
                        <td>'.$row["mail"].'</td>  
                        <td>'.$row["menu"].'</td>
                        <td>'.$row["adet"].'</td>
                        <td>'.$row["adres"].'</td>
                        <td>'.$row["tarih"].'</td>
                    </tr>
   ';
  }
  $output .= '</table>';
  header( "Content-type: application/vnd.ms-excel; charset=UTF-8;" );
  header( 'Content-Encoding: UTF-8' );
  header('Content-Disposition: attachment; filename=siparislerim.xls');
  echo "\xEF\xBB\xBF"; 
  echo $output;
 }
}
?>