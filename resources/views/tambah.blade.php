<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tambah data</title>
    <link rel="stylesheet" href="../assets/css/style.css">
</head>
<body class="body">
    <header class="header">
        <a href="/tampil" class="a-header">Lihat Data</a>
        <a href="/tambah" class="a-header">Tambah Data</a>
        <a href="/perbahrui" class="a-header">Perbahrui Data</a>
    </header>
    <div class="side-bar">
        <h3>Detail</h3>
        <div class="tdk">
            <p>Tidak ada data yang ditampilkan disini</p>
        </div>
    </div>
    <div class="konten" style="margin-left:12rem">
        <table cellpadding="7">
            <form action="/simpan" method="post">
                {{ csrf_field() }}
                <tr>
                    <td><b>Nama kategori</b></td>
                    <td>:</td>
                    <td><input class="form-control fk" type="text" name="nama"></td>
                </tr>
                <tr>
                    <td valign="top"><b>Keterangan kategori</b></td>
                    <td valign="top">:</td>
                    <td><textarea name="ket" style="border-radius: .5rem;" class="fk" id="" cols="30" rows="10"></textarea></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td><button class="btn">Simpan</button></td>
                </tr>
            </form>
        </table>
    </div>  
</body>
</html>