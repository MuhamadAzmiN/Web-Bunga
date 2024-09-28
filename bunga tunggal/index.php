<?php
class Calculate {
    public $waktu,
           $modal,
           $bunga;

    // Fungsi untuk menghitung bunga sederhana
    public function hitungBungaSederhana()
    {
        return $this->modal * ($this->bunga / 100) * $this->waktu;
    }

    // Setter untuk waktu
    public function getWaktu($waktu)
    {
        $this->waktu = $waktu;
    }

    // Setter untuk modal
    public function getModal($modal)
    {
        $this->modal = $modal;
    }

    // Setter untuk bunga
    public function getBunga($bunga)
    {
        $this->bunga = $bunga;
    }
}

$hasil = ''; // Inisialisasi variabel hasil kosong

// Memproses form setelah tombol submit ditekan
if(isset($_POST["btn"])){
    // Validasi input form
    $waktu = isset($_POST["waktu"]) ? (int)$_POST["waktu"] : 0;
    $modal = isset($_POST["modal"]) ? (float)$_POST["modal"] : 0;
    $bunga = isset($_POST["bunga"]) ? (float)$_POST["bunga"] : 0;

    // Jika semua input valid
    if($waktu > 0 && $modal > 0 && $bunga > 0) {
        $bungas = new Calculate();
        $bungas->getModal($modal);
        $bungas->getWaktu($waktu);
        $bungas->getBunga($bunga);
        $hasilBunga = $bungas->hitungBungaSederhana();
        $hasil = "Hasil Bunga Sederhana: Rp " . number_format($hasilBunga, 2, ',', '.');
    } else {
        $hasil = "Masukkan data yang valid!";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hitung Bunga Sederhana</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 50px;
            background-color: #f7f7f7;
        }
        form {
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
            width: 300px;
            margin: 0 auto;
        }
        label {
            display: block;
            margin-top: 10px;
            font-weight: bold;
        }
        input {
            width: 100%;
            padding: 8px;
            margin-top: 5px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        button {
            margin-top: 15px;
            padding: 10px;
            width: 100%;
            background-color: #28a745;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        button:hover {
            background-color: #218838;
        }
        .result {
            margin-top: 20px;
            text-align: center;
            font-weight: bold;
            color: #333;
        }
    </style>
</head>
<body>
    <h2 style="text-align: center;">Hitung Bunga Sederhana</h2>
    <form method="POST">
        <label for="waktu">Waktu (tahun)</label>
        <input type="text" name="waktu" id="waktu" placeholder="Masukkan waktu">

        <label for="modal">Modal (Rp)</label>
        <input type="text" name="modal" id="modal" placeholder="Masukkan modal">

        <label for="bunga">Bunga (%)</label>
        <input type="text" name="bunga" id="bunga" placeholder="Masukkan bunga">

        <button type="submit" name="btn" value="Submit">Hitung</button>
    </form>

    <div class="result">
        <?php
        if ($hasil) {
            echo $hasil;
        }
        ?>
    </div>
</body>
</html>
