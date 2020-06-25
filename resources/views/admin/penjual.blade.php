@extends('layouts.tes')
@section('content')



            
<div class="panel">
       <div class="panel-body">
     <div class=col-lg-12>
     <h2>Daftar Penjual</h2>

        <table class="table table-bordered">
        <thead>
            <tr><th>No</th><th>Id Penjual</th><th>Nama Penjual</th><th>Alamat</th><th>No Hp</th><th>Aksi</th></tr>
        </thead>
        <tbody>
            @foreach ($penjual as $in=>$val )
                <tr><td>{{($in+1)}}</td><td>{{$val->id_penjual}}</td><td>{{$val->nama_penjual}}</td><td>{{$val->alamat}}</td><td>{{$val->no_hp}}</td>
                <td>
                    <a href="{{route('penjual.edit',$val->id_penjual)}}"><button  > <span class="fa fa-pencil" style="color: green"></span></button></a>
                    <form action="{{route('penjual.destroy',$val->id_penjual)}}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button  type="submit"><span class="fa fa-trash" style="color: red"></span></button>
                    </form>
                </td>
                </tr>

            @endforeach
        </tbody>
        </table>
        <button class= "btn btn-primary"><a href="{{route('penjual.create')}}" style="color: white">Tambah Data</a></button>
        </div>
    </div> 
</div>
@endsection

