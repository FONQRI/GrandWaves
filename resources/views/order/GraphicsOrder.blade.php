@extends('layouts.mainlayout')
@section('content')


<div class = "maindiv" id = "order">
  <h2 class="formLabel" style="text-align:center;">فرم سفارش کار گرافیکی</h2>
  <hr class = "underLineHr" >
  <div class="row ">
    <div class="container ">
      <form method="post" action="/graphicsorder">

        <div class="col-xs-12 col-md-6">
          <div class="form-group">
            <label class = "formLabel " for="emailInput">نام و نام خانوادگی :</label>
            <input type="text" class="form-control " id="nameInput" placeholder="نام و نام خانوادگی را وارد کنید " required="required">
          </div>
            <div class="form-group">
              <label class = "formLabel " for="emailInput">ایمیل:</label>
              <input type="email" class="form-control " id="emailInput" placeholder="ایمیل خود را وارد کنید" required="required">
            </div>
            <div class="form-group">
              <label class = "formLabel " for="phoneInput">موبایل:</label>
              <input pattern="^09(1[0-9]|3[1-9]|2[1-9])-?[0-9]{3}-?[0-9]{4}$" type="phone" class="form-control" id="phoneInput" placeholder="موبایل" required="required">
            </div>
            <div class="form-group">
              <label for="orderType" class="formLabel">انتخاب نوع سفارش:</label>
              <select class="form-control" id="orderType" required="required">
                <option>لوگو</option>
                <option>لوگو تایپ</option>
                <option>تایپوگرافی</option>
                <option>طراحی بنر</option>
                <option>مهر خاتم</option>
                <option>کاور موزیک</option>
              </select>
            </div>
            <div class="form-group">
              <label class = "formLabel " for="phoneInput">بودجه مورد نظر:</label>
              <input pattern="^[1-9][0-9]*$" type="number" class="form-control" id="budgetInput" placeholder="حداکثر بودجه پروژه"     required="required">
            </div>
          </div>
          <div class="col-xs-12 col-md-6">
            <div class="form-group">
              <label for="comment" class="formLabel">توضیحات :</label>
              <textarea class="form-control" rows="16" id="orderText" required="required"></textarea>
            </div>
          </div>
          <div class="col col-xs-12 lowLinkParent">
            شما با ارسال درخواست با تمامی <a id="termLink" >قوانین</a> موافقت میکنید .
          </div>
          <!-- Trigger the modal with a button -->

          <!-- Modal -->
          <div id="myModal" class="modal fade" role="dialog" >
            <div class="modal-dialog">

              <!-- Modal content-->
              <div class="modal-content">
                <div class="modal-header">
                  <h4 class="modal-title">متن قوانین برای سفارش پروژه</h4>
                </div>
                <div class="modal-body">
                  <p> some text here.</p>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-success" data-dismiss="modal">بستن</button>
                </div>
              </div>

            </div>
          </div>


          </div>
          <div class="row">
  <div class="col col-xs-12">


          <div class="col-xs-2 col-lg-2"></div>
          <div class="col-xs-8 col-lg-8 ">
          <input type="submit" class="btn btn-block btn-danger" value="ارسال">
          </div>
          <div class="col-xs-2 col-lg-2"></div>
        </div>
        </div>
      </form>
      <div id="orderErrors">

      </div>
        </div>
      </div>
</div>



@endsection
