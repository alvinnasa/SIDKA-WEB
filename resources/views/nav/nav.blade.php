        
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
                                <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                                Kasus Center
                            </a>
                            <a class="nav-link" href="{{ url('korban') }}">
                                <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                                Korban Center
                            </a>
                            <a class="nav-link" href="{{ url('pelaku') }}">
                                <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                                Pelaku Center
                            </a>
                            <a class="nav-link" href="{{url('pelayanan')}}">
                                <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                                Layanan Korban 
                            </a>
                            <a class="nav-link" href="{{url('add-user')}}">
                                <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                                ADD User
                            </a>
                        </div>
                    </div>
                    <div class="sb-sidenav-footer">
                        <div class="small">Logged in:</div>
                        {{@Auth::user()->name}}
                    </div>
                </nav>
            </div>
    