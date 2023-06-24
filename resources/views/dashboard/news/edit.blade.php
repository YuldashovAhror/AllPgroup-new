@extends('layouts.dashboard.main')

@section('content')
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header pb-0">
                    <h5>Изменить Новости</h5>
                </div>
                <form action="{{ route('dashboard.news.update', $new) }}" method="post" enctype="multipart/form-data">
                    @csrf
                    {{ method_field('put') }}
                    <div class="card-body">
                        <div class="row">
                            <div>
                                <span >Категории новостей:</span>
                                <div >
                                    <select class="col-4 mb-3"  id="newcategory" class="calc__type" name="newcategory"  id="calc__type" style="width: 100%; padding:6px 12px; border-color: #ced4da; border-radius: 5px">
                                        @foreach ($categories as $category)
                                            <option value="{{ $category->id }}" >{{ $category['name_' . $lang] }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            
                            <div class="col-6">
                                <div>
                                    <label class="form-label" for="exampleFormControlInput1">Фото</label>
                                    <div  class="mb-3">
                                        <img style="height: 200px; width: 300px" src="{{ $new->photo }}">
                                    </div>
                                    <input class="form-control mb-3" id="exampleFormControlInput1" type="file" name="photo">
                                </div>
                            </div>
                            <div class="col-6">
                                <div>
                                    <label class="form-label" for="exampleFormControlInput1">Второй фото</label>
                                    <div class="mb-3">
                                        <img style="height: 200px; width: 300px" src="{{ $new->second_photo }}">
                                    </div>
                                    <input class="form-control mb-3" id="exampleFormControlInput1" type="file"  name="second_photo">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <label class="form-label" for="name_uz">Название Uz</label>
                                <input class="form-control" name="name_uz" id="name_uz" type="text" placeholder="..." required="" value="{{$new->name_uz}}">
                            </div>
                            <div class="col-md-4">
                                <label class="form-label" for="name_ru">Название Ru</label>
                                <input class="form-control" name="name_ru" id="name_ru" type="text" placeholder="..." required="" value="{{$new->name_ru}}">
                            </div>
                            <div class="col-md-4 mb-3">
                                <label class="form-label" for="name_en">Название En</label>
                                <div class="input-group">
                                    <input class="form-control" name="name_en" id="name_en" type="text" placeholder="..." aria-describedby="inputGroupPrepend2" required="" value="{{$new->name_en}}">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <label for="discription_uz" class="form-label">Описание Uz</label>
                                <div class="form-group">
                                    <textarea class="ckeditor form-control" name="discription_uz">{{$new->discription_uz}}</textarea>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <label class="form-label" for="discription_ru">Описание Ru</label>
                                <textarea class="ckeditor form-control" name="discription_ru">{{$new->discription_ru}}</textarea>
                            </div>
                            <div class="col-md-4 mb-3">
                                <label class="form-label" for="discription_en">Описание En</label>
                                <div class="input-group">
                                    <textarea class="ckeditor form-control" name="discription_en">{{$new->discription_en}}</textarea>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <label class="form-label" for="date">Дата</label>
                                <input class="form-control" name="date" id="date" type="text" placeholder="..."
                                    value="{{$new->date}}">
                            </div>
                            <div class="col-md-6">
                                <label class="form-label" for="youtube">YouTube</label>
                                <input class="form-control" name="youtube" id="youtube" type="text" placeholder="..."
                                    value="{{$new->youtube}}">
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
