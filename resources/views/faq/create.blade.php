@extends ('layout');

@section ('content')
    <div id="wrapper">
        <div id="page" class="container">
            <h1>New Faq</h1>

            <form method="POST" action="/faq">
                @csrf

                <div class="field">
                    <label class="label" for="question">Question</label>

                    <div class="control">
                        <input class="input" type="text" name="question" id="question">
                    </div>
                </div>

                <div class="field">
                    <label class="label" for="excerpt">Answer</label>

                    <div class="control">
                        <input class="textarea" name="answer" id="answer">
                    </div>
                </div>

                <div class="field">
                    <label class="label" for="link">Link</label>

                    <div class="control">
                        <input class="textarea" name="link" id="link">
                    </div>
                </div>

                <div class="field is-grouped">
                    <div class="control">
                        <button class="button is-link" type="submit">Submit</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
