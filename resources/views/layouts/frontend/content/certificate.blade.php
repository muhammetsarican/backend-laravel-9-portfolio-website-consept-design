<?php
    function DateAsStr($date){
    $monthList=["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"];
    $year=substr($date, 0, strpos($date, "-"));
    $monthNumber=substr($date, strlen($year)+1, strpos($date, "-", strlen($year)+1)-strlen($year)-1);
    $month=$monthList[(int)$monthNumber-1];

    $day=substr($date, strpos($date, "-", strpos($date, $monthNumber))+1);
    return $month." ".$year;
    }
?>
@extends('layouts.home')
@section('content')
    <!-- Certificate - Start -->
    <section id="certificate">
        <div class="landing-section">
            <div class="landing-leftside">
                <i>
                    <img src="{{ asset('assets') }}/icons/achievement.png" alt="" width="250px">
                    <!-- <lord-icon src="https://cdn.lordicon.com/xxdqfhbi.json" trigger="hover"
                                colors="primary:#133051,secondary:#ffc738,tertiary:#4bb3fd" style="width:450px;height:450px">
                            </lord-icon> -->
                </i>
            </div>
            <div class="landing-rightside">
                <h3>My Certificates</h3>
            </div>
        </div>
        <div class="certificate-general">
            <div class="certificate-info">
                <div class="heading-small certificates-header">Certicates:</div>
                <p>I joined a lot of bootcamps and I work on projects with groups and end of these bootcamps I took a
                    certificate. I learnt a lot of things at these bootcamps. One of the most valuable thing for me that
                    was working as group at these bootcamps. And I had new friends, We keep our connection fresh. You
                    can browse my certificates at below.</p>
            </div>
            <div class="items">
                <ol>
                    @foreach ($certificates as $certificate)
                        <li class="heading-xsmall">
                            <div class="certificate-block">
                                <div class="certificate-img">
                                    <i><img style="width:75px;height:80px;object-fit:cover" src="{{  Illuminate\Support\Facades\Storage::url($certificate->image) }}" alt="">
                                    </i>
                                </div>
                                <div class="about-certificate">
                                    <a href="">{{$certificate->title}}</a>
                                    <p class="heading-xxsmall">{{DateAsStr($certificate->receipt_date)}}</p>
                                </div>
                            </div>
                        </li>
                    @endforeach
                    {{-- <li class="heading-xsmall">
                        <div class="certificate-block">
                            <div class="certificate-img">
                                <i><img src="{{ asset('assets') }}/images/nba-store.png" alt=""></i>
                            </div>
                            <div class="about-certificate">
                                <a href="">Introduction to Cyber Security</a>
                                <p class="heading-xxsmall">15 August 2021</p>
                            </div>
                        </div>
                    </li>
                    <li class="heading-xsmall">
                        <div class="certificate-block">
                            <div class="certificate-img">
                                <i><img src="{{ asset('assets') }}/images/nba-store.png" alt=""></i>
                            </div>
                            <div class="about-certificate">
                                <a href="">Introduction to Cyber Security</a>
                                <p class="heading-xxsmall">15 August 2021</p>
                            </div>
                        </div>
                    </li>
                    <li class="heading-xsmall">
                        <div class="certificate-block">
                            <div class="certificate-img">
                                <i><img src="{{ asset('assets') }}/images/nba-store.png" alt=""></i>
                            </div>
                            <div class="about-certificate">
                                <a href="">Introduction to Cyber Security</a>
                                <p class="heading-xxsmall">15 August 2021</p>
                            </div>
                        </div>
                    </li>
                    <li class="heading-xsmall">
                        <div class="certificate-block">
                            <div class="certificate-img">
                                <i><img src="{{ asset('assets') }}/images/nba-store.png" alt=""></i>
                            </div>
                            <div class="about-certificate">
                                <a href="">Introduction to Cyber Security</a>
                                <p class="heading-xxsmall">15 August 2021</p>
                            </div>
                        </div>
                    </li>
                    <li class="heading-xsmall">
                        <div class="certificate-block">
                            <div class="certificate-img">
                                <i><img src="{{ asset('assets') }}/images/nba-store.png" alt=""></i>
                            </div>
                            <div class="about-certificate">
                                <a href="">Introduction to Cyber Security</a>
                                <p class="heading-xxsmall">15 August 2021</p>
                            </div>
                        </div>
                    </li>
                    <li class="heading-xsmall">
                        <div class="certificate-block">
                            <div class="certificate-img">
                                <i><img src="{{ asset('assets') }}/images/nba-store.png" alt=""></i>
                            </div>
                            <div class="about-certificate">
                                <a href="">Introduction to Cyber Security</a>
                                <p class="heading-xxsmall">15 August 2021</p>
                            </div>
                        </div>
                    </li> --}}
                </ol>
            </div>
        </div>
    </section>
    <!-- Certificate - End -->
@endsection
