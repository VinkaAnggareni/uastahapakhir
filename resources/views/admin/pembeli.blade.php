@extends('layouts.tes')
@section('content')



            
<div class="panel">
       <div class="panel-body">
     <div class=col-lg-12>
     <h2>Daftar Pembeli</h2>

        <table class="table table-bordered">
        <thead>
            <tr><th>No</th><th>Id Pembeli</th><th>Nama Pembeli</th><th>Alamat</th><th>No Hp</th><th>Aksi</th></tr>
        </thead>
        <tbody>
            @foreach ($pembeli as $in=>$val )
                <tr><td>{{($in+1)}}</td><td>{{$val->id_pembeli}}</td><td>{{$val->nama_pembeli}}</td><td>{{$val->alamat}}</td><td>{{$val->no_hp}}</td>
                <td>
                    <a href="{{route('pembeli.edit',$val->id_pembeli)}}"><button  class="fa fa-pencil" style="color: green"></button></a>
                    <form action="{{route('pembeli.destroy',$val->id_pembeli)}}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit"><span class="fa fa-trash" style="color: red"></span></button>
                    </form>
                </td>
                </tr>

            @endforeach
        </tbody>
        </table>
        <button class= "btn btn-primary"><a href="{{route('pembeli.create')}}"style="color: white">Tambah Data</a></button>
        </div>
    </div>
</div>
@endsection

