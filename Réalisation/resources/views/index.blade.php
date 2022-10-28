@extends('leyout')

@section('index')
  
<div id="data">
  <div class="getionPromotion">
        <a class="addPromotion" href="{{route('promotion.create')}}">ajouter promotion</a>
        <input type="text" id="Search">
  </div>
  
    </table>
    <table class="table">
      <thead>
        <tr>
          <th scope="col">Nom promotion</th>
          <th scope="col">Edit Promotion</th>
          <th scope="col">Delete Promotion </th>
        </tr>
      </thead>
      <tbody>
        @foreach ($data as $item)
        <tr>
          <td>{{$item['namePromotion']}}</td>
          <td><a href="{{route('promotion.edit',$item->id)}}">edit</a></td>
          <td><a href="{{route('promotion.edit',$item->id)}}">Delete</a></td>
        </tr>
        @endforeach
      </tbody>
    </table>
</div>
    <script type="text/javascript" src="{{ URL::asset('js/search.js') }}"></script>
    
@endsection