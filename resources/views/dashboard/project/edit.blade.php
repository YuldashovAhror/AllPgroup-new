@extends('layouts.dashboard.main')

@section('content')
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header pb-0">
                    <h5>Изменить Проект</h5>
                </div>
                <form action="{{ route('dashboard.project.update', $project) }}" method="post" enctype="multipart/form-data">
                    @csrf
                    {{ method_field('put') }}
                    <div class="card-body">
                        <div class="row">
                            <div class="col-4">
                                <label class="form-label" for="exampleFormControlInput1">Категории</label>
                                <div class="col-12 text-center">
                                    <img class="mb-3" src="/issets/size.png" alt=""
                                    style="height: 242px; width: 270px">
                                </div>
                                <div>
                                    <select class="calc__type" name="category_id" id="calc__type"
                                        style="width: 100%; padding:6px 12px; border-color: #ced4da; border-radius: 5px">
                                        @foreach ($categories as $category)
                                            <option value="{{ $category->id }}">{{ $category->name_ru }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="mb-3">
                                    <label class="form-label" for="exampleFormControlInput1">Фото</label>
                                    
                                    <div class="col-12 text-center">
                                        <div class="col-6 text-center mt-3">
                                            <img style="height: 200px; width: 300px" src="{{ $project->photo }}">
                                        </div>
                                    </div>
                                    <p>max.20 MB</p>
                                    <input class="form-control mt-2" id="exampleFormControlInput1" type="file" name="photo">
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="mb-3">
                                    <label class="form-label" for="exampleFormControlInput1">Второй фото</label>
                                    
                                    <div class="col-12 text-center">
                                        <div class="col-6 text-center mt-3">
                                            <img style="height: 200px; width: 300px" src="{{ $project->second_photo }}">
                                        </div>
                                        <p>max.20 MB</p>
                                    </div>
                                    <input class="form-control mt-2" id="exampleFormControlInput1" type="file"  name="second_photo">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <label class="form-label" for="name_uz">Название Uz</label>
                                <input class="form-control" name="name_uz" id="name_uz" type="text" placeholder="..." required="" value="{{$project->name_uz}}">
                            </div>
                            <div class="col-md-4">
                                <label class="form-label" for="name_ru">Название Ru</label>
                                <input class="form-control" name="name_ru" id="name_ru" type="text" placeholder="..." required="" value="{{$project->name_ru}}">
                            </div>
                            <div class="col-md-4 mb-3">
                                <label class="form-label" for="name_en">Название En</label>
                                <div class="input-group">
                                    <input class="form-control" name="name_en" id="name_en" type="text" placeholder="..." aria-describedby="inputGroupPrepend2" required="" value="{{$project->name_en}}">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <label class="form-label" for="alt_uz">Альт Uz</label>
                                <input class="form-control" name="alt_uz" id="alt_uz" type="text" placeholder="..." required="" value="{{$project->alt_uz}}">
                            </div>
                            <div class="col-md-4">
                                <label class="form-label" for="alt_ru">Альт Ru</label>
                                <input class="form-control" name="alt_ru" id="alt_ru" type="text" placeholder="..." required="" value="{{$project->alt_uz}}">
                            </div>
                            <div class="col-md-4 mb-3">
                                <label class="form-label" for="alt_en">Альт En</label>
                                <div class="input-group">
                                    <input class="form-control" name="alt_en" id="alt_en" type="text" placeholder="..." aria-describedby="inputGroupPrepend2" required="" value="{{$project->alt_uz}}">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <label class="form-label" for="title_uz">Заголовок Uz</label>
                                <input class="form-control" name="title_uz" id="title_uz" type="text" placeholder="..." required="" value="{{$project->title_uz}}">
                            </div>
                            <div class="col-md-4">
                                <label class="form-label" for="title_ru">Заголовок Ru</label>
                                <input class="form-control" name="title_ru" id="title_ru" type="text" placeholder="..." required="" value="{{$project->title_uz}}">
                            </div>
                            <div class="col-md-4 mb-3">
                                <label class="form-label" for="title_en">Заголовок En</label>
                                <div class="input-group">
                                    <input class="form-control" name="title_en" id="title_en" type="text" placeholder="..." aria-describedby="inputGroupPrepend2" required="" value="{{$project->title_uz}}">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <label for="discription_uz" class="form-label">Описание Uz</label>
                                <div class="form-group">
                                    <textarea class="ckeditor form-control" name="discription_uz">{{$project->discription_uz}}</textarea>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <label class="form-label" for="discription_ru">Описание Ru</label>
                                <textarea class="ckeditor form-control" name="discription_ru">{{$project->discription_ru}}</textarea>
                            </div>
                            <div class="col-md-4 mb-3">
                                <label class="form-label" for="discription_en">Описание En</label>
                                <div class="input-group">
                                    <textarea class="ckeditor form-control" name="discription_en">{{$project->discription_en}}</textarea>
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
