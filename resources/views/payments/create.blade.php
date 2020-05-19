@extends('layouts.app')

@section('content')

<form action="{{ route('payment.store')}}" method="post">
    @csrf
    <button type="submit">Make Payment</button>

</form>

<style>
    button{
        background-color: #2daae4;
        color: white;
        border: none;
        padding: 20px;
        border-radius: 5px;
        margin: 20px;
    }
</style>

@endsection
