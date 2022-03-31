@extends('nav.app')
 
@section('content')
<div id="layoutSidenav_content">
    <main>

    <div class="container-fluid px-4">
    <h1 class="mt-4">Detail Kasus</h1>
    <div class="row">
    <div class="col-xl">
        <div class="card">
            <div class="card-header">
            Kasus
            </div>
            <div class="card-body">
                <ul class="list-group list-group-flush">
                    <li class="list-group-item"><b>Jenis Kasus: </b>{{$user->name}}</li>
                    <li class="list-group-item"><b>Lembaga: </b>{{$user->lembaga}}</li>
                    <li class="list-group-item"><b>Tanggal Laporan: </b>{{$user->tgl_laporan}}</li>
                </ul>
            </div>
            <div class="card-header">
              korban
            </div>
            <div class="card-body">
                <table class="table table-bordered">
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>alamat</th>
                        <th>kecamatan</th>
                        <th>kabupaten</th>
                        <th>Tanggal Lahir</th>
                        <th>Umur</th>
                        <th>Hubungan</th>
                        <th>Pendidikan</th>
                        <th>Jenis Kelamin</th>
                    </tr>
                    @foreach ($korban as $korban)
                    <tr>
                        <td>{{ $korban->id_korban }}</td>
                        <td>{{ $korban->nama_korban }}</td>
                        <td>{{ $korban->alamat }}</td>
                        <td>{{ $korban->kecamatan }}</td>
                        <td>{{ $korban->kabupaten }}</td>
                        <td>{{ $korban->tgl_lahir }}</td>
                        <td>{{ $korban->umur }}</td>
                        <td>{{ $korban->hubungan }}</td>
                        <td>{{ $korban->pendidikan }}</td>
                        <td>{{ $korban->jenis_kelamin }}</td>
                        
                    </tr>
                    @endforeach
                   
                    
                </table>
                
            </div>
            <div class="card-header">
              Pelaku
            </div>
            <div class="card-body">
                <table class="table table-bordered">
                    <tr>
                        <th>No</th>
                        <th>Name</th>
                        <th>alamat</th>
                        
                        
                    </tr>
                    @foreach ($pelaku as $pelaku)
                    <tr>
                        <td>{{ $pelaku->id_pelaku }}</td>
                        <td>{{ $pelaku->nama_pelaku }}</td>
                        <td>{{ $pelaku->alamat }}</td>
                        
                    </tr>
                    @endforeach
                </table>
            </div>
            
        </div>
        <a class="btn btn-success mt-3" href="{{ route('kasus.index') }}">Kembali</a>
</div>
    </div>
</div>
@include('nav.footer')
</main>
</div>
@endsection