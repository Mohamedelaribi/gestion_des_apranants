@extends('leyout')
@section('index')
  
<div id="data">
  <div class="getionPromotion">
        <a class="addPromotion" href="{{route('promotion.create')}}">ajouter promotion</a>
        <input type="text" id="Search" placeholder="Search Promotion">
  </div>
  
    </table>
    <table class="table">
      <thead>
        <tr>
<<<<<<< HEAD
          <th scope="col">name Promotion</th>
          <th scope="col">Edit</th>
          <th scope="col">Delete</th>
=======
          <th scope="col">Nom promotion</th>
          <th scope="col">Edit Promotion</th>
          <th scope="col">Delete Promotion </th>
>>>>>>> 536e1e210950a55d21512a0436942cb33d75e3ff
        </tr>
      </thead>
      <tbody>
        @foreach ($data as $item)
        <tr>
          <td>{{$item['namePromotion']}}</td>
<<<<<<< HEAD
          <td><a href="{{route('promotion.edit',$item->id)}}" class="btn btn-success">Edit</a></td>
          <td><a href="{{route('promotion.edit',$item->id)}}" class="btn btn-danger">Delete</a></td>
=======
          <td><a href="{{route('promotion.edit',$item->id)}}">edit</a></td>
          <td><a href="{{route('promotion.edit',$item->id)}}">Delete</a></td>
>>>>>>> 536e1e210950a55d21512a0436942cb33d75e3ff
        </tr>
        @endforeach
      </tbody>
    </table>
</div>
    <script type="text/javascript" src="{{ URL::asset('js/search.js') }}"></script>
    
@endsection