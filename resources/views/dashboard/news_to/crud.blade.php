@extends('layouts.dashboard.main')

@section('content')
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header pb-0">
                    <h5>Добавить категорию</h5>
                </div>
                <form action="{{ route('dashboard.newsto.store') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="card-body">
                        <div class="row">
                            <div class="col-6">
                                <div class="mb-3">
                                    <label class="form-label" for="exampleFormControlInput1">Фото </label>
                                    
                                    <input class="form-control" id="exampleFormControlInput1" type="file" required name="photo">
                                </div>
                            </div>
                            <div class="col-6">
                                <label class="form-label" for="exampleFormControlInput1">new</label>
                                <div class="mb-3">
                                    <select  class="calc__type" name="news"  id="calc__type" style="font-size: 20px">
                                        @foreach ($news as $new)
                                            <option value="{{ $new->id }}">{{ $new->name_ru  }}</option>
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
                        @foreach($newstos as $key=>$newsto)
                            <tr>
                                <th scope="row">{{ ++$key }}</th>
                                <td><img src="{{ $newsto->photo }}" alt="" style="height: 100px; width: 100px"></td>
                                <td>{{ $newsto->news->name_ru }}</td>
                                <td class="text-center">
                                    <button class="btn btn-xs btn-success" type="button" data-bs-toggle="modal" data-bs-target="#exampleModalCenter{{ $newsto->id }}Edit"><i class="bx bx-pencil">Изменить</i></button>
                                    <div class="modal fade" id="exampleModalCenter{{ $newsto->id }}Edit" tabindex="-1" aria-labelledby="exampleModalCenter" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered" role="document" style="max-width: 50vw">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title">Изменить</h5>
                                                </div>
                                                <div class="modal-body">
                                                    <form action="{{ route('dashboard.newsto.update', $newsto) }}" method="post" enctype="multipart/form-data">
                                                        @csrf
                                                        {{ method_field('put') }}
                                                        <div class="card-body">
                                                            <div class="row">
                                                                <div class="col-6">
                                                                    <div class="mb-3">
                                                                        <label class="form-label" for="exampleFormControlInput1">Фото
                                                                        </label>
                                                                        <div class="col-6 text-center">
                                                                            <img style="height: 100px; width: 100px" src="{{ $newsto->photo }}">
                                                                        </div>
                                                                        <input class="form-control mt-1" id="exampleFormControlInput1" type="file" name="photo">
                                                                    </div>
                                                                </div>
                                                                <div class="col-2 mt-5">
                                                                    <label class="form-label" for="exampleFormControlInput1">new</label>
                                                                    <div >
                                                                        <select  class="calc__type" name="news"  id="calc__type" >
                                                                            @foreach ($news as $new)
                                                                                <option value="{{ $new->id }}">{{ $new->name_ru }}</option>
                                                                            @endforeach
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-md-4">
                                                                    <label for="discription_uz" class="form-label">Описание Uz</label>
                                                                    <div class="form-group">
                                                                        <textarea class="ckeditor form-control" name="discription_uz">{{ $newsto->discription_uz }}</textarea>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-4">
                                                                    <label class="form-label" for="discription_ru">Описание Ru</label>
                                                                    <textarea class="ckeditor form-control" name="discription_ru">{{ $newsto->discription_ru }}</textarea>
                                                                </div>
                                                                <div class="col-md-4 mb-3">
                                                                    <label class="form-label" for="discription_en">Описание En</label>
                                                                    <div class="input-group">
                                                                        <textarea class="ckeditor form-control" name="discription_en">{{ $newsto->discription_en }}</textarea>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            
                                                        </div>
                                                        <div class="card-footer text-end">
                                                            <button class="btn btn-primary" type="submit">Изменить</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <button class="btn btn-xs btn-danger" type="button" data-bs-toggle="modal" data-bs-target="#exampleModalCenter{{ $newsto->id }}"><i class="bx bx-trash"></i>Удалить</button>
                                    <div class="modal fade" id="exampleModalCenter{{ $newsto->id }}" tabindex="-1" aria-labelledby="exampleModalCenter" style="display: none;" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title">Удалить?</h5>
                                                </div>
                                                <div class="modal-footer">
                                                    <form action="{{ route('dashboard.newsto.destroy', $newsto->id) }}" method="post">
                                                        @csrf
                                                        {{ method_field('delete') }}
                                                        <button class="btn btn-primary" type="submit" data-bs-original-title="" title="">Да</button>
                                                    </form>
                                                    <button class="btn btn-secondary" type="button" data-bs-dismiss="modal" data-bs-original-title="" title="">Нет</button>
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
