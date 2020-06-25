@extends('layouts.tes')
@section('content')
<div class="panel">
<form class="form-horizontal" action="{{(isset($pembelian))?route('pembelian.update',$pembelian->id_pembelian):route('pembelian.store')}}" method="POST">
@csrf
@if(isset($pembelian))?@method('PUT')@endif
     <div class="panel-body">
          <h1> Input Pembelian</h1>
          
                
                <div class="form-group"><label class="col-sm-2 control-label text-right">Tanggal Pembelian</label>
                <div class="col-sm-10"><input type="text" value="{{(isset($pembelian))?$pembelian->tanggal_pembelian:old('tanggal_pembelian')}}" name="tanggal_pembelian" class="form-control"></div>
                @error('tanggal_pembelian')<small style="color:red">{{$message}}</small>@enderror
                </div>
                <div class="form-group"><label class="col-sm-2 control-label text-right">Tanggal Terima</label>
                <div class="col-sm-10"><input type="text" value="{{(isset($pembelian))?$pembelian->tanggal_terima:old('tanggal_terima')}}" name="tanggal_terima" class="form-control"></div>
                @error('tanggal_terima')<small style="color:red">{{$message}}</small>@enderror
                </div>
               <div class="form-group"><label class="col-sm-2 control-label text-right">ID Supplier</label>
                   <div class="col-sm-10"><select name="id_supplier" id="id_supplier" class="form-control">
                        <option value="" selected disabled>--Pilih--</option>
                        @foreach($pilihan as $supplier)
                        <option value="{{$supplier->id_supplier}}">{{$supplier->id_supplier}}</option>
                        @endforeach
                </select></div>
                </div>
                
                
                <div class="form-class">
                <button class= "btn btn-success" type="submit" style="color: white">SIMPAN</button>
                </div>

    </div>
    </form>
    </div>
    @endsection
