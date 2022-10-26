@extends('leyout')
@section('editForm')
    <form action="{{route('test.update',$promotion->id)}}" method="post">
            @csrf
            @method('PUT')
                <input type="text" value="{{$promotion->namePromotion}}" name="newNamePromotion">
                <input type="submit" name="updatePromotion">
    </form>
@endsection

    
