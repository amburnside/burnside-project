@inject('countries', 'App\Http\Utilities\Country')

<div class="row">
    {{ csrf_field() }}

    <div class="col-md-6">
        <div class="form-group">
            <label for="street">Street:</label>
            <input type="text" name="street" id="street" class="form-control" value="{{ old('street') }}" required />
        </div>
        <div class="form-group">
            <label for="city">City:</label>
            <input type="text" name="city" id="city" class="form-control" value="{{ old('city') }}" required />
        </div>
        <div class="form-group">
            <label for="postcode">Postcode:</label>
            <input type="text" name="postcode" id="postcode" class="form-control" value="{{ old('postcode') }}" required />
        </div>
        <div class="form-group">
            <label for="country">Country:</label>
            <select name="country" id="country" class="form-control">
                @foreach($countries::all() as $country => $code)
                    <option value="{{ $code }}">{{ $country }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="state">State:</label>
            <input type="text" name="state" id="state" class="form-control" required />
        </div>

    </div>

    <div class="col-md-6">

        <div class="form-group">
            <label for="price">Sale Price:</label>
            <input type="text" name="price" id="price" class="form-control" value="{{ old('price') }}" required />
        </div>

        <div class="form-group">
            <label for="description">Home Description:</label>
            <textarea type="text" name="description" id="description" class="form-control" rows="10" required>{{ old('description') }}</textarea>
        </div>

    </div>

    <div class="col-md-12">
        <hr>
        <div class="form-group">
            <button type="submit" class="btn btn-primary">Create Flyer</button>
        </div>
    </div>

</div>
