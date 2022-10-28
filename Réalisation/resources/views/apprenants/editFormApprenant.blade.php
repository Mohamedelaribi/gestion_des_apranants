
@extends('leyout')
@section('editApprenant')
    <div class="contanierForm">
        <form action="{{route('apprenant.update',$apprenant->id)}}" method="post">
            @csrf
            @method('PUT')
                <input type="text" value="{{$apprenant->firstName}}" name="newNameApprenant">
                <input type="submit" name="updateApprenant">
        </form>
    </div>
@endsection
