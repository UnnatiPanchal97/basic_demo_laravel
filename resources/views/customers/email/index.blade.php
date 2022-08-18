@extends('layouts.app')
   
@section('content')
    <div class="row m-auto">
        <div class="col-lg-12 margin-tb mb-4">
            <div class="pull-left">
                <h2>{{__('customer.emailAdd')}}</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-info" href="{{ route('customers.index') }}">{{__('customer.back')}}</a>
            </div>
        </div>
        @if ($errors->any())
            <div class="alert alert-danger">
                <strong>{{__('customer.whoop')}}</strong>{{__('customer.inputProblem')}}<br><br>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        @if ($message = Session::get('success'))
                <div class="alert alert-success">
                    <p>{{ $message }}</p>
                </div>
            @endif
        {{ Form::open(array('route' => array('emails.updateEmail', $email->id))) }}
        
            {{ Form::token() }}   
            <!-- @method('PUT') -->
    
            <div class="row m-auto">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        {{ Form::label('name', 'Id') }}
                        <input type="text" name="id" value="{{ $email->id }}" class="form-control" placeholder="id" disabled>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12 mb-3 ">
                    <div class="form-group">
                        {{ Form::label('name', 'Name') }}
                        <input type="text" name="name" value="{{ $email->name }}" class="form-control" placeholder="Name" disabled>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12 mb-3 ">
                    <div class="form-group">
                        {{ Form::label('name', 'Email') }}
                        <input type="text" name="email" @if($emails == NULL) value="" @else value="{{$emails->email}}" @endif" class="form-control" placeholder="Email">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-success">{{__('customer.submit')}}</button>
                </div>
            </div>
        {{ Form::close() }}
    </div>
@endsection