<<<<<<< HEAD
@extends('layout')
@section('formApprenant')
       <div class="formApprenant">
=======
    <div class="formApprenant">
>>>>>>> 536e1e210950a55d21512a0436942cb33d75e3ff
        <form action="{{route('apprenant.store')}}" method="post">
            @csrf
            <label for="firstName">Nom:</label>
            <input type="text" id="firsName" name="firstName">
            <label for="lastName">Prénom</label>
            <input type="text" name="lastName" id="lastName">
            <label for="email">email</label>
            <input type="email" name="email" id="email">
            <input type="hidden" value="{{$id}}" name="idPromotion">
            <input type="submit" value="add">
        </form>
    </div>
@endsection
 
