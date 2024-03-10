@extends ('layout');

@section ('content')
    <section class="faq">
        <h1>Frequently asked questions</h1><br><br>
        @foreach($faqs as $faq)
            <article>
                <h3>{{ $faq->question }}</h3> <br>
                <p>{{ $faq->answer }}</p> <br>
                <p>{{ $faq->link }}</p> <br> <hr>
            </article>
        @endforeach
    </section>
@endsection
