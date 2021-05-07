@extends('layouts.master')

@section('content')

@section('content')
    <div class="container">

        @if(Session::has('success'))
            <div class="alert alert-success">
                {{Session::get('success')}}
            </div>
        @endif

        @if(Session::has('error'))
            {{Session::get('error')}}
        @endif

        <table class="table">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">{{__('messages.Offer Name')}}</th>
                <th scope="col">{{__('messages.Offer Price')}}</th>
                <th scope="col">{{__('messages.Offer detail')}}</th>
                <th scope="col">{{__('messages.photo')}}</th>
                <th scope="col">{{__('messages.opertaion')}}</th>
            </tr>
            </thead>
            <tbody>
            @foreach($offers as $offer)
                <tr>
                    <th scope="row">{{$offer->id}}</th>
                    <td>{{$offer->name}}</td>
                    <td>{{$offer->price}}</td>
                    <td>{{$offer->detail}}</td>
                    <td><img style="width: 90px; height: 90px;" src="{{asset('images/offers/'.$offer->photo)}}"></td>
                    <td>
                        <a href="{{url('offers/edit/'.$offer->id)}}"
                           class="btn btn-success">{{__('messages.edit')}}</a>
                        <a href="{{route('offers.delete',$offer->id)}}"
                           class="btn btn-danger">{{__('messages.delete')}}</a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@stop
