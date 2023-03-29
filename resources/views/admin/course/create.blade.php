@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <form action="{{ route('course.store') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <h3 class="text-center fw-bold">دوره جدید</h3>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="input-container">
                                <input placeholder="نام دوره را وارد کنید" class="input-field" type="text">
                                <label for="input-field" class="input-label mt-2">نام دوره</label>
                                <span class="input-highlight"></span>
                              </div>
                            
                              <div class="input-container">
                                <input placeholder="مدت دوره را وارد کنید" class="input-field" type="text">
                                <label for="input-field" class="input-label mt-2">مدت دوره</label>
                                <span class="input-highlight"></span>
                              </div>

                              <label class="mt-2 fw-bold">استاد دوره:</label>
                              <select class="form-control mt-1">
                                @foreach ($teachers as $teacher)
                                <option value="{{ $teacher->id }}"
                                    @if (old('$teacher') == $teacher->id) selected @endif>
                                    {{ $teacher->teacher_name }}
                                </option>
                            @endforeach
                              </select>

                            <label class="mt-2 fw-bold">عکس دوره:</label>
                            <input type="file" name="image" class="form-control mt-1 p-2" placeholder="عکس دوره را وارد کنید">
                            <label class="mt-2 fw-bold">سطح دوره:</label>
                            <select class="form-control mt-1">
                              <option value="مقدماتی">مقدماتی</option>
                              <option value="متوسط">متوسط</option>
                              <option value="پیشرفته">پیشرفته</option>
                            </select>
                        </div>

                        
                        <div class="col-md-6">
                            <div class="input-container">
                                <input placeholder="قیمت دوره را وارد کنید" class="input-field" type="text">
                                <label for="input-field" class="input-label mt-2">قیمت دوره</label>
                                <span class="input-highlight"></span>
                              </div>

                            <div class="input-container">
                                <input placeholder="تعداد ویدیو دوره را وارد کنید" class="input-field" type="text">
                                <label for="input-field" class="input-label mt-2">تعداد ویدیو دوره</label>
                                <span class="input-highlight"></span>
                              </div>
                              
                              <div class="input-container">
                                <input placeholder="تاریخ بروزرسانی دوره را وارد کنید" class="input-field" type="text">
                                <label for="input-field" class="input-label mt-2">تاریخ بروزرسانی دوره</label>
                                <span class="input-highlight"></span>
                              </div>

                            <label class="mt-2 fw-bold">دموی دوره:</label>
                            <input type="file" name="demo" class="form-control mt-1" placeholder="ویدیو دمو دوره را وارد کنید">
                            <label class="mt-2 fw-bold">توضیحات دوره:</label>
                            <textarea type="text" name="discription" class="form-control mt-1" placeholder="توضیحات دوره را وارد کنید"></textarea>

                        </div>

                    </div>
                    <button type="submit" name="submit" class="buttonstyle mt-2">ثبت دوره جدید</button>
                </form>
            </div>
        </div>
    </div>
@endsection
