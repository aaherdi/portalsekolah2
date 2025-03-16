@extends('layouts.pages', ['title' => 'Home'])

@section('content')
    <!-- Hero Section -->
    <section class="section hero">
        <div class="content">
            <h1 class="headline">SPCC Caloocan</h1>
            <p class="description">A Commitment to Excellence.</p>
            <a href="/admission" class="btn">be an spcnian</a>
        </div>
        <div class="image">
            <img src="{{ asset('spccweb/img/hero.jpg') }}" alt="SPCC Caloocan School Building" />
        </div>
        {{-- <canvas class="particles-background"></canvas> --}}
    </section>
    <!-- end Hero Section -->

    <!-- Upcoming Events Section -->
    @if (count($events) > 0)
        <section class="section upcoming-events">
            <div class="title">
                <h2 class="headline">Upcoming Events</h2>
                @if (count($events) > 4)
                    <div class="pagination">
                        <button class="btn btn-left">
                            <i class="fa fa-3x fa-angle-left"></i>
                        </button>
                        <button class="btn btn-right">
                            <i class="fa fa-3x fa-angle-right"></i>
                        </button>
                    </div>
                @endif
            </div>
            @foreach ($events as $event)
                <div class="card">
                    <h3 class="date">{{ $event->getEventDate() }}</h3>
                    <p class="event">{{ $event->title }}</p>
                </div>
            @endforeach
        </section>
    @endif
    <!-- end Upcoming Events Section -->

    <!-- Annoucement Section -->
    <section class="section annoucement">
        @if ($annoucement != null)
            <div class="content">
                <h2 class="headline">Annoucement</h2>
                <p>
                    {{ $annoucement }}
                </p>
            </div>
        @endif
    </section>
    <!-- end Annoucement Section -->

    <!-- About Section -->
    <section class="section about">
        <div class="image">
            <img src="{{ asset('spccweb/img/hero.jpg') }}" alt="SPCC Caloocan School Building" />
        </div>
        <div class="content">
            <h2>Systems Plus Computer College - Caloocan</h2>
            <div class="description">
                <p>
                    Systems Plus Computer College (SPCC) is a private school founded in 1997. It is affiliated with Systems
                    Plus Computer Foundation (SPCF) which was founded in 1985 at Balibago, Angeles City, Pampanga on June
                    27, 1985. With the growth of the school, campuses have been established in Cubao, Caloocan City, San
                    Fernando, and in Miranda, Angeles City. SPCC - Caloocan has a Basic Education Department and a College
                    Department.
                </p>
                <p>
                    Systems Plus Computer College offers meaningful opportunities for students who want to excel in the
                    computer and technical education. The emphasis on academic excellence and well-grounded values are
                    reflected in the degree programs offered by the school which showed evidence of innovation and high
                    technology.
                </p>
            </div>
        </div>

        <div class="bg">
            <img src="{{ asset('spccweb/img/circle-pattern-white.svg') }}" class="circle-pattern-big" />
        </div>
    </section>
    <!-- end About Section -->
    <!-- Latest News Section -->
    @if (count($posts) > 2)
        <section class="section latest-news">
            <h2 class="headline">Latest News</h2>

            @foreach ($posts as $post)
                <article>
                    <img src="{{ asset('/storage/cover_images/' . $post->cover_image) }}" />
                    <h3>
                        <a href="/articles/{{ $post->post_id }}" class="title">
                            {{ $post->title }}
                        </a>
                    </h3>
                    <div class="meta">
                        <span class="publish-date">{{ $post->getDateCreated() }}</span>
                    </div>
                    <p class="article-content">
                        {!! str_limit(strip_tags($post->body), 135) !!}
                    </p>
                    <a href="/articles/{{ $post->post_id }}" class="link">Read More</a>
                </article>
            @endforeach

            <div class="bg">
                <img src="{{ asset('spccweb/img/circle-pattern.svg') }}" class="circle-pattern-small-top" />
                <img src="{{ asset('spccweb/img/circle-pattern.svg') }}" class="circle-pattern-big-top" />
                <img src="{{ asset('spccweb/img/circle-pattern.svg') }}" class="circle-pattern-small" />
                <img src="{{ asset('spccweb/img/circle-pattern.svg') }}" class="circle-pattern-big" />
            </div>
        </section>
    @endif
    <!-- end Latest News Section-->
@endsection
