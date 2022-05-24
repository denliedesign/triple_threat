@extends('layouts.app')
@section('content')

    <div class="py-5">
        <div class="container pb-5 text-white">
            <div class="d-flex justify-content-center">
                <img src="{{ asset('/storage/' . $hub->hubImage) }}" alt="" class="img-fluid" style="max-width: 400px; height: auto;">
            </div>
            <h3 class="text-center my-5">{{ $hub->hubTitle }}</h3>
            <p>{!! $hub->hubContent !!}</p>
            @if($hub->hubPdf)
                <div class="d-flex justify-content-center mt-5">
                    <img src="{{ asset('/storage/' . $hub->hubPdf) }}" class="img-fluid">
                </div>
            @endif
            <div class="mt-5">
                <a href="{{ url()->previous() }}" class="btn-opacity"><div class="shadow btn btn-lg btn-dark-teal btn-family">Back</div></a>
            </div>

        </div>
    </div>

@endsection
