@extends('leyout')
@section('index')
  
<div id="data">
  <div class="getionPromotion">
        <a class="addPromotion" href="{{route('promotion.create')}}">ajouter promotion</a>
        <input type="text" id="Search" placeholder="Search Promotion">
  </div>

  <table class="table">
      <thead>
        <tr>
          <th scope="col">name Promotion</th>
          <th scope="col">Edit</th>
          <th scope="col">Delete</th>
        </tr>
      </thead>
      <tbody>
          @foreach ($data as $item)
        <tr>
          <td>{{$item['namePromotion']}}</td>
          <td><a href="{{route('promotion.edit',$item->id)}}" class="btn btn-success">Edit</a></td>
          <td><a href="{{route('promotion.edit',$item->id)}}" class="btn btn-danger">Delete</a></td>
        </tr>
        @endforeach

      </tbody>
    </table>
</div>
    <script type="text/javascript" src="{{ URL::asset('js/search.js') }}"></script>
    
@endsection