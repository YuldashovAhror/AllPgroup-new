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
                <form action="{{ route('dashboard.serviceto.store') }}" method="post" enctype="multipart/form-data">
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
                            <div class="col-6" style="padding-top: 40px">
                                <label class="form-label" for="exampleFormControlInput1">service</label>
                                <div class="mb-3">
                                    <select class="calc__type" name="service" id="calc__type" style="width: 100%; padding:6px 12px; border-color: #ced4da; border-radius: 5px">
                                        @foreach ($services as $service)
                                            <option value="{{ $service->id }}">{{ $service->title_ru }}</option>
                                        @endforeach
                                    </select>
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
                            @foreach ($servicetos as $key => $serviceto)
                                <tr>
                                    <th scope="row">{{ ++$key }}</th>
                                    <td><img src="{{ $serviceto->photo }}" alt=""
                                            style="height: 100px; width: 100px"></td>
                                    <td>{{ $serviceto->services->title_ru }}</td>
                                    <td class="text-center">
                                        <button class="btn btn-xs btn-success" type="button" data-bs-toggle="modal"
                                            data-bs-target="#exampleModalCenter{{ $serviceto->id }}Edit"><i
                                                class="bx bx-pencil">Изменить</i></button>
                                        <div class="modal fade" id="exampleModalCenter{{ $serviceto->id }}Edit"
                                            tabindex="-1" aria-labelledby="exampleModalCenter" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered" role="document"
                                                style="max-width: 50vw">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title">Изменить</h5>
                                                    </div>
                                                    <div class="modal-body">
                                                        <form
                                                            action="{{ route('dashboard.serviceto.update', $serviceto) }}"
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
                                                                                    src="{{ $serviceto->photo }}">
                                                                            </div>
                                                                            <p>max.20 MB</p>
                                                                            <input class="form-control mt-1"
                                                                                id="exampleFormControlInput1" type="file"
                                                                                name="photo">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-6">
                                                                        <label class="form-label"
                                                                            for="exampleFormControlInput1">service</label>
                                                                        <div style="padding-top: 33px">
                                                                            <i data-feather="loader" style="height: 100px; width: 100px"></i>
                                                                            <select class="calc__type" name="service"
                                                                                id="calc__type" style="width: 100%; padding:6px 12px; border-color: #ced4da; border-radius: 5px">
                                                                                @foreach ($services as $service)
                                                                                    <option value="{{ $service->id }}">
                                                                                        {{ $service->title_ru }}</option>
                                                                                @endforeach
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-md-4">
                                                                        <label for="discription_uz"
                                                                            class="form-label">Описание Uz</label>
                                                                        <div class="form-group">
                                                                            <textarea class="ckeditor form-control" name="discription_uz">{{ $serviceto->discription_uz }}</textarea>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-4">
                                                                        <label class="form-label"
                                                                            for="discription_ru">Описание Ru</label>
                                                                        <textarea class="ckeditor form-control" name="discription_ru">{{ $serviceto->discription_ru }}</textarea>
                                                                    </div>
                                                                    <div class="col-md-4 mb-3">
                                                                        <label class="form-label"
                                                                            for="discription_en">Описание En</label>
                                                                        <div class="input-group">
                                                                            <textarea class="ckeditor form-control" name="discription_en">{{ $serviceto->discription_en }}</textarea>
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
                                            data-bs-target="#exampleModalCenter{{ $serviceto->id }}"><i
                                                class="bx bx-trash"></i>Удалить</button>
                                        <div class="modal fade" id="exampleModalCenter{{ $serviceto->id }}"
                                            tabindex="-1" aria-labelledby="exampleModalCenter" style="display: none;"
                                            aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title">Удалить?</h5>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <form
                                                            action="{{ route('dashboard.serviceto.destroy', $serviceto->id) }}"
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
