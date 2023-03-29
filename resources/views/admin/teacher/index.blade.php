@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                @if ($message = Session::get('success'))
                    <div class="alert alert-success">
                        <strong>{{ $message }}</strong>
                    </div>
                @endif
                <table class="table">
                    <thead>
                    <tr>
                        <th scope="col">ردیف</th>
                        <th scope="col">نام استاد</th>
                        <th scope="col">تلفن استاد</th>
                        <th scope="col">تصویر استاد</th>
                        <th scope="col">وضعیت</th>
                    </tr>
                    </thead>
                    <tbody>
                        @foreach ($teachers as $key => $teacher)
                    <tr>
                        <th scope="row">{{ $key + 1 }}</th>
                        <td>{{ $teacher->teacher_name }}</td>
                        <td>{{ $teacher->teacher_phone }}</td>
                        <td><img src="{{ asset('admin/images/'.$teacher->image) }}" alt="" width="80"></td>
                        <td><form action="{{ route('teacher.destroy', $teacher->id) }}" method="POST">
                                @method('DELETE')
                                @csrf
                            <button type="submit" class="buttonstylered -1"><i class="bi bi-trash-fill"></i></button>
                            </form>
                            <button href="#" class="buttonstyleyellow me-1"><i class="bi bi-pencil-square"></i></button></td>
                    </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
