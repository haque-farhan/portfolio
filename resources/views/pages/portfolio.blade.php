@php

    $projects = [
    [
      "title" => "Smart College Automation",
      "sub_title" => "Paperless college management system.",
      "description" => "In this project, I created some core features such as the Admission module, Continuous assessment, Student performance statistics, College statistical data, Student dashboard, Assignment Module, Dynamic site settings, and interactive home page design. Also, I redeveloped and enhanced some old features such as the Letter sending module, Noc's, Teacher dashboard, Routines, News, Notice. Moreover, my responsibility is to design database architecture for new features, collect requirements, support the client, and fix bugs. Some features of this project below,",
      "bullet_points" => [
        "Online Admission",
        "Library Management",
        "Result Processing System",
          "Advanced Exam Module",
        "Advanced Assignment Module",
        "Measure Student Performance",
        "Mobile-friendly Dynamic Website.",
        "Live Class & Schedule Recorded Class."
      ],
      "link" => "https://demo.smartcollegebd.com/",
      "technologies" => ["Laravel", "Bootstrap4", "MySQL"],
      "image" => "/assets/images/smartcollege_full.png"
    ],
    [
      "title" => "Graduate Network",
      "sub_title" => "A SaaS platform to connect university alumnis and community",
      "description" => "In this project, I created amazing features such as the Committee module, Upvote featured, Statistical Insight, Election module UI. Moreover, I also helped the team to build SEO friendly application and develop world-class user-friendly interfaces. In addition, my responsibility also is to collect requirements, fixing bugs and support the client. Some features of this project below,",
      "bullet_points" => [
        "Alumni Directory",
        "Mentoring Hub",
        "Job Portal",
        "Event Platform",
        "Commitee Module",
        "Election Module",
        "Fundraising Solution",
        "Financial Module"
      ],
      "link" => "https://demo.gradnet.xyz/",
      "technologies" => ["Laravel", "React", "MySQL"],
      "image" => "/assets/images/gradnet_full.png"
    ],
     [
      "title" => "Smart Journal Automation",
      "sub_title" => "Smart journal is a research related management system.",
      "description" => "My responsibility is to Lead and Coordinate the team. I also created and enhanced some features, mostly I checked the developer's code and testing the features and deployed them in production. Some features in this project below",
      "bullet_points" => [
        "Article Management System",
        "Editions Management System",
        "Reviewer Management System",
        "Article Listings by Editors",
        "Email Templates",
        "Fully Responsive",
      ],
      "link" => "https://journals.sust.edu/sustjst/",
      "technologies" => ["Codeignator", "Bootstrap"],
      "image" => "/assets/images/journal.png"
    ],
     [
      "title" => "CATS-MIST (CE)",
      "sub_title" => "Automation of CRTC Labratories Management",
      "description" => "In this project, I created an interactive homepage. Also, Enhanced user interface both backend and frontend. The front end is entirely based on the Vue js, implemented Barcode reader in invoice and Fixing bugs. However, I also worked with the team to build SEO friendly application. Some features in this project below",
      "bullet_points" => [
        "Lab test module",
        "Consultancy module",
        "Faculty member/Client separate view",
        "Lab Test: Assigned user, manage report",
        "Report template",
        "Analytics",
      ],
      "link" => "https://ce-cats.mist.ac.bd/",
      "technologies" => ["Vue", "Laravel"],
      "image" => "/assets/images/cats-full.png"
    ],
    [
      "title" => "Falcon – Admin Dashboard & WebApp Template (React)",
      "sub_title" => "Outstanding UI faster WebApp Template",
      "description" => "It's an admin dashboard template based on React js. Currently most popular template in the Bootstrap market. In this project, My responsibility is to implement the Component module where users can easily understand each component module and its code and uses.",
      "bullet_points" => [
        "Fully Responsive",
        "Outstanding UI ",
        "React hooks for state management",
        "Higher-order component",
        "Reactstrap",
        "React Context API",
      ],
      "link" => "https://falcon.technext.it/dashboard-alt",
      "technologies" => ["React", "Reactstrap"],
      "image" => "/assets/images/falcon_full.png"
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
        <div class="my-portfolio mb-6 text-center text-md-left">
            <h1 class="text-main">
                My Portfolio
            </h1>
            <div class="row">
                <div class="col-md-7">
 <p class="mt-2 text-justify text-center text-md-left">
            I have been Developing & Co-developing these projects in the last couple of years. See some of my work descriptions below. Hover on images to see the full pageview.
            </p>
                </div>
            </div>

        </div>
            @foreach($projects as $project)
                <div class="mt-md-4">
                    <div class="row">
                         <div class="col-md-6 d-md-none mb-3">
                            <a target="_blank" href="{{ $project['link'] }}">
                                 <div class="pic-scroll shadow rounded-soft text-center">
                                    <img class="img-fluid" src="{{url($project['image'])}}" alt="Image" />
                                </div>
                            </a>
                        </div>
                        <div class="col-md-6 pr-md-6">
                            <h3 class="">
                                <a href="{{$project['link']}}" class="text-decoration-none text-main hover-danger">{{$project['title']}}</a>
                            </h3>
                            <h6 class="mb-4 font-weight-thin">{{$project['sub_title']}}</h6>
                            <p class="text-700 mt-3 mb-4 text-justify pr-md-2 fs-md-0 fs--1">{{$project['description']}}</p>
                            <div class="row">
                            @foreach($project['bullet_points'] as $key => $bullet_point)
                                <div class="@if(count($project['bullet_points']) > 3) col-md-6 @else col-md-12 @endif">
                                    <div class="feature mb-1">
                                        <div class="media align-items-center">
                                            <span class="fas fa-check text-main"></span>
                                            <div class="media-body ml-3">
                                                {{$bullet_point}}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                             @endforeach
                              </div>
                            <a target="_blank" href="{{$project['link']}}" class="btn btn-main btn-icon-hover mt-4">View Demo <span class="ml-1 fas fa-arrow-right"></span></a>
                              <div class="technology mt-4">
                                  <span class="mr-2">Technologies: </span>
                                    @foreach($project['technologies'] as $technology)
                                        <span class="mr-2 badge badge-soft-secondary">{{$technology}}</span>
                                    @endforeach
                            </div>
                        </div>
                        <div class="col-md-6 mt-4 mt-lg-0 d-none d-md-flex align-items-center">
                            <a target="_blank" href="{{ $project['link'] }}">
                                 <div class="pic-scroll shadow rounded-soft text-center">
                                    <img class="img-fluid" src="{{url($project['image'])}}" alt="Image" />
                                </div>
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
