@extends('layouts.mainlayout')
@section('content')


<div class = "maindiv" id = "home">



  <div class="row">



      <div class="col col-xs-12">
        <header class="clearfix">
          <section id = "banner">
            <a href="#">
              <img class="bannerImg" src="/img/banner.jpg" alt="Grand waves co">
            </a>
          </section>
        </header>
        </div>
      </div>
      <div class="row">
        <div class="container">
        <div class="col col-sx-12 col-md-4 ">
          <a href="/programmerorder" class="mainServiceProgrammer">
          <section class="card">

          <h3 class="mainSectionsHeaders">برنامه نویسی</h3>
          <hr>
          <ul>
            <li>طراحی وبسات</li>
            <li>نرم افزار اندروید</li>
            <li>اپلیکیشن دسکتاپ</li>
            <li>پروژه ترکیبی</li>
            <li>درخواست همکاری</li>
          </ul>
        </section>
      </a>
        </div>
        <div class="col col-sx-12 col-md-4">
          <a href="/gameorder" class="mainServicegame">
          <section class="card">
          <h3 class="mainSectionsHeaders">طراحی بازی</h3>
          <hr>
          <ul>
            <li>آنلاین</li>
            <li>استراتژی</li>
            <li>پلتفرمر</li>
            <li>کلمات</li>
            <li>و...</li>
          </ul>
        </section>
      </a>
        </div>
        <div class="col col-sx-12 col-md-4 ">
          <a href="/graphicsorder" class="mainServiceGraphic">

          <section class="card">

          <h3 class="mainSectionsHeaders">گرافیک</h3>
          <hr>
          <ul>
            <li>لوگو</li>
            <li>لوگوتایپ</li>
            <li>طراحی بنر</li>
            <li>کاور موزیک</li>
            <li>و...</li>
          </ul>
        </section>
          </div>
    </div>
  </div>
</div>



@endsection
