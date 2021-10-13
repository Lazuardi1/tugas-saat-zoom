<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="" method="$_GET">

        <p>
            <label for="tanggal">
                tanggal
                <input type="number" name="tanggal">
            </label>
        </p>
        <p>
            <label for="bulan">
                <p style="display: inline-block; margin-right: 10px;">bulan</p>
                <input type="number" name="bulan">
            </label>
        </p>

        <input type="submit" value="Kirim">

    </form>

    <?php

    $hasil = "tidak ada";
    $bulan = 1;

    if (isset($_GET['bulan'])) {
        $bulan = $_GET['bulan'];
    }


    switch ($bulan) {

        case 1:

            if (isset($_GET['tanggal'])) {
                $tanggal = $_GET['tanggal'];

                if ($tanggal >= 1 && $tanggal <= 19) {
                    $hasil = "CAPRICORN";
                }
                if ($tanggal >= 20 && $tanggal <= 31) {
                    $hasil = "AQUARIUS";
                }
            }

            break;

        case 2:

            if (isset($_GET['tanggal'])) {
                $tanggal = $_GET['tanggal'];

                if ($tanggal >= 1 && $tanggal <= 18) {
                    $hasil = "AQUARIUS";
                }
                if ($tanggal >= 19 && $tanggal <= 31) {
                    $hasil = "PISCES";
                }
            }

            break;

        case 3:

            if (isset($_GET['tanggal'])) {
                $tanggal = $_GET['tanggal'];

                if ($tanggal >= 1 && $tanggal <= 20) {
                    $hasil = "PISCES";
                }
                if ($tanggal >= 21 && $tanggal <= 31) {
                    $hasil = "ARIES";
                }
            }

            break;


        case 4:

            if (isset($_GET['tanggal'])) {
                $tanggal = $_GET['tanggal'];

                if ($tanggal >= 1 && $tanggal <= 19) {
                    $hasil = "ARIES";
                }
                if ($tanggal >= 20 && $tanggal <= 30) {
                    $hasil = "TAURUS";
                }
            }

            break;

        case 5:

            if (isset($_GET['tanggal'])) {
                $tanggal = $_GET['tanggal'];

                if ($tanggal >= 1 && $tanggal <= 20) {
                    $hasil = "TAURUS";
                }
                if ($tanggal >= 21 && $tanggal <= 31) {
                    $hasil = "GEMINI";
                }
            }

            break;

        case 6:

            if (isset($_GET['tanggal'])) {
                $tanggal = $_GET['tanggal'];

                if ($tanggal >= 1 && $tanggal <= 20) {
                    $hasil = "GEMINI";
                }
                if ($tanggal >= 21 && $tanggal <= 30) {
                    $hasil = "CANCER";
                }
            }

            break;

        case 7:

            if (isset($_GET['tanggal'])) {
                $tanggal = $_GET['tanggal'];

                if ($tanggal >= 1 && $tanggal <= 22) {
                    $hasil = "CANCER";
                }
                if ($tanggal >= 23 && $tanggal <= 31) {
                    $hasil = "LEO";
                }
            }

            break;

        case 8:

            if (isset($_GET['tanggal'])) {
                $tanggal = $_GET['tanggal'];

                if ($tanggal >= 1 && $tanggal <= 22) {
                    $hasil = "LEO";
                }
                if ($tanggal >= 23 && $tanggal <= 31) {
                    $hasil = "VIRGO";
                }
            }

            break;

        case 9:

            if (isset($_GET['tanggal'])) {
                $tanggal = $_GET['tanggal'];

                if ($tanggal >= 1 && $tanggal <= 22) {
                    $hasil = "VIRGO";
                }
                if ($tanggal >= 23 && $tanggal <= 30) {
                    $hasil = "LIBRA";
                }
            }

            break;

        case 10:

            if (isset($_GET['tanggal'])) {
                $tanggal = $_GET['tanggal'];

                if ($tanggal >= 1 && $tanggal <= 22) {
                    $hasil = "LIBRA";
                }
                if ($tanggal >= 23 && $tanggal <= 31) {
                    $hasil = "SCORPIO";
                }
            }

            break;

        case 11:

            if (isset($_GET['tanggal'])) {
                $tanggal = $_GET['tanggal'];

                if ($tanggal >= 1 && $tanggal <= 21) {
                    $hasil = "SCORPIO";
                }
                if ($tanggal >= 22 && $tanggal <= 30) {
                    $hasil = "SAGITARIUS";
                }
            }

            break;

        case 12:

            if (isset($_GET['tanggal'])) {
                $tanggal = $_GET['tanggal'];

                if ($tanggal >= 1 && $tanggal <= 21) {
                    $hasil = "SAGITARIUS";
                }
                if ($tanggal >= 22 && $tanggal <= 31) {
                    $hasil = "CAPRICORN";
                }
            }

            break;


        default:

            break;
    }

    echo "<h1>$hasil<h1>";

    ?>
</body>

</html>