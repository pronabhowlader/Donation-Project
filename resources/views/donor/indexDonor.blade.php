@extends('layouts.app')

@section('content')

<h1>Donors</h1>
<hr>
@if(count($donors)>0)
    @foreach ($donors as $donor)
        <div class="list-group-item">
            <h4><a href="/donor/{{$donor->id}}">{{$donor->name}}</a></h4>
            <label >Amount :</label>
            <label>{{$donor->amount}} Taka</label>
            <br>
            <small class="text-md-right">Donated on  {{$donor->created_at}} </small>
        </div>
    @endforeach
        {{$donors->links()}}
@else 
    <h3>No Donors Found</h3>
@endif

@endsection