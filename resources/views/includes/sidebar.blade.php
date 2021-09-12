@php
    $pages = [
        ['title' => 'Homepage', 'icon' => 'fas fa-home', 'link' => '/'],
        ['title' => 'Portfolio', 'icon' => 'fas fa-user', 'link' => 'portfolio'],
        ['title' => 'Contact me', 'icon' => 'fas fa-phone', 'link' => 'contact'],
        ['title' => 'My CV', 'icon' => 'fas fa-file', 'link' => 'cv',],
    ];
@endphp

<div class="navbar responsive-tab-navigation-padding sticky-top sidebar overflow-auto scrollbar">

     <div class="navbar-nav responsive-tab responsive-tab-navigation text-center w-100 d-md-none">
         <ul class="nav nav-pills nav-fill">
        @foreach($pages as $page)
            <li class="nav-item px-1">
                <a href="{{$page['link']}}"
                class="sidebar-item nav-link px-2 {{ request()->is($page['link']) ? 'active' : '' }} ">
                <span class="{{$page['icon']}}"></span>
                <span class="d-block"> {{$page['title']}}</span>
                </a>
            </li>
        @endforeach
         </ul>
    </div>
    {{-- <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarCollapse">
        <i class="fas fa-bars"></i>
    </button> --}}
    <div class="d-none d-md-block" id="sidebarCollapse">
        <div class="text-white mt-md-4 text-center">
            <div class="d-none d-md-block">
                <img src="{{url('/assets/images/farhan.jpg')}}" alt="profile picture" style="width: 45%" class="img-fluid rounded-soft">
                <h4 class="mt-4 ">
                    Ahsanul Haque Farhan
                </h4>
                <p class="fw-lighter">full-stack web developer</p>
            </div>

            <div class="navbar-nav flex-column text-center mt-md-5 px-2">
                @foreach($pages as $page)
                    <li class="nav-item {{$loop->index === 3 ? "mt-3 ":""}}">
                        <a href="{{$page['link']}}"
                        class="sidebar-item nav-link text-uppercase pb-1 {{ request()->is($page['link']) ? 'active' : '' }} ">{{$page['title']}}</a>
                    </li>
                @endforeach
            </div>

            <div class="mt-5 fs-5 text-white px-2 d-none d-md-block">
                <p style="font-size: 10px;color: #ccc">GET IN TOUCH</p>
                <a href="mailto:farhanhaque.lu@gmail.com" class="social-link mx-1">
                    <i class="fas fa-envelope"></i>
                </a>
                <a target="_blank" href="https://www.linkedin.com/in/ahsanul-haque-farhan-90052619b/" class="social-link mx-1">
                    <i class="fab fa-linkedin"></i>
                </a>
                <a target="_blank" href="https://github.com/haque-farhan" class="social-link mx-1">
                    <i class="fab fa-github-square"></i>
                </a>
                <a target="_blank" href="https://www.facebook.com/ahsanulf" class="social-link mx-1">
                    <i class="fab fa-facebook-square"></i>
                </a>
            </div>
        </div>
    </div>
</div>
