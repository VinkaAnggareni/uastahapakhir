@extends('layouts.tes')
@section('content')

<div class="panel">
     <form class="form-horizontal"action="{{(isset($detailpenjualan))?route('detailpenjualan.update',$detailpenjualan->id_detailpenjualan):route('detailpenjualan.store')}}" method="POST">
       @csrf
       @if(isset($detailpenjualan))?@method('PUT')@endif
       <div class="panel-body">
       <h3>Input Detail Penjualan</h3>

       <div class="form-group">
              <label class="col-sm-2 control-label text-right">ID Barang</label>
              <div class="col-sm-10">
              <select name="id_barang" id="id_barang" class="form-control">
              <option value="" selected disabled>--Pilih--</option>
                        @foreach($pilih as $barang)
                        <option value="{{$barang->id_barang}}">{{$barang->id_barang}}</option>
                        @endforeach
                </select></div>
              @error('id_barang')<small style="color:red">{{$message}}</small>@enderror
         </div>

        
         
         <div class="form-group">
              <label class="col-sm-2 control-label text-right">Harga Satuan</label>
              <div class="col-sm-10">
              <input type="text" value="{{(isset($detailpenjualan))?$detailpenjualan->harga_satuan:old('harga_satuan')}}" name="harga_satuan" class="form-control"></div>
              @error('harga_satuan')<small style="color:red">{{$message}}</small>@enderror
         </div>
         <div class="form-group">
              <label class="col-sm-2 control-label text-right">Jumlah Penjualan</label>
              <div class="col-sm-10">
              <input type="text" value="{{(isset($detailpenjualan))?$detailpenjualan->jumlah_penjualan:old('jumlah_penjualan')}}" name="jumlah_penjualan" class="form-control"></div>
              @error('jumlah_penjualan')<small style="color:red">{{$message}}</small>@enderror
         </div>

         <div class="form-group">
              <label class="col-sm-2 control-label text-right">Total Harga</label>
              <div class="col-sm-10">
              <input type="text" value="{{(isset($detailpenjualan))?$detailpenjualan->total_harga:old('total_harga')}}" name="total_harga" class="form-control"></div>
              @error('id_penjual')<small style="color:red">{{$message}}</small>@enderror
         </div>
         
         <div class="form-group">
             <label class="col-sm-2 control-label text-right">ID Penjualan</label>
              <div class="col-sm-10"> 
              <select name="id_penjualan" id="id_penjualan" class="form-control">
                        <option value="" selected disabled>--Pilih--</option>
                        @foreach($pilihan as $penjualan)
                        <option value="{{$penjualan->id_penjualan}}">{{$penjualan->id_penjualan}}</option>
                        @endforeach
                </select></div>
              @error('id_penjualan')<small style="color:red">{{$message}}</small>@enderror
         </div>

         <div class="form-class">
            <button class= "btn btn-success" type="submit"style="color: white">SIMPAN</button> 
         </div>

       </div>
       </form>
    </div>
@endsection

