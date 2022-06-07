@extends('layouts.app')
@section('content')

    <div class="banner-wrap">
        <div class="banner"></div>
    </div>

    <div class="container">
        <h1>Registration</h1>
        <div class="d-md-flex justify-content-center">
            <div class="m-3 d-flex justify-content-center">
                <a href="/images/ttpac-register.pdf" target="_blank" class="btn-opacity"><div class="shadow btn btn-lg btn-light-teal btn-family">&#10097; Enroll today!</div></a>
            </div>
{{--            <div class="m-3 d-flex justify-content-center">--}}
{{--                <a href="/images/registration-encanto.pdf" target="_blank" class="btn-opacity"><div class="shadow btn btn-lg btn-teal btn-family"><strong>Encanto Summer Camp</strong> Info & Registration</div></a>--}}
{{--            </div>--}}
        </div>
        <div class="row">
            <div class="col-sm">
                <div class="d-flex justify-content-center my-4">
                    <img src="/images/registration-encanto-1.jpg" alt="encanto dance class" class="img-fluid rounded" style="max-height: 800px;">
                </div>
                <div class="d-flex justify-content-center mb-5">
                    <a href="/images/registration-encanto.pdf" target="_blank" class="btn-opacity"><div class="shadow btn btn-lg btn-teal btn-family"><strong>Encanto Summer Camp</strong> Info & Registration</div></a>
                </div>
            </div>
            <div class="col-sm">
                <div class="d-flex justify-content-center my-4">
                    <img src="/images/registration-extreme-dance-intensive.jpg" alt="extreme dance intensive" class="img-fluid rounded" style="max-height: 800px;">
                </div>
                <div class="d-flex justify-content-center mb-5">
                    <a href="/images/registration-extreme-dance-intensive.pdf" target="_blank" class="btn-opacity"><div class="shadow btn btn-lg btn-teal btn-family"><strong>Summer Dance Intensive</strong> Info & Registration</div></a>
                </div>
            </div>
        </div>
    </div>

@endsection
