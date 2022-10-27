@extends('leyout')
@section('form')
<form action="{{route('promotion.store')}}" method="POST">
    @csrf
    <input type="text" name="testName">
    <input type="submit">
</form>
@endsection