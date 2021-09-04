@php

    $projects = [
    [
      "title" => "Graduate Network",
      "sub_title" => "A SaaS platform to connect university alumnis and community",
      "description" => "Graduate Network offers solutions for the Educational Technology & Community Network - to engage the alumni & community members in a meaningful & positive way.Some features below",
      "bullet_points" => [
        "Alumni Directory",
        "Mentoring Hub",
        "Job Portal",
        "Event Platform",
        "Fundraising Solution",
        "Financial Module"
      ],
      "link" => "https://demo.gradnet.xyz/",
      "technologies" => ["Laravel", "React", "MySQL"],
      "image" => "/assets/images/gradnet_full.png"
    ],
    [
      "title" => "Smart College Automation",
      "sub_title" => "Paperless college management system.",
      "description" => "Smart college solution enables you to do things online effortlessly. A simple way to schedule class, assessment, assignment, exam and measure performance.Some features below",
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
      "title" => "Falcon – Admin Dashboard & WebApp Template (React)",
      "sub_title" => "Falcon – Admin Dashboard & WebApp Template React, built for you to create outstanding UI faster than ever before",
      "description" => "Create a UI that stands out — a design that is beautiful, slick, and delivers the ultimate user experience. Start with Falcon, streamline your UI design.",
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
     [
      "title" => "Journal – Smart Journal Automation",
      "sub_title" => "Smart journal is a research related management system where author can post their articles and editors can approve or reject the articles.",
      "description" => "A journal management system where user can submit their journal and editor approve or advise to resubmit their journal. after partially approving, the editor can assign a reviewer. reviewer will review this journal and again submit it to the editor. finally, it will publish or advised to revision and resubmit.",
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
      "description" => "Center has been provided consultancy related but not limited to building design and assessment, water treatment plant assessment, pavement damage investigation, initial environmental examination, environmental impact assessment, and environmental management plan, tubewell design and many more.",
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
            <h1 class="heading-underline heading-underline-2 text-900">My <span class="text-main">Portfolio</span> </h1>
            <p class="mt-2 text-justify text-center text-md-left">
            See some of my work descriptions below. I have been Developing & Co-developing these projects in the last couple of years. Hover on images to see the full pageview.
            </p>
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
                        <div class="col-md-6">
                            <h3 class="text-900">
                                <a href="{{$project['link']}}" class="text-decoration-none text-black hover-danger">{{$project['title']}}</a>
                            </h3>
                            <h6 class="mb-4 font-weight-thin">{{$project['sub_title']}}</h6>
                            <p class="text-700 my-3 text-justify">{{$project['description']}}</p>
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
                            <a target="_blank" href="{{$project['link']}}" class="btn btn-danger mt-4">View Demo <span class="ml-1 fas fa-arrow-right"></span></a>
                              <div class="technology mt-4">
                                  <span class="mr-2">Technologies: </span>
                                    @foreach($project['technologies'] as $technology)
                                        <span class="mr-2 badge badge-soft-secondary">{{$technology}}</span>
                                    @endforeach
                            </div>
                        </div>
                        <div class="col-md-6 mt-4 mt-lg-0 d-none d-md-block">
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
