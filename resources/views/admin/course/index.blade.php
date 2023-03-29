@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">

                <table class="table">
                    <thead>
                    <tr>
                        <th scope="col">ردیف</th>
                        <th scope="col">نام دوره</th>
                        <th scope="col">استاد دوره</th>
                        <th scope="col">مدت زمان دوره</th>
                        <th scope="col">تعداد ویدیو</th>
                        <th scope="col">قیمت دوره</th>
                        <th scope="col">عکس دوره</th>
                        <th scope="col">وضعیت</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>رنگ مو</td>
                        <td>امیر</td>
                        <td>1 ساعت</td>
                        <td>2</td>
                        <td>500000</td>
                        <td></td>
                        <td><a href="#" class="buttonstylered me-1"><i class="bi bi-trash-fill"></i></a><a href="#" class="buttonstyleyellow"><i class="bi bi-pencil-square"></i></a></td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
