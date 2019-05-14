@extends('layouts.app')

@section('content')

    <title>My Charts</title>



    {!! Charts::styles() !!}



    <div class="app">

        <center>

            {!! $chart->html() !!}

        </center>

    </div>

    <!-- End Of Main Application -->

    {!! Charts::scripts() !!}

    {!! $chart->script() !!}
@endsection
