@extends('layouts.tes')
@section('content')



            
<div class="panel">
       <div class="panel-body">
     <div class=col-lg-12>
     <h2>Daftar Penjualan</h2>

        <table class="table table-bordered">
        <thead>
            <tr><th>No</th><th>ID Penjualan</th><th>Tanggal Penjualan</th><th>Jenis Pembayaran</th><th>Id Penjual</th><th>Id Pembeli</th><th>Aksi</th></tr>
        </thead>
        <tbody>
            @foreach ($penjualan as $in=>$val )
                <tr><td>{{($in+1)}}</td><td>{{$val->id_penjualan}}</td><td>{{$val->tanggal_penjualan}}</td><td>{{$val->jenis_pembayaran}}</td><td>{{$val->id_penjual}}</td><td>{{$val->id_pembeli}}</td>
               <td>
                <form action="{{route('penjualan.destroy',$val->id_penjualan)}}"method="POST">
                   @csrf
                   @method('DELETE')
                   <button type="submit"><span class="fa fa-trash" style="color: red"></span</button>
                   </form>
                   </td>
                   </tr>
                </tr>

            @endforeach
        </tbody>
        </table>
        <button class= "btn btn-primary"><a href="{{route('penjualan.create')}}"style="color: white">Tambah Data</a></button>
        <button class= "btn btn-primary"><a href="{{route('detailpenjualan.index')}}"style="color: white">Detail Penjualan</a></button>
        </div>
    </div>
</div>
@endsection

