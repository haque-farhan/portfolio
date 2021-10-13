@php
    $contact_info = [
      ['medium' => 'Email', 'link' => 'mailto:farhanhaque.lu@gmail.com','text'=>'farhanhaque.lu@gmail.com', 'icon' => 'far fa-envelope'],
      ['medium' => 'LinkedIn', 'link' => 'https://www.linkedin.com/in/ahsanul-haque-farhan-90052619b','text'=>'Ahsanul Haque Farhan', 'icon' => 'fab fa-linkedin-in'],
      ['medium' => 'Github', 'link' => 'https://github.com/haque-farhan','text'=>'haque-farhan', 'icon' => 'fab fa-github'],
      ['medium' => 'Facebook', 'link' => 'https://www.facebook.com/ahsanulf','text'=>'Ahsanul Haque Farhan', 'icon' => 'fab fa-facebook-f'],

    ]
@endphp

@extends('layouts.default')

@section('title')
    <title>About - Ahsanul Haque Farhan - Full-Stack Developer</title>
@endsection

@section('content')
    <div class="main-content mt-5">
        {{--@if (Illuminate\Support\Facades\Session::get('success'))
            <div class="alert alert-primary">
                <p>{{ $message }}</p>
            </div>
        @endif--}}
        <div class="container">
            <div class="my-portfolio mb-6">
            <h1 class="text-main">About Me </h1>
            <p class="mt-2 text-justify">
              I am available for hire and open to any ideas of cooperation.
            </p>
        </div>

        <div class="card">
            <div class="card-body border-dashed-bottom">
                <div class="about-row">
                    <h3 class="about-tittle text-primary">
                        MSc in Data Analytics
                    </h3>
                    <p class="about-info text-900">De Montfort University Leicester, United Kingdom</p>
                    <p class="text-800">October, 2021 — Present</p>
                    <div class="opacity-box">
                        <p>
                            {{--  Studied Computer Science &amp; Engineering to learn programming, software development,
                            software architecture. Participated and won prizes in numerus national programming
                            contests and idea contests.  --}}
                        </p>
                    </div>
                </div>
            </div>
            <div class="card-body mt-3">
                <div class="about-row">
                    <h3 class="about-tittle text-primary">
                        BSc in Computer Science &amp; Engineering
                    </h3>
                    <p class="about-info text-900">Leading University, Sylhet</p>
                    <p class="text-800">Jan, 2015 — Dec, 2018</p>
                    <div class="opacity-box">
                        <p>
                            Studied Computer Science &amp; Engineering to learn programming, software development,
                            software architecture. Participated and won prizes in numerus national programming
                            contests and idea contests.
                        </p>
                    </div>
                </div>

            </div>
        </div>
              <div class="card bg-main mx-md-7 mt-4 mb-7" style="background-image: url(/assets/images/pattern.svg);">
                    <div class="card-body">
                        <div class="row p-4">
                            <div class="col-md-6">
                                <div class="pl-md-6">
                                     <h1 class="text-white mt-3">Hire Me</h1>
                                     <p class="text-justify pr-md-6 text-white">
                                         Want me to work on your amazing web application? Lets Talk!
                                     </p>
                                </div>
                            </div>
                            <div class="col-md-6 pl-md-6">
                                <div class="media align-items-center mb-2">
                                    <div class="avatar avatar-xl pt-1">
                                          <i class="fas fa-envelope social-link"></i>
                                    </div>
                                    <div class="media-body ml-2 social-text">
                                        <a href="mailto:farhanhaque.lu@gmail.com" class="text-white mx-1"> farhanhaque.lu@gmail.com </a>
                                    </div>
                                </div>
                                 <div class="media align-items-center mb-2">
                                    <div class="avatar avatar-xl pt-1">
                                          <i class="fab fa-linkedin social-link"></i>
                                    </div>
                                    <div class="media-body ml-2 social-text">
                                       <a target="_blank" href="https://www.linkedin.com/in/ahsanul-haque-farhan-90052619b/" class="text-white mx-1">
                                            ahsanul-haque-farhan-90052619b
                                          </a>
                                    </div>
                                </div>
                                <div class="media align-items-center mb-2">
                                    <div class="avatar avatar-xl pt-1">
                                            <i class="fab fa-github-square social-link"></i>
                                    </div>
                                    <div class="media-body ml-2 social-text">
                                       <a target="_blank" href="https://github.com/haque-farhan" class="text-white mx-1">
                                        haque-farhan
                                       </a>
                                    </div>
                                </div>

                                <div class="media align-items-center mb-2">
                                    <div class="avatar avatar-xl pt-1">
                                         <i class="fab fa-facebook-square social-link"></i>
                                    </div>
                                    <div class="media-body ml-2 social-text">
                                        <a target="_blank" href="https://www.facebook.com/ahsanulf" class="text-white mx-1">
                                            www.facebook.com/ahsanulf
                                        </a>
                                    </div>
                                </div>

                            </div>
                        </div>

                    </div>
                </div>
        </div>
        {{--  <div class="container">
            <div class="row mt-6">
                <div class="col-md-7 mt-3">
                    <h1 class="text-center">Send a Message</h1>
                    <div class="mb-5">
                        <form method="POST" action="{{url('/send-contact-email')}}">
                            <div class="mb-3">
                                <label for="name" class="form-label fs-2">Name<span
                                        class="text-danger-pro fs-2">*</span></label>
                                <input type="text" class="form-control rounded field-sm" name="name" id="name"
                                       required aria-describedby="name">
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label fs-2">Email<span
                                        class="text-danger-pro fs-2">*</span></label>
                                <input type="email" class="form-control rounded field-sm" name="email" id="email"
                                       required aria-describedby="email">
                            </div>
                            <div class="mb-3">
                                <label for="company" class="form-label fs-2">Company</label>
                                <input type="text" class="form-control rounded field-sm" name="company" id="name"
                                       aria-describedby="company">
                            </div>
                            <div class="mb-3">
                                <label for="bodyMessage" class="form-label fs-2">Message<span
                                        class="text-danger-pro fs-2">*</span></label>
                                <textarea class="form-control rounded" name="bodyMessage" id="bodyMessage"
                                          required rows="6"></textarea>
                            </div>
                            <button class="btn btn-danger btn-block mt-3" type="submit">Send Message</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>  --}}
    </div>
@endsection
