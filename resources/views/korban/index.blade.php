@extends('nav.app')
 
@section('content')
<div id="layoutSidenav_content">
    <main>
    <div class="container-fluid px-4">
    <h1 class="mt-4">Data Korban  </h1>
            
    <div class="row">
        @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <p>{{ $message }}</p>
            </div>
        @endif 
    <div class="card-header">      
    <i class="fas fa-user"></i>
    Data Korban
    <a class="btn btn-success" href="{{ route('korban.create') }}"> Tambah Korban</a>
    </div>
   
    <table class="table">
        
    <thead class="thead-dark">
        <tr>
        <th>No</th>
        <th>ID</th>
        <th>Kasus</th>
        <th>Name</th>
        <th>alamat</th>
        <th>kecamatan</th>
        <th>kabupaten</th>
        <th>Tanggal Lahir</th>
        <th>Umur</th>
        <th>Hubungan</th>
        <th>Pendidikan</th>
        <th>Jenis Kelamin</th>
        <th width="280px">Action</th>
        </tr>
    </thead>
        @foreach ($korban as $korban)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $korban->id_korban }}</td>
            <td>{{$korban->name }}</td>
            <td>{{ $korban->nama_korban }}</td>
            <td>{{ $korban->alamat }}</td>
            <td>{{ $korban->kecamatan }}</td>
            <td>{{ $korban->kabupaten }}</td>
            <td>{{ $korban->tgl_lahir }}</td>
            <td>{{ $korban->umur }}</td>
            <td>{{ $korban->hubungan }}</td>
            <td>{{ $korban->pendidikan }}</td>
            <td>{{ $korban->jenis_kelamin }}</td>

            <td>
                <form action="{{ route('korban.destroy',$korban->id_korban) }}" method="POST">
   
                    <a class="btn btn-info" href="{{ route('korban.show',$korban->id_korban) }}">Show</a>
    
                    <a class="btn btn-primary" href="{{ route('korban.edit',$korban->id_korban) }}">Edit</a>
   
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