@php
    $objectives = [
      "Front-end: JavaScript, Vue, React, Vuex. Developed functional product features for Single page web applications.",
      "Back-end: Laravel, SQL Databases. Designed an maintained several web app backends.",
      "Attentive to UI/UX details and high code quality.",
      "Open to evolving in: Python, Dart."
    ];

    $experiences = [
      [
        "company" => "Technext Limited",
        "start" => "February 2019",
        "end" => "March 2021",
        "website" => 'www.technext.it',
        "description" => "Worked with core software development team responsible for building software to ensure the best user experience and software security used by millions of users.",
        "position" => "Software Developer",
        "responsibilities" => [
          "Worked on building Laravel REST API and React SPA for social media platform currently used by thousands of users.",
          "Supported design, implementation, and testing of a college management web application written in Laravel currently used by four government colleges in Bangladesh.",
          "Composed theme in Vuejs for top marketplaces."
        ]
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
            <div class="col-xl-6 col-12 ps-0 mt-3 text-center text-xl-start ms-md-3">
                <h3 class="mb-0 text-danger-pro fw-bold"> Ahsanul Haque Farhan</h3>
                <p class="mb-1 fs-4 text-black-50">Full-stack Web developer</p>
                <p class="fs-6 mb-0">Full stack web application developer. Ambitious and communicative.</p>
            </div>
            <div class="col-xl-2 col-12 text-danger-pro fs--1 text-center text-xl-start">
                <div class="border-xl-start">
                    <div class="ms-3">
                        <div class="d-inline d-lg-block">
                            <a class="mb-1 d-inline text-decoration-none text-danger-pro" href="#">
                                <i class="fas fa-globe-asia"></i>
                                findosman.xyz
                                <span class="d-xl-none text-grey">/</span>
                            </a>
                        </div>
                        <div class="d-inline d-lg-block">
                            <a class="mb-1 d-inline text-decoration-none text-danger-pro"
                               href="mailto:farhanhaque.lu@gmail.com">
                                <i class="far fa-envelope"></i>
                                farhanhaque.lu@gmail.com
                                <span class="d-xl-none text-grey">/</span>
                            </a>
                        </div>
                        <div class="d-inline d-lg-block">
                            <a class="mb-1 d-inline text-decoration-none text-danger-pro"
                               href="https://www.linkedin.com/">
                                <i class="fab fa-linkedin"></i>
                                osman52
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row justify-content-xl-end mt-3" style="text-align: justify">
            <div class="col-2 me-5"></div>
            <div class="col-12 col-xl-9">
                <p class="fs-4 text-danger-pro">Skills</p>
                <ul>
                    @foreach($objectives as $objective)
                        <li>{{$objective}}</li>
                    @endforeach
                </ul>
            </div>
        </div>
        <div class="row mt-3 mb-2">
            <div class="col offset-xl-3">
                <p class="fs-4 text-danger-pro mb-1">Experience</p>
            </div>
        </div>
        <div class="mb-2">
            @foreach($experiences as $experience)
                <div class="row justify-content-center mb-4 mb-lg-2">
                    <div class="col-12">
                        <div class="row">
                            <div class="col-xl-3 col-12 text-xl-end d-none d-xl-block" style="font-size: 13px">
                                <p class="text-xl-end mb-0 p-1"
                                   style="background-color: #dddddd; font-size: 15px;">{{$experience['company']}}</p>
                                <P class="mb-0">{{$experience['start']}} - {{$experience['end']}}</P>
                                <a href="{{"https://".$experience['website']}}" target="_blank"
                                   class="text-danger-pro text-decoration-none">{{$experience['website']}}</a>
                            </div>
                            <div class="col-12 d-xl-none d-flex justify-content-between" style="font-size: 13px">
                                <p class="text-xl-end mb-0">{{$experience['company']}}</p>
                                <p class="mb-0">{{$experience['start']}} - {{$experience['end']}}</p>
                            </div>
                            <div class="col-xl-9 col-12" style="text-align: justify">
                                <p class="fw-bold mb-0">{{$experience['position']}}</p>
                                <p>{{$experience['description']}}</p>
                                <ul>
                                    @foreach($experience['responsibilities'] as $responsibility)
                                        <li>{{$responsibility}}</li>
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
                            <p class="text-xl-end mb-0 p-1"
                               style="background-color: #dddddd">Leading University Bangladesh</p>
                            <P class="mb-0">Jan 2015 - Sep 2019</P>
                            <a href="https://lu.ac.bd/" target="_blank"
                               class="text-danger-pro text-decoration-none">lu.ac.bd</a>
                        </div>
                        <div class="col-xl-9 col-12" style="text-align: justify">
                            <p class="fw-bold mb-1">Computer Science & Engineering</p>
                            <div class="text-secondary fs-1">
                                <p class="mb-1"><span class="fst-italic">Total Credit Hour completed: 152</span></p>
                                <p><span class="fst-italic">CGPA: 3.49</span></p>
                            </div>
                            <ul>
                                <li><span class="fw-bold ">Courses:</span> Algorithm, OOP,
                                    Database Management System, Artificial Intelligence, Web
                                    Programming, Data Communication & Networking, Operating System, Bio-Informatics,
                                    Microprocessor & Assembly Language
                                </li>
                                <li>
                                    <span class="fw-bold">Thesis:</span>
                                    A Comparative Study of Data Mining Techniques inCustomer Churn Prediction AndFeature
                                    importance Evaluation
                                </li>
                                <li><span class="fw-bold">Others:</span> Actively participated in various programming &
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
                                <li>Previous content writing experience.</li>
                                <li>Speaks native Bangla and fluent English.</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
