@extends('layouts.home')
@section('content')
        <!-- Education - Start -->
        <section id="education">
            <div class="landing-section">
                <div class="landing-leftside">
                    <i>
                        <img src="{{asset('assets')}}/icons/textbook.png" alt="" height="300px">
                        <!-- <lord-icon src="https://cdn.lordicon.com/cqmhvubj.json" trigger="hover"
                            style="width:450px;height:450px">
                        </lord-icon> -->
                    </i>
                </div>
                <div class="landing-rightside">
                    <h3>My School Life</h3>
                </div>
            </div>
            <div class="school-general">
                <div class="school-rightside">
                    <div class="school-info">
                        <div class="school-header heading-small">Educational Background:</div>
                        <p>I started my school adventure in Kusbaba, I graduated from Kusbaba at 2013. Next year I started
                            the
                            Adem
                            Tolunay High School and I graduated here at 2017. After I took the university placement exam and
                            I
                            won
                            the Karabuk University Computer Engineering Faculty. Now I have few lesson that I have to pass,
                            If I
                            pass them I'll graduate. Wish me luck... </p>
                    </div>
                    <div class="items">
                        <article class="item">
                            <div class="date">
                                <p class="heading-large">2006 2013</p>
                            </div>
                            <div class="school">
                                <h3 class="heading-small">Kusbaba Primary School</h3>
                            </div>
                        </article>
                        <article class="item">
                            <div class="date">
                                <p class="heading-large">2013 2017</p>
                            </div>
                            <div class="school">
                                <h3 class="heading-small">Adem Tolunay High School</h3>
                            </div>
                        </article>
                        <article class="item">
                            <div class="date">
                                <p class="heading-large">2017 2023</p>
                            </div>
                            <div class="school">
                                <h3 class="heading-small">Karabuk University</h3>
                            </div>
                        </article>
                    </div>
                </div>
            </div>
        </section>
        <!-- Education - End -->
@endsection