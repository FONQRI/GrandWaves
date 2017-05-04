@extends('layouts.mainlayout')
@section('content')


<div class = "maindiv orderMain" id = "order">
  <div class="row">
    <section class=" col col-xs-12 aboutLinkCon">

      <section class="col col-xs-12 col-sm-4 aboutItems ">
  <div class="card">

          <a href="/programmerorder">
            <img  class = " img-responsive img-circle " src="/img/programmer.jpg" alt="programmer avatar">
            <h2>برنامه نویسی</h2>
          </a>
          </div>
      </section>

      <section class="col col-xs-12 col-sm-4 aboutItems ">
        <div class="card">
          <a href="/gameorder">
            <img  class = " img-responsive img-circle " src="/img/GameMaker.jpg" alt="Game Maker avatar">

  <h2>بازی</h2>
          </a>
        </div>
    </section>
        <section class="col col-xs-12 col-sm-4 aboutItems  ">
          <div class="card">
          <a href="/graphicsorder">
            <img  class = " img-responsive img-circle" src="/img/Graphic.png" alt="Graphic man avatar">

  <h2>گرافیک</h2>
          </a>
        </div>
        </section>

    </section>
  </div>
</div>


@endsection
