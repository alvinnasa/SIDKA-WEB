@extends('nav.app')
 
@section('content')
<div id="layoutSidenav_content">
    <main>
    <div class="container-fluid px-4">
    <h1 class="mt-4">Data Pelayanan  </h1>
            
    <div class="row">
        @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <p>{{ $message }}</p>
            </div>
        @endif 
    <div class="card-header">      
    <i class="fas fa-user"></i>
    Data Pelayanan
    <a class="btn btn-success" href="{{ route('pelayanan.create') }}"> ADD Pelayanan</a>
    </div>
   
    <table class="table">
        
    <thead class="thead-dark">
        <tr>
        <th>No</th>
        <th>Lembaga</th>
        <th>Pelayanan</th>
        <th>Keterangan</th>
        <th>Tanggal Pelayanan</th>
        <th>Korban</th>
        <th>Action</th>
        </tr>
    </thead>
        @foreach ($pelayanan as $pelayanan)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{$pelayanan->lembaga }}</td>
            <td>{{$pelayanan->pelayanan }}</td>
            <td>{{ $pelayanan->keterangan }}</td>
            <td>{{ $pelayanan->tgl_pelayanan }}</td>
            <td>{{ $pelayanan->nama_korban }}</td>

            <td>
            <form action="{{ route('pelayanan.destroy',$pelayanan->id_layanan) }}" method="POST">

                <a class="btn btn-primary" href="{{ route('pelayanan.edit',$pelayanan->id_layanan) }}">Edit</a>

                @csrf
                @method('DELETE')

                <button type="submit" class="btn btn-danger">Delete</button>
            </form>
            </td>
        </tr>
        @endforeach
    </table>

</div>
</main>
      @include('nav.footer')
</div>
@endsection