@extends('layouts.app')
  
@section('content')
    <div class="row m-auto">
        <div class="col-lg-12 margin-tb mb-4">
            <div class="pull-left">
                <h2>{{__('customer.showCustomer')}}</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-info" href="{{ route('customers.index') }}">{{__('customer.back')}}</a>
            </div>
        </div>
    </div>
   
    <div class="row m-auto">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Name:</strong>
                {{ $customer->name }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Phone:</strong>
                {{ $customer->phone }}
            </div>
        </div>
    </div>
@endsection