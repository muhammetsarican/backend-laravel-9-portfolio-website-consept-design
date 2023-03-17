@extends('layouts.home')
@section('content')
    <!-- Work - Start -->
    <section id="work">
        <div class="landing-section">
            <div class="landing-leftside">
                <i>
                    <img src="{{ asset('assets') }}/icons/suitcase.png" alt="" width="275px">
                    <!-- <lord-icon src="https://cdn.lordicon.com/xxdqfhbi.json" trigger="hover"
                                colors="primary:#133051,secondary:#ffc738,tertiary:#4bb3fd" style="width:450px;height:450px">
                            </lord-icon> -->
                </i>
            </div>
            <div class="landing-rightside">
                <h3>My Works</h3>
            </div>
        </div>

        <div class="work-general">
            <div class="work-info">
                <div class="heading-small works-header">Works:</div>
                <p>I joined a lot of bootcamps and I work on projects with groups and end of these bootcamps I took a
                    certificate. I learnt a lot of things at these bootcamps. One of the most valuable thing for me that
                    was working as group at these bootcamps. And I had new friends, We keep our connection fresh. You
                    can browse my certificates at below.</p>
            </div>
            <div class="items">
                <div class="category-select">
                    <ul>
                        <li>Desktop App</li>
                        <li>Web Design</li>
                        <li>Mobil App</li>
                        <li>Artificial Intelligence</li>
                    </ul>
                </div>
                @foreach ($works as $work)
                    <a href="">
                        <article class="item">
                            <div class="work-img-box">
                                <img class="work-img" src="{{ Illuminate\Support\Facades\Storage::url($work->image)}}" alt="">
                                <i>
                                    <img class="at-work" src="{{ asset('assets') }}/images/bionluk-2.png" alt="">
                                </i>
                                <p>
                                @foreach($work_categories as $category)
                                    @if ($category->work_id==$work->id)
                                        {{$category->category->title}}
                                    @endif
                                    ,
                                @endforeach
                                </p>
                            </div>
                            <div class="about-work">
                                <h3>{{$work->title}}</h3>
                                <p>{{$work->description}}</p>
                            </div>
                        </article>
                    </a>
                @endforeach
            </div>
        </div>
    </section>
    <!-- Work - End -->
@endsection
