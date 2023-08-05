<header class="header_area">
    <div class="main_menu">
        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <a class="navbar-brand logo_h" href="{{url('/')}}"><img src="{{asset("assets/img/logo.png")}}" alt=""></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                 aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
                    <ul class="nav navbar-nav menu_nav justify-content-end">
                        <li class="nav-item active"><a class="nav-link" href="{{url("/")}}">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{url("/about")}}">About</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{url("/resume")}}">Resume</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{url("/project")}}">Projects</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{url("/contact")}}">Contact</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
</header>