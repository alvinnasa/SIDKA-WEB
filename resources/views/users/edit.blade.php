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
            Edit kasus
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
            <form method="post" action="{{ route('kasus.update', $user->id) }}" id="myForm">
            @csrf
            @method('PUT')
                <div class="form-group">
                    <label for="name">Jenis Kasus</label>                    
                    <input type="text" name="name" class="form-control" id="name" value="{{ $user->name }}" aria-describedby="name" >                
                </div>
                <div class="form-group">
                    <label for="email">Lembaga</label>                    
                    <input type="text" name="email" class="form-control" id="email" value="{{ $user->lembaga }}" aria-describedby="email" >                
                </div>
                <div class="form-group">
                    <label for="writer">Tanggal Laporan</label>                    
                    <input type="date" name="password" class="form-control" id="password" value="{{ $user->tgl_laporan }}" aria-describedby="password" >                
                </div>
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