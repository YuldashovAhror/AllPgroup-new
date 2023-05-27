@extends('layouts.dashboard.main')

@section('content')
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header">
                    <h5>Все Обратная связь</h5>
                </div>
                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Клиент</th>
                            <th scope="col">Название</th>
                            <th scope="col">Фото</th>
                            <th scope="col">Телефон</th>
                            <th scope="col">Описание</th>
                            <th scope="col" class="text-center">Действия</th>
                        </tr>
                        </thead>
                        <tbody>
                        @php($k=1)
                        @foreach($feedbacks as $feedback)
                            <tr>
                                <th scope="row">{{ $k }}</th>
                                @if ($feedback->clients != null)
                                <td>{{ $feedback->clients->name_ru }}</td>
                                @endif
                                @if ($feedback->clients == null)
                                <td><h3>null</h3></td>
                                @endif
                                <td>{{ $feedback->name }}</td>
                                {{-- <td><img src="{{ $feedback->photo }}" alt=""></td> --}}
                                @if ($feedback->photo != null)
                                <td><a href="{{$feedback->photo}}"><img src="{{$feedback->photo}}" alt="" style="width: 100px; height: 100px;"></a></td>
                                @endif
                                @if ($feedback->photo == null)
                                <td><h3>null</h3></td>
                                @endif
                                <td>{{ $feedback->phone }}</td>
                                <td>{{ $feedback->discription }}</td>
                                <td class="text-center">
                                    <button class="btn btn-xs btn-danger" type="button" data-bs-toggle="modal" data-bs-target="#exampleModalCenter{{ $feedback->id }}"><i class="bx bx-trash"></i>Удалить</button>
                                    <div class="modal fade" id="exampleModalCenter{{ $feedback->id }}" tabindex="-1" aria-labelledby="exampleModalCenter" style="display: none;" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title">Удалить?</h5>
                                                </div>
                                                <div class="modal-footer">
                                                    <form action="{{ route('dashboard.feedback.destroy', $feedback) }}" method="post">
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
                            @php($k++)
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
