@extends('layouts.aldylayout')
@section('content')




<form action="/partshop/inputdatapartshop" method="POST" enctype="multipart/form-data" style="max-width: 1000px; margin:auto;">
  @csrf
  <div style="height: 100px;"></div>
  <h1 class="h3 roboto text-center"> Input Partshop Baru</h1>
  <!-- Nama Partshop -->
  <div class="input-group" style="margin-bottom: 15px;">
    <span class="input-group-text">Nama Partshop</span>
    <input id="nama_partshop" type="form-control" class="form-control @error('nama_partshop') is-invalid @enderror" disabled name="nama_partshop" value="{{Auth::user()->name}}">
    <div class="invalid-feedback">
      @error('nama_partshop')
      <div class="alert alert-danger"> {{$message}}</div>
      @enderror
    </div>
  </div>
  <div class="input-group" style="margin-bottom: 15px;">
    <span class="input-group-text">Alamat</span>
    <input id="alamat" type="form-control" class="form-control @error('alamat') is-invalid @enderror" name="alamat">
    <div class="invalid-feedback">
      @error('alamat')
      <div class="alert alert-danger"> {{$message}}</div>
      @enderror
    </div>
  </div>
  <!-- No HP -->
  <div class="input-group" style="margin-bottom: 25px;">
    <span class="input-group-text">No HP</span>
    <input id="no_hp" type="form-control" class="form-control @error('no_hp') is-invalid @enderror" name="no_hp">
    <div class="invalid-feedback">
      @error('no_hp')
      <div class="alert alert-danger"> {{$message}}</div>
      @enderror
    </div>
  </div>
  <div class="input-group" style="margin-bottom: 25px;">
    <span class="input-group-text">Jenis Part yg di supply</span>
    <input id="jenis_partshop" type="form-control" class="form-control @error('jenis_partshop') is-invalid @enderror" name="jenis_partshop">
    <div class="invalid-feedback">
      @error('jenis_partshop')
      <div class="alert alert-danger"> {{$message}}</div>
      @enderror
    </div>
  </div>
  <div class="input-group">
    <button type="submit" class="btn btn-primary btn-sm">Submit</button>
  </div>

</form>




@endsection