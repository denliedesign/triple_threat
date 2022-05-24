@extends('layouts.app')
@section('content')

    <div class="container mb-5 rounded shadow text-white">
        <div class="row">
            <div class="col-12">
                <h3 class="py-5 text-center">Add New Hub</h3>
            </div>
        </div>
        <div class="container pb-5">
            <div class="row">
                <div class="col-12">
                    <form action="/hubs" method="POST" enctype="multipart/form-data">
                        @include('hubs.form')

                        <button type="submit" class="btn btn-primary">Add Hub</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection
