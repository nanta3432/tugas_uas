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
        @if (isset($data_detail))
            @foreach ($data_detail as $item_detail)
                <div class="tdk">
                    <table>
                        <tr>
                            <td valign="top"><b>Kategori id</b></td>
                            <td valign="top">:</td>
                            <td valign="top">{{$item_detail->id}}</td>
                        </tr>
                        <tr>
                            <td><br></td>
                            <td><br></td>
                            <td><br></td>
                        </tr>
                        <tr>
                            <td valign="top"><b>Kategori Barang</b></td>
                            <td valign="top">:</td>
                            <td valign="top">{{$item_detail->kategori}}</td>
                        </tr>
                        <tr>
                            <td><br></td>
                            <td><br></td>
                            <td><br></td>
                        </tr>
                        <tr>
                            <td valign="top"><b>Keterangan</b></td>
                            <td valign="top">:</td>
                            <td valign="top">{{$item_detail->keterangan}}</td>
                        </tr>
                    </table>
                </div>
            @endforeach
        @else
            <div class="tdk">
                <p>Tidak ada data yang ditampilkan disini</p>
            </div>
        @endif
    </div>
    <div class="konten">
        <form action="/cari" method="get" style="margin-bottom: .5rem">
            {{csrf_field()}}
            <input type="text" class="form-control" style="width: 20rem; height:2.5rem" name="cari" id="">
            <button class="btn-res" style="height:2.65rem">Cari</button>
        </form>
        <table border cellpadding="7">
            <tr>
                <th width="10">No</th>
                <th>Id Kategori</th>
                <th>Kategori</th>
                <th>Keterangan</th>
                <th width="120">Detail</th>
            </tr>
            @foreach ($data as $item)
            <tr height="50">
                <td align="center">{{$a++}}</td>
                <td align="center">{{$item->id}}</td>
                <td width="100">{{$item->kategori}}</td>
                <td>{{$item->keterangan}}</td>
                <td align="center"><a class="btn" style="padding:.6rem;" href="/detail/{{$item->id}}">Detail</a></td>
            </tr>
            @endforeach
        </table>
    </div>  
</body>
</html>