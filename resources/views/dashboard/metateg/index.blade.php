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
                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label class="form-label" for="exampleFormControlInput1">Фото</label>
                                    <input class="form-control" id="exampleFormControlInput1" type="file"
                                        name="photo">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label class="form-label" for="exampleFormControlInput1">Название</label>
                                    <input class="form-control" id="exampleFormControlInput1" type="text" required
                                        name="name" value="{{ $homemeta->name }}">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label class="form-label" for="exampleFormControlInput1">Описание</label>
                                    <input class="form-control" id="exampleFormControlInput1" type="text" name="discription" value="{{ $homemeta->discription }}">
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
                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label class="form-label" for="exampleFormControlInput1">Фото</label>
                                    <input class="form-control" id="exampleFormControlInput1" type="file"
                                        name="photo">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label class="form-label" for="exampleFormControlInput1">Название</label>
                                    <input class="form-control" id="exampleFormControlInput1" type="text" required
                                        name="name" value="{{ $aboutmeta->name }}">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label class="form-label" for="exampleFormControlInput1">Описание</label>
                                    <input class="form-control" id="exampleFormControlInput1" type="text" name="discription" value="{{ $aboutmeta->discription }}">
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
                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label class="form-label" for="exampleFormControlInput1">Фото</label>
                                    <input class="form-control" id="exampleFormControlInput1" type="file"
                                        name="photo">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label class="form-label" for="exampleFormControlInput1">Название</label>
                                    <input class="form-control" id="exampleFormControlInput1" type="text" required
                                        name="name" value="{{ $servicemeta->name }}">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label class="form-label" for="exampleFormControlInput1">Описание</label>
                                    <input class="form-control" id="exampleFormControlInput1" type="text" name="discription" value="{{ $servicemeta->discription }}">
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
                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label class="form-label" for="exampleFormControlInput1">Фото</label>
                                    <input class="form-control" id="exampleFormControlInput1" type="file"
                                        name="photo">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label class="form-label" for="exampleFormControlInput1">Название</label>
                                    <input class="form-control" id="exampleFormControlInput1" type="text" required
                                        name="name" value="{{ $projectmeta->name }}">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label class="form-label" for="exampleFormControlInput1">Описание</label>
                                    <input class="form-control" id="exampleFormControlInput1" type="text" name="discription" value="{{ $projectmeta->discription }}">
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
                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label class="form-label" for="exampleFormControlInput1">Фото</label>
                                    <input class="form-control" id="exampleFormControlInput1" type="file"
                                        name="photo">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label class="form-label" for="exampleFormControlInput1">Название</label>
                                    <input class="form-control" id="exampleFormControlInput1" type="text" required
                                        name="name" value="{{ $newsmeta->name }}">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label class="form-label" for="exampleFormControlInput1">Описание</label>
                                    <input class="form-control" id="exampleFormControlInput1" type="text" name="discription" value="{{ $newsmeta->discription }}">
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
                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label class="form-label" for="exampleFormControlInput1">Фото</label>
                                    <input class="form-control" id="exampleFormControlInput1" type="file"
                                        name="photo">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label class="form-label" for="exampleFormControlInput1">Название</label>
                                    <input class="form-control" id="exampleFormControlInput1" type="text" required
                                        name="name" value="{{ $contactmeta->name }}">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label class="form-label" for="exampleFormControlInput1">Описание</label>
                                    <input class="form-control" id="exampleFormControlInput1" type="text" name="discription" value="{{ $contactmeta->discription }}">
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
