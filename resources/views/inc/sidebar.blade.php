@section('sidebar')
        <nav>
            <div class="nav-wrapper blue">
            <!-- SIDENAV -->
                <a href="#" class="brand-logo center">GSEB School Management</a>

                <ul id="slide-out" class="left side-nav">
                    <li>
                        <a href="..\add_school\addSchool.html">Register School</a>
                    </li>
                    <li>
                        <div class="divider"></div>
                    </li>
                    <li>
                        <a href="/scl/login">School Representative</a>
                    </li>
                    <li>
                        <div class="divider"></div>
                    </li>
                    <li>
                        <a href="..\govt_auth\login.php">Government Authority</a>
                    </li>
                    <li>
                        <div class="divider"></div>
                    </li>
                    @show
                </ul>
    
                <a href="#" data-activates="slide-out" class="button-collapse show-on-large">
                    <i class="material-icons">menu</i>
                </a>
                
            </div>
        </nav>
