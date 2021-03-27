@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Designers</div>

                <div class="card-body">
                    @foreach ($masters as $master)
                    <a href="{{route('master.edit',[$master])}}">{{$master->name}} {{$master->surname}}</a>
                    <form method="POST" action="{{route('master.destroy', [$master])}}">
                        @csrf
                        <button class="btn btn-outline-danger" type="submit">DELETE</button>
                    </form>
                    <br>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
