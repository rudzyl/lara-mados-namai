@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    Designers
                    <a href="{{route('master.index', ['sort' => 'surname'])}}"> Sort by surname</a>
                    <a href="{{route('master.index', ['sort' => 'name'])}}"> Sort by name</a>
                    <a href="{{route('master.index')}}"> Default</a>
                </div>
                <div class="card-body">
                    <ul class="list-group">
                        @foreach ($masters as $master)
                        <li class="list-group-item">
                            <div>
                                {{$master->name}} {{$master->surname}}
                            </div>
                            <a class="btn btn-outline-primary" href="{{route('master.edit',[$master])}}">EDIT</a>
                            <form method="POST" action="{{route('master.destroy', [$master])}}">
                                @csrf
                                <button class="btn btn-outline-danger" type="submit">DELETE</button>
                            </form>
                            <br>
                        </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
