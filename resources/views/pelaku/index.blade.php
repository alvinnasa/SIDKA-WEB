@extends('nav.app')
 
@section('content')
<div id="layoutSidenav_content">
    <main>
    <div class="container-fluid px-4">
    <h1 class="mt-4">Data Pelaku  </h1>
            
    <div class="row">
        @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <p>{{ $message }}</p>
            </div>
        @endif 
    <div class="card-header">      
    <i class="fas fa-user"></i>
    Data Korban
    <a class="btn btn-success" href="{{ route('pelaku.create') }}"> ADD Pelaku</a>
    </div>
   
    <table class="table">
        
    <thead class="thead-dark">
        <tr>
        <th>No</th>
        <th>ID Pelaku</th>
        <th>Nama Pelaku</th>
        <th>Kasus</th>
        <th>Alamat</th>
        </tr>
    </thead>
        @foreach ($pelaku as $pelaku)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $pelaku->id_pelaku }}</td>
            <td>{{$pelaku->nama_pelaku }}</td>
            <td>{{$pelaku->name}}</td>
            <td>{{ $pelaku->alamat }}</td>

            <td>
                <form action="{{ route('pelaku.destroy',$pelaku->id_pelaku) }}" method="POST">
   
                    <a class="btn btn-info" href="{{ route('pelaku.show',$pelaku->id_pelaku) }}">Show</a>
    
                    <a class="btn btn-primary" href="{{ route('pelaku.edit',$pelaku->id_pelaku) }}">Edit</a>
   
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