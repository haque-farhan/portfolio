@php
    $pages = [
        ['title' => 'home', 'link' => '/'],
        ['title' => 'portfolio', 'link' => '/portfolio'],
        ['title' => 'contact me', 'link' => '/contact'],
        ['title' => 'my cv', 'link' => '/cv',],
        ['title' => 'personal blog', 'link' => '/blog',],
    ];
@endphp

<div class="navbar navbar-expand-md sticky-top sidebar overflow-auto scrollbar">
    <div class="navbar-brand d-md-none">
        <div class="mb-2 fs-5 text-white px-2">
            <a href="mailto:rafi.ogchy@gmail.com" class="social-link mx-1">
                <i class="fas fa-envelope"></i>
            </a>
            <a target="_blank" href="https://www.linkedin.com/in/osman52/" class="social-link mx-1">
                <i class="fab fa-linkedin"></i>
            </a>
            <a target="_blank" href="https://github.com/Osman-Rafi" class="social-link mx-1">
                <i class="fab fa-github-square"></i>
            </a>
            <a target="_blank" href="https://www.facebook.com/osman.rafi140/" class="social-link mx-1">
                <i class="fab fa-facebook-square"></i>
            </a>
        </div>
    </div>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarCollapse">
        <i class="fas fa-bars"></i>
    </button>
    <div class="collapse navbar-collapse flex-column text-center " id="sidebarCollapse">
        <div class=" text-white mt-4 d-none d-md-block">
            <img src="{{url('/assets/images/farhan.jpg')}}" alt="profile picture"
                 style="width: 45%" class="img-fluid rounded-soft">
            <h4 class="mt-4 ">
               Ahsanul Haque Farhan
            </h4>
            <p class="fw-lighter">full-stack web developer</p>

            <div class="navbar-nav flex-column text-center mt-5 px-2">
                @foreach($pages as $page)
                    <li class="nav-item {{$loop->first ? "d-md-none ":""}}{{$loop->index === 3 ? "mt-3 ":""}}">
                        <a href="{{$page['link']}}"
                        class="sidebar-item nav-link text-uppercase pb-1">{{$page['title']}}</a>
                    </li>
                @endforeach
            </div>

            <div class="mt-5 fs-5 text-white px-2 d-none d-md-block">
                <p style="font-size: 10px;color: #ccc">GET IN TOUCH</p>
                <a href="mailto:rafi.ogchy@gmail.com" class="social-link mx-1">
                    <i class="fas fa-envelope"></i>
                </a>
                <a target="_blank" href="https://www.linkedin.com/in/osman52/" class="social-link mx-1">
                    <i class="fab fa-linkedin"></i>
                </a>
                <a target="_blank" href="https://github.com/Osman-Rafi" class="social-link mx-1">
                    <i class="fab fa-github-square"></i>
                </a>
                <a target="_blank" href="https://www.facebook.com/osman.rafi140/" class="social-link mx-1">
                    <i class="fab fa-facebook-square"></i>
                </a>
            </div>
        </div>
    </div>
</div>
