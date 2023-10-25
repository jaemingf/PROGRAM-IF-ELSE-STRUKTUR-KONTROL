<!DOCTYPE html>
<html>
<head>
    <title>Olshop Sepatu</title>
    <style>
        body {
            background-image: url('background.jpg'); /* Ganti 'background.jpg' dengan URL gambar latar belakang Anda */
            background-size: cover;
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .container {
            background-image: url('pinkk.jpg'); /* Ganti 'background.jpg' dengan URL gambar latar belakang Anda */
            max-width: 800px;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            display: flex;
            justify-content: space-between; /* Mengatur agar dua kotak berdampingan */
            margin-top: 50px;
        }
        .menu-item {
            text-align: left;
            margin-bottom: 10px;
            width: 45%; /* Mengatur lebar masing-masing kotak */
            display: flex;
            align-items: center;
        }
        .shop-button {
            text-align: center;
            width: 10%;
            display: flex;
            align-items: center;
        }
        .menu-item img {
            max-width: 80px;
            margin-right: 10px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div>
            <h1>Olshop Sepatu</h1>

            <form method="post">
                <label for="kategori">Pilih Kategori Sepatu:</label>
                <select name="kategori" id="kategori">
                    <option value="pria">Sepatu Pria</option>
                    <option value="wanita">Sepatu Wanita</option>
                    <option value="anak">Sepatu Anak-anak</option>
                </select>
                <br>
                <label for="merek">Pilih Merek Sepatu:</label>
                <select name="merek" id="merek">
                    <option value="nike">Nike</option>
                    <option value="adidas">Adidas</option>
                    <option value="puma">Puma</option>
                </select>
                <br>
                <input type="submit" value="Tampilkan Harga">
            </form>

            <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $kategori = $_POST["kategori"];
                $merek = $_POST["merek"];
                $harga = 0;

                if ($kategori == "pria") {
                    if ($merek == "nike") {
                        $harga = 120;
                    } elseif ($merek == "adidas") {
                        $harga = 130;
                    } elseif ($merek == "puma") {
                        $harga = 110;
                    } else {
                        echo "<p class='error'>Merek sepatu tidak valid.</p>";
                    }
                } elseif ($kategori == "wanita") {
                    if ($merek == "nike") {
                        $harga = 110;
                    } elseif ($merek == "adidas") {
                        $harga = 120;
                    } elseif ($merek == "puma") {
                        $harga = 100;
                    } else {
                        echo "<p class='error'>Merek sepatu tidak valid.</p>";
                    }
                } elseif ($kategori == "anak") {
                    if ($merek == "nike") {
                        $harga = 80;
                    } elseif ($merek == "adidas") {
                        $harga = 90;
                    } elseif ($merek == "puma") {
                        $harga = 70;
                    } else {
                        echo "<p class='error'>Merek sepatu tidak valid.</p>";
                    }
                } else {
                    echo "<p class='error'>Kategori sepatu tidak valid.</p>";
                }

                if ($harga > 0) {
                    echo "<p>Harga sepatu kategori $kategori merek $merek adalah $harga USD.</p>";
                }
            }
            ?>
        </div>

        <div>
            <h2>Menu Sepatu</h2>
            <div class="menu-item">
                <img src="nike.jpg" alt="Sepatu Pria - Nike">
                <strong>Nike</strong>: $120
                <button onclick="addToCart('Sepatu Pria - Nike', 120)">Tambahkan ke Keranjang</button>
            </div>
            <div class="menu-item">
                <img src="adidas.jpg" alt="Sepatu Pria - Adidas">
                <strong>Adidas</strong>: $130
                <button onclick="addToCart('Sepatu Pria - Adidas', 130)">Tambahkan ke Keranjang</button>
            </div>
            <div class="menu-item">
                <img src="puma.jpg" alt="Sepatu Pria - Puma">
                <strong>Puma</strong>: $110
                <button onclick="addToCart('Sepatu Pria - Puma', 110)">Tambahkan ke Keranjang</button>
            </div>
            <!-- Tambahkan lebih banyak item menu sepatu dengan gambar sesuai kebutuhan -->
        </div>
        <div class="shop-button">
            <button onclick="shop()">Belanja</button>
        </div>
    </div>

    <script>
        function addToCart(item, price) {
            alert("Anda telah menambahkan " + item + " ke keranjang belanja dengan harga $" + price + ".");
        }

        function shop() {
            alert("Anda akan diarahkan ke halaman belanja.");
            // Di sini Anda dapat menambahkan tautan ke halaman belanja sesuai kebutuhan.
        }
    </script>
</body>
</html>
