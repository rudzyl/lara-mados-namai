@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Wardrobe</div>

                <div class="card-body">
                    @foreach ($outfits as $outfit)
                    <a href="{{route('outfit.edit',[$outfit])}}">{{$outfit->type}} {{$outfit->outfitMaster->name}} {{$outfit->outfitMaster->surname}}</a>
                    <form method="POST" action="{{route('outfit.destroy', [$outfit])}}">
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
