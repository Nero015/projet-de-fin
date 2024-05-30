<header>
        <div id="menu-bar" class="fas fa-bars" onclick="showmenu()"></div>
        <div class="logo"><img src="{{ asset('images/logo.jpg') }}" ></div>
        <div class="search-box">
            <from action="">
                <input type="text" name="search" id="srch" placeholder="Search...">
                <button type="submit"><i class="fas fa-search"></i></button>
            </from>
        </div>
        <nav class="navbar">
            <a href="{{ route('app.home') }}" class="h" id="n">home</a>
            <a href="{{ route('app.projects') }}">Projects</a>
            <a href="{{ route('app.ideas') }}">Ideas</a>
            <a href="{{ route('app.about') }}">About</a> 
            @guest
            <a href="{{ route('app.login') }}"> Login  </a>
            @endguest
            @auth
            <a href="{{ route('app.submittions') }}">Submitions</a>
            <a href="{{ route('app.proc.logout') }}">Logout</a>
            @endauth
        </nav>        
</header> 