@extends('layouts.master')

@section('content')

@section('content')
    <div class="container">
        @if(Session::has('success'))
            <div class="alert alert-success" role="alert">
                {{Session::get('success')}}
            </div>
        @endif
        <br>
        <form method="post" action="{{route('offers.store')}}">
            @csrf
            <div class="form-group">
                <label for="exampleInputEmail1">{{__('messages.Offer Name Language')}}</label>
                <input type="text" class="form-control" name="name_ar" value="{{$offerByID->name_ar}}">
                @error('name_ar')
                <small class="form-text text-danger">{{$message}}</small>
                @enderror
            </div>


            <div class="form-group">
                <label for="exampleInputEmail1">{{__('messages.Offer Name Language')}}</label>
                <input type="text" class="form-control" name="name_en" value="{{$offerByID->name_en}}">
                @error('name_en')
                <small class="form-text text-danger"> {{$message}}</small>
                @enderror
            </div>


            <div class="form-group">
                <label for="exampleInputPassword1">{{__('messages.Offer Price')}}</label>
                <input type="number" class="form-control" name="price" value="{{$offerByID->price}}">
                @error('price')
                <small class=" form-text text-danger">{{$message}}</small>
                @enderror
            </div>


            <div class="form-check">
                <label> {{__('messages.Offer detail Language')}}</label>
                <textarea class="form-control" rows="3" name="detail_ar" value="{{$offerByID->detail_ar}}"></textarea>
                @error('detail_ar')
                <small class=" form-text text-danger">{{$message}}</small>
                @enderror
            </div>


            <div class="form-check">
                <label> {{__('messages.Offer detail Language')}}</label>
                <textarea class="form-control" rows="3" name="detail_en" value="{{$offerByID->detail_ar}}"></textarea>
                @error('detail_en')
                <small class=" form-text text-danger">{{$message}}</small>
                @enderror
            </div>


            <button type="submit" class="btn btn-primary my-4">{{__('messages.Save Offer')}}</button>
        </form>
    </div>
@stop
