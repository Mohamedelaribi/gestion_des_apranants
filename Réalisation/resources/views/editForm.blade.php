@extends('leyout')
@section('editForm')
    <form action="{{route('promotion.update',$promotion->id)}}" method="post">
            @csrf
            @method('PUT')
                <input type="text" value="{{$promotion->namePromotion}}" name="newNamePromotion">
                <input type="submit" name="updatePromotion">
    </form>
    <a href="{{ route('apprenant_create',$promotion->id)}}">ajouter un apprenant</a>

    <div class="container">
        <table class="table">
            <thead>
              <tr>
                <th scope="col">name apprenant</th>
                <th scope="col">edit apprenant</th>
              </tr>
            </thead>
            <tbody>
                @if ($apprenants[0]->idApprenant !=null)
                    @foreach ($apprenants as $apprenant)
                        <tr>
                            <td>{{$apprenant['firstName']}}</td>
                            <td>{{$apprenant['lastName']}}</td>
                            <td><a href="{{route('apprenant.edit',$apprenant->idApprenant)}}">edit</a></td>
                        </tr>
                @endforeach 
                @endif

      
            </tbody>
          </table>
      </div>
    </div>
@endsection

    
