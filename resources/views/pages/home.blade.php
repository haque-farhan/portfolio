@extends('layouts.default')
@section('title')
    <title>Ahsanul Haque Farhan - Full-Stack Developer</title>
@endsection

@php
        $skills = [
        [
               "title" => "Vue js",
               "link" => "https://vuejs.org/",
               "description" => "Vue.js is an open-source model–view–viewmodel front end JavaScript framework for building user interfaces and single-page applications. ",
               "image" => "https://vuejs.org/images/logo.svg",
        ],
        [
               "title" => "Laravel",
               "link" => "https://laravel.com/",
               "description" => "Laravel is a web application framework with expressive, elegant syntax. It provides a structure and starting point for creating your application.",
               "image" => "https://laravel.com/img/logomark.min.svg",
        ],
        [
               "title" => "React js",
               "link" => "https://reactjs.org/",
               "description" => "React is a JavaScript library for building user interfaces.Learn Once, Write Anywhere.React can also render on the server using Node and power mobile apps using React Native.",
               "image" => "data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZpZXdCb3g9Ii0xMS41IC0xMC4yMzE3NCAyMyAyMC40NjM0OCI+CiAgPHRpdGxlPlJlYWN0IExvZ288L3RpdGxlPgogIDxjaXJjbGUgY3g9IjAiIGN5PSIwIiByPSIyLjA1IiBmaWxsPSIjNjFkYWZiIi8+CiAgPGcgc3Ryb2tlPSIjNjFkYWZiIiBzdHJva2Utd2lkdGg9IjEiIGZpbGw9Im5vbmUiPgogICAgPGVsbGlwc2Ugcng9IjExIiByeT0iNC4yIi8+CiAgICA8ZWxsaXBzZSByeD0iMTEiIHJ5PSI0LjIiIHRyYW5zZm9ybT0icm90YXRlKDYwKSIvPgogICAgPGVsbGlwc2Ugcng9IjExIiByeT0iNC4yIiB0cmFuc2Zvcm09InJvdGF0ZSgxMjApIi8+CiAgPC9nPgo8L3N2Zz4K",
        ],
        [
               "title" => "CodeIgniter",
               "link" => "https://codeigniter.com/",
               "description" => "CodeIgniter is a powerful PHP framework with a very small footprint, built for developers who need a simple and elegant toolkit to create full-featured web applications.",
               "image" => "https://codeigniter.com/assets/images/ci-logo-big.png",
        ],
        [
               "title" => "Bootstrap",
               "link" => "https://getbootstrap.com/",
               "description" => "Bootstrap is the CSS Framework.It contains CSS- and JavaScript-based design templates.",
               "image" => "https://upload.wikimedia.org/wikipedia/commons/b/b2/Bootstrap_logo.svg",
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
            'image' => '/assets/images/gif/falcon.gif',
            'title' => 'Falcon-React',
            'description' => 'specialised in frontend and backend development for complex scalable web apps and websites.'
        ],
        [
            'image' => '/assets/images/gif/falcon.gif',
            'title' => 'Falcon-React',
            'description' => 'specialised in frontend and backend development for complex scalable web apps and websites.'
        ]
    ];
@endphp

@section('content')
    <div class="main-content mt-5">
        <div class="container">
              <div>
                <div class="introduction">
                    <h1 class="heading-underline heading-underline-2 text-900">Hey <span class="text-main">there!</span> </h1>
                    <p class="mt-2 text-justify">
                        I'm a full-stack developer specialised in frontend and backend development for complex scalable web apps and websites.
                        I have worked with various technologies most of them are based on <span class="fw-bold">PHP</span> and <span class="fw-bold">Javascript.</span>
                         I have <span class="fw-bold">maintained, developed and launched</span> multiple
                        projects
                        from scratch, carrying the development of it's
                        <span class="fw-bold">back-end</span> and <span class="fw-bold">front-end</span> codebases.
                    </p>
                </div>
                <div class="skills mt-6">
                    <h1 class="heading-underline heading-underline-2 text-900">Skills <span class="text-main">Overview</span> </h1>
                     <p class="mt-2 text-justify">
                         Below is a quick overview of my main technical skill sets and tools I use.
                     </p>
                    <div class="row justify-content-between mt-5">
                        @foreach($skills as $key => $skill)
                        <div class="col-xl-5 col-md-6 mb-5">
                            @if($key == 0)
                            <span class="badge badge-soft-dark px-4 py-2 fs-0 mb-4 ls text-900 shadow">Frontend</span>
                            @elseif($key == 1)
                            <span class="badge badge-soft-dark px-4 py-2 fs-0 mb-4 ls text-900 shadow">Backend</span>
                            @endif
                            <div class="media">
                                <img class="align-self-start mr-3" src="{{$skill['image']}}" alt="..." width="70">
                                <div class="media-body">
                                <h5 class="font-weight-bold">{{$skill['title']}}</h5>
                                <p class="text-justify">{{$skill['description']}}</p>
                                <a class="text-main font-weight-bold" href="{{$skill['link']}}">View Documentation <span class="fas fa-chevron-right" data-fa-transform="down-2 shrink-5 right-4"></span>
                                </a>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>

                <div class="hire-me mt-6">
                    <h1 class="heading-underline heading-underline-2 text-900">My <span class="text-main">Portfolio</span> </h1>
                     <p class="mt-2 text-justify">
                       I can help you in Your project by
                     </p>
                     <div class="mt-6">
                     <div class="row">
                         @foreach ($projects as $project)
                            <div class="col-sm-6 col-lg-6 mb-4">
                                <div class="hoverbox rounded-soft text-center">
                                    <img class="img-fluid" src="{{url($project['image'])}}" alt="" />
                                    <div class="hoverbox-content bg-dark p-5 self-center">
                                        <div>
                                            <h5 class="text-white">{{ $project['title'] }}</h5>
                                            <p class="lead text-white fs--1">{{ $project['description'] }}</p>
                                            <a class="btn btn-light btn-sm mt-1" href="#!">Learn more</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>

                <div class="hire-me mt-6">
                    <h1 class="heading-underline heading-underline-2 text-900">Hire <span class="text-main">Me!</span> </h1>
                     <p class="mt-2 text-justify">
                       I can help you in Your project by
                     </p>
                     <div class="mt-6">
                        <h3 class="mb-0 fs-xl-4 fs-sm-3 font-weight-thin">
                            I can help you in <span class="text-main">Your project by</span>
                        </h3>
                         <ul class="mt-3">
                            <li>Developing or co-developing back-end & front end.</li>
                            <li>Monitoring or supporting projects.</li>
                            <li>Updating existing codebase.</li>
                            <li>Fixing major and minor bugs.</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
@endsection
