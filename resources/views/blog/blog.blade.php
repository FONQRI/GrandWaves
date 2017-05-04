@extends('layouts.mainlayout')
@section('content')
<div class = "maindiv" id = "blog">


@foreach ($articles as $article)
<div class="row">
  <div class="col col-xs-3"></div>

    <div class="col col-xs-6">
      <div class="card">


<article >
  <a href="/blog/{{$article->id}}"><h2 class="articleListTitle">{{$article->title}}</h2></a>

      <div class="articleLisBody ">
        {{$article->body}}
      </div>
</article >
<a href="/blog/{{$article->id}}" class="btn btn-block btn-info">ادامه مطالب</a>
</div>
</div>
<div class="col col-xs-3"></div>
</div>

@endforeach

<!-- <div class = "maindiv" id = "blog" style="padding-top:0;">
  <div class="bgimg" >

    <div class="middle">
      <h1 class="commingsoonText">...COMING SOON </h1>
      <hr>
      <p id="demo" style="font-size:30px"></p>
    </div>

  </div>
</div> -->
</div>


@endsection
