@extends ('layout');

@section ('content')
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
    <table id="table" border="1"></table>
    <!--Link to javascript file-->
    <script src="./js-DESKTOP-0B7C0U9_1/dashboard.js"></script>
@endsection
