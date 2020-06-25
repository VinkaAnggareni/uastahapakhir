@extends('layouts.tes')
@section('content')

<div class="panel">
     <div class="panel-body">
         <div class="col lg 12">
         <h1> Daftar Pembelian</h1>

    
        <table class="table table-bordered">

            <thead>
                <tr><th>No</th><th>ID Pembelian</th><th>Tanggal Pembalian</th><th>Tanggal Terima</th><th>Id Supplier</th><th>Aksi</th></tr>
            </thead>
            <tbody>
                @foreach ( $pembelian as $in=>$val )
                <tr>
                <td>{{($in+1)}}</td><td>{{$val->id_pembelian}}</td><td>{{$val->tanggal_pembelian}}</td><td>{{$val->tanggal_terima}}</td><td>{{$val->id_supplier}}</td>
               <td>
                <form action="{{route('pembelian.destroy',$val->id_pembelian)}}"method="POST">
                   @csrf
                   @method('DELETE')
                   <button type="submit"><span class="fa fa-trash" style="color: red"></span</button>
                   </form>
                   </td>
                   
          
                   </tr>
           
                   @endforeach
            </tbody>
            </table>
            <button class= "btn btn-primary" ><a href="{{route('pembelian.create')}}"style="color: white">Tambah Data</a></button>
            <button class= "btn btn-primary"><a href="{{route('detailpembelian.index')}}"style="color: white">Detail Pembelian</a></button>
            {{$pembelian->links()}}
        </div>
        </div>
        </div>
    @endsection
