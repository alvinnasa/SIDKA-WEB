@extends('nav.app')
 
@section('content')
<div id="layoutSidenav_content">
<main>

    <div class="container-fluid px-4">
        <h1 class="mt-4">Detail Korban</h1>
      <div class="row">
          <div class="col-xl">
             <div class="card">
                 <div class="card-header">
                    Korban
                    </div>
                        <div class="card-body">
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item"><b>ID Korban: </b>{{ $korban->id_korban }}</li>
                                <li class="list-group-item"><b>Lembaga: </b>{{ $korban->nama_korban }}</li>
                                <li class="list-group-item"><b>Tanggal Laporan: </b>{{ $korban->alamat }}</li>
                                <li class="list-group-item"><b>Tanggal Laporan: </b>{{ $korban->kecamatan }}</li>
                                <li class="list-group-item"><b>Tanggal Laporan: </b>{{ $korban->kabupaten }}</li>
                                <li class="list-group-item"><b>Tanggal Laporan: </b>{{ $korban->tgl_lahir }}</li>
                                <li class="list-group-item"><b>Tanggal Laporan: </b>{{ $korban->umur }}</li>
                                <li class="list-group-item"><b>Tanggal Laporan: </b>{{ $korban->hubungan }}</li>
                                <li class="list-group-item"><b>Tanggal Laporan: </b>{{ $korban->jenis_kelamin }}</li>
                            </ul>
                       </div>
                 <div class="card-header">
                     Pelayanan
                 </div>
                     <div class="card-body">
                        <table class="table table-bordered">
                            <tr>
                                <th>No</th>
                                <th>Lembaga</th>
                                <th>Pelayanan</th>
                                <th>Keterangan</th>
                                <th>Tanggal Pelayanan</th>
                            </tr>
                            @foreach ($pelayanan as $pelayanan)
                            <tr>
                                <td>{{ ++$i}}</td>
                                <td>{{ $pelayanan->lembaga}}</td>
                                <td>{{ $pelayanan->pelayanan }}</td>
                                <td>{{ $pelayanan->keterangan }}</td>
                                <td>{{ $pelayanan->tgl_pelayanan }}</td>
                            </tr>
                            @endforeach
                         </table>
                     </div>
                 </div>      
            <a class="btn btn-success mt-3" href="{{ route('kasus.index') }}">Kembali</a>
        </div>
   
</div>
</main>
    @include('nav.footer')
</div>
@endsection