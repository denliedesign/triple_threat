<select class="form-select" name="hubType" id="hubType">
    <option selected="selected" value="recital">Recital</option>
    <option value="newsletter">Newsletter</option>
</select>

<div class="form-group my-5">
    <label for="hubImage">Hub Display Image</label><br>
    <input type="file" class="form-control-file" name="hubImage">
    <div>{{ $errors->first('hubImage') }}</div>
</div>

<div class="form-group my-5">
    <label for="hubTitle">Hub Title</label>
    <input id="hubTitle" type="text" class="form-control" name="hubTitle" value="{{ old('hubTitle') ?? $hub->hubTitle }}">
    <div>{{ $errors->first('hubTitle') }}</div>
</div>

<div class="form-group my-5">
    <label for="hubPdf">Hub Other Image</label><br>
    <input type="file" class="form-control-file" name="hubPdf">
    <div>{{ $errors->first('hubPdf') }}</div>
</div>

<div class="form-group my-5">
    <label for="hubContent">Hub Content</label>
    <textarea name="hubContent" cols="30" rows="10" class="form-control" id="hub-textarea">{{ old('hubContent') ?? $hub->hubContent }}</textarea>
    <div>{{ $errors->first('hubContent') }}</div>
</div>

@csrf
