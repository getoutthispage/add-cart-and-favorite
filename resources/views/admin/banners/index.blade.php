@extends('layouts.admin')

@section('content')
    <h1>Управление баннерами</h1>

    <a href="{{ route('banners.create') }}" class="btn btn-primary">Добавить баннер</a>

    @if (session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table">
        <thead>
        <tr>
            <th>Изображение</th>
            <th>Действия</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($banners as $banner)
            <tr>
                <td><img src="{{ asset('storage/' . $banner->image_path) }}" alt="Banner" width="150"></td>
                <td>
                    <a href="{{ route('banners.edit', $banner) }}" class="btn btn-warning">Редактировать</a>
                    <form action="{{ route('banners.destroy', $banner) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Удалить</button>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection
