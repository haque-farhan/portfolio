@php
    $objectives = [
      "Front-end: JavaScript, Vue, React, Bootstrap. Developed functional product features for Single page web applications.",
      "Back-end: Laravel, Codeignator, MySQL Databases. Designed an maintained several web app backends.",
      "Attentive to UI/UX details and high code quality.",
    ];

    $experiences = [
      [
        "company" => "Technext Limited",
        "start" => "February 2019",
        "end" => "March 2021",
        "website" => 'www.technext.it',
        "description" => "Worked with core software development team responsible for building software to ensure the best user experience and software security used by millions of users.",
        "position" => "Software Engineer",
        "responsibilities" => [
            "Developed Smart Learning management system, Currently using ten thousand students and teachers. Authority can take their exam securely and smoothly.",
          "Worked on building Laravel REST API and React SPA for social media platforms currently used by 20+ Organizations and thousands of users.",
          "Developed component module in React based admin template. Currently Most popular template in Bootstrap market.",
          "Supported design, implementation, and testing of a Civil Labratory Automation web application written in Vue js",
          "Lead & Coordinate a journal management web application using codeignator."
        ]
      ],
      [
        "company" => "Appifylab",
        "start" => "June 2018",
        "end" => "December 2018",
        "website" => 'www.appifylab.com',
        "description" => "Worked on several projects with the team. Most of the projects based on PHP, Laravel, Vue js",
        "position" => "Intership",
        "responsibilities" => [
          "Worked on ecommarce web app with the team which using Laravel REST API and Vue SPA.",
          "Supported design, implementation, and testing of several web applications which is written in Laravel & Vue js.",
        ],
      ],
];

@endphp

@extends('layouts.cv')

@section('title')
    <title>CV - Ahsanul Haque Farhan - Full-Stack Developer</title>
@endsection

@section('content')
    <div id="body-cv" class="container">
        <div class="row mt-5">
            <div class="col-xl-3 col-12 pe-0 text-center">
                <img src="{{url('assets/images/farhan.jpg')}}" alt="picture" class="img-fluid" style="width: 150px">
            </div>
            <div class="col-xl-6 col-12 ps-0 my-3  text-xl-start ms-md-3">
                <h3 class="mb-0 text-danger-pro fw-bold"> Ahsanul Haque Farhan</h3>
                <p class="mb-1 fs-4 text-600">Full-stack Web developer</p>
                <p class="fs-6 mb-0 text-1000 font-weight-medium">Full stack web application developer. Ambitious and communicative.</p>
            </div>
            <div class="col-xl-2 col-12 text-danger-pro fs--1 text-center text-xl-start">
                <div class="border-xl-start">
                    <div class="ms-3">
                        {{--  <div class="d-inline d-lg-block">
                            <a class="mb-1 d-inline text-decoration-none text-danger-pro" href="#">
                                <i class="fas fa-globe-asia"></i>
                                farhan
                                <span class="d-xl-none text-grey">/</span>
                            </a>
                        </div>  --}}
                        {{--  <div class="d-inline d-lg-block">
                            <a class="mb-1 d-inline text-decoration-none text-danger-pro"
                               href="mailto:farhanhaque.lu@gmail.com">
                                <i class="far fa-envelope"></i>
                                farhanhaque.lu@gmail.com
                                <span class="d-xl-none text-grey">/</span>
                            </a>
                        </div>
                        <div class="d-inline d-lg-block">
                            <a class="mb-1 d-inline text-decoration-none text-danger-pro"
                               href="https://www.linkedin.com/in/ahsanul-haque-farhan-90052619b/">
                                <i class="fab fa-linkedin"></i>
                                Ahsanul Haque Farhan
                            </a>
                        </div>  --}}
                    </div>
                </div>
            </div>
        </div>
        <div class="row justify-content-xl-end mt-3" style="text-align: justify">
            <div class="col-2 me-5"></div>
            <div class="col-12 col-xl-9">
                <p class="fs-3 text-danger-pro font-weight-medium">Skills</p>
                <ul>
                    @foreach($objectives as $objective)
                        <li class="font-weight-medium text-1000">{{$objective}}</li>
                    @endforeach
                </ul>
            </div>
        </div>
        <div class="row mt-3 mb-2">
            <div class="col offset-xl-3">
                 <p class="fs-3 text-danger-pro font-weight-medium">Experience</p>
            </div>
        </div>
        <div class="mb-2">
            @foreach($experiences as $experience)
                <div class="row justify-content-center mb-4 mb-lg-2">
                    <div class="col-12">
                        <div class="row">
                            <div class="col-xl-3 col-12 text-xl-end d-none d-xl-block" style="font-size: 14px">
                                <p class="text-xl-end mb-0 p-1 text-900 font-weight-medium"
                                   style="background-color: #dddddd; font-size: 15px;">{{$experience['company']}}</p>
                                <P class="mb-0 text-black">{{$experience['start']}} - {{$experience['end']}}</P>
                                <a href="{{"https://".$experience['website']}}" target="_blank"
                                   class="text-danger-pro text-decoration-none text-black">{{$experience['website']}}</a>
                            </div>
                            <div class="col-12 d-xl-none d-flex justify-content-between" style="font-size: 13px">
                                <p class="text-xl-end mb-0">{{$experience['company']}}</p>
                                <p class="mb-0">{{$experience['start']}} - {{$experience['end']}}</p>
                            </div>
                            <div class="col-xl-9 col-12" style="text-align: justify">
                                <h5 class="mb-0 text-1000 mb-2">{{$experience['position']}}</h5>
                                <p class="text-900 font-weight-medium">{{$experience['description']}}</p>
                                <ul>
                                    @foreach($experience['responsibilities'] as $responsibility)
                                        <li class="text-900 font-weight-normal">{{$responsibility}}</li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        {{--    Education   --}}
        <div class="row mt-3 mb-2">
            <div class="col offset-xl-3">
                <p class="fs-4 text-danger-pro mb-1">Education</p>
            </div>
        </div>

        <div class="mb-4">
            <div class="row justify-content-center">
                <div class="col-12">
                    <div class="row">
                        <div class="col-xl-3 col-12 text-xl-end d-none d-xl-block" style="font-size: 13px">
                            <p class="text-xl-end mb-0 p-1 text-1000"
                               style="background-color: #dddddd">De Montfort University</p>
                            <P class="mb-0">October 2021 - Present</P>
                            <a href="https://www.dmu.ac.uk/" target="_blank"
                               class="text-danger-pro text-decoration-none">www.dmu.ac.uk</a>
                        </div>
                        <div class="col-xl-9 col-12" style="text-align: justify">
                            <p class="fw-bold mb-4">MSc in Data Analytics</p>
                            {{-- <div class="text-secondary fs--1">
                                <p class="mb-1">Total Credit Hour completed: 152</p>
                                <p>CGPA: 3.54</p>
                            </div> --}}
                            <ul>
                                <li><span class="fw-bold ">Courses:</span>
                                   Data Warehousing and OLAP, Statistics, Resource Methods.
                                </li>
                            </ul>
                         </div>
                    </div>
                    <div class="row">
                        <div class="col-xl-3 col-12 text-xl-end d-none d-xl-block" style="font-size: 13px">
                            <p class="text-xl-end mb-0 p-1 text-1000"
                               style="background-color: #dddddd">Leading University</p>
                            <P class="mb-0">Jan 2015 - January 2019</P>
                            <a href="https://www.lus.ac.bd/" target="_blank"
                               class="text-danger-pro text-decoration-none">lu.ac.bd</a>
                        </div>
                        <div class="col-xl-9 col-12" style="text-align: justify">
                            <p class="fw-bold mb-1">Computer Science & Engineering</p>
                            <div class="text-secondary fs--1">
                                <p class="mb-1">Total Credit Hour completed: 152</p>
                                <p>CGPA: 3.54</p>
                            </div>
                            <ul>
                                <li><span class="fw-bold ">Courses:</span> Algorithm, OOP,
                                    Database Management System, Artificial Intelligence, Web
                                    Programming, Data Communication & Networking, Operating System, Software Engineering,
                                    Management information system, Discrete mathematics, Theory of computation
                                </li>
                                <li>
                                    <span class="fw-bold">Porject:</span>
                                    Lu Assistant - University management system Based on Laravel and Vue js. Modules are, Online admission, Internal Social platform, Food Order from university canteen, create result sheet and so on.
                                </li>
                                <li><span class="fw-bold">Others:</span> Actively participated in local and national programming &
                                    tech contest
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{--    Other perks   --}}
        <div class="row mt-3 mb-2">
            <div class="col offset-xl-3">
                <p class="fs-4 text-danger-pro mb-1">Other perks</p>
            </div>
        </div>

        <div class="mb-5">
            <div class="row justify-content-center">
                <div class="col-12">
                    <div class="row">
                        <div class="col-xl-3 col-12 text-xl-end d-none d-xl-block" style="font-size: 13px">
                        </div>
                        <div class="col-xl-9 col-12" style="text-align: justify">
                            <ul>
                                <li>Former Vice president at Leading University Computer Club (LUCC)</li>
                                <li>Former Publicity deputy LU Firefox Club.</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
