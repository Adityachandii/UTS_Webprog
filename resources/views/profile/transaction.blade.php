@extends('layouts.main')
@section('title', 'Transaction Page')

@section('container')
    @foreach($transaction as $item)
        {{ $item->transaction_date }}
        {{ $item->coffee->coffee_name }}<br>
        {{ $item->coffee->price }}<br>
        <br>
    @endforeach
@endsection
