<nav>
    <div class="page-container">
        <div class="nav-bar">

            <div class="nav-search">
                <div class="nav-logo"><span class="logo-content">Compie</span></div>
                <select class="nav-select">
                    <option value="">ביטוח דירה</option>
                </select>
                <!--<img src="src/images/nav/12.png" alt="home-insurance">-->
                <img class="sep" src="images/nav/sep.png" alt="separet">
                <img src="images/nav/search.png" class="search-ins" alt="search-ins">
            </div>

            <div class="contact-link">

                @if(Auth::check())
                    <a class="connection-link" href="#">{{Auth::user()->name}} מחובר</a>
                    <a class="connection-link" href="/logout">התנתק</a>
                @endif
                @if(!Auth::check())
                    <a class="connection-link" href="/login">התחבר</a>
                    <a class="connection-link" href="/register">הרשם לאתר</a>
                @endif

                <img class="message-ico" src="images/nav/message.png" alt="message">
                <img src="images/nav/sep.png" alt="separet">
                <img class="hum-ico" src="images/nav/Rounded.png" alt="Rounded">
            </div>

        </div>
        <div class="nav-bar-mobile">
            <div class="hamburger">
                <img src="images/nav/hamb.png" alt="hamburger">
            </div>
            <div class="nav-logo "><span class="logo-content">.trusty</span></div>
        </div>
    </div>
</nav>
