@extends('layouts.app')
@section('content')

    <div class="banner-wrap">
        <div class="banner"></div>
    </div>

    <div class="container pb-5" id="hub-central">
        <h1>hub central</h1>

        @can('update', \App\Hub::class)
            <p class="text-center"><a href="/hubs/create">Create New Hub</a></p>
        @endcan

        <div class="row mb-5">
            <div class="col-sm">
                <a href="/recital-hub" style="text-decoration: none;">
                    <img src="/images/hubs-recital.jpg" alt="" class="img-fluid rounded shadow">
                    <h2 class="text-center mt-3 font-weight-bold text-capitalize m-2" style="color: #12a9b0;">recital</h2>
                </a>
            </div>
            <div class="col-sm">
                <a href="/newsletter" style="text-decoration: none;">
                    <img src="/images/hubs-news.jpg" alt="" class="img-fluid rounded shadow">
                    <h2 class="text-center mt-3 font-weight-bold text-capitalize m-2" style="color: #12a9b0;">newsletter</h2>
                </a>
            </div>
        </div>
    </div>

@endsection
