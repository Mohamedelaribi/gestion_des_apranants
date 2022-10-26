@extends('leyout')
@section('form')
<form action="{{route('test.store')}}" method="POST">
    @csrf
    <input type="text" name="testName">
    <input type="submit">
</form>
@endsection