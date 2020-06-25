@extends('layouts.tes')
@section('content')



<div class="panel">
       <div class="panel-body">
        <div class=col-lg-12>
        <h2>Nota untuk Pembeli</h2>
        <table class="table table-bordered">
       <!-- pembeli.nama_pembeli','penjualan.tanggal_penjualan','detailpenjualan.nama_barang',
       'detailpenjualan.harga_satuan','detailpenjualan.jumlah_penjualan','detailpenjualan.total_harga')-->
        <thead>
            <tr><th>Nama</th><th>Tanggal</th><th>Id Barang</th><th>Harga Satuan</th>
            <th>Jumlah Penjualan</th><th>Total Harga</th></tr>
        </thead>
        <tbody>
            @foreach ($data as $row )
                
                <td>{{$row->nama_pembeli}}</td>
                <td>{{$row->tanggal_penjualan}}</td>
                <td>{{$row->id_barang}}</td>
                <td>{{$row->harga_satuan}}</td>
                <td>{{$row->jumlah_penjualan}}</td>
                <td>{{$row->total_harga}}</td>
                
                </tr>

            @endforeach
        </tbody>
        </table>
        
        </div>
    </div>
</div>
</div>
</div>
@endsection

