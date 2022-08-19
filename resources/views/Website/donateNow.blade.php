@extends('Website.layouts.main')
@section('MainContent')
      <!-- ------------------------------------------------------------------------------------ -->
<div class="container">
    <h2 class="text-center color1">اضافة تبرع عيني</h2>
    <form class="shadow mx-auto mb-4 p-4" style="width:40%; height: 700px;" 
        action="{{ URL('/donateNow/store') }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="form-group" class="mb-4">
                <label for="name" class="form-label color1" id="lable_name"> اسم المتبرع</label>
                <input type="text" class="form-control bgColor5" id="name" name="name">
        </div>
        <div class="form-group" class="mb-4">
                <label for="phone" class="form-label color1" id="lable_phone"> رقم الجوال</label>
                <input type="phone" class="form-control bgColor5" id="phone" name="phone">
        </div>
        <div class="form-group" class="mb-4">
                <label for="national_id" class="form-label color1" id="lable_national_id"> رقم الهوية</label>
                <input type="text" class="form-control bgColor5" id="national_id" name="national_id">
        </div>
        <div class="form-group" class="mb-4">
                <label for="title" class="form-label color1" id="lable_donationname"> اسم التبرع</label>
                <input type="text" class="form-control bgColor5" id="title" name="title">
        </div>
        <div class="form-group" class="mb-4">
                <label for="quantity" class="form-label color1" id="lable_quantity">الكمية</label>
                <input class="form-control bgColor5" type="number" min="1" id="quantity" name="quantity">
        </div>
        <div class="form-group" class="mb-4">
                <label for="image" class="form-label color1" id="lable_image"> صورة للتبرع</label>
                <input type="file" class="form-control bgColor5" name="image" id="image">
        </div>
        <div class="form-group" class="mb-4">
                <label for="description" class="form-label color1" id="lable_description"> تفاصيل التبرع</label>
                <textarea class="form-control bgColor5" id="description" name="description"> </textarea>
        </div><br>
        <div class="row justify-content-md-center">
                <button class="col-md-6 btn text-white bgColor1" > تأكيد </button>
        </div>
</form>
</div>
<!-- ----------------------------------------------------------------------------------------- -->
@stop