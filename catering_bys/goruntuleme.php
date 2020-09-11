<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="goruntuleme.css" type="text/css" >
    <title>Sipariş Detayı</title>
</head>
<body>

        
<div class="siparislerim" style="width=10px;">
   
<table id="veriler" cellspacing="0">
            <tr>
            <th>
                    Sipariş İd
                </td>
                <th>
                    Ad Soyad
                </td>
                <th>
                    Telefon Numarası
                </td>
                <th>
                    Mail
                </th>
                <th>
                    Menü
                </th>

                <th>
                    Adet
                </th>
                <th>
                    Adres
                </th>
                <th>
                    Tarih
                </th>
            </tr>

            <tr>
            <?php

        $db = new PDO("mysql:host=localhost;dbname=catering_bys;charset=utf8", "root", "");
        $siparisno = $_POST['siparisno'];
        $query = $db->query("SELECT * FROM siparisler WHERE id = '$siparisno'", PDO::FETCH_ASSOC);
        if ( $query->rowCount() ){
          foreach( $query as $row ){
            ?>
            <tr>
            <td >
                <?php echo $row ['id']."\t"?> 
                </td>
                <td >
                <?php echo $row ['ad_soyad']."\t"?> 
                </td>
                <td>
                <?php echo $row ['telefon_numarasi']."\t"?>
                </td>
                <td>
                <?php echo $row ['mail']."\t"?>
                </td>
                <td>
                <?php echo $row ['menu']."\t"?>
                </td>
                <td>
                <?php echo $row ['adet']."\t"?>
                </td>
                <td>
                <?php echo $row ['adres']."\t"?>
                </td>
                <td>
                <?php echo $row ['tarih']."\t"?>
                </td>
                </tr>
                <?php
                    }        
                    }
            ?>
            </tr>

        </table>
        </div>
        

</body>
</html>