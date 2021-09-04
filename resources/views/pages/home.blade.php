@extends('layouts.default')
@section('title')
    <title>Ahsanul Haque Farhan - Full-Stack Developer</title>
@endsection

@php
        $frontendSkills = [
        [
               "title" => "Vue js",
               "link" => "https://vuejs.org/",
               "description" => "Vue.js is an open-source model–view–viewmodel front end JavaScript framework for building user interfaces and single-page applications. ",
               "image" => "https://vuejs.org/images/logo.svg",
        ],
        [
               "title" => "React js",
               "link" => "https://reactjs.org/",
               "description" => "React is a JavaScript library for building user interfaces.Learn Once, Write Anywhere.React can also render on the server using Node and power mobile apps using React Native.",
               "image" => "data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZpZXdCb3g9Ii0xMS41IC0xMC4yMzE3NCAyMyAyMC40NjM0OCI+CiAgPHRpdGxlPlJlYWN0IExvZ288L3RpdGxlPgogIDxjaXJjbGUgY3g9IjAiIGN5PSIwIiByPSIyLjA1IiBmaWxsPSIjNjFkYWZiIi8+CiAgPGcgc3Ryb2tlPSIjNjFkYWZiIiBzdHJva2Utd2lkdGg9IjEiIGZpbGw9Im5vbmUiPgogICAgPGVsbGlwc2Ugcng9IjExIiByeT0iNC4yIi8+CiAgICA8ZWxsaXBzZSByeD0iMTEiIHJ5PSI0LjIiIHRyYW5zZm9ybT0icm90YXRlKDYwKSIvPgogICAgPGVsbGlwc2Ugcng9IjExIiByeT0iNC4yIiB0cmFuc2Zvcm09InJvdGF0ZSgxMjApIi8+CiAgPC9nPgo8L3N2Zz4K",
        ],
        [
               "title" => "Bootstrap",
               "link" => "https://getbootstrap.com/",
               "description" => "Bootstrap is the CSS Framework.It contains CSS- and JavaScript-based design templates.",
               "image" => "https://upload.wikimedia.org/wikipedia/commons/b/b2/Bootstrap_logo.svg",
        ],
    ];

    $backendSkills = [
        [
               "title" => "Laravel",
               "link" => "https://laravel.com/",
               "description" => "Laravel is a web application framework with expressive, elegant syntax. It provides a structure and starting point for creating your application.",
               "image" => "https://laravel.com/img/logomark.min.svg",
        ],
        [
               "title" => "CodeIgniter",
               "link" => "https://codeigniter.com/",
               "description" => "CodeIgniter is a powerful PHP framework with a very small footprint, built for developers who need a simple and elegant toolkit to create full-featured web applications.",
               "image" => "https://codeigniter.com/assets/images/ci-logo-big.png",
        ],
         [
               "title" => "MySQL",
               "link" => "https://www.mysql.com/",
               "description" => "MySQL is an open-source relational database management system.",
               "image" => "https://upload.wikimedia.org/wikipedia/commons/b/b2/Database-mysql.svg",
        ],
    ];

    $projects = [
        [
            'image' => '/assets/images/smartcollege_full.png',
            'title' => 'SLMS - Smart College Automation',
            'link' => 'https://demo.smartcollegebd.com/',
            'description' => 'Paperless college management system.A simple way to schedule class, assessment, and measure performance.'
        ],
        [
            'image' => '/assets/images/gradnet_full.png',
            'title' => 'Gradnet - Graduate Network',
            'link' => 'https://demo.gradnet.xyz/',
            'description' => 'It\'s a solutions for the Educational Technology & Community Network - to engage the alumni & community members'
        ],
        [
            'image' => '/assets/images/cats-full.png',
            'title' => 'CATS-MIST (CE)',
            'link' => 'https://ce-cats.mist.ac.bd/',
            'description' => 'Automation of CRTC Labratories Management'
        ],
        [
            'image' => '/assets/images/falcon_full.png',
            'title' => 'Falcon – Admin Dashboard & WebApp Template',
            'link' => 'https://falcon.technext.it/dashboard-alt',
            'description' => 'Most popular Admin Dashboard template in Bootstrap Marketplace'
        ],
        [
            'image' => '/assets/images/journal.png',
            'title' => 'Smart Journal Automation',
            'link' => 'https://journals.sust.edu/sustjst/',
            'description' => 'Smart journal is a research related management system where author can post their articles and editors can approve or reject the articles. It has strong module like articles, editions, users and site managements.'
        ]
    ];
