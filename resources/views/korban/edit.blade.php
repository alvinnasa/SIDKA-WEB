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
            Edit User
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
            <form method="post" action="{{ route('korban.update', $korban->id_korban) }}" id="myForm">
            @csrf
            @method('PUT')
            <div class="form-group">
                                <label for="name">Nama Korban</label>                    
                                <input type="text" name="nama_korban" value="{{ $korban->nama_korban }}" class="form-control" id="name" aria-describedby="name" >                
                            </div>
                            <div class="form-group">
                                <label for="lembaga">Alamat</label>                    
                                <input type="text" name="alamat" value="{{ $korban->alamat }}" class="form-control" id="email" aria-describedby="email" >                
                            </div>
                            <div class="form-group">
                                <label for="lembaga">Kecamatan</label>                    
                                <input type="text" name="kecamatan" value="{{ $korban->kecamatan }}"class="form-control" id="email" aria-describedby="email" >                
                            </div>
                            <div class="form-group">
                                <label for="lembaga">Kabupaten</label>                    
                                <input type="text" name="kabupaten"value="{{ $korban->kabupaten}}" class="form-control" id="email" aria-describedby="email" >                
                            </div>
                            <div class="form-group">
                                <label for="tanggal">Tanggal Lahir</label>                    
                                <input type="date" name="tgl_lahir" value="{{ $korban->tgl_lahir }}"class="form-control" id="password" aria-describedby="password" >                
                            </div>
                            <div class="form-group">
                                <label for="lembaga">Umur</label>                    
                                <input type="text" name="umur" value="{{ $korban->umur }}"class="form-control" id="email" aria-describedby="email" >                
                            </div>
                            <div class="form-group">
                                <label for="lembaga">Hubungan</label>                    
                                <input type="text" name="hubungan" value="{{ $korban->hubungan }}"class="form-control" id="email" aria-describedby="email" >                
                            </div>
                            <div class="form-group">
                                <label for="lembaga">Pendidikan</label>                    
                                <input type="text" name="pendidikan" value="{{ $korban->pendidikan }}"class="form-control" id="email" aria-describedby="email" >                
                            </div>
                            <div class="form-group">
                                <label for="lembaga">Jenis Kelamin</label>                    
                                <select class="form-control" name="jenis_kelamin">
                                <option selected="selected">{{ $korban->jenis_kelamin }}</option>
                                <option value="Laki-Laki">Laki-Laki</option>
                                <option value="Perempuan">Perempuan</option>
                                </select>                
                            </div>
                            <div class="form-group">
                                <label for="lembaga">Kasus</label> 
                                <select class="form-control" name="id"value="{{ $korban->id }}">
                                                
                                @foreach ($idkas as $idkas)
                                <option value="{{$idkas->id}}">{{$idkas->name}}</option>        
                             
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