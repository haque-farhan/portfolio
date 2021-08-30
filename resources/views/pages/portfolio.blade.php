@php

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
