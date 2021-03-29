@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Update designer</div>

                <div class="card-body">
                    <form method="POST" action="{{route('master.update',[$master->id])}}">
                        <div class="form-group">
                            <label>Name:</label>
                            <input type="text" name="master_name" value="{{old('master_name', $master->name)}}">
                            <small class="form-text text-muted">Edit name</small>
                        </div>
                        <div class="form-group">
                            <label>Surname:</label>
                            <input type="text" name="master_surname" value="{{old('master_surname', $master->surname)}}">
                            <small class="form-text text-muted">Edit surname</small>
                        </div>
                        @csrf
                        <button class="btn btn-outline-success" type="submit">EDIT</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
