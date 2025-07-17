    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>cRUD tOKO aTK</title>
    </head>
    <body>
        <header>
            <h3>Data Barang</h3>
            <h1>Toko atk ANDRA</h1>
        </header>
        <h4>Menu</h4>
        <nav>
            <ul>
                <li><a href="form-data.php">Tambahkan Produk</a></li>
                <li><a href="list-data.php">Daftar Produk</a></li>
            </ul>
        </nav>
        <?php if(isset($_GET['status']))  :?>
            <p>
                <?php
                    if($_GET['status'] == 'sukses') {
                        echo "data berhasil ditambahkan";
                    }else{
                        echo "data gagal di tambahkan";
                    }
                ?>
            </p>
        <?php endif; ?>            
    </body>
    </html>