@extends('layouts.aldylayout')


@section('content')

<div class="container" style="margin-top: 100px;">
  <div class="row">
    @if (session('pesan'))
    <h3>Data berhasil di Input</h3>
    @endif
    <h1 style="margin-bottom: 30px;">
      Daftar Partshop AI PCJ
    </h1>
  </div>
  <div class="row">
    <table class="table">
      <thead>
        <tr>
          <th scope="col">No</th>
          <th scope="col">Dealer in charge</th>
          <th scope="col">Nama Partshop</th>
          <th scope="col">Alamat</th>
          <th scope="col">No HP</th>
          <th scope="col"> Jenis Partshop</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($partshops as $data)
        <tr>

          <th scope="row">1</th>
          <td>{{$data->dealer}}</td>
          <td>{{$data->nama_partshop}}</td>
          <td>{{$data->alamat}} </td>
          <td>{{$data->no_hp}}</td>
          <td>{{$data->jenis_partshop}}</td>


        </tr>
        @endforeach

      </tbody>
    </table>
  </div>
</div>

@endsection