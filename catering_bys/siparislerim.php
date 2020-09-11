<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="siparislerim.css" type="text/css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
    <script src="https://cdn.rawgit.com/rainabba/jquery-table2excel/1.1.0/dist/jquery.table2excel.min.js"></script>
    <script>
        $(document).ready(function(){
            
            $("#aktar").click(function(){
                $("#veriler").table2excel({
                    name: "siparislerim", // Çalışma sayfası adı - Worksheet
                    filename: "Siparislerim.xlsx" // Dosya Adı
                });
            })
            
        })
    </script>
    <title>Siparişlerim</title>
</head>
<body>
<img src="YLOGO.png" alt=logo width="200" >
    
        <div class="menu">
            <ul>
            <li><a href =""id="mus">Müşteri</a>
                <ul>
                    <li><a href="musteriekle.php" id="musteriekle"> Müşteri Ekle</a></li>
                    <li><a href="musterilerim.php" id="musterilerim"> Müşterilerim</a></li>
                </ul>
            </li>
            <li><a href ="siparislerim.php"id="siparis">Siparişler</a></li>
            <li><a href ="cikis.php"id="cikis">Çıkış</a>
            </li>
            </ul>
        </div>


        <div class="siparislerim" style="width=10px;">
        <table id="veriler" cellspacing="0">
            <tr>
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
        $query = $db->query("SELECT * FROM siparisler order by id desc", PDO::FETCH_ASSOC);
        if ( $query->rowCount() ){
          foreach( $query as $row ){
            ?>
            <tr>
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
        <form method="post" action="sipolustur.php">
        <input type="submit" name="export" class="btn btn-success" value="Sipariş Raporunu İndir" /></form>
                </div>
        
</body>
</html>