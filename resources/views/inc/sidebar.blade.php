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
                        <a href="/scllogin">School Representative</a>
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

<!--Import jQuery before materialize.js-->
<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/js/materialize.min.js"></script>

    <script>
       $(".button-collapse").sideNav();

        // Init Slider
        $('.slider').slider();
    </script>