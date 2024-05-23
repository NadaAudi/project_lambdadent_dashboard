@extends('layouts.master')

@section('title')
    إضافة حالة
@endsection

@section('css')
    {{-- Css here --}}
@endsection

@section('root')
    لوحة التحكم


    
@endsection

@section('son1')
    الحالات
@endsection

@section('son2')
    إضافة حالة
@endsection

@section('content')
    {{-- content --}}
    <br>
    <div class="justify-content-center">
        <!-- general form elements -->
        <div class="card card-teal ">
            <div class="card-header">
                <h3 class="card-title col-lg-7" > اضافة حالة جديدة</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->

            <form method="Get" action="{{ route('Cases') }}">
                @csrf
                @method('Get')

                <div class="card-body">

                    <div class="form-group text-dark">
                        <label for="name">اسم المريض</label>
                        <input id="name" class="form-control bg- light" type="text" name="name" required />

                    </div>

                    <div class="form-group text-dark ">
                        <label for="date">التاريخ</label>
                        <input id="date" class="form-control bg- light" type="date" name="date" required />
                        {{-- Validation message --}}
                        @error('date')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group text-dark">
                        <label for="name">ملاحظات</label>
                        <input id="name" class="form-control bg- light" type="text" name="name" required />

                    </div>
                </div>

                <!-- /.card-body -->
                <br>
                <div class="card-footer">
                    <button type="submit" class="btn btn-outline-success col d-flex justify-content-center">إضافة</button>


                </div>
            </form>
        </div>
        <!-- /.card -->
    </div>
    <br>
@endsection

@section('scipts')
    {{-- Scripts here --}}
@endsection
