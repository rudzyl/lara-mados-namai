@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Create </div>

                <div class="card-body">
                    <form method="POST" action="{{route('outfit.store')}}">

                        <div class="form-group">
                            <label>Type:</label>
                            <input type="text" class="form-control" name="outfit_type">
                            <small class="form-text text-muted">enter type</small>
                        </div>

                        <div class="form-group">
                            <label>Color:</label>
                            <input type="text" class="form-control" name="outfit_color">
                            <small class="form-text text-muted">enter color</small>
                        </div>
                        <div class="form-group">
                            <label>Size:</label>
                            <input type="text" class="form-control" name="outfit_size">
                            <small class="form-text text-muted">enter size (int)</small>
                        </div>
                        <div class="form-group">
                            <label>About:</label>
                            <textarea id="summernote" name="outfit_about"></textarea>
                            <small class="form-text text-muted">about the outfit</small>
                        </div>

                        <div class="form-group">
                            <label>Designer: </label>
                            <select name="master_id">
                                @foreach ($masters as $master)
                                <option value="{{$master->id}}">{{$master->name}} {{$master->surname}}</option>
                                @endforeach
                            </select>
                            <small class="form-text text-muted">Select designer's name.</small>
                        </div>
                        @csrf
                        <button class="btn btn-outline-success" type="submit">ADD</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    $(document).ready(function() {
        $('#summernote').summernote();
    });

</script>
@endsection
