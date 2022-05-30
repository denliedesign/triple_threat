@extends('layouts.app')
@section('content')

    <div class="gradient-splash">
        <div id="primary-bg">
{{--            <div class="color-filter-white"></div>--}}
            <div class="color-filter-gradient"></div>
            <h2 id="primary-txt-mobile" class="d-md-none text-white">dance lessons that teach life lessons</h2>
            <h2 id="primary-txt" class="d-none d-md-block text-white">dance lessons that teach life lessons</h2>
            {{--        <a href="https://kenosha-academy-performing-arts.studiosuite.io/m/website-studio-info-kit" target="_blank" class="d-md-none btn-opacity"><div id="button-mobile" class="shadow btn btn-lg btn-kapa-teal primary-btn-pos btn-family">&#10097; Download Our Studio Info Kit</div></a>--}}
            {{--        <a href="https://kenosha-academy-performing-arts.studiosuite.io/m/website-studio-info-kit" target="_blank" class="d-none d-md-block btn-opacity"><div id="button-tablet" class="shadow btn btn-lg btn-kapa-teal primary-btn-pos btn-family">&#10097; Download Our Studio Info Kit</div></a>--}}
        </div>

        {{--    @include('trial-modal')--}}

        <div class="container">
            <div id="next-steps">
                <div class="row row-cols-1 row-cols-sm-1 row-cols-md-3 row-cols-lg-3 d-flex justify-content-center">
                    <div class="next-step mt-3 mt-md-0 shadow">
                        <p class="txt-light-teal">Ready To Leap In?</p>
                        <a href="https://app.jackrabbitclass.com/regv2.asp?id=504663" target="_blank" class="btn-opacity"><div class="shadow btn btn-lg btn-light-teal btn-family">&#10097; Enroll today!</div></a>
                    </div>
                    <div class="next-step mt-3 mt-md-0 shadow">
                        <p class="txt-teal">Want To Give It A Try?</p>
                        <a href="https://kenosha-academy-performing-arts.studiosuite.io/s/trial-classes-kleuvjip" target="_blank" class="btn-opacity"><div class="shadow btn btn-lg btn-teal btn-family">&#10097; Schedule A Trial!</div></a>
                        {{--                    <div>--}}
                        {{--                        <button type="button" class="shadow btn btn-lg btn-blue btn-family btn-opacity" data-bs-toggle="modal" data-bs-target="#exampleModal">&#10097; Schedule A Trial!</button>--}}
                        {{--                    </div>--}}
                    </div>
                    <div class="next-step mt-3 mt-md-0 shadow">
                        <p class="txt-dark-teal">Still Have Questions?</p>
                        <a href="#footer" class="btn-opacity"><div class="shadow btn btn-lg btn-dark-teal btn-family">&#10097; Contact Us!</div></a>
                    </div>
                </div>
            </div>
        </div>

        <div id="vision" class="text-center text-white">
            <div class="container">
                <h2>We Have Built a Reputation for Excellence in Dance Instruction</h2>
                <p>
                    From your child’s first class to their graduation performance, TTPAC has a class for everyone! We specialize in beginners of all ages and offer training through pre-professional levels. But, TTPAC is More Than Just Great Dancing®! Our dancers go beyond technique to develop important life skills, learning to be respectful, confident and conscientious young people who share their gifts and talents with the community.
                </p>
            </div>
        </div>
    </div>

    <div class="pb-5" id="class-categories">
        <div class="container pb-5">
            <h2 class="text-center pt-5 text-white">Dance Classes</h2>
            <div class="row row-cols-1 row-cols-sm-1 row-cols-md-2 row-cols-lg-4">
                <div class="col-sm mt-4">
                    <img src="/images/classes-ballet.jpg" alt="ballet" class="img-fluid shadow rounded" style="max-height: 229px; object-fit: cover; object-position: -20% 0; width: 100%;">
                    <a href="/class-schedule" class="btn-opacity"><div class="shadow btn btn-lg btn-light-teal btn-family mt-2" style="width: 100%;">Ballet</div></a>
                </div>
                <div class="col-sm mt-4">
                    <img src="/images/classes-jazz.jpg" alt="jazz" class="img-fluid shadow rounded" style="max-height: 229px; object-fit: cover; object-position: -20% 0; width: 100%;">
                    <a href="/class-schedule" class="btn-opacity"><div class="shadow btn btn-lg btn-teal btn-family mt-2" style="width: 100%;">Jazz</div></a>
                </div>
                <div class="col-sm mt-4">
                    <img src="/images/classes-contemporary.jpg" alt="tap" class="img-fluid shadow rounded" style="max-height: 229px; object-fit: cover; object-position: -20% 0; width: 100%;">
                    <a href="/class-schedule" class="btn-opacity"><div class="shadow btn btn-lg btn-dark-teal btn-family mt-2" style="width: 100%;">Contemporary</div></a>
                </div>
                <div class="col-sm mt-4">
                    <img src="/images/classes-hip-hop.jpg" alt="hip hop" class="img-fluid shadow rounded" style="max-height: 229px; object-fit: cover; object-position: -20% 0; width: 100%;">
                    <a href="/class-schedule" class="btn-opacity"><div class="shadow btn btn-lg btn-light-teal btn-family mt-2" style="width: 100%;">Hip Hop</div></a>
                </div>
{{--                <div class="col-sm mt-4">--}}
{{--                    <img src="/images/age-group-6.jpg" alt="ages 1-4 dancers" class="img-fluid shadow rounded" style="max-height: 229px; object-fit: cover; object-position: -20% 30%; width: 100%;">--}}
{{--                    <a href="/classes#class-teens" class="btn-opacity"><div class="shadow btn btn-lg btn-teal btn-family mt-2" style="width: 100%;">Ages X-X</div></a>--}}
{{--                </div>--}}
{{--                <div class="col-sm mt-4">--}}
{{--                    <img src="/images/age-group-5.jpg" alt="ages 1-4 dancers" class="img-fluid shadow rounded" style="max-height: 229px; object-fit: cover; object-position: -20% 0; width: 100%;">--}}
{{--                    <a href="" target="_blank" class="btn-opacity"><div class="shadow btn btn-lg btn-dark-teal btn-family mt-2" style="width: 100%;">Boys</div></a>--}}
{{--                </div>--}}
{{--                <div class="col-sm mt-4">--}}
{{--                    <img src="/images/age-group-competitive.JPG" alt="dancer competing on stage" class="img-fluid shadow rounded" style="max-height: 229px; object-fit: cover; object-position: -20% 0; width: 100%;">--}}
{{--                    <a href="" target="_blank" class="btn-opacity"><div class="shadow btn btn-lg btn-light-teal btn-family mt-2" style="width: 100%;">Competitive</div></a>--}}
{{--                </div>--}}
{{--                <div class="col-sm mt-4">--}}
{{--                    <img src="/images/age-group-nutcracker.jpg" alt="nutcracker performance" class="img-fluid shadow rounded" style="max-height: 229px; object-fit: cover; object-position: -20% 40%; width: 100%;">--}}
{{--                    <a href="" target="_blank" class="btn-opacity"><div class="shadow btn btn-lg btn-teal btn-family mt-2" style="width: 100%;">Nutcracker</div></a>--}}
{{--                </div>--}}
            </div>
        </div>
    </div>

    <div id="checklist-bg">
        <div class="color-filter-black"></div>
        <h2 class="secondary-txt d-none d-md-block fw-bold" style="color: white;">Parents <ion-icon name="heart"></ion-icon> TTPAC...</h2>
        <div class="row secondary-txt-pos text-center">
            <div class="col-sm">
                <p class="my-0 text-white text-capitalize">
                    <ion-icon name="heart"></ion-icon> Safer Studio
                    <br><ion-icon name="heart"></ion-icon> Tech Enabled
                    <br><ion-icon name="heart"></ion-icon> Secured Facility
                </p>
            </div>
            <div class="col-sm">
                <p class="my-0 text-white">
                    <ion-icon name="heart"></ion-icon> Written Curriculum
                    <br><ion-icon name="heart"></ion-icon> Full-Time Admin
                    <br><ion-icon name="heart"></ion-icon> YPAD Certified
                </p>
            </div>
            <div class="col-sm">
                <p class="my-0 text-white">
                    <ion-icon name="heart"></ion-icon> Community Service
                    <br><ion-icon name="heart"></ion-icon> Background Checked
                    <br><ion-icon name="heart"></ion-icon> CPR Trained
                </p>
            </div>
        </div>
    </div>

    <div class="py-5">
        <div class="container text-white">
            <div class="row">
                <div class="col-sm d-flex align-items-center justify-content-center">
                    <div style="width: 100%;">
{{--                        <div class="d-flex justify-content-center mb-0">--}}
{{--                            <img src="" alt="program logo" class="img-fluid">--}}
{{--                        </div>--}}
                        <div class="text-center mb-0">
                            <h2 style="font-family: 'Nutcracker', cursive; font-size: 80px; color: #E4B977;">The Nutcracker</h2>
                        </div>
                        <p class="mb-5 text-center">
                        Check back soon for information on this year's Nutcracker!
                        </p>
                    </div>
                </div>
                <div class="col-sm d-flex align-items-center justify-content-center">
                    <div class="">
                        <img src="/images/nutcracker.JPG" alt="program photo" class="img-fluid rounded shadow">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="mtjgd-bg">
        <div class="color-filter-white"></div>
        <h2 class="secondary-txt fw-bold" style="color: black;">We're About More Than Just Great Dancing™</h2>
        <div>
            <div class="row tertiary-txt-pos fw-bold" style="color: black; font-size: 1.5em;">
                <div class="col-sm my-4">
                    “We don’t teach kids to make great dancers, we teach dance to make great kids.”
                    <br>
                    <em>-Misty Lown</em>
                </div>
                <div class="col-sm">
                    <img src="/images/mtjgd-logo.png" alt="more than just great dancing logo" class="img-fluid">
                </div>
            </div>
        </div>
    </div>

    <div id="safer-youth" class="py-5 text-white">
        <div class="container">
            <div class="row">
                <div class="col-sm">
                    <div class="d-flex justify-content-center">
                        <img src="/images/safer-studio-logo.png" alt="safer studio logo" class="img-fluid" style="width: 100%; height: 100%;">
                    </div>
                    <h2 class="text-center">TTPAC is a Safer Studio™</h2>
                    <p>
                        TTPAC focuses on a hierarchy of measures to create a Safer Studio™ environment beginning with requiring students and staff who are ill to stay home, followed by frequent hand cleaning and good hygiene practices, amplified cleaning, and making curricular and facility adaptations to minimizing contact and mingling.
                    </p>
                </div>
                <div class="col-sm">
                    <div class="d-flex justify-content-center">
                        <img src="/images/ypad-badge.png" alt="ypad logo" class="img-fluid" style="max-height: 354.04px;">
                    </div>
                    <h2 class="text-center">TTPAC is Youth Protection Advocates in Dance®  Certified!</h2>
                    <p>
                        <span class="txt-pink"><ion-icon name="heart"></ion-icon></span> Background checked and CPR certified teachers
                        <br><span class="txt-pink"><ion-icon name="heart"></ion-icon></span> Safer Studio™ Policy
                        <br><span class="txt-pink"><ion-icon name="heart"></ion-icon></span> Teacher training & proven curriculum
                        <br><span class="txt-pink"><ion-icon name="heart"></ion-icon></span> A focus on safety & wellness for every student
                        <br><span class="txt-pink"><ion-icon name="heart"></ion-icon></span> Secured facilities
                        <br><span class="txt-pink"><ion-icon name="heart"></ion-icon></span> Viewing windows
                        <br><span class="txt-pink"><ion-icon name="heart"></ion-icon></span> Social media safety practices
                    </p>
                </div>
            </div>
        </div>
    </div>

    {{--    @include('testimonials')--}}

    <div id="call-to-action" class="pt-5 pb-1">
        <div class="text-center pt-2">
            <h2 class="txt-teal">Be A Part Of Our <span class="txt-red">TTPAC</span> Family!</h2>
            {{--            <a href="https://app.thestudiodirector.com/mistysdance/portal.sd?page=Login" target="_blank" class="btn-opacity"><div class="shadow btn btn-lg btn-green btn-family">&#10097; Dance With Us Today!</div></a>--}}
        </div>
    </div>


@endsection
