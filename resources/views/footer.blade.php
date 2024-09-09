@include('trial-modal')

<div>
    <div class="container">
        <div id="next-steps-copy" class="row row-cols-1 row-cols-sm-1 row-cols-md-3 row-cols-lg-3 d-flex justify-content-center pt-5 pb-3">
            <div class="next-step mt-3 mt-md-0 shadow">
                <p class="txt-light-teal">Ready To Leap In?</p>
                <a href="/images/ttpac-register.pdf" target="_blank" class="btn-opacity"><div class="shadow btn btn-lg btn-light-teal btn-family">&#10097; Enroll today!</div></a>
            </div>
            <div class="next-step mt-3 mt-md-0 shadow">
                <p class="txt-teal">Want To Give It A Try?</p>
                <a target="_blank" class="btn-opacity" data-bs-toggle="modal" data-bs-target="#exampleModal"><div class="shadow btn btn-lg btn-teal btn-family">&#10097; Schedule A Trial!</div></a>
            </div>
            <div class="next-step mt-3 mt-md-0 shadow">
                <p class="txt-dark-teal">Still Have Questions?</p>
                <a href="#footer" class="btn-opacity"><div class="shadow btn btn-lg btn-dark-teal btn-family">&#10097; Contact Us!</div></a>
            </div>
        </div>
    </div>
</div>
<div class="text-white pb-5">
    <div class="container" id="footer">
        <div class="pt-5">
            <div class="row m-0 p-0">
                <div class="col-sm-4 mt-3">
                    <p class="lead">CONTACT</p>
                    <ul class="list-group">
                        <li class="list-group-item px-0 border-0" style="background: black; color: white;">
                            <ion-icon name="navigate"></ion-icon>
                            7302 15 Avenue, Brooklyn, NY 11228
                        </li>
                        <li class="list-group-item px-0 border-0" style="background: black; color: white;">
                            <ion-icon name="call"></ion-icon>
                            718-301-0719
                        </li>
                        <li class="list-group-item px-0 border-0" style="background: black; color: white;">
                            <ion-icon name="mail"></ion-icon>
                            <a href="mailto:triplethreatdancecompany@gmail.com" style="color: white; text-decoration: none;">triplethreatdancecompany@gmail.com</a>
                        </li>
                        <li class="list-group-item px-0 border-0" style="background: black; color: white;">
                            <strong>Register:</strong> Sept 4-6th 5-8pm
                        </li>
                        <li class="list-group-item px-0 border-0" style="background: black; color: white;">
                            First day of classes: Sept 9th
                        </li>
                    </ul>
                </div>
                <div class="col-sm-2 mt-3">
                    <p class="lead">SOCIAL</p>
                    <div class="d-flex d-inline">
                        <div class="d-inline">
                            <a class="nav-link text-white p-0" href="https://www.facebook.com/triplethreat.coinfo" target="_blank">
                                <ion-icon name="logo-facebook"></ion-icon>
                            </a>
                        </div>
                        <div class="d-inline">
                            <a class="nav-link text-white p-0 mx-3" href="https://www.instagram.com/triplethreatpacbrooklyn/?hl=en" target="_blank">
                                <ion-icon name="logo-instagram"></ion-icon>
                            </a>
                        </div>
{{--                        <div class="d-inline">--}}
{{--                            <a class="nav-link text-white p-0" href="https://www.youtube.com/RockStarDanceStudio" target="_blank">--}}
{{--                                <ion-icon name="logo-youtube"></ion-icon>--}}
{{--                            </a>--}}
{{--                        </div>--}}
                    </div>
                </div>
                <div class="col-sm-6 mt-3 ml-4">
                    <div style="width: 100%"><iframe width="100%" height="300" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=100%25&amp;height=600&amp;hl=en&amp;q=7223%2020th%20Ave%20Brooklyn,%20NY+(Triple%20Threat%20Performing%20Arts%20Company)&amp;t=&amp;z=17&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe></div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>

<div id="bottom" class="text-white-50 text-center pt-3" style="background: black;">
    © 2024 Triple Threat Performing Arts Company
</div>
<p id="credit" class="text-center m-0" style="background: black;">
    <a class="text-decoration-none" href="https://denliedesign.com/" target="_blank"><small class="text-muted">Dance Website Design by Denlie Design</small></a>
</p>
<div style="background: black;" class="text-center pb-3">
    @guest
        <small>
            <a class="text-decoration-none text-muted" href="{{ route('login') }}">{{ __('Admin') }}</a>
        </small>
    @else
        <small class="dropdown">
            <a class="text-decoration-none text-muted" href="{{ route('logout') }}"
               onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                {{ __('Logout') }}
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
        </small>
    @endguest
</div>
