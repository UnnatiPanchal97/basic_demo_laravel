@extends('layouts.app')
@section('content')
    <div class="row m-auto">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>{{ __('customer.customer') }}</h2>
            </div>
            <div class="pull-right mb-2">
                <a class="btn btn-success" href="{{ route('customers.create') }}">{{__('customer.newCustomer')}}</a>
            </div>
            @if ($message = Session::get('success'))
                <div class="alert alert-success">
                    <p>{{ $message }}</p>
                </div>
            @endif
   
            <table class="table table-bordered">
                <tr>
                    <th>{{__('customer.no')}}</th>
                    <th>{{__('customer.name')}}</th>
                    <th>{{__('customer.phone')}}</th>
                    <th>{{__('customer.email')}}</th>
                    
                    <th width="280px">{{__('customer.action')}}</th>
                </tr>
                @foreach ($customers as $customer)
                <tr>
                    <td>{{ ++$i }}</td>
                    <td>{{ $customer->name }}</td>
                    <td>{{ $customer->phone }}</td>
                    <td>{{$customer->email->email}}</td>
                    <td>
                        {{ Form::open(array('route' => array('customers.destroy', $customer->id))) }}
                            <a class="btn btn-info" href="{{ route('customers.show',$customer->id) }}">{{__('customer.show')}}</a>
                            <a class="btn btn-primary" href="{{ route('customers.edit',$customer->id) }}">{{__('customer.edit')}}</a>
                            {{ Form::token() }}
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">{{__('customer.delete')}}</button>
                            <a class="btn btn-link" href="{{route('customers.email',$customer->id)}}">{{__('customer.emailEdit')}}</a>
                        {{ Form::close() }}
                    </td>
                </tr>
                @endforeach
            </table>
  
            {!! $customers->links() !!}
        </div>
    </div>      
@endsection