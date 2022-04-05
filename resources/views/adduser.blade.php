@extends('nav.app')
 
@section('content')
   
<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Tambah Pengguna</h1>
            <div class="row">
                <div class="col-xl">
                    <div class="card mb-4">
                            <div class="card-header">
                              <i class="fas fa-chart-area me-1"></i>
                                 Data Pengguna
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
        
                        <form method="post" action="{{ route('add-user.store') }}" id="myForm">
                            @csrf
                            <div class="form-group">
                                <label for="name">Nama</label>                    
                                <input type="text" name="name" class="form-control" id="name" aria-describedby="name" >                
                            </div>
                            <div class="form-group">
                                <label for="lembaga">Username</label>                    
                                <input type="text" name="username" class="form-control" id="email" aria-describedby="email" >                
                            </div>
                            <div class="form-group">
                                <label for="lembaga">Email</label>                    
                                <input type="email" name="email" class="form-control" id="email" aria-describedby="email" >                
                            </div>
                            <div class="form-group">
                                <label for="lembaga">Password</label>                    
                                <input type="text" name="password" class="form-control" id="email" aria-describedby="email" >                
                            </div>
      
                            <div class="form-group">
                                <label for="lembaga">Level</label> 
                                <select class="form-control" name="level">
                                <option disable value>Pilih Level</option>                
                                <option value="admin">Admin</option>
                                <option value="editor">User</option>        
                                </select>           
                            </div>
                            </br>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>  
            </div>
            <table class="table">
        
    <thead class="thead-dark">
        <tr>
        <th>No</th>
        <th>Nama</th>
        <th>Username</th>
        <th>Email</th>
        <th>Level</th>
        <th>Action</th>
        </tr>
    </thead>
    @foreach ($useradmin as $user)
        <tr>
            <td>{{$user->id}}</td>
            <td>{{$user->name}}</td>
            <td>{{$user->username}}</td>
            <td>{{$user->email}}</td>
            <td>{{$user->level}}</td>
            <td>
            <form action="" method="POST">

                <a class="btn btn-primary" href="">Edit</a>

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