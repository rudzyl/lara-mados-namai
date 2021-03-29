@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h2>Wardrobe</h2>
                    <div class="make-inline">
                        <form action="{{route('outfit.index')}}" method="get" class="make-inline">
                            <div class="form-group make-inline">
                                <label>Designer: </label>
                                <select class="form-control" name="master_id">
                                    <option value="0" disabled @if($filterBy==0) selected @endif>Select master</option>
                                    @foreach ($masters as $master)
                                    <option value="{{$master->id}}" @if($filterBy==$master->id) selected @endif>
                                        {{$master->name}} {{$master->surname}}
                                    </option>
                                    @endforeach
                                </select>
                            </div>
                            <button class="btn btn-outline-info" type="submit">Filter</button>
                        </form>
                        <a href="{{route('outfit.index')}}" class="btn btn-info"> Clear filter</a>
                    </div>
                </div>

                <div class="card-body">
                    <ul class="list-group">
                        @foreach ($outfits as $outfit)
                        <li class="list-group-item">
                            <div>
                                {{$outfit->type}} {{$outfit->outfitMaster->name}} {{$outfit->outfitMaster->surname}}
                            </div>
                            <a class="btn btn-outline-primary" href="{{route('outfit.edit',[$outfit])}}">EDIT</a>
                            <form method="POST" action="{{route('outfit.destroy', [$outfit])}}">
                                @csrf
                                <button class="btn btn-outline-danger" type="submit">DELETE</button>
                            </form>
                        </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
