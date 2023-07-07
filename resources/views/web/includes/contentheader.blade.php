<div id="start"></div>
<header>
    <div class="row">
    <div class="col-4">
        <a href=""><img src="{{asset('web_files')}}/images/logow.png" class="logo" alt="logo" /></a>
    </div>
    <div class="col-4">
        <h1 class="title">{{$title ? $title : ''}}</h1>
    </div>
    <div class="menu-wrap col-4" dir="rtl">
        <svg
        class="ham hamRotate ham8"
        viewBox="0 0 100 100"
        onclick="this.classList.toggle('active')"
        >
        <path
            class="line top"
            d="m 30,33 h 40 c 3.722839,0 7.5,3.126468 7.5,8.578427 0,5.451959 -2.727029,8.421573 -7.5,8.421573 h -20"
        />
        <path class="line middle" d="m 30,50 h 40" />
        <path
            class="line bottom"
            d="m 70,67 h -40 c 0,0 -7.5,-0.802118 -7.5,-8.365747 0,-7.563629 7.5,-8.634253 7.5,-8.634253 h 20"
        />
        </svg>

        <div class="menu">
        <div>
            <div>
            <ul>
                <li><a href="" data-text="Home">Home</a></li>
                <li><a href="" data-text="Stores">Stores</a></li>
                <li><a href="" data-text="Articles">Articles</a></li>
                <li><a href="" data-text="Contact">Contact</a></li>
                <li><a href="" data-text="About">About</a></li>
            </ul>
            </div>
        </div>
        </div>
    </div>
    </div>
</header>
