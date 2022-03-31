@extends('nav.app')
  
@section('content')
   
<div id="layoutSidenav_content">
    <main>
    <div class="container-fluid px-4">
    <h1 class="mt-4">Edit Data </h1>
            
    <div class="row">
    <div class="col-xl">
    <div class="card mb-4">
            <div class="card-header">
            Edit Data
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
            <form method="post" action="{{ route('pelayanan.update', $pelayanan->id_layanan) }}" id="myForm">
            @csrf
            @method('PUT')
            <div class="form-group">
                                <label for="name">Lembaga</label>                    
                                <input type="text" name="lembaga" value="{{ $pelayanan->lembaga }}" class="form-control" id="name" aria-describedby="name" >                
                            </div>
                            <div class="form-group">
                                <label for="lembaga">Pelayanan</label>                    
                                <input type="text" name="pelayanan" value="{{ $pelayanan->pelayanan}}" class="form-control" id="email" aria-describedby="email" >                
                            </div>
                            <div class="form-group">
                                <label for="lembaga">keterangan</label>                    
                                <input type="text" name="keterangan" value="{{ $pelayanan->keterangan }}"class="form-control" id="email" aria-describedby="email" >                
                            </div>
                            <div class="form-group">
                                <label for="lembaga">Tanggal Pelayanan</label>                    
                                <input type="date" name="tgl_pelayanan"value="{{ $pelayanan->tgl_pelayanan}}" class="form-control" id="email" aria-describedby="email" >                
                            </div>
                            <div class="form-group">
                                <label for="lembaga">Kasus</label> 
                                <select class="form-control" name="id_korban"value="{{ $pelayanan->id_korban }}">
                                                
                                @foreach ($idkor as $idkor)
                                <option value="{{$idkor->id_korban}}">{{$idkor->nama_korban}}</option>        
                             
                                @endforeach     
                                </select>           
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