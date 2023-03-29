@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <form action="{{ route('teacher.store') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <h3 class="text-center fw-bold">افزودن استاد</h3>
                    @include('admin.alerts.error')
                    <div class="row">
                        <div class="col-md-12">
                            <div class="input-container">
                                <input name="teacher_name" placeholder="نام استاد را وارد کنید" class="input-field" type="text">
                                <label for="input-field" class="input-label mt-2">نام استاد</label>
                                <span class="input-highlight"></span>
                              </div>
                            
                              <div class="input-container">
                                <input name="teacher_phone" placeholder="شماره تلفن استاد را وارد کنید" class="input-field" type="text">
                                <label for="input-field" class="input-label mt-2">تلفن استاد</label>
                                <span class="input-highlight"></span>
                              </div>
                            <label class="mt-2 fw-bold">عکس استاد:</label>
                            <input name="image" type="file" name="image" class="form-control mt-2 p-2" placeholder="عکس دوره را وارد کنید">
                            <label class="mt-2 fw-bold">توضیحات:</label>
                            <textarea name="teacher_description" type="text" name="discription" class="form-control mt-2" placeholder="توضیحات را وارد کنید"></textarea>
                        </div>

                     

                    </div>
                    <button type="submit" class="buttonstyle mt-3">ثبت استاد جدید</button>
                </form>
            </div>
        </div>
    </div>
@endsection
