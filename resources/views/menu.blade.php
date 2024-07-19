<?php
$loaitin_arr =DB::table('loaitin')->select('id','name')
->orderby('thutu','asc')
->where('AnHien','=','1')
->limit(5)->get();
?>
<ul class="nav">
@foreach ($loaitin_arr as $item)
<li class="nav-item">
    <a class="nav-link" href="{{url ('cat',[$item->id])}}">{{$item->name}}</a>
  </li>
@endforeach
</ul>

