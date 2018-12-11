@extends('layouts.app')

@section('content')
<div class="jumbotron">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h3>Profile</h3>
                </div>
                <div class="form-group">
                    <div class="row">
                        <label class="col-md-4 col-form-label text-md-right" >Name</label>
                        <label class="col-7 form-control">{{$donor->name}}</label>
                    </div>

                    <div class="row">
                        <label class="col-md-4 col-form-label text-md-right" >Phone</label>
                        <label class="col-7 form-control">{{$donor->phone}}</label>
                    </div>
                    
                    <div class="row">
                        <label class="col-md-4 col-form-label text-md-right" >Email</label>
                        <label class="col-7 form-control">{{$donor->email}}</label>
                    </div>
                    
                    <div class="row">
                        <label class="col-md-4 col-form-label text-md-right" >Donation Method</label>
                        <label class="col-7 form-control">{{$donor->method}}</label>
                    </div>
                    <div class="row">
                        <label class="col-md-4 col-form-label text-md-right" >Amount</label>
                        <label class="col-7 form-control">{{$donor->amount}}</label>
                    </div>
                    <div class="row">
                            <label class="col-md-4 col-form-label text-md-right" >Donation Date</label>
                            <label class="col-7 form-control">{{$donor->created_at}}</label>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection