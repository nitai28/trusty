<header>
    @include('layouts.header.nav')
    <div class="page-container">
        <div class="main-container main-headline-container">
            @if (\Request::is('/'))

                <h1 class="head-line">ביטוח
                    <span>
                <img src="images/nav/Car.png" alt="Car.png"/>
            </span>רכב
                </h1>
            <p class="header-p"> על מנת שתוכל לנסוע על הכביש בלי דאגות תן לנו להתאים עבורך את הפוליסה הטובה ביותר עם
                כיסויים
                מקיפים במחירים
                מנצחים ממגוון סוכני הביטוח ושתהיה לכם נסיעה טובה

            </p>
            @elseif(Route::current()->getName()==='register')
                <h1 class="head-line">SignUp</h1>
            @elseif(Route::current()->getName()==='login')
                <h1 class="head-line">Login</h1>
            @endif
            <div class="headline-btn">
                <span>אשף המחיר</span>
            </div>

        </div>
    </div>
</header>