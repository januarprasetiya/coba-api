<?php
$data = file_get_contents('database.json');
//ambil data kode surat
$surat = json_decode($data, true);

$kodesurat = json_decode($data, true);

$kodesubbagian = json_decode($data, true);

//ambil kode surat
// var_dump($surat["surat"][0]["kodesurat"]);

//ambil sub surat
// var_dump($kodesurat["surat"][0]["subsurat"][0]["subkodesurat"]);

//ambil sub bagian
// var_dump($surat["surat"][0]["subsurat"][0]["subbagian"][0]["kodesubbagian"]);

$kodesurat = $kodesurat[1]["subsurat"];
?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

    <title>Hello, world!</title>
</head>

<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-5">
                <select class="form-select mb-3 mt-5" aria-label="Default select example" id="kodesurat">
                    <option selected>Jenis Surat</option>
                    <?php foreach ($surat as $row) : ?>
                        <option value="<?= $row["kodesurat"] ?>"><?= $row["kodesurat"] . '. ' . $row["namakodesurat"] ?></option>
                    <?php endforeach ?>
                </select>
                <select class="form-select mb-3" aria-label="Default select example" id="kodesurat">
                    <option selected>Kode Surat</option>
                    <?php foreach ($kodesurat as $rows) : ?>
                        <option value=""><?= $rows["subkodesurat"] ?></option>
                    <?php endforeach ?>
                </select>
                <select class="form-select" aria-label="Default select example" id="kodesurat">
                    <option selected>Sub Kode Surat</option>
                    <?php foreach ($kodesubbagian as $rowss) : ?>
                        <option value=""></option>
                    <?php endforeach ?>
                </select>
            </div>
        </div>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-W8fXfP3gkOKtndU4JGtKDvXbO53Wy8SZCQHczT5FMiiqmQfUpWbYdTil/SxwZgAN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.min.js" integrity="sha384-skAcpIdS7UcVUC05LJ9Dxay8AXcDYfBJqt1CJ85S/CFujBsIzCIv+l9liuYLaMQ/" crossorigin="anonymous"></script>
    -->
    <script src="script.js"></script>
</body>

</html>