        
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            
                            <a class="nav-link" href="{{ url('/') }}">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Dashboard
                            </a>
                            
                            <a class="nav-link" href="{{ url('kasus') }}">
                                <div class="sb-nav-link-icon"><i class="fas fa-gavel"></i></div>
                                Kasus Center
                            </a>
                            <a class="nav-link" href="{{ url('korban') }}">
                                <div class="sb-nav-link-icon"><i class="fas fa-bars"></i></div>
                                Korban Center
                            </a>
                            <a class="nav-link" href="{{ url('pelaku') }}">
                                <div class="sb-nav-link-icon"><i class="fas fa-bars"></i></div>
                                Pelaku Center
                            </a>
                            <a class="nav-link" href="{{url('pelayanan')}}">
                                <div class="sb-nav-link-icon"><i class="fas fa-bars"></i></div>
                                Layanan Korban 
                            </a>
                            <a class="nav-link" href="{{url('add-user')}}">
                                <div class="sb-nav-link-icon"><i class="fas fa-users"></i></div>
                                ADD User
                            </a>
                            <a class="nav-link" href="https://drive.google.com/drive/folders/1OeL8aMUC9h_kngBdEW9JwGLaHOQqH3Ef" target="_blank">
                                <div class="sb-nav-link-icon"><i class="fas fa-info"></i></div>
                                Panduan Aplikasi SIDKA
                            </a>
                        </div>
                    </div>
                    <div class="sb-sidenav-footer">
                        <div class="small">Logged in:</div>
                        {{@Auth::user()->name}}
                    </div>
                </nav>
            </div>
    