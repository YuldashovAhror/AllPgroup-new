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
                    <h5>Добавить категорию</h5>
                </div>
                <form action="{{ route('dashboard.projectto.store') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="card-body">
                        <div class="row">
                            <div class="col-6">
                                <div class="mb-3">
                                    <label class="form-label" for="exampleFormControlInput1">Фото </label>
                                    <p>max.20 MB</p>
                                    <input class="form-control" id="exampleFormControlInput1" type="file" name="photo">
                                </div>
                            </div>
                            <div class="col-6">
                                <label class="form-label" for="exampleFormControlInput1">project</label>
                                <div class="mb-3">
                                    <select class="calc__type" name="project" id="calc__type" style="width: 100%; padding:6px 12px; border-color: #ced4da; border-radius: 5px; margin-top: 35px;">
                                        @foreach ($projects as $project)
                                            <option value="{{ $project->id }}">{{ $project->name_ru }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <label class="form-label" for="alt_uz">Альт Uz</label>
                                <input class="form-control" name="alt_uz" id="alt_uz" type="text" placeholder="..." required="" value="">
                            </div>
                            <div class="col-md-4">
                                <label class="form-label" for="alt_ru">Альт Ru</label>
                                <input class="form-control" name="alt_ru" id="alt_ru" type="text" placeholder="..." required="" value="">
                            </div>
                            <div class="col-md-4 mb-3">
                                <label class="form-label" for="alt_en">Альт En</label>
                                <div class="input-group">
                                    <input class="form-control" name="alt_en" id="alt_en" type="text" placeholder="..." aria-describedby="inputGroupPrepend2" required="" value="">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <label class="form-label" for="title_uz">Заголовок Uz</label>
                                <input class="form-control" name="title_uz" id="title_uz" type="text" placeholder="..." required="" value="">
                            </div>
                            <div class="col-md-4">
                                <label class="form-label" for="title_ru">Заголовок Ru</label>
                                <input class="form-control" name="title_ru" id="title_ru" type="text" placeholder="..." required="" value="">
                            </div>
                            <div class="col-md-4 mb-3">
                                <label class="form-label" for="title_en">Заголовок En</label>
                                <div class="input-group">
                                    <input class="form-control" name="title_en" id="title_en" type="text" placeholder="..." aria-describedby="inputGroupPrepend2" required="" value="">
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
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col-md-10">
                            <h5>Все категории</h5>
                        </div>
                    </div>
                </div>
                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Фото</th>
                                <th scope="col">Дополнения к проекту</th>
                                <th scope="col" class="text-center">Действия</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($projecttos as $key => $projectto)
                                <tr>
                                    <th scope="row">{{ ++$key }}</th>
                                    <td><img src="{{ $projectto->photo }}" alt=""
                                            style="height: 100px; width: 100px"></td>
                                    <td>{{ $projectto->projects->name_ru }}</td>
                                    <td class="text-center">
                                        <button class="btn btn-xs btn-success mb-1" type="button" data-bs-toggle="modal"
                                            data-bs-target="#exampleModalCenter{{ $projectto->id }}Edit"><i
                                                class="bx bx-pencil">Изменить</i></button>
                                        <div class="modal fade" id="exampleModalCenter{{ $projectto->id }}Edit"
                                            tabindex="-1" aria-labelledby="exampleModalCenter" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered" role="document"
                                                style="max-width: 50vw">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title">Изменить</h5>
                                                    </div>
                                                    <div class="modal-body">
                                                        <form
                                                            action="{{ route('dashboard.projectto.update', $projectto) }}"
                                                            method="post" enctype="multipart/form-data">
                                                            @csrf
                                                            {{ method_field('put') }}
                                                            <div class="card-body">
                                                                <div class="row">
                                                                    <div class="col-6">
                                                                        <div class="mb-3">
                                                                            <label class="form-label"
                                                                                for="exampleFormControlInput1">Фото
                                                                            </label>
                                                                            <div class="col-12 text-center">
                                                                                <img style="height: 100px; width: 100px"
                                                                                    src="{{ $projectto->photo }}">
                                                                            </div>
                                                                            <p>max.20 MB</p>
                                                                            <input class="form-control mt-1"
                                                                                id="exampleFormControlInput1" type="file"
                                                                                name="photo">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-6">
                                                                        <label class="form-label"
                                                                            for="exampleFormControlInput1">project</label>
                                                                        <div style="padding-top: 30px">
                                                                            <i data-feather="loader" style="height: 100px; width: 100px; "></i>
                                                                            <select class="calc__type" name="project"
                                                                                id="calc__type" style="width: 100%; padding:6px 12px; border-color: #ced4da; border-radius: 5px">
                                                                                @foreach ($projects as $project)
                                                                                    <option value="{{ $project->id }}">
                                                                                        {{ $project->name_ru }}</option>
                                                                                @endforeach
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-md-4">
                                                                        <label class="form-label" for="alt_uz">Альт Uz</label>
                                                                        <input class="form-control" name="alt_uz" id="alt_uz" type="text" placeholder="..." required="" value="{{$projectto->alt_uz}}">
                                                                    </div>
                                                                    <div class="col-md-4">
                                                                        <label class="form-label" for="alt_ru">Альт Ru</label>
                                                                        <input class="form-control" name="alt_ru" id="alt_ru" type="text" placeholder="..." required="" value="{{$projectto->alt_uz}}">
                                                                    </div>
                                                                    <div class="col-md-4 mb-3">
                                                                        <label class="form-label" for="alt_en">Альт En</label>
                                                                        <div class="input-group">
                                                                            <input class="form-control" name="alt_en" id="alt_en" type="text" placeholder="..." aria-describedby="inputGroupPrepend2" required="" value="{{$projectto->alt_uz}}">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-md-4">
                                                                        <label class="form-label" for="title_uz">Заголовок Uz</label>
                                                                        <input class="form-control" name="title_uz" id="title_uz" type="text" placeholder="..." required="" value="{{$projectto->title_uz}}">
                                                                    </div>
                                                                    <div class="col-md-4">
                                                                        <label class="form-label" for="title_ru">Заголовок Ru</label>
                                                                        <input class="form-control" name="title_ru" id="title_ru" type="text" placeholder="..." required="" value="{{$projectto->title_uz}}">
                                                                    </div>
                                                                    <div class="col-md-4 mb-3">
                                                                        <label class="form-label" for="title_en">Заголовок En</label>
                                                                        <div class="input-group">
                                                                            <input class="form-control" name="title_en" id="title_en" type="text" placeholder="..." aria-describedby="inputGroupPrepend2" required="" value="{{$projectto->title_uz}}">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-md-4">
                                                                        <label for="discription_uz"
                                                                            class="form-label">Описание Uz</label>
                                                                        <div class="form-group">
                                                                            <textarea class="ckeditor form-control" name="discription_uz">{{ $projectto->discription_uz }}</textarea>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-4">
                                                                        <label class="form-label"
                                                                            for="discription_ru">Описание Ru</label>
                                                                        <textarea class="ckeditor form-control" name="discription_ru">{{ $projectto->discription_ru }}</textarea>
                                                                    </div>
                                                                    <div class="col-md-4 mb-3">
                                                                        <label class="form-label"
                                                                            for="discription_en">Описание En</label>
                                                                        <div class="input-group">
                                                                            <textarea class="ckeditor form-control" name="discription_en">{{ $projectto->discription_en }}</textarea>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                            </div>
                                                            <div class="card-footer text-end">
                                                                <button class="btn btn-primary"
                                                                    type="submit">Изменить</button>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <button class="btn btn-xs btn-danger" type="button" data-bs-toggle="modal"
                                            data-bs-target="#exampleModalCenter{{ $projectto->id }}"><i
                                                class="bx bx-trash"></i>Удалить</button>
                                        <div class="modal fade" id="exampleModalCenter{{ $projectto->id }}"
                                            tabindex="-1" aria-labelledby="exampleModalCenter" style="display: none;"
                                            aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title">Удалить?</h5>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <form
                                                            action="{{ route('dashboard.projectto.destroy', $projectto->id) }}"
                                                            method="post">
                                                            @csrf
                                                            {{ method_field('delete') }}
                                                            <button class="btn btn-primary" type="submit"
                                                                data-bs-original-title="" title="">Да</button>
                                                        </form>
                                                        <button class="btn btn-secondary" type="button"
                                                            data-bs-dismiss="modal" data-bs-original-title=""
                                                            title="">Нет</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
