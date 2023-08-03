@extends('layouts.dashboard.main')

@section('content')
    <div class="row">
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
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header pb-0">
                    <h5>Добавить Команда</h5>
                </div>
                <form action="{{ route('dashboard.parknyor.store') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="card-body">
                        <div class="row">
                            <div class="col-12 text-center">
                                <label class="form-label" for="exampleFormControlInput1">Фото</label>
                                <div class="">
                                    <img class="mb-3" src="/issets/size.png" alt="" style="height: 150px; width: 150px">
                                    <input class="form-control" id="exampleFormControlInput1" type="file" required
                                        name="photo">
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
                            <h5>Все Команда</h5>
                        </div>
                    </div>
                </div>
                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Фото</th>
                                <th scope="col" class="text-center">Действия</th>
                            </tr>
                        </thead>
                        <tbody>

                            @foreach ($parknyors as $key => $parknyor)
                                <tr>
                                    <th scope="row">{{ ++$key }}</th>
                                    <td><img src="{{ $parknyor->photo }}" alt="" style="height: 100px; width: 100px">
                                    </td>
                                    <td class="text-center">
                                        <button class="btn btn-xs btn-success" type="button" data-bs-toggle="modal"
                                            data-bs-target="#exampleModalCenter{{ $parknyor->id }}Edit"><i
                                                class="bx bx-pencil"></i>Изменить</button>
                                        <div class="modal fade" id="exampleModalCenter{{ $parknyor->id }}Edit"
                                            tabindex="-1" aria-labelledby="exampleModalCenter" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered" role="document"
                                                style="max-width: 50vw">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title">Изменить</h5>
                                                    </div>
                                                    <div class="modal-body">
                                                        <form action="{{ route('dashboard.parknyor.update', $parknyor) }}"
                                                            method="post" enctype="multipart/form-data">
                                                            @csrf
                                                            {{ method_field('put') }}
                                                            <div class="card-body">
                                                                <div class="col-12">
                                                                    <div class="mb-3">
                                                                        <label class="form-label"
                                                                            for="exampleFormControlInput1">Фото</label>
                                                                        <div class="col-12 text-center mb-3">
                                                                            <img style="height: 100px; width: 100px"
                                                                                src="{{ $parknyor->photo }}">
                                                                        </div>
                                                                        <p>max.20 MB</p>
                                                                        <input class="form-control"
                                                                            id="exampleFormControlInput1" type="file"
                                                                            name="photo">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-md-4">
                                                                    <label class="form-label" for="alt_uz">Альт Uz</label>
                                                                    <input class="form-control" name="alt_uz" id="alt_uz" type="text" placeholder="..." required="" value="{{$parknyor->alt_uz}}">
                                                                </div>
                                                                <div class="col-md-4">
                                                                    <label class="form-label" for="alt_ru">Альт Ru</label>
                                                                    <input class="form-control" name="alt_ru" id="alt_ru" type="text" placeholder="..." required="" value="{{$parknyor->alt_uz}}">
                                                                </div>
                                                                <div class="col-md-4 mb-3">
                                                                    <label class="form-label" for="alt_en">Альт En</label>
                                                                    <div class="input-group">
                                                                        <input class="form-control" name="alt_en" id="alt_en" type="text" placeholder="..." aria-describedby="inputGroupPrepend2" required="" value="{{$parknyor->alt_uz}}">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-md-4">
                                                                    <label class="form-label" for="title_uz">Заголовок Uz</label>
                                                                    <input class="form-control" name="title_uz" id="title_uz" type="text" placeholder="..." required="" value="{{$parknyor->title_uz}}">
                                                                </div>
                                                                <div class="col-md-4">
                                                                    <label class="form-label" for="title_ru">Заголовок Ru</label>
                                                                    <input class="form-control" name="title_ru" id="title_ru" type="text" placeholder="..." required="" value="{{$parknyor->title_uz}}">
                                                                </div>
                                                                <div class="col-md-4 mb-3">
                                                                    <label class="form-label" for="title_en">Заголовок En</label>
                                                                    <div class="input-group">
                                                                        <input class="form-control" name="title_en" id="title_en" type="text" placeholder="..." aria-describedby="inputGroupPrepend2" required="" value="{{$parknyor->title_uz}}">
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
                                            data-bs-target="#exampleModalCenter{{ $parknyor->id }}"><i
                                                class="bx bx-trash"></i>Удалить</button>
                                        <div class="modal fade" id="exampleModalCenter{{ $parknyor->id }}"
                                            tabindex="-1" aria-labelledby="exampleModalCenter" style="display: none;"
                                            aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title">Удалить?</h5>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <form action="{{ route('dashboard.parknyor.destroy', $parknyor->id) }}"
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
