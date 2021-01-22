<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tampilkan data</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="../assets/css/style.css">
</head>
<body class="body">
    <header class="header">
        <a href="/tampil" class="a-header">Lihat Data</a>
        <a href="/tambah" class="a-header">Tambah Data</a>
        <a href="/perbahrui" class="a-header">Perbahrui Data</a>
    </header>
    <div class="side-bar">
        <h3>Detail Barang</h3>
        @if (isset($data_edit))
            @foreach ($data_edit as $item_edit)
                <div class="tdk">
                    <form action="/edit/simpan" method="post">
                        {{csrf_field()}}
                        <b>Kategori id</b>
                        <input type="text" name="id" class="form-control fk" style="margin-top:5px" readonly value="{{$item_edit->id}}">
                        <br>
                        <br>
                        <b>Kategori Barang</b>
                        <input type="text" class="form-control fk" name="kategori" style="margin-top:5px" value="{{$item_edit->kategori}}">
                        <br>
                        <br>
                        <b>Keterangan</b>
                        <textarea name="keterangan" id="" class="fk" style="border-radius: .5rem; margin-top:5px" cols="22" rows="10">{{$item_edit->keterangan}}</textarea>
                        <br>
                        <br>
                        <button class="btn">Simpan</button> <button class="btn-res" type="reset">Reset</button>
                    </form>
                </div>
            @endforeach
        @elseif(isset($data_hapus))
            <div class="tdk">
                @foreach ($data_hapus as $item_hapus)
                    <p>Apakah kamu yakin ingin menghapus kategori <x style="color: white">'{{$item_hapus->kategori}}'</x> dari tabel kategori ? </p>
                    <form action="/hapus" method="post">
                        {{csrf_field()}}
                        <input type="hidden" name="id" value="{{$item_hapus->id}}">
                        <button class="btn">Yakin</button>
                        <a class="btn-res" href="/perbahrui">Batal</a>
                    </form>
                @endforeach
            </div>
        @else
            <div class="tdk">
                <p>Tidak ada data yang ditampilkan disini</p>
            </div>
        @endif
    </div>
    <div class="konten">
        <table border cellpadding="7">
            <tr>
                <th width="10">No</th>
                <th>Id Kategori</th>
                <th>Kategori</th>
                <th>Keterangan</th>
                <th colspan="2">Menu</th>
            </tr>
            @foreach ($data as $item)
            <tr height="50">
                <td align="center">{{$a++}}</td>
                <td align="center">{{$item->id}}</td>
                <td width="100">{{$item->kategori}}</td>
                <td>{{$item->keterangan}}</td>
                <td><a class="btn-res" style="padding:.55rem;" href="/edit/{{$item->id}}">Edit</a></td>
                <td><a class="btn" style="padding:.55rem;" href="/hapus/{{$item->id}}">Hapus</a></td>
            </tr>
            @endforeach
        </table>
    </div>  
</body>
</html>