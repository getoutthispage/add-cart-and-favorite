@extends('layouts.admin')

@section('content')
    <h1>Добавить баннер</h1>

    <form action="{{ route('banners.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="image" class="form-label">Изображение</label>
            <input type="file" name="image" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="link" class="form-label">Ссылка (необязательно)</label>
            <input type="text" name="link" class="form-control">
        </div>
        <button type="submit" class="btn btn-primary">Добавить</button>
    </form>
@endsection
