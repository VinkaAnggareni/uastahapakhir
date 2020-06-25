@extends('layouts.tes')
@section('content')

<div class="panel">
     <form class="form-horizontal" action="{{(isset($penjualan))?route('penjualan.update',$penjualan->id_penjualan):route('penjualan.store')}}" method="POST">
       @csrf
       @if(isset($penjualan))?@method('PUT')@endif
       <div class="panel-body">
       <h3>Input Penjualan</h3>

       

         <div class="form-group">
              <label class="col-sm-2 control-label text-right">Tanggal Penjualan</label>
              <div class="col-sm-10">
              <input type="text" value="{{(isset($penjualan))?$penjualan->tanggal_penjualan:old('tanggal_penjualan')}}" name="tanggal_penjualan" class="form-control"></div>
              @error('tanggal_penjualan')<small style="color:red">{{$message}}</small>@enderror
         </div>
         
         <div class="form-group">
              <label class="col-sm-2 control-label text-right">Jenis Pembayaran</label>
              <div class="col-sm-10">
              <input type="text" value="{{(isset($penjualan))?$penjualan->jenis_pembayaran:old('jenis_pembayaran')}}" name="jenis_pembayaran" class="form-control"></div>
              @error('jenis_pembayaran')<small style="color:red">{{$message}}</small>@enderror
         </div>

         <div class="form-group">
              <label class="col-sm-2 control-label text-right">Id Penjual</label>
              <div class="col-sm-10">
              <select name="id_penjual" id="id_penjual" class="form-control">
              <option value="" selected disabled>--Pilih--</option>
                        @foreach($pilihan as $penjual)
                        <option value="{{$penjual->id_penjual}}">{{$penjual->id_penjual}}</option>
                        @endforeach
                </select></div>
              @error('id_penjual')<small style="color:red">{{$message}}</small>@enderror
         </div>
         <div class="form-group">
              <label class="col-sm-2 control-label text-right">Id Pembeli</label>
              <div class="col-sm-10">
              <select name="id_pembeli" id="id_pembeli" class="form-control">
              <option value="" selected disabled>--Pilih--</option>
                        @foreach($pilih as $pembeli)
                        <option value="{{$pembeli->id_pembeli}}">{{$pembeli->id_pembeli}}</option>
                        @endforeach
                </select></div>
              @error('id_pembeli')<small style="color:red">{{$message}}</small>@enderror
         </div>

         <div class="form-class">
         <button class= "btn btn-success" type="submit" style="color: white">SIMPAN</button>
         </div>

       </div>
       </form>
    </div>
@endsection

