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
                    <h5>Главная метатег</h5>
                </div>
                {{-- @dd('asd') --}}
                <form action="{{ route('dashboard.homemetateg.update', $homemeta) }}" method="post" enctype="multipart/form-data">
                    @csrf
                    {{ method_field('put') }}
                    <div class="card-body">
                        <div class="col-4 text-center">
                                <img style="height: 70px; width: 70px; " src="{{ $homemeta->photo }}">
                            </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="mb-3">
                                    <label class="form-label" for="exampleFormControlInput1">Фото</label>
                                    <input class="form-control" id="exampleFormControlInput1" type="file"
                                        name="photo">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label class="form-label" for="name_uz">Название Uz</label>
                                    <input class="form-control" id="name_uz" type="text" required
                                        name="name_uz" value="{{ $homemeta->name_uz }}">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label class="form-label" for="name_ru">Название Ru</label>
                                    <input class="form-control" id="name_ru" type="text" required
                                        name="name_ru" value="{{ $homemeta->name_ru }}">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label class="form-label" for="name_en">Название En</label>
                                    <input class="form-control" id="name_en" type="text" required
                                        name="name_en" value="{{ $homemeta->name_en }}">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label class="form-label" for="keyword_uz">Ключевое слово Uz</label>
                                    <input class="form-control" id="keyword_uz" type="text" required
                                        name="keyword_uz" value="{{ $homemeta->keyword_uz }}">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label class="form-label" for="keyword_ru">Ключевое слово Ru</label>
                                    <input class="form-control" id="keyword_ru" type="text" required
                                        name="keyword_ru" value="{{ $homemeta->keyword_ru }}">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label class="form-label" for="keyword_en">Ключевое слово En</label>
                                    <input class="form-control" id="keyword_en" type="text" required
                                        name="keyword_en" value="{{ $homemeta->keyword_en }}">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label class="form-label" for="discription_uz">Описание Uz</label>
                                    <input class="form-control" id="discription_uz" type="text" name="discription_uz" value="{{ $homemeta->discription_uz }}">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label class="form-label" for="discription_ru">Описание Ru</label>
                                    <input class="form-control" id="discription_ru" type="text" name="discription_ru" value="{{ $homemeta->discription_ru }}">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label class="form-label" for="discription_en">Описание En</label>
                                    <input class="form-control" id="discription_en" type="text" name="discription_en" value="{{ $homemeta->discription_en }}">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <label class="form-label" for="alt_uz">Альт Uz</label>
                                <input class="form-control" name="alt_uz" id="alt_uz" type="text" placeholder="..." required="" value="{{$homemeta->alt_uz}}">
                            </div>
                            <div class="col-md-4">
                                <label class="form-label" for="alt_ru">Альт Ru</label>
                                <input class="form-control" name="alt_ru" id="alt_ru" type="text" placeholder="..." required="" value="{{$homemeta->alt_uz}}">
                            </div>
                            <div class="col-md-4 mb-3">
                                <label class="form-label" for="alt_en">Альт En</label>
                                <div class="input-group">
                                    <input class="form-control" name="alt_en" id="alt_en" type="text" placeholder="..." aria-describedby="inputGroupPrepend2" required="" value="{{$homemeta->alt_uz}}">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <label class="form-label" for="title_uz">Заголовок Uz</label>
                                <input class="form-control" name="title_uz" id="title_uz" type="text" placeholder="..." required="" value="{{$homemeta->title_uz}}">
                            </div>
                            <div class="col-md-4">
                                <label class="form-label" for="title_ru">Заголовок Ru</label>
                                <input class="form-control" name="title_ru" id="title_ru" type="text" placeholder="..." required="" value="{{$homemeta->title_uz}}">
                            </div>
                            <div class="col-md-4 mb-3">
                                <label class="form-label" for="title_en">Заголовок En</label>
                                <div class="input-group">
                                    <input class="form-control" name="title_en" id="title_en" type="text" placeholder="..." aria-describedby="inputGroupPrepend2" required="" value="{{$homemeta->title_uz}}">
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
                <div class="card-header pb-0">
                    <h5>О компании метатег</h5>
                </div>
                {{-- @dd('asd') --}}
                <form action="{{ route('dashboard.aboutmetateg.update', $aboutmeta) }}" method="post" enctype="multipart/form-data">
                    @csrf
                    {{ method_field('put') }}
                    <div class="card-body">
                        <div class="col-4 text-center">
                                <img style="height: 70px; width: 70px; " src="{{ $aboutmeta->photo }}">
                            </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="mb-3">
                                    <label class="form-label" for="exampleFormControlInput1">Фото</label>
                                    <input class="form-control" id="exampleFormControlInput1" type="file"
                                        name="photo">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label class="form-label" for="name_uz">Название Uz</label>
                                    <input class="form-control" id="name_uz" type="text" required
                                        name="name_uz" value="{{ $aboutmeta->name_uz }}">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label class="form-label" for="name_ru">Название Ru</label>
                                    <input class="form-control" id="name_ru" type="text" required
                                        name="name_ru" value="{{ $aboutmeta->name_ru }}">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label class="form-label" for="name_en">Название En</label>
                                    <input class="form-control" id="name_en" type="text" required
                                        name="name_en" value="{{ $aboutmeta->name_en }}">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label class="form-label" for="keyword_uz">Ключевое слово Uz</label>
                                    <input class="form-control" id="keyword_uz" type="text" required
                                        name="keyword_uz" value="{{ $aboutmeta->keyword_uz }}">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label class="form-label" for="keyword_ru">Ключевое слово Ru</label>
                                    <input class="form-control" id="keyword_ru" type="text" required
                                        name="keyword_ru" value="{{ $aboutmeta->keyword_ru }}">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label class="form-label" for="keyword_en">Ключевое слово En</label>
                                    <input class="form-control" id="keyword_en" type="text" required
                                        name="keyword_en" value="{{ $aboutmeta->keyword_en }}">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label class="form-label" for="discription_uz">Описание Uz</label>
                                    <input class="form-control" id="discription_uz" type="text" name="discription_uz" value="{{ $aboutmeta->discription_uz }}">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label class="form-label" for="discription_ru">Описание Ru</label>
                                    <input class="form-control" id="discription_ru" type="text" name="discription_ru" value="{{ $aboutmeta->discription_ru }}">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label class="form-label" for="discription_en">Описание En</label>
                                    <input class="form-control" id="discription_en" type="text" name="discription_en" value="{{ $aboutmeta->discription_en }}">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <label class="form-label" for="alt_uz">Альт Uz</label>
                                <input class="form-control" name="alt_uz" id="alt_uz" type="text" placeholder="..." required="" value="{{$aboutmeta->alt_uz}}">
                            </div>
                            <div class="col-md-4">
                                <label class="form-label" for="alt_ru">Альт Ru</label>
                                <input class="form-control" name="alt_ru" id="alt_ru" type="text" placeholder="..." required="" value="{{$aboutmeta->alt_uz}}">
                            </div>
                            <div class="col-md-4 mb-3">
                                <label class="form-label" for="alt_en">Альт En</label>
                                <div class="input-group">
                                    <input class="form-control" name="alt_en" id="alt_en" type="text" placeholder="..." aria-describedby="inputGroupPrepend2" required="" value="{{$aboutmeta->alt_uz}}">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <label class="form-label" for="title_uz">Заголовок Uz</label>
                                <input class="form-control" name="title_uz" id="title_uz" type="text" placeholder="..." required="" value="{{$aboutmeta->title_uz}}">
                            </div>
                            <div class="col-md-4">
                                <label class="form-label" for="title_ru">Заголовок Ru</label>
                                <input class="form-control" name="title_ru" id="title_ru" type="text" placeholder="..." required="" value="{{$aboutmeta->title_uz}}">
                            </div>
                            <div class="col-md-4 mb-3">
                                <label class="form-label" for="title_en">Заголовок En</label>
                                <div class="input-group">
                                    <input class="form-control" name="title_en" id="title_en" type="text" placeholder="..." aria-describedby="inputGroupPrepend2" required="" value="{{$aboutmeta->title_uz}}">
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
                <div class="card-header pb-0">
                    <h5>Наши услуги метатег</h5>
                </div>
                {{-- @dd('asd') --}}
                <form action="{{ route('dashboard.servicemetateg.update', $servicemeta) }}" method="post" enctype="multipart/form-data">
                    @csrf
                    {{ method_field('put') }}
                    <div class="card-body">
                        <div class="col-4 text-center">
                                <img style="height: 70px; width: 70px; " src="{{ $servicemeta->photo }}">
                            </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="mb-3">
                                    <label class="form-label" for="exampleFormControlInput1">Фото</label>
                                    <input class="form-control" id="exampleFormControlInput1" type="file"
                                        name="photo">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label class="form-label" for="name_uz">Название Uz</label>
                                    <input class="form-control" id="name_uz" type="text" required
                                        name="name_uz" value="{{ $servicemeta->name_uz }}">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label class="form-label" for="name_ru">Название Ru</label>
                                    <input class="form-control" id="name_ru" type="text" required
                                        name="name_ru" value="{{ $servicemeta->name_ru }}">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label class="form-label" for="name_en">Название En</label>
                                    <input class="form-control" id="name_en" type="text" required
                                        name="name_en" value="{{ $servicemeta->name_en }}">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label class="form-label" for="keyword_uz">Ключевое слово Uz</label>
                                    <input class="form-control" id="keyword_uz" type="text" required
                                        name="keyword_uz" value="{{ $servicemeta->keyword_uz }}">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label class="form-label" for="keyword_ru">Ключевое слово Ru</label>
                                    <input class="form-control" id="keyword_ru" type="text" required
                                        name="keyword_ru" value="{{ $servicemeta->keyword_ru }}">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label class="form-label" for="keyword_en">Ключевое слово En</label>
                                    <input class="form-control" id="keyword_en" type="text" required
                                        name="keyword_en" value="{{ $servicemeta->keyword_en }}">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label class="form-label" for="discription_uz">Описание Uz</label>
                                    <input class="form-control" id="discription_uz" type="text" name="discription_uz" value="{{ $servicemeta->discription_uz }}">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label class="form-label" for="discription_ru">Описание Ru</label>
                                    <input class="form-control" id="discription_ru" type="text" name="discription_ru" value="{{ $servicemeta->discription_ru }}">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label class="form-label" for="discription_en">Описание En</label>
                                    <input class="form-control" id="discription_en" type="text" name="discription_en" value="{{ $servicemeta->discription_en }}">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <label class="form-label" for="alt_uz">Альт Uz</label>
                                <input class="form-control" name="alt_uz" id="alt_uz" type="text" placeholder="..." required="" value="{{$servicemeta->alt_uz}}">
                            </div>
                            <div class="col-md-4">
                                <label class="form-label" for="alt_ru">Альт Ru</label>
                                <input class="form-control" name="alt_ru" id="alt_ru" type="text" placeholder="..." required="" value="{{$servicemeta->alt_uz}}">
                            </div>
                            <div class="col-md-4 mb-3">
                                <label class="form-label" for="alt_en">Альт En</label>
                                <div class="input-group">
                                    <input class="form-control" name="alt_en" id="alt_en" type="text" placeholder="..." aria-describedby="inputGroupPrepend2" required="" value="{{$servicemeta->alt_uz}}">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <label class="form-label" for="title_uz">Заголовок Uz</label>
                                <input class="form-control" name="title_uz" id="title_uz" type="text" placeholder="..." required="" value="{{$servicemeta->title_uz}}">
                            </div>
                            <div class="col-md-4">
                                <label class="form-label" for="title_ru">Заголовок Ru</label>
                                <input class="form-control" name="title_ru" id="title_ru" type="text" placeholder="..." required="" value="{{$servicemeta->title_uz}}">
                            </div>
                            <div class="col-md-4 mb-3">
                                <label class="form-label" for="title_en">Заголовок En</label>
                                <div class="input-group">
                                    <input class="form-control" name="title_en" id="title_en" type="text" placeholder="..." aria-describedby="inputGroupPrepend2" required="" value="{{$servicemeta->title_uz}}">
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
                <div class="card-header pb-0">
                    <h5>Наши проекты метатег</h5>
                </div>
                {{-- @dd('asd') --}}
                <form action="{{ route('dashboard.projectmetateg.update', $projectmeta) }}" method="post" enctype="multipart/form-data">
                    @csrf
                    {{ method_field('put') }}
                    <div class="card-body">
                        <div class="col-4 text-center">
                                <img style="height: 70px; width: 70px; " src="{{ $projectmeta->photo }}">
                            </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="mb-3">
                                    <label class="form-label" for="exampleFormControlInput1">Фото</label>
                                    <input class="form-control" id="exampleFormControlInput1" type="file"
                                        name="photo">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label class="form-label" for="name_uz">Название Uz</label>
                                    <input class="form-control" id="name_uz" type="text" required
                                        name="name_uz" value="{{ $projectmeta->name_uz }}">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label class="form-label" for="name_ru">Название Ru</label>
                                    <input class="form-control" id="name_ru" type="text" required
                                        name="name_ru" value="{{ $projectmeta->name_ru }}">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label class="form-label" for="name_en">Название En</label>
                                    <input class="form-control" id="name_en" type="text" required
                                        name="name_en" value="{{ $projectmeta->name_en }}">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label class="form-label" for="keyword_uz">Ключевое слово Uz</label>
                                    <input class="form-control" id="keyword_uz" type="text" required
                                        name="keyword_uz" value="{{ $projectmeta->keyword_uz }}">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label class="form-label" for="keyword_ru">Ключевое слово Ru</label>
                                    <input class="form-control" id="keyword_ru" type="text" required
                                        name="keyword_ru" value="{{ $projectmeta->keyword_ru }}">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label class="form-label" for="keyword_en">Ключевое слово En</label>
                                    <input class="form-control" id="keyword_en" type="text" required
                                        name="keyword_en" value="{{ $projectmeta->keyword_en }}">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label class="form-label" for="discription_uz">Описание Uz</label>
                                    <input class="form-control" id="discription_uz" type="text" name="discription_uz" value="{{ $projectmeta->discription_uz }}">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label class="form-label" for="discription_ru">Описание Ru</label>
                                    <input class="form-control" id="discription_ru" type="text" name="discription_ru" value="{{ $projectmeta->discription_ru }}">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label class="form-label" for="discription_en">Описание En</label>
                                    <input class="form-control" id="discription_en" type="text" name="discription_en" value="{{ $projectmeta->discription_en }}">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <label class="form-label" for="alt_uz">Альт Uz</label>
                                <input class="form-control" name="alt_uz" id="alt_uz" type="text" placeholder="..." required="" value="{{$projectmeta->alt_uz}}">
                            </div>
                            <div class="col-md-4">
                                <label class="form-label" for="alt_ru">Альт Ru</label>
                                <input class="form-control" name="alt_ru" id="alt_ru" type="text" placeholder="..." required="" value="{{$projectmeta->alt_uz}}">
                            </div>
                            <div class="col-md-4 mb-3">
                                <label class="form-label" for="alt_en">Альт En</label>
                                <div class="input-group">
                                    <input class="form-control" name="alt_en" id="alt_en" type="text" placeholder="..." aria-describedby="inputGroupPrepend2" required="" value="{{$projectmeta->alt_uz}}">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <label class="form-label" for="title_uz">Заголовок Uz</label>
                                <input class="form-control" name="title_uz" id="title_uz" type="text" placeholder="..." required="" value="{{$projectmeta->title_uz}}">
                            </div>
                            <div class="col-md-4">
                                <label class="form-label" for="title_ru">Заголовок Ru</label>
                                <input class="form-control" name="title_ru" id="title_ru" type="text" placeholder="..." required="" value="{{$projectmeta->title_uz}}">
                            </div>
                            <div class="col-md-4 mb-3">
                                <label class="form-label" for="title_en">Заголовок En</label>
                                <div class="input-group">
                                    <input class="form-control" name="title_en" id="title_en" type="text" placeholder="..." aria-describedby="inputGroupPrepend2" required="" value="{{$projectmeta->title_uz}}">
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
                <div class="card-header pb-0">
                    <h5>Новости метатег</h5>
                </div>
                {{-- @dd('asd') --}}
                <form action="{{ route('dashboard.newsmetateg.update', $newsmeta) }}" method="post" enctype="multipart/form-data">
                    @csrf
                    {{ method_field('put') }}
                    <div class="card-body">
                        <div class="col-4 text-center">
                                <img style="height: 70px; width: 70px; " src="{{ $newsmeta->photo }}">
                            </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="mb-3">
                                    <label class="form-label" for="exampleFormControlInput1">Фото</label>
                                    <input class="form-control" id="exampleFormControlInput1" type="file"
                                        name="photo">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label class="form-label" for="name_uz">Название Uz</label>
                                    <input class="form-control" id="name_uz" type="text" required
                                        name="name_uz" value="{{ $newsmeta->name_uz }}">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label class="form-label" for="name_ru">Название Ru</label>
                                    <input class="form-control" id="name_ru" type="text" required
                                        name="name_ru" value="{{ $newsmeta->name_ru }}">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label class="form-label" for="name_en">Название En</label>
                                    <input class="form-control" id="name_en" type="text" required
                                        name="name_en" value="{{ $newsmeta->name_en }}">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label class="form-label" for="keyword_uz">Ключевое слово Uz</label>
                                    <input class="form-control" id="keyword_uz" type="text" required
                                        name="keyword_uz" value="{{ $newsmeta->keyword_uz }}">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label class="form-label" for="keyword_ru">Ключевое слово Ru</label>
                                    <input class="form-control" id="keyword_ru" type="text" required
                                        name="keyword_ru" value="{{ $newsmeta->keyword_ru }}">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label class="form-label" for="keyword_en">Ключевое слово En</label>
                                    <input class="form-control" id="keyword_en" type="text" required
                                        name="keyword_en" value="{{ $newsmeta->keyword_en }}">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label class="form-label" for="discription_uz">Описание Uz</label>
                                    <input class="form-control" id="discription_uz" type="text" name="discription_uz" value="{{ $newsmeta->discription_uz }}">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label class="form-label" for="discription_ru">Описание Ru</label>
                                    <input class="form-control" id="discription_ru" type="text" name="discription_ru" value="{{ $newsmeta->discription_ru }}">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label class="form-label" for="discription_en">Описание En</label>
                                    <input class="form-control" id="discription_en" type="text" name="discription_en" value="{{ $newsmeta->discription_en }}">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <label class="form-label" for="alt_uz">Альт Uz</label>
                                <input class="form-control" name="alt_uz" id="alt_uz" type="text" placeholder="..." required="" value="{{$newsmeta->alt_uz}}">
                            </div>
                            <div class="col-md-4">
                                <label class="form-label" for="alt_ru">Альт Ru</label>
                                <input class="form-control" name="alt_ru" id="alt_ru" type="text" placeholder="..." required="" value="{{$newsmeta->alt_uz}}">
                            </div>
                            <div class="col-md-4 mb-3">
                                <label class="form-label" for="alt_en">Альт En</label>
                                <div class="input-group">
                                    <input class="form-control" name="alt_en" id="alt_en" type="text" placeholder="..." aria-describedby="inputGroupPrepend2" required="" value="{{$newsmeta->alt_uz}}">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <label class="form-label" for="title_uz">Заголовок Uz</label>
                                <input class="form-control" name="title_uz" id="title_uz" type="text" placeholder="..." required="" value="{{$newsmeta->title_uz}}">
                            </div>
                            <div class="col-md-4">
                                <label class="form-label" for="title_ru">Заголовок Ru</label>
                                <input class="form-control" name="title_ru" id="title_ru" type="text" placeholder="..." required="" value="{{$newsmeta->title_uz}}">
                            </div>
                            <div class="col-md-4 mb-3">
                                <label class="form-label" for="title_en">Заголовок En</label>
                                <div class="input-group">
                                    <input class="form-control" name="title_en" id="title_en" type="text" placeholder="..." aria-describedby="inputGroupPrepend2" required="" value="{{$newsmeta->title_uz}}">
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
                <div class="card-header pb-0">
                    <h5>Контакты метатег</h5>
                </div>
                {{-- @dd('asd') --}}
                <form action="{{ route('dashboard.contactmetateg.update', $contactmeta) }}" method="post" enctype="multipart/form-data">
                    @csrf
                    {{ method_field('put') }}
                    <div class="card-body">
                        <div class="col-4 text-center">
                                <img style="height: 70px; width: 70px; " src="{{ $contactmeta->photo }}">
                            </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="mb-3">
                                    <label class="form-label" for="exampleFormControlInput1">Фото</label>
                                    <input class="form-control" id="exampleFormControlInput1" type="file"
                                        name="photo">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label class="form-label" for="name_uz">Название Uz</label>
                                    <input class="form-control" id="name_uz" type="text" required
                                        name="name_uz" value="{{ $contactmeta->name_uz }}">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label class="form-label" for="name_ru">Название Ru</label>
                                    <input class="form-control" id="name_ru" type="text" required
                                        name="name_ru" value="{{ $contactmeta->name_ru }}">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label class="form-label" for="name_en">Название En</label>
                                    <input class="form-control" id="name_en" type="text" required
                                        name="name_en" value="{{ $contactmeta->name_en }}">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label class="form-label" for="keyword_uz">Ключевое слово Uz</label>
                                    <input class="form-control" id="keyword_uz" type="text" required
                                        name="keyword_uz" value="{{ $contactmeta->keyword_uz }}">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label class="form-label" for="keyword_ru">Ключевое слово Ru</label>
                                    <input class="form-control" id="keyword_ru" type="text" required
                                        name="keyword_ru" value="{{ $contactmeta->keyword_ru }}">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label class="form-label" for="keyword_en">Ключевое слово En</label>
                                    <input class="form-control" id="keyword_en" type="text" required
                                        name="keyword_en" value="{{ $contactmeta->keyword_en }}">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label class="form-label" for="discription_uz">Описание Uz</label>
                                    <input class="form-control" id="discription_uz" type="text" name="discription_uz" value="{{ $contactmeta->discription_uz }}">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label class="form-label" for="discription_ru">Описание Ru</label>
                                    <input class="form-control" id="discription_ru" type="text" name="discription_ru" value="{{ $contactmeta->discription_ru }}">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label class="form-label" for="discription_en">Описание En</label>
                                    <input class="form-control" id="discription_en" type="text" name="discription_en" value="{{ $contactmeta->discription_en }}">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <label class="form-label" for="alt_uz">Альт Uz</label>
                                <input class="form-control" name="alt_uz" id="alt_uz" type="text" placeholder="..." required="" value="{{$contactmeta->alt_uz}}">
                            </div>
                            <div class="col-md-4">
                                <label class="form-label" for="alt_ru">Альт Ru</label>
                                <input class="form-control" name="alt_ru" id="alt_ru" type="text" placeholder="..." required="" value="{{$contactmeta->alt_uz}}">
                            </div>
                            <div class="col-md-4 mb-3">
                                <label class="form-label" for="alt_en">Альт En</label>
                                <div class="input-group">
                                    <input class="form-control" name="alt_en" id="alt_en" type="text" placeholder="..." aria-describedby="inputGroupPrepend2" required="" value="{{$contactmeta->alt_uz}}">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <label class="form-label" for="title_uz">Заголовок Uz</label>
                                <input class="form-control" name="title_uz" id="title_uz" type="text" placeholder="..." required="" value="{{$contactmeta->title_uz}}">
                            </div>
                            <div class="col-md-4">
                                <label class="form-label" for="title_ru">Заголовок Ru</label>
                                <input class="form-control" name="title_ru" id="title_ru" type="text" placeholder="..." required="" value="{{$contactmeta->title_uz}}">
                            </div>
                            <div class="col-md-4 mb-3">
                                <label class="form-label" for="title_en">Заголовок En</label>
                                <div class="input-group">
                                    <input class="form-control" name="title_en" id="title_en" type="text" placeholder="..." aria-describedby="inputGroupPrepend2" required="" value="{{$contactmeta->title_uz}}">
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
