{{-- @extends('layout') --}}
    <div class="formApprenant">
        <form action="{{route('apprenant.store')}}" method="post">
            @csrf
            <label for="firstName">Nom:</label>
            <input type="text" id="firsName" name="firstName">
            <label for="lastName">Prénom</label>
            <input type="text" name="lastName" id="lastName">
            <label for="email">email</label>
            <input type="email" name="email" id="email">
        </form>
    </div>
