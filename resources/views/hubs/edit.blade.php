@extends('layouts.app')
@section('content')

    <div class="text-white">
        <h3 class="text-center py-5">Edit Hub</h3>
        <div class="container pb-5">
            <form action="{{ route('hubs.update', ['hub' => $hub]) }}" method="POST" enctype="multipart/form-data">
                @method('PATCH')
                @include('hubs.form')

                <button class="btn btn-primary" type="submit">Save</button>
            </form>
        </div>
    </div>

@endsection
