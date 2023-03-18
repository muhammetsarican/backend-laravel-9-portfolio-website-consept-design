@extends('layouts.home')
@section('content')
        <!-- Contact - Start -->
        <section id="contact">
            <div class="landing-section">
                <div class="landing-leftside">
                    <i>
                        <img src="{{asset('assets')}}/icons/communicate.png" alt="" width="250px">
                        <!-- <lord-icon src="{{asset('assets')}}/https://cdn.lordicon.com/xxdqfhbi.json" trigger="hover"
                            colors="primary:#133051,secondary:#ffc738,tertiary:#4bb3fd" style="width:450px;height:450px">
                        </lord-icon> -->
                    </i>
                </div>
                <div class="landing-rightside">
                    <h3>Contact Me</h3>
                </div>
            </div>
            <div class="contact-form-general">
                <div class="contact-form-info">
                    <p class="text-center">Let's Get in Touch</p>
                </div>
                @include("layouts.message")
                <div class="items">
                    <div class="item">
                        <form action="{{route('contact_store')}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <input type="text" name="name" id="name" placeholder="Enter your Name" style="width: 49.5%;">
                            <input type="text" name="surname" id="surname" placeholder="Enter your Surname" style="width: 49.5%;">
                            <input type="email" name="mail" id="mail" placeholder="Enter your E-mail">
                            <input type="text" name="subject" id="subject" placeholder="Enter Subject" style="width:49.5%">
                            <input type="text" name="description" id="description" placeholder="Enter Description" style="width:49.5%">
                            <textarea name="message" id="message" cols="30" rows="10" placeholder="Enter your Message"></textarea>
                            <input type="submit" value="Send" id="button">
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <!-- Contact - End -->
@endsection