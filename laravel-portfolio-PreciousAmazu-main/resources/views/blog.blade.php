@extends ('layout');

@section ('content')
    <h1 class="blog-header"> Blog post</h1>
    <section class="post">
        @foreach($articles as $article)
            <div>
                <h1><a href="{{$article->path()}}">{{ $article->title }}</a></h1>
                <p>{{$article->excerpt}}</p>
            </div>
        @endforeach
    </section>
@endsection

