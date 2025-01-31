@extends('layouts.admin')

@section('content')
    <h1>Редактировать баннер</h1>

    <form action="{{ route('banners.update', $banner) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="image" class="form-label">Изображение</label>
            <input type="file" name="image" class="form-control">
            <img src="{{ asset('storage/' . $banner->image_path) }}" alt="Banner" width="150" class="mt-2">
        </div>
        <div class="mb-3">
            <label for="link" class="form-label">Ссылка (необязательно)</label>
            <input type="text" name="link" class="form-control" value="{{ $banner->link }}">
        </div>
        <button type="submit" class="btn btn-primary">Сохранить</button>
    </form>
@endsection
