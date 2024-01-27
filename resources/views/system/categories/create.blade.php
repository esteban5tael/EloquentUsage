<form action="{{ route('system.categories.store') }}" method="POST" class="m-2">
    @csrf

    <div class="mb-3">
        <label for="" class="form-label">{{ __('Name') }}</label>
        <input type="text"class="form-control" name="name" id="name" aria-describedby="helpId" placeholder="Name"
            required value="{{old('name')}}"/>


        <button class="btn btn-success btn-sm mt-2" type="submit">{{ __('Save') }}</button>
    </div>

</form>