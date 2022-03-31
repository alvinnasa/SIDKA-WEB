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
                    <li class="list-group-item"><b>ID pelaku: </b>{{ $pelaku->id_pelaku }}</li>
                    <li class="list-group-item"><b>Nama Pelaku: </b>{{ $pelaku->nama_pelaku }}</li>
                    <li class="list-group-item"><b>Alamat: </b>{{ $pelaku->alamat }}</li>
                </ul>
            </div>
            
            </div>
            
            <a class="btn btn-success mt-3" href="{{ route('kasus.index') }}">Kembali</a>
        </div>
</div>
    </div>
    </div>
</div>
@include('nav.footer')
</main>
</div>
@endsection