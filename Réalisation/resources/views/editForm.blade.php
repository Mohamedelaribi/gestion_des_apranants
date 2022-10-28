@extends('leyout')
@section('editForm')
    <form action="{{route('promotion.update',$promotion->id)}}" method="post">
            @csrf
            @method('PUT')
                <input type="text" value="{{$promotion->namePromotion}}" name="newNamePromotion">
                <input type="submit" name="updatePromotion">
    </form>
    <a href="{{route('apprenant_create',$promotion->id)}}">ajouter un apprenant</a>

    
  <table class="table">
    <thead>
      <tr>
        <th scope="col">name</th>
        <th scope="col">edit</th>
      </tr>
    </thead>
    <tbody>
        
        @if($apprenants[0]->id_Promotion != null)
        @foreach ($apprenants as $apprenant)
            <tr>
                <td>{{$apprenant['firstName']}}</td>
                <td>{{$apprenant['id_Apprenant']}}</td>
                <td><a href="{{route('apprenant_edit',$apprenant->id_Apprenant)}}">Edit apprenant</a></td>
            </tr>
            @endforeach
        @endif

        

      

    </tbody>
  </table>
@endsection

    
