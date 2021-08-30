@php
    $contact_info = [
      ['medium' => 'Email', 'link' => 'mailto:farhan.haque.lu@gmail.com','text'=>'farhan.haque.lu@gmail.com', 'icon' => 'far fa-envelope'],
      ['medium' => 'LinkedIn', 'link' => 'https://www.linkedin.com/','text'=>'farhan', 'icon' => 'fab fa-linkedin-in'],
      ['medium' => 'Github', 'link' => 'https://github.com/','text'=>'farhan', 'icon' => 'fab fa-github'],
      ['medium' => 'Facebook', 'link' => 'https://github.com/','text'=>'farhan', 'icon' => 'fab fa-facebook-f'],

    ]
@endphp

@extends('layouts.default')

@section('title')
    <title>Contact - Osman Goni Chowdhury - Full-Stack Developer</title>
@endsection

@section('content')
    <div class="main-content mt-5">
        {{--@if (Illuminate\Support\Facades\Session::get('success'))
            <div class="alert alert-primary">
                <p>{{ $message }}</p>
            </div>
        @endif--}}
        <div class="container">
            <h2 class="fw-bold text">CONTACT ME</h2>
            <p>I am available for hire and open to any ideas of cooperation.</p>
            <div class="mt-2">
                <table class="table table-borderless">
                    <tbody>
                    @foreach($contact_info as $info)
                        <tr>
                            <td>{{$info['medium']}} :</td>
                            <td class="text-danger">
                                <a target="_blank" class="text-decoration-none text-danger" href="{{$info['link']}}">
                                    <span class="me-2"><i class="{{$info['icon']}}"></i></span>
                                    {{$info['text']}}
                                </a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <div class="container">
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
        </div>
    </div>
@endsection