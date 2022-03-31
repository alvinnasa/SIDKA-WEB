@extends('nav.app')
 
@section('content')
   
<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Input Pelaku</h1>
            <div class="row">
                <div class="col-xl">
                    <div class="card mb-4">
                            <div class="card-header">
                              <i class="fas fa-chart-area me-1"></i>
                                 Add Pelaku
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
        
                        <form method="post" action="{{ route('pelayanan.store') }}" id="myForm">
                            @csrf
                            <div class="form-group">
                                <label for="name">Lembaga</label>                    
                                <input type="text" name="lembaga" class="form-control" id="name" aria-describedby="name" >                
                            </div>
                            <div class="form-group">
                                <label for="lembaga">Pelayanan</label>                    
                                <input type="text" name="pelayanan" class="form-control" id="email" aria-describedby="email" >                
                            </div>
                            <div class="form-group">
                                <label for="lembaga">Keterangan</label>                    
                                <input type="text" name="keterangan" class="form-control" id="email" aria-describedby="email" >                
                            </div>
                            <div class="form-group">
                                <label for="lembaga">Tanggal Pelayanan</label>                    
                                <input type="date" name="tgl_pelayanan" class="form-control" id="email" aria-describedby="email" >                
                            </div>
                       
                            <div class="form-group">
                                <label for="lembaga">Korban</label> 
                                <select class="form-control" name="id_korban">
                                <option disable value>Pilih Korban</option>                
                                @foreach ($idk as $idk)
                                
                                <option value="{{$idk->id_korban}}">{{$idk->nama_korban}}</option>        
                             
                                @endforeach     
                                </select>           
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