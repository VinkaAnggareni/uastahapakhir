@extends('layouts.tes')
@section('content')

<div class="panel">
     <div class="panel-body">
         <div class="col lg 12">
         <h1> Daftar Supplier</h1>

   
    
        <table class="table table-bordered">

            <thead>
                <tr><th>No</th><th>ID Supplier</th><th>Nama Supplier</th><th>Alamat</th><th>No Hp</th><th>Aksi</th></tr>
            </thead>
            <tbody>
                @foreach ( $supplier as $in=>$val )
                <tr>
                <td>{{($in+1)}}</td><td> {{$val->id_supplier}}</td><td> {{$val->nama_supplier}}</td><td>{{$val->alamat}}</td><td>{{$val->no_hp}}</td>
                
            <td>
            <a href = "{{route('supplier.edit',$val->id_supplier)}}"><button  class="fa fa-pencil" style="color: green"></button></a>
            <form action="{{route('supplier.destroy',$val->id_supplier)}}"method="POST">
                   @csrf
                   @method('DELETE')
                   <button type="submit"><span class="fa fa-trash" style="color: red"></span</button>
                   </form>
                   </td>
                   </tr>
                   @endforeach
            </tbody>
            </table>
            <button class= "btn btn-primary"><a href="{{route('supplier.create')}}"style="color: white">Tambah Data</a></button>
            {{$supplier->links()}}
        </div>
        </div>
        </div>
    @endsection