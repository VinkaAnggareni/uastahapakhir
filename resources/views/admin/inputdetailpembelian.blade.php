@extends('layouts.tes')
@section('content')
<div class="panel">
<form class="form-horizontal" action="{{(isset($detailpembelian))?route('detailpembelian.update',$detailpembelian->id_detail_pembelian):route('detailpembelian.store')}}" method="POST">
@csrf
@if(isset($detailpembelian))?@method('PUT')@endif
     <div class="panel-body">
          <h1> Input Detail Pembelian</h1>
          
          
          <div class="form-group">
                <label class="col-sm-2 control-label text-right">Id Barang</label><div class="col-sm-10">
                <select name="id_barang" id="id_barang" class="form-control">
              <option value="" selected disabled>--Pilih--</option>
                        @foreach($pilihan as $barang)
                        <option value="{{$barang->id_barang}}">{{$barang->id_barang}}</option>
                        @endforeach
                </select>
                </div>
                
                 @error('id_barang')<small style="color :red">{{$message}}</small>@enderror
                 </div>
                
                <div class="form-group"><label class="col-sm-2 control-label text-right">Harga Satuan</label>
                <div class="col-sm-10"><input type="text" value="{{(isset($detailpembelian))?$detailpembelian->harga_satuan:old('harga_satuan')}}" name="harga_satuan" class="form-control"></div>
                @error('harga_satuan')<small style="color:red">{{$message}}</small>@enderror
                </div>
                <div class="form-group"><label class="col-sm-2 control-label text-right">Jumlah Pembelian</label>
                <div class="col-sm-10"><input type="text" value="{{(isset($detailpembelian))?$detailpembelian->jumlah_pembelian:old('jumlah_pembelian')}}" name="jumlah_pembelian" class="form-control"></div>
                @error('jumlah_pembelian')<small style="color:red">{{$message}}</small>@enderror
                </div>
               <div class="form-group"><label class="col-sm-2 control-label text-right">Total Harga</label>
                   <div class="col-sm-10"><input type="text"  value="{{(isset($detailpembelian))?$detailpembelian->total_harga:old('total_harga')}}" name="total_harga" class="form-control"></div>
                </div>
                @error('total_harga')<small style="color :red">{{$message}}</small>@enderror
                
                 <div class="form-group"><label class="col-sm-2 control-label text-right">Id Pembelian</label>
                 <div class="col-sm-10">
                 <select name="id_pembelian" id="id_pembelian" class="form-control">
                        <option value="" selected disabled>--Pilih--</option>
                        @foreach($pilih as $pembelian)
                        <option value="{{$pembelian->id_pembelian}}">{{$pembelian->id_pembelian}}</option>
                        @endforeach
                </select></div>
                 
                 @error('id_pembelian')<small style="color :red">{{$message}}</small>@enderror
                 </div>
                <div class="form-class">
                    <button class= "btn btn-success" type="submit"style="color: white">SIMPAN</button>
                </div>

    </div>
    </form>
    </div>
    @endsection