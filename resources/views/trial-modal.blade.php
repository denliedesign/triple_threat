<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content bg-ivory text-white">
            <div>
                <img src="images/freetrialform.jpg" alt="" style="width: 100%;">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <h5 class="modal-title mt-2 text-center text-dark" id="trymodalLabel">Your First Class FREE</h5>
            <small class="text-muted text-center">Limited availability. For a short time only.</small>
            <div class="modal-body text-left mx-2">
                <form action="{{ route('trial.store') }}" method="POST" class="text-dark">
                    <div class="form-group row">
                        <label class="col-sm-4 col-form-label" for="parentName">Parent Name</label>
                        <div class="col-sm-8">
                            <input id="parentName" type="text" class="form-control" name="parentName" value="{{ old('parentName') }}">
                        </div>
                        <div>{{ $errors->first('parentName') }}</div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-4 col-form-label" for="email">Email</label>
                        <div class="col-sm-8">
                            <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}">
                        </div>
                        <div>{{ $errors->first('email') }}</div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-4 col-form-label" for="phone">Phone Number</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" name="phone" id="phone" value="{{ old('phone') }}">
                        </div>
                        <div>{{ $errors->first('phone') }}</div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-4 col-form-label" for="studentName">Student Name</label>
                        <div class="col-sm-8">
                            <input id="studentName" type="text" class="form-control" name="studentName" value="{{ old('studentName') }}">
                        </div>
                        <div>{{ $errors->first('studentName') }}</div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-4 col-form-label" for="birthdate">Birthdate</label>
                        <div class="col-sm-8">
                            <input type="date" class="form-control" name="birthdate" id="birthdate" required>
                        </div>
                    </div>
                    @csrf
                    <div class="d-flex justify-content-center">
                        <button type="submit" class="btn btn-danger mt-2">Claim Offer</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- End Modal -->