@endphp

@section('content')
    <div class="main-content mt-5">
        <div class="container">
              <div>
                <div class="d-md-none text-center mb-5">
                    <img src="{{url('/assets/images/farhan.jpg')}}" alt="profile picture" style="width: 25%" class="img-fluid rounded-soft">
                    <h5 class="mt-3 font-weight-semi-bold">
                    Ahsanul Haque Farhan
                    </h5>
                    <p class="fw-lighter">full-stack web developer</p>
                </div>
                <div class="introduction text-center text-md-left">
                    <h1 class="heading-underline heading-underline-2 text-900">Hey <span class="text-main">there!</span> </h1>
                    <p class="mt-2 text-justify fs-md-0 fs--1">
                        I'm a full-stack developer specialised in frontend and backend development for complex scalable web apps and websites.
                        I have worked with various technologies most of them are based on <span class="fw-bold">PHP</span> and <span class="fw-bold">Javascript.</span>
                         I have <span class="fw-bold">maintained, developed and launched</span> multiple
                        projects
                        from scratch, carrying the development of it's
                        <span class="fw-bold">back-end</span> and <span class="fw-bold">front-end</span> codebases.
                    </p>
                </div>
                <div class="skills mt-md-6 mt-5">
                    <div class="text-center text-md-left">
                        <h1 class="heading-underline heading-underline-2 text-900">Skills <span class="text-main">Overview</span> </h1>
                        <p class="mt-2 text-justify fs-md-0 fs--1 text-center text-md-left">
                            Below is a quick overview of my main technical skill sets and tools I use.
                        </p>
                    </div>
                    <div class="row justify-content-between mt-5">
                        <div class="col-md-6">
                            <span class="badge badge-soft-dark px-4 py-2 fs-0 mb-4 ls text-900 shadow">Frontend</span>
                            @foreach($frontendSkills as $key => $skill)
                             <div class="media mb-4 pr-md-2">
                                <img class="align-self-start mr-3" src="{{$skill['image']}}" alt="..." width="70">
                                <div class="media-body">
                                    <h5 class="font-weight-bold">{{$skill['title']}}</h5>
                                    <div class="description fs-md-0 fs--1">
                                        <p class="text-justify">{{$skill['description']}}</p>
                                        <a class="text-main font-weight-bold" href="{{$skill['link']}}">View Documentation <span class="fas fa-chevron-right fs--1" data-fa-transform="down-2 shrink-5 right-4"></span>
                                    </div>
                                    </a>
                                </div>
                            </div>
                             @endforeach
                        </div>
                       <div class="col-md-6 mt-4 mt-md-0">
                            <span class="badge badge-soft-dark px-4 py-2 fs-0 mb-4 ls text-900 shadow">Backend</span>
                            @foreach($backendSkills as $key => $skill)
                             <div class="media mb-4 pl-md-2">
                                <img class="align-self-start mr-3" src="{{$skill['image']}}" alt="..." width="70">
                                <div class="media-body">
                                    <h5 class="font-weight-bold">{{$skill['title']}}</h5>
                                      <div class="description fs-md-0 fs--1">
                                        <p class="text-justify">{{$skill['description']}}</p>
                                        <a class="text-main font-weight-bold" href="{{$skill['link']}}">View Documentation <span class="fas fa-chevron-right fs--1" data-fa-transform="down-2 shrink-5 right-4"></span>
                                        </a>
                                      </div>
                                </div>
                            </div>
                             @endforeach
                        </div>


                    </div>
                </div>

                <div class="my-portfolio mt-6 text-center text-md-left">
                    <h1 class="heading-underline heading-underline-2 text-900">My <span class="text-main">Portfolio</span> </h1>
                     <p class="mt-2 text-justify fs-md-0 fs--1 text-center text-md-left">
                       See some of my works below. Developing & Co-developing these projects made me love with the technologies I/we used.Hover on image to see the full page view.
                     </p>
                     <div class="mt-6">
                        <div class="row">
                         @foreach ($projects as $project)
                            <div class="col-sm-6 col-lg-6 mb-6 mb-lg-4">
                                <div class="pic-scroll rounded-soft text-center">
                                    <img class="img-fluid" src="{{url($project['image'])}}" alt="Image" />
                                </div>
                                <div class="product-name mt-3">
                                    <h5 class="mb-2 mb-md-1">
                                            <a href="{{ $project['link'] }}" class="text-900 ">
                                            {{ $project['title'] }}
                                        </a>
                                        </h5>
                                        <p class="fs--1 text-justify text-700 text-center text-md-left">{{ $project['description'] }}</p>
                                    </div>
                            </div>
                            @endforeach
                            <div class="col-12 mb-4 d-flex justify-content-center">
                               <a href="/portfolio" class="btn btn-outline-main">
                                    View More
                                    <span class="fas fa-arrow-right"></span>
                                    </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="hire-me mt-6 text-center text-md-left">
                    <h1 class="heading-underline heading-underline-2 text-900">Hire <span class="text-main">Me!</span> </h1>
                     <p class="mt-2 text-justify text-center text-md-left">
                     I can help you in your project by
                     </p>
                     <div class="row mt-4">
                        <div class="col-sm-6 col-lg-4 mb-3 mb-sm-4">
                            <div class="d-flex px-md-4">
                                <div class="flex-shrink-0 d-none d-md-block">
                                    <span>—</span>
                                </div>
                                <div class="flex-grow-1 ms-3">
                                    <h4>Development</h4>
                                    <p>Developing or co-developing back-end & front end.</p>
                                </div>
                            </div>
                         </div>

                        <div class="col-sm-6 col-lg-4 mb-3 mb-sm-4">
                            <div class="d-flex px-md-4">
                                <div class="flex-shrink-0 d-none d-md-block">
                                <span>—</span>
                                </div>
                                <div class="flex-grow-1 ms-3">
                                <h4>Support</h4>
                                <p>Monitoring or supporting projects.</p>
                                </div>
                            </div>
                        </div>

                        <div class="w-100"></div>

                    <div class="col-sm-6 col-lg-4 mb-3 mb-sm-4">
                            <div class="d-flex px-md-4">
                                <div class="flex-shrink-0 d-none d-md-block">
                                <span>—</span>
                                </div>
                                <div class="flex-grow-1 ms-3">
                                <h4>Existing Codebase</h4>
                                <p>Updating existing codebase.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-lg-4 mb-3 mb-sm-4">
                            <div class="d-flex px-md-4">
                                <div class="flex-shrink-0 d-none d-md-block">
                                <span>—</span>
                                </div>
                                <div class="flex-grow-1 ms-3">
                                <h4>Fixing Bugs</h4>
                                <p>Fixing major and minor bugs.</p>
                                </div>
                            </div>
                        </div>


                    </div>

                    <p class="mt-4 text-justify text-center text-md-left">
                        Want me to work on you amazing web application ? <span class="text-main">Lets Talk !</span>
                    </p>
                      <div class="mt-3 mb-6">
                          <dl class="row">
                            <dt class="col-sm-4">PHONE</dt>
                            <dd class="col-sm-8">+88 01710212329</dd>
                            <dt class="col-sm-4">EMAIL</dt>
                            <dd class="col-sm-8">farhanhaque.lu@gmail.com</dd>
                        </dl>
                      </div>
                </div>
                <div class="col text-center border-top border-200 py-4">
              <p class="mb-0 font-weight-semi-bold">Thanks for visiting</p>
            </div>
            </div>
        </div>
@endsection
