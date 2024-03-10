@extends ('layout');

@section('style')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.4/css/bulma.min.css">
@endsection

@section ('content')
    @include('grades.notifications')
    <section>
        <div class="nbsa-data">
            <h1 class="heading">NBSA boundary</h1>
            <p>In order to pass each year 60 european credits are needed. when you get below 45 european credits you can't continue the course</p>
            <div class="nbsa-titles">
                <h3 class="nbsa-name">To pass</h3>
                <span class="nbsa-number">60 ECT needed</span>
            </div>
            <div class="nbsa-bar">
                <span class="nbsa-percentage"></span>
            </div>
        </div>
    </section>
    <table id="table" border="1">
        <tr>
            <th>Test Name</th>
            <th>Grade</th>
        </tr>
        @foreach($grades as $grade)
            <tr>
                <td>{{$grade->test_name}}</td>
                <td>{{$grade->best_grade}}</td>
                <td>
                    <form method="POST" action="/dashboard/{{$grade->id}}">
                        @csrf
                        @method('DELETE')
                        <button onclick="return confirm('{{ ('Are you sure you want to delete') }}')" type="submit">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
    <script type="text/javascript" src="js-DESKTOP-0B7C0U9_1/notification.js"></script>
@endsection
