@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('home.Dashboard') }}</div>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('home.loggedAdmin') }}
                </div>
            </div>
            <a href="{{route('customers.index')}}" class="btn btn-info mt-2">{{ __('home.customersDetail') }}</a>
        
        </div>
    </div>
</div>
@endsection
