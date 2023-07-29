@extends('layouts.dashboard.main')

@section('content')
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header pb-0">
                    <h5>Изменить Проект</h5>
                </div>
                <form action="{{ route('dashboard.aboutphoto.update', $aboutphoto) }}" method="post" enctype="multipart/form-data">
                    @csrf
                    {{ method_field('put') }}
                    <div class="card-body">
                        <div class="row">
                            <div class="col-12">
                                <div class="mb-3">
                                    <label class="form-label" for="exampleFormControlInput1">Фото</label>
                                    
                                    <div class="col-12 text-center">
                                        <div class="col-12 text-center mt-3">
                                            <img style="height: 200px; width: 300px" src="{{ $aboutphoto->photo }}">
                                        </div>
                                        <p>max.20 MB</p>
                                    </div>
                                    
                                    <input class="form-control mt-2" id="exampleFormControlInput1" type="file" name="photo">
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
