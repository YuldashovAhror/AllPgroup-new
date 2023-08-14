@extends('layouts.dashboard.main')

@section('content')
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    @if (session('success') != null)
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header pb-0">
                    <h5>Изменить Разделы</h5>
                </div>
                <form action="{{ route('dashboard.item.update', $item) }}" method="post" enctype="multipart/form-data">
                    @csrf
                    {{ method_field('put') }}
                    <div class="card-body">
                        <div class="row">
                            <div class="col-4">
                                <div class="mb-3">
                                    <label class="form-label" for="exampleFormControlInput1">Название
                                        RU</label>
                                    <input class="form-control" id="exampleFormControlInput1" type="text" name="name_ru"
                                        value="{{ $item->name_ru }}">
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="mb-3">
                                    <label class="form-label" for="exampleFormControlInput1">Название
                                        UZ</label>
                                    <input class="form-control" id="exampleFormControlInput1" type="text" name="name_uz"
                                        value="{{ $item->name_uz }}">
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="mb-3">
                                    <label class="form-label" for="exampleFormControlInput1">Название
                                        EN</label>
                                    <input class="form-control" id="exampleFormControlInput1" type="text" name="name_en"
                                        value="{{ $item->name_en }}">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <label for="discription_uz" class="form-label">Описание Uz</label>
                                <div class="form-group">
                                    <textarea class="ckeditor form-control" name="discription_uz">{{ $item->discription_uz }}</textarea>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <label class="form-label" for="discription_ru">Описание Ru</label>
                                <textarea class="ckeditor form-control" name="discription_ru">{{ $item->discription_ru }}</textarea>
                            </div>
                            <div class="col-md-4 mb-3">
                                <label class="form-label" for="discription_en">Описание En</label>
                                <div class="input-group">
                                    <textarea class="ckeditor form-control" name="discription_en">{{ $item->discription_en }}</textarea>
                                </div>
                            </div>
                        </div>
                        {{-- <label class="form-label" for="name_en">Хорошо</label>
                        <div class="row">
                            <div class="col-12">
                                <div class="input-group" style="font-size: 15px">
                                    <input type="checkbox" id="ok"
                                        @if ($item->ok == 1) @checked(true) @endif name="ok">
                                </div>
                            </div>
                        </div> --}}

                    </div>
                    <div class="card-footer text-end">
                        <button class="btn btn-primary" type="submit">Изменить</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
