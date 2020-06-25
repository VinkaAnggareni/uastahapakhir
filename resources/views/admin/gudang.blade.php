@extends('layouts.tes')
@section('content')

            
<div class="panel">
       <div class="panel-body">
     <div class=col-lg-12>
     <h2>Daftar Gudang</h2>

        <table class="table table-bordered">
        <thead>
            <tr><th>No</th><th>Kode Gudang</th><th>Alamat Gudang</th><th>Aksi</th></tr>
        </thead>
        <tbody>
            @foreach ($gudang as $in=>$val )
                <tr><td>{{($in+1)}}</td><td>{{$val->kode_gudang}}</td><td>{{$val->alamat_gudang}}</td>
                <td>
                    <a href="{{route('gudang.edit',$val->id_gudang)}}"><button  class="fa fa-pencil" style="color: green"></button></a>
                    <form action="{{route('gudang.destroy',$val->id_gudang)}}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit"><span class="fa fa-trash" style="color: red"></span></button>
                    </form>
                </td>
                </tr>

            @endforeach
        </tbody>
        </table>
        <button class= "btn btn-primary"><a href="{{route('gudang.create')}}"style="color: white">Tambah Data</a></button>
        </div>
    </div>
</div>
@endsection

