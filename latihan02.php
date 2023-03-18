<?php
#area script php


$nama1 = "Maru";
$nama2 = "anjas";
$password = '438h34bydbgd67wed2388b87';
$hadir = "hadir";
$alpha = "alpha";

$pg = 1;
if(isset($_GET["pg"])){
    $pg = $_GET["pg"];

}
    switch($pg) {
        case 1:
            $konten = "<h3> Page 1 </h3>";
            $judulpage = "Page 1";
            break;
        case 2:
            $konten = "<h3> Page 2 </h3>";
            $judulpage = "Page 2";
            break;
        case 3:
            $konten = "<h3> Page 3 </h3>";
            $judulpage = "Page 3";
            break;
        default:
        $konten = "<h3> Page Error </h3>";
        $judulpage = "Error Page";
        break;
    }



?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?=$judulpage?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<body>


    <ul class="nav">
        <li class="nav-item"><a class="nav-link " href="?pg=1">Page 1</a></li>
        <li class="nav-item"><a class="nav-link" href="?pg=2">Page 2</a></li>
        <li class="nav-item"><a class="nav-link" href="?pg=3">Page 3</a></li>
       
    </ul>

    <?="$konten";?>
  
    <?php
    echo "Selamat Datang $nama1";
    ?>

    <div class="table-responsive">
        <table class="table table-warning">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Username</th>
                    <th scope="col">Password</th>
                    <th scope="col">Keterangan</th>
                </tr>
            </thead>
            <tbody>
                <tr class="">
                    <td scope="row">1</td>
                    <td><?="$nama1"; ?></td>
                    <td><?="$password";?></td>
                    <td><?="$hadir";?></td>
                </tr>

                

                <tr class="">
                    <td scope="row">2</td>
                    <td><?="$nama2";?></td>
                    <td><?="$password";?></td>
                    <td><?="$alpha";?></td>
                </tr>
           
            </tbody>
        </table>
    </div>
    


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>