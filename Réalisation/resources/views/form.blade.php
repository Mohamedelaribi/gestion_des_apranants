



@extends('leyout')
@section('form')
<div class="addPromotionForm">
    <form action="{{route('promotion.store')}}" method="POST">
        @csrf
        <input type="text" name="testName" class="addPromotionInput" placeholder="Ajouter Un Promotion">
        <input type="submit" class="btn btn-light">
    </form>
</div>

@endsection