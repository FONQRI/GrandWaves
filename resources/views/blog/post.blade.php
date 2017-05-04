@extends('layouts.mainlayout')
@section('content')
<div class = "maindiv" id = "blog">

<div class="container">


      <div class="card">


<article >
<h2 class="articleListTitle">{{$article->title}}</h2>

      <div class="articleLisBody ">
        {{$article->body}}
      </div>
</article >
</div>
</div>
</div>


<!-- <div class = "maindiv" id = "blog" style="padding-top:0;">
  <div class="bgimg" >

    <div class="middle">
      <h1 class="commingsoonText">...COMING SOON </h1>
      <hr>
      <p id="demo" style="font-size:30px"></p>
    </div>

  </div>
</div> -->


@endsection
