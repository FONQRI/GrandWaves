@extends('layouts.mainlayout')
@section('content')

<div class = "maindiv" id = "blog">

<article >
  <h2>create new post</h2>

  <div class="container">

    <form class="" action="#" method="post">
      <input type="hidden" name="_token" value="{{ csrf_token() }}">
      <div class="form-group">
        <label class = "formLabel " for="emailInput">عنوان</label>
        <input type="text" class="form-control " id="postTitle" name="postTitle" value="{{old('postTitle')}}" placeholder="عنوان را وارد کنید" required="required">
      </div>
      <div class="form-group">
        <label for="comment" class="formLabel">پست :</label>
        <textarea class="form-control" rows="16" id="postContent" name = "postContent" required="required"> {{old('postContent')}}</textarea>
      </div>
      <button type="submit" class="btn btn-success btn-block" data-dismiss="modal">ارسال</button>

    </form>
  </div>

</article>

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
