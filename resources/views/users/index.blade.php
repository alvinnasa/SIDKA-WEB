@extends('nav.app')
 
@section('content')
<div id="layoutSidenav_content">
    <main>
    <div class="container-fluid px-4">
    <h1 class="mt-4">Data Kasus  </h1>
            
    <div class="row">
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif 
    <div class="card-header">      
    <i class="fas fa-user"></i>
    Data
    <a class="btn btn-success" href="{{ route('kasus.create') }}"> Tambah Kasus Baru</a>
    </div>
   
    <table class="table">
        
    <thead class="thead-dark">
        <tr>
            <th>No</th>
            <th>ID Kasus</th>
            <th>Jenis Kasus</th>
            <th>Lembaga</th>
            <th>Tanggal Laporan</th>
            <th width="280px">Action</th>
        </tr>
    </thead>
        @foreach ($users as $user)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $user->id }}</td>
            <td>{{ $user->name }}</td>
            <td>{{ $user->lembaga }}</td>
            <td>{{ $user->tgl_laporan }}</td>
            <td>
                <form action="{{ route('kasus.destroy',$user->id) }}" method="POST">
   
                    <a class="btn btn-info" href="{{ route('kasus.show',$user->id) }}">Show</a>
    
                    <a class="btn btn-primary" href="{{ route('kasus.edit',$user->id) }}">Edit</a>
   
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