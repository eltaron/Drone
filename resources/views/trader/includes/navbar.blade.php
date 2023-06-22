<div class="wrapper">
    <div class="sidebar" data-image="{{asset('admin_files')}}/img/1.jpg">
        <div class="sidebar-wrapper">
            <div class="logo">
                <a href="{{url('web_files')}}" class="simple-text">
                    <img src="{{asset('admin_files')}}/img/logow.png" class="img-fluid" width="60%" alt="">
                </a>
            </div>
            <ul class="nav">
                <li class="nav-item {{ Request::is('/') ? 'active' : '' }}">
                    <a class="nav-link" href="{{url('trader/')}}">
                        <i class="nc-icon nc-chart-pie-35"></i>
                        <p>Home</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('trader/articles') ? 'active' : '' }}" href="{{url('trader/articles')}}">
                        <i class="nc-icon nc-paper-2"></i>
                        <p>Articles</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{url('trader/followers')}}">
                        <i class="nc-icon nc-favourite-28"></i>
                        <p>Followers</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{url('trader/products')}}">
                        <i class="nc-icon nc-grid-45"></i>
                        <p>Products</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{url('trader/offers')}}">
                        <i class="nc-icon nc-grid-45"></i>
                        <p>Offers</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{url('trader/offers')}}">
                        <i class="nc-icon nc-grid-45"></i>
                        <p>Specialists</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{url('trader/wallets')}}">
                        <i class="nc-icon nc-credit-card"></i>
                        <p>Returneds</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{url('trader/orders')}}">
                        <i class="nc-icon nc-delivery-fast"></i>
                        <p>Orders</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{url('trader/wallets')}}">
                        <i class="nc-icon nc-credit-card"></i>
                        <p>Wallets</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{url('trader/profile')}}">
                        <i class="nc-icon nc-badge"></i>
                        <p>Edit Profile</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{url('trader/wallets')}}">
                        <i class="nc-icon nc-credit-card"></i>
                        <p>Complaints</p>
                    </a>
                </li>
            </ul>
        </div>
    </div>
