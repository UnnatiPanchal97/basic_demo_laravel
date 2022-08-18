@extends('layouts.app')
   
@section('content')
    <div class="row m-auto">
        <div class="col-lg-12 margin-tb mb-4">
            <div class="pull-left">
                <h2>{{__('customer.editCustomer')}}</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-info" href="{{ route('customers.index') }}">{{__('customer.back')}}</a>
            </div>
        </div>
        @if ($errors->any())
            <div class="alert alert-danger">
                <strong>Whoops!</strong> There were some problems with your input.<br><br>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        {{ Form::open(array('route' => array('customers.update', $customer->id))) }}
            {{ Form::token() }}   
            @method('PUT')
    
            <div class="row m-auto">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        {{ Form::label('name', 'Name') }}
                        <input type="text" name="name" value="{{ $customer->name }}" class="form-control" placeholder="Name">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12 mb-3 ">
                    <div class="form-group">
                        {{ Form::label('name', 'Phone') }}
                        <input type="text"   value="{{ $customer->phone }}" class="form-control" placeholder="Phone">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-success">{{__('customer.submit')}}</button>
                </div>
            </div>
        {{ Form::close() }}
    </div>
@endsection