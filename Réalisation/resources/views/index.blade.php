@extends('leyout')

@section('index')
  
<div id="data">
  <div class="getionPromotion">
        <a class="addPromotion" href="{{route('promotion.create')}}">ajouter promotion</a>
        <input type="text" id="Search">
  </div>

  <table class="table">
      <thead>
        <tr>
          <th scope="col">name Promotion</th>
          <th scope="col">edit</th>
        </tr>
      </thead>
      <tbody>
          @foreach ($data as $item)
        <tr>
          <td>{{$item['namePromotion']}}</td>
          <td><a href="{{route('promotion.edit',$item->id)}}">edit</a></td>
        </tr>
        @endforeach

      </tbody>
    </table>
</div>
    <script type="text/javascript" src="{{ URL::asset('js/search.js') }}"></script>
    
@endsection