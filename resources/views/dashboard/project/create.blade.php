@extends('layouts.dashboard.main')

@section('content')
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header pb-0">
                    <h5>Добавить Проект</h5>
                </div>
                <form action="{{ route('dashboard.project.store') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="card-body">
                        <div class="row">
                            <div class="col-6">
                                <div class="mb-3">
                                    <label class="form-label" for="exampleFormControlInput1">Основной Фото</label>
                                    <div class="col-12 text-center">
                                        <img class="mb-3" src="/issets/size.png" alt="" style="height: 150px; width: 150px">
                                    </div>
                                    <input class="form-control" id="exampleFormControlInput1" type="file" required name="photo">
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="mb-3">
                                    <label class="form-label" for="exampleFormControlInput1">Второй фото</label>
                                    <div class="col-12 text-center">
                                        <img class="mb-3" src="/issets/size.png" alt="" style="height: 150px; width: 150px">
                                    </div>
                                    <input class="form-control" id="exampleFormControlInput1" type="file" required name="second_photo">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <label class="form-label" for="name_uz">Название Uz</label>
                                <input class="form-control" name="name_uz" id="name_uz" type="text" placeholder="..." required="" value="">
                            </div>
                            <div class="col-md-4">
                                <label class="form-label" for="name_ru">Название Ru</label>
                                <input class="form-control" name="name_ru" id="name_ru" type="text" placeholder="..." required="" value="">
                            </div>
                            <div class="col-md-4 mb-3">
                                <label class="form-label" for="name_en">Название En</label>
                                <div class="input-group">
                                    <input class="form-control" name="name_en" id="name_en" type="text" placeholder="..." aria-describedby="inputGroupPrepend2" required="" value="">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <label for="discription_uz" class="form-label">Описание Uz</label>
                                <div class="form-group">
                                    <textarea class="ckeditor form-control" name="discription_uz"></textarea>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <label class="form-label" for="discription_ru">Описание Ru</label>
                                <textarea class="ckeditor form-control" name="discription_ru"></textarea>
                            </div>
                            <div class="col-md-4 mb-3">
                                <label class="form-label" for="discription_en">Описание En</label>
                                <div class="input-group">
                                    <textarea class="ckeditor form-control" name="discription_en"></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer text-end">
                        <button class="btn btn-primary" type="submit">Сохранить</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    
@endsection
