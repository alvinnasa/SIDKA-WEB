@extends('nav.app')
 
@section('content')
   
<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Input Kasus</h1>
            <div class="row">
                <div class="col-xl">
                    <div class="card mb-4">
                            <div class="card-header">
                              <i class="fas fa-chart-area me-1"></i>
                                 Add User
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
        
                        <form method="post" action="{{ route('kasus.store') }}" id="myForm">
                            @csrf
                            <div class="form-group">
                                <label for="name">Jenis Kasus</label>                    
                                <input type="text" name="name" class="form-control" id="name" aria-describedby="name" >                
                            </div>
                            <div class="form-group">
                                <label for="lembaga">Lembaga</label>                    
                                <input type="text" name="lembaga" class="form-control" id="email" aria-describedby="email" >                
                            </div>
                            <div class="form-group">
                                <label for="tanggal">Tanggal</label>                    
                                <input type="date" name="tgl_laporan" class="form-control" id="password" aria-describedby="password" >                
                            </div>
                            </br>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>  
            </div>
        </div>
    </main>
    @include('nav.footer')
</div>
   
@endsection