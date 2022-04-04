@extends('nav.app')
 
@section('content')
   
<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Input Korban</h1>
            <div class="row">
                <div class="col-xl">
                    <div class="card mb-4">
                            <div class="card-header">
                              <i class="fas fa-chart-area me-1"></i>
                                 Add Korban
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
        
                        <form method="post" action="{{ route('korban.store') }}" id="myForm">
                            @csrf
                            <div class="form-group">
                                <label for="name">Nama Korban</label>                    
                                <input type="text" name="nama_korban" class="form-control" id="name" aria-describedby="name" >                
                            </div>
                            <div class="form-group">
                                <label for="lembaga">Alamat</label>                    
                                <input type="text" name="alamat" class="form-control" id="email" aria-describedby="email" >                
                            </div>
                            <div class="form-group">
                                <label for="lembaga">Kecamatan</label>                    
                                <select name="kecamatan" class="form-control" id="email" >
                                <option disable value>Pilih Kecamatan</option>   
                                <option value="Adipala">Adipala</option>
                                <option value="Bantarsari">Bantarsari</option>
                                <option value="Binangun">Binangun</option>
                                <option value="Cilacap Selatan">Cilacap Selatan</option>
                                <option value="Cilacap Tengah">Cilacap Tengah</option>
                                <option value="Cilacap Utara">Cilacap Utara</option>
                                <option value="Cimanggu">Cimanggu</option>
                                <option value="Cipari">Cipari</option>
                                <option value="Dayeuhluhur">Dayeuhluhur</option>
                                <option value="Gandrungmangu">Gandrungmangu</option>
                                <option value="Jeruklegi">Jeruklegi</option>
                                <option value="Kampung Laut">Kampung Laut</option>
                                <option value="Karangpucung">Karangpucung</option>
                                <option value="Kawunganten">Kawunganten</option>
                                <option value="Kedungreja">Kedungreja</option>
                                <option value="Kesugihan">Kesugihan</option>
                                <option value="Kroya">Kroya</option>
                                <option value="Majenang">Majenang</option>
                                <option value="Maos">Maos</option>
                                <option value="Nusawungu">Nusawungu</option>
                                <option value="Patimuan">Patimuan</option>
                                <option value="Sampang">Sampang</option>
                                <option value="Sidareja">Sidareja</option>
                                <option value="Wanareja">Wanareja</option>  
                                </select>              
                            </div>
                            <div class="form-group">
                                <label for="lembaga">Kabupaten</label>                    
                                <input type="text" name="kabupaten" class="form-control" id="email" aria-describedby="email" >                
                            </div>
                            <div class="form-group">
                                <label for="tanggal">Tanggal Lahir</label>                    
                                <input type="date" name="tgl_lahir" class="form-control" id="password" aria-describedby="password" >                
                            </div>
                            <div class="form-group">
                                <label for="lembaga">Umur</label>                    
                                <input type="text" name="umur" class="form-control" id="email" aria-describedby="email" >                
                            </div>
                            <div class="form-group">
                                <label for="lembaga">Hubungan</label>                    
                                <input type="text" name="hubungan" class="form-control" id="email" aria-describedby="email" >                
                            </div>
                            <div class="form-group">
                                <label for="lembaga">Pendidikan</label>                    
                                <input type="text" name="pendidikan" class="form-control" id="email" aria-describedby="email" >                
                            </div>
                            <div class="form-group">
                                <label for="lembaga">Jenis Kelamin</label>                    
                                <select class="form-control" name="jenis_kelamin">
                                <option disable value>Pilih Jenis Kelamin</option>
                                <option value="Laki-Laki">Laki-Laki</option>
                                <option value="Perempuan">Perempuan</option>
                                </select>                
                            </div>
                            <div class="form-group">
                                <label for="lembaga">Kasus</label> 
                                <select class="form-control" name="id">
                                <option disable value>Pilih kasus</option>                
                                @foreach ($idkas as $idkas)
                                
                                <option value="{{$idkas->id}}">{{$idkas->name}}</option>        
                             
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