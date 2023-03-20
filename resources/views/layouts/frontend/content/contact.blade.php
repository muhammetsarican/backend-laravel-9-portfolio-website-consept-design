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
                <div class="items">
                    <div class="item" style="width: 100%">
                        @include("layouts.message")
                    </div>
                    <div class="item">
                        <form action="{{route('contact_store')}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <input type="text" name="name" id="name" placeholder="Enter your Name" style="width: 49.5%;">
                            <input type="text" name="surname" id="surname" placeholder="Enter your Surname" style="width: 49.5%;">
                            <input type="email" name="mail" id="mail" placeholder="Enter your E-mail" required>
                            <select name="category_id" id="" style="width:49.5%" required>
                                <option value="" selected hidden>Choose a Category</option>
                                @foreach ($contactCategories as $category)
                                    <option value="{{$category->id}}">{{$category->title}}</option>
                                @endforeach
                            </select>
                            <input type="text" name="subject" id="subject" placeholder="Enter Subject" style="width:49.5%">
                            <textarea name="message" id="message" cols="30" rows="10" placeholder="Enter your Message" required></textarea>
                            <input type="submit" value="Send" id="button">
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <script>
            let alertBox=document.querySelector(".alert");
            let alertCloseButton=document.querySelector(".close");
            let alertCounter=document.querySelector(".alert-counter");
            let animationDuration=Number(getComputedStyle(alertCounter).animationDuration.replace("s", ""))*1000;
            
            
            alertCloseButton.addEventListener("click", ()=>{
                alertBox.style.display="none";
            })
            if(alertBox){
            setTimeout(()=>{
                alertBox.style.display="none";
            }, animationDuration)
            }
        </script>
        <!-- Contact - End -->
@endsection