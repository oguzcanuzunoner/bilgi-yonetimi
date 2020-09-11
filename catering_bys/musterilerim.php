<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Müşterilerim</title>
    <link rel="stylesheet" href="musterilerim.css"type="text/css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
    <script src="https://cdn.rawgit.com/rainabba/jquery-table2excel/1.1.0/dist/jquery.table2excel.min.js"></script>
    <script>
        $(document).ready(function(){
            
            $("#aktar").click(function(){
                $("#veriler").table2excel({
                    name: "Müsterilerim", // Çalışma sayfası adı - Worksheet
                    filename: "Müsterilerim.xlsx" // Dosya Adı
                });
            })
            
        })
    </script>
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



    
    <div class="musterilerim" style="width=10px;">
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
                    Doğum tarihi
                </th>

                <th>
                    Sipariş Ver
                </th>
            </tr>

            <tr>
            <?php
        $db = new PDO("mysql:host=localhost;dbname=catering_bys;charset=utf8", "root", "");
        $query = $db->query("SELECT * FROM musteriler order by id desc", PDO::FETCH_ASSOC);
        if ( $query->rowCount() ){
          foreach( $query as $row ){
            ?>
            <tr>
                <td >
                <?php echo $row ['adSoyad']."\t"?> 
                </td>
                <td>
                <?php echo $row ['telefonNumarasi']."\t"?>
                </td>
                <td>
                <?php echo $row ['mail']."\t"?>
                </td>
                <td>
                <?php echo $row ['dogum_tarihi']."\t"?>
                </td>
                <td>
                    <a href ="sipver.php"> <img src="add.png" alt="add" width="40" height="40"/><br>
                </td>
                </tr>
                <?php
                    }        
                    }
            ?>
            </tr>

        </table>

        <form method="post" action="musolustur.php">
        <input type="submit" name="export" class="btn btn-success" value="Müşterileri Raporunu İndir" />
        </form>
        </form>
        </div>

</body>
</html>