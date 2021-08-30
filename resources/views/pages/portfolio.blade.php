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
      "title" => "Graduate Network",
      "sub_title" => "A SaaS platform to connect university alumnis",
      "description" => "Graduate Network offers solutions for the Educational Technology & Community Network - to engage the alumni & community members in a meaningful & positive way.",
      "bullet_points" => [
        "A SaaS platform by which educational institutions will be able to engage your alumni with your institution and cultivate the give-back culture through mentoring & fundraising program.",
        "Responsive application (Laravel, React)."
      ],
      "link" => "https://demo.gradnet.xyz/",
      "technologies" => ["Laravel", "React", "MySQL"],
      "image" => "/assets/images/graduate-network.png"
    ],
    [
      "title" => "Smart College Automation System",
      "sub_title" => "Smart college solution enables educational institutions virtually accessible for 24/7 and step ahead to paperless college management system.",
      "description" => "",
      "bullet_points" => [
        "Online Admission Solution.",
        "Result Processing Solution.",
        "Mobile-friendly Dynamic Website.",
        "Advanced Exam Module & Student Management.",
        "Live Class via Youtube & Schedule Recorded Class."
      ],
      "link" => "https://demo.smartcollegebd.com/",
      "technologies" => ["Laravel", "Bootstrap4", "MySQL"],
      "image" => "/assets/images/smart-college.png"
    ],
    [
      "title" => "Falcon – Admin Dashboard & WebApp Template (VueJs)",
      "sub_title" => "",
      "description" => "Create a UI that stands out — a design that is beautiful, slick, and delivers the ultimate user experience. Start with Falcon, streamline your UI design.",
      "bullet_points" => [
        "Fully Responsive.",
        "Modular markup based on Cards & Utility classes.",
        "Include an article or upload a paper.",
        "Interactive graphs and charts.",
      ],
      "link" => "",
      "technologies" => ["Vue"],
      "image" => "/assets/images/falcon.png"
    ],
];
@endphp

@extends('layouts.default')

@section('title')
    <title>Portfolio - Ahsanul Haque Farhan - Full-Stack Developer</title>
@endsection

@section('content')
    <div class="main-content mt-5">
        <div class="container">
            <div>
                <div class="introduction">
                    <h1 class="heading-underline heading-underline-2 text-900">Hey <span class="text-main">there!</span> </h1>
                    <p class="mt-2 text-justify">
                        I'm a full-stack developer specialised in frontend and backend development for complex scalable web apps and websites.
                        I have worked with various technologies most of them are based on <span class="fw-bold">PHP</span> and <span class="fw-bold">Javascript.</span>
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
            </div>
            @foreach($projects as $project)
                <div class="d-flex timeline-element mt-0 mt-lg-5">
                    <div class="me-3 mt-2" style="font-size: 0.5rem">
                        <i class="fas fa-square-full fa-xs text-danger-pro"></i>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <h3 class="fw-bold">
                                <a href="{{$project['link']}}"
                                   class="text-decoration-none text-800 hover-danger">{{$project['title']}}</a>
                            </h3>
                            <p class="mb-1">{{$project['sub_title']}}</p>
                            <p class="text-700 font-weight-semi-bold mt-4 text-justify">{{$project['description']}}</p>
                            <ul>
                                @foreach($project['bullet_points'] as $bullet_point)
                                    <li>{{$bullet_point}}</li>
                                @endforeach
                            </ul>
                            <a target="_blank" href="{{$project['link']}}" class="btn btn-danger btn-sm">Visit
                                Site</a>

                            <p class="mb-2 mt-4 fw-bold fs-2">Technologies</p>
                            <div class="d-flex">
                                @foreach($project['technologies'] as $technology)
                                    <span class="badge rounded-pill bg-danger me-2"
                                          style="opacity: 0.65">{{$technology}}</span>
                                @endforeach
                            </div>
                        </div>
                        <div class="col-md-6 mt-4 mt-lg-0">
                            <a target="_blank" href="https://abacopolarized.com/">
                                <img src="{{url($project['image'])}}"
                                     style="max-height: 400px" alt="profile picture" class="img-fluid ">
                            </a>
                        </div>
                        @if(!$loop->last)
                            <hr class="my-4 my-lg-5">
                        @else
                            <span class="mb-5"></span>
                        @endif
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
