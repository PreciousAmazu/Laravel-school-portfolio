@extends('layout')

@section('content')
    <div id="wrapper">
        <div id="page" class="container">
            <h1>Update Grade</h1>

            <form method="POST" action="/dashboard/{{$dashboard->id}}">
                @csrf
                @method('PUT')

                <div class="field">
                    <label class="label" for="test_name">Test name</label>

                    <div class="control">
                        <textarea class="textarea @error('test_name') is-danger @enderror" name="test_name" id="test_name">{{$dashboard->test_name}}</textarea>

                        @error('test_name')
                        <p class="help is-danger">{{ $errors->first('test_name') }}</p>
                        @enderror
                    </div>
                </div>

                <div class="field">
                    <label class="label" for="best_grade">Best grade</label>

                    <div class="control">
                        <textarea class="textarea @error('best_grade') is-danger @enderror" name="best_grade" id="best_grade">{{$dashboard->best_grade}}</textarea>

                        @error('best_grade')
                        <p class="help is-danger">{{ $errors->first('best_grade') }}</p>
                        @enderror
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
