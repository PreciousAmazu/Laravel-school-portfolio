@extends ('layout-blog');

@section ('content')
    <button><a href="/blog">Blog</a></button>

    <h1 class="heading">{{$articles->title}}</h1>
    <section class="content">
        <p class="feedback">
            {{ $articles->body }}
        </p>
    </section>
@endsection
