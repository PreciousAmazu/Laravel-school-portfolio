@extends ('layout');

@section ('content')
    <div id="wrapper">
        <div id="page" class="container">
            <h1>Update Faq</h1>

            <form method="POST" action="/faq/{{$faq->id}}">
                @csrf
                @method('PUT')
                <div class="field">
                    <label class="label" for="question">Question</label>

                    <div class="control">
                        <input class="input" type="text" name="question" id="question" value="{{$faq->question}}">
                    </div>
                </div>

                <div class="field">
                    <label class="label" for="excerpt">Answer</label>

                    <div class="control">
                        <textarea class="textarea" name="answer" id="answer">{{$faq->answer}}</textarea>
                    </div>
                </div>

                <div class="field">
                    <label class="label" for="link">Link</label>

                    <div class="control">
                        <textarea class="textarea" name="link" id="link">{{$faq->link}}</textarea>
                    </div>
                </div>

                <div class="field is-grouped">
                    <div class="control">
                        <button class="button is-link" type="submit">Submit</button>
                    </div>
                </div>
            </form>

            <h1>Delete Faq</h1>

            <form method="POST" action="/faq/{{$faq->id}}">
                @csrf
                @method('DELETE')
                <button type="submit">Delete</button>
            </form>
        </div>
    </div>
@endsection
