@extends('nav.app')
  
@section('content')
   
<div id="layoutSidenav_content">
    <main>
    <div class="container-fluid px-4">
    <h1 class="mt-4">Data Korban  </h1>
            
    <div class="row">
    <div class="col-xl">
    <div class="card mb-4">
            <div class="card-header">
            Edit Pelaku
            </div>
            <div class="card-body">
                @if ($errors->any())
                <div class="alert alert-danger">
                    <strong>Whoops!</strong> There were some problems with your input.<br><br>
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <form method="post" action="{{ route('pelaku.update', $pelaku->id_pelaku) }}" id="myForm">
            @csrf
            @method('PUT')
            <div class="form-group">
                                <label for="name">Nama Korban</label>                    
                                <input type="text" name="nama_pelaku" value="{{ $pelaku->nama_pelaku}}" class="form-control" id="name" aria-describedby="name" >                
                            </div>
                            <div class="form-group">
                                <label for="lembaga">Alamat</label>                    
                                <input type="text" name="alamat" value="{{ $pelaku->alamat }}" class="form-control" id="email" aria-describedby="email" >                
                            </div></br>
                         
            <button type="submit" class="btn btn-primary">Submit</button>
            </form>
            </div>
</div>
</div>
        </div>
    </div>
</main>
@include('nav.footer')
</div>
@endsection