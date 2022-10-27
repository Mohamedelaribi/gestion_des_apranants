@extends('leyout')
@section('editForm')
    <form action="{{route('promotion.update',$promotion->id)}}" method="post">
            @csrf
            @method('PUT')
                <input type="text" value="{{$promotion->namePromotion}}" name="newNamePromotion">
                <input type="submit" name="updatePromotion">
    </form>
    <a href="{{ url('promotion/apprenant')."/".$promotion->id}}">ajouter un apprenant</a>
@endsection

    
