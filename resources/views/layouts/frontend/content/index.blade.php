@extends('layouts.home')
@section('content')
        <!-- Profile - Start -->
        <section id="home">
            <div class="profile" id="profile">
                <div class="profile-img-box">
                    <img src="{{asset("assets")}}/images/profile-photo-2_loop-count-1.gif" alt="" class="profile-img">
                    <!-- <p>Muhammet Sarıcan</p> -->
                </div>
                <!-- <video src="{{asset("assets")}}/videos/WhatsApp Video 2022-12-03 at 18.21.25.mp4"></video> -->
                <div class="name">
                    <h2 class="heading-xxxlarge">Muhammet Sarıcan</h2>
                    <p class="profile-role">Computer Engineer | Jr. Full Stack Developer</p>
                    <p>Hello, My name is Muhammet, I am studing at Karabuk University and I work as freelancer at my free
                        times. I joined bootcamps several times and I prepared projects at this bootcamps with team. And now
                        I am developing my own desktop app, I'll publish it soon.</p>
    
                    <div class="freelance-links">
                        <p class="second-part">I have accounts for portfolio at different platforms. You can browse my
                            portfolio links at below.</p>
                        <div class="links">
                            <ul>
                                <li><a href="https://www.google.com" target="_blank"><button></button></a></li>
                                <li><a href="https://www.google.com" target="_blank"><button></button></a></li>
                                <li><a href="https://www.google.com" target="_blank"><button></button></a></li>
                                <li><a href="https://www.google.com" target="_blank"><button></button></a></li>
                                <li><a href="https://www.google.com" target="_blank"><button></button></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- <a href="#certificate" class="btn btn-dark">Go Certificates</a> -->
        </section>
        <!-- Profile - End -->
        <!-- Skill - Start -->
        <section id="skill">
            <div class="skill-landing">
                <div class="landing-left">
                    <p>My Best Skills</p>
                    <p>I have different skills because I am working as freelancer and it keeps my memory fresh. Usually I do
                        my works with Python.</p>
                </div>
                <div class="landing-right">
                    <i>
                        <img src="{{asset("assets")}}/icons/soft-skills.png" alt="">
                    </i>
                </div>
            </div>
            <div class="items">
                <article class="item">
                    <ul>
                        <li>
                            <div id="progress-bar">
                                <div id="progress" style="width: 50%"><span>HTML, CSS</span>
                                    <p><span>50%</span></p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div id="progress-bar">
                                <div id="progress" style="width: 60%"><span>Python</span>
                                    <p><span>60%</span></p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div id="progress-bar">
                                <div id="progress" style="width: 35%"><span>Javascript</span>
                                    <p><span>35%</span></p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div id="progress-bar">
                                <div id="progress" style="width: 15%"><span>jQuery</span>
                                    <p><span>15%</span></p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div id="progress-bar">
                                <div id="progress" style="width: 10%"><span>Bootstrap</span>
                                    <p><span>10%</span></p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div id="progress-bar">
                                <div id="progress" style="width: 15%"><span>.NET</span>
                                    <p><span>15%</span></p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div id="progress-bar">
                                <div id="progress" style="width: 35%"><span>Laravel</span>
                                    <p><span>35%</span></p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div id="progress-bar">
                                <div id="progress" style="width: 40%"><span>C#</span>
                                    <p><span>40%</span></p>
                                </div>
                            </div>
                        </li>
                    </ul>
                </article>
            </div>
        </section>
        <!-- Skill - End -->
        <!-- Comment - Start -->
        <section id="comment">
            <div class="comment-landing">
                <div class="landing-left">
                    <i>
                        <img src="{{asset("assets")}}/icons/comment.png" alt="">
                    </i>
                </div>
                <div class="landing-right">
                    <p><span>Comments</span> About Me</p>
                    <p>Comments from freelance</p>
                </div>
            </div>
            <div class="slider-place">
                <div class="items">
                    <div class="item">
                        <div class="c-profile-photo">
                            <i>
                                <img src="{{asset("assets")}}/images/bionluk-2.png" alt="">
                            </i>
                            <div class="c-name">
                                <p>bionluk</p>
                            </div>
                        </div>
                        <div class="c-rate-comment">
                            <div class="c-given-rate">
                                <i>
                                    <lord-icon src="{{asset("assets")}}/https://cdn.lordicon.com/snnvmbic.json" trigger="loop" delay="3500"
                                        colors="outline:#121331,primary:#ffc738,secondary:#ebe6ef" stroke="25"
                                        style="width:50px;height:50px">
                                    </lord-icon>
                                </i>
                                <p>0.0</p>
                            </div>
                            <div class="c-comment">
                                <p>Freelancer siparişi tamamlayamadı. (Bu bir otomatik sistem yorumudur.)</p>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="c-profile-photo">
                            <i>
                                <img src="{{asset("assets")}}/images/berkaycanpolat.jpg" alt="">
                            </i>
                            <div class="c-name">
                                <p>berkaycanbolat</p>
                            </div>
                        </div>
                        <div class="c-rate-comment">
                            <div class="c-given-rate">
                                <i>
                                    <lord-icon src="{{asset("assets")}}/https://cdn.lordicon.com/snnvmbic.json" trigger="loop" delay="3500"
                                        colors="outline:#121331,primary:#ffc738,secondary:#ebe6ef" stroke="25"
                                        style="width:50px;height:50px">
                                    </lord-icon>
                                </i>
                                <p>5.0</p>
                            </div>
                            <div class="c-comment">
                                <p>Hızlı sorun çözme odaklı güvenilir arkadaş</p>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="c-profile-photo">
                            <i>
                                <img src="{{asset("assets")}}/images/ahmetkozay.heic" alt="">
                            </i>
                            <div class="c-name">
                                <p>ahmetkozay</p>
                            </div>
                        </div>
                        <div class="c-rate-comment">
                            <div class="c-given-rate">
                                <i>
                                    <lord-icon src="{{asset("assets")}}/https://cdn.lordicon.com/snnvmbic.json" trigger="loop" delay="3500"
                                        colors="outline:#121331,primary:#ffc738,secondary:#ebe6ef" stroke="25"
                                        style="width:50px;height:50px">
                                    </lord-icon>
                                </i>
                                <p>5.0</p>
                            </div>
                            <div class="c-comment">
                                <p>Elinden gelenin fazlasını yapmaya çalışan işini çok iyi yapan bi beyfendi. Farklı
                                    projelerde tekrar çakışmak dileğiyle</p>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="c-profile-photo">
                            <i>
                                <img src="{{asset("assets")}}/images/no-avatar.png" alt="">
                            </i>
                            <div class="c-name">
                                <p>sezginsaliev</p>
                            </div>
                        </div>
                        <div class="c-rate-comment">
                            <div class="c-given-rate">
                                <i>
                                    <lord-icon src="{{asset("assets")}}/https://cdn.lordicon.com/snnvmbic.json" trigger="loop" delay="3500"
                                        colors="outline:#121331,primary:#ffc738,secondary:#ebe6ef" stroke="25"
                                        style="width:50px;height:50px">
                                    </lord-icon>
                                </i>
                                <p>5.0</p>
                            </div>
                            <div class="c-comment">
                                <p>Eline sağlık hocam mükemmel bir iş çıkarttınız tesekurler</p>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="c-profile-photo">
                            <i>
                                <img src="{{asset("assets")}}/images/halilc418.png" alt="">
                            </i>
                            <div class="c-name">
                                <p>halilc418</p>
                            </div>
                        </div>
                        <div class="c-rate-comment">
                            <div class="c-given-rate">
                                <i>
                                    <lord-icon src="{{asset("assets")}}/https://cdn.lordicon.com/snnvmbic.json" trigger="loop" delay="3500"
                                        colors="outline:#121331,primary:#ffc738,secondary:#ebe6ef" stroke="25"
                                        style="width:50px;height:50px">
                                    </lord-icon>
                                </i>
                                <p>5.0</p>
                            </div>
                            <div class="c-comment">
                                <p>Gayet hızlı, tecrübeli ve istediğim tarzda hizmet sağladı. Teşekkürler.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Comment - End -->
        <!-- Work Together - Start -->
        <section id="work-together">
            <div class="items">
                <div class="item">
                    <p>Need a Website or Desktop App?</p>
                </div>
                <div class="item">
                    <p>Let's Work Together <span><img src="{{asset("assets")}}/icons/right-arrow.png" alt=""></span></p>
                </div>
            </div>
        </section>
        <!-- Work Together - End -->
@endsection