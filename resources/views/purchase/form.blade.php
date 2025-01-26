@extends('layouts.main')
@section('title', 'Главная страница')
@section('content')
<div class="container">
    <h1>Купить {{ $product->name }}</h1>
    <form action="{{ route('purchase.store', $product->id) }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="phone">Введите ваш номер телефона:</label>
            <input type="text" name="phone" id="phone" class="form-control" required>
            @error('phone')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <button type="submit" class="btn btn-primary">Подтвердить покупку</button>
    </form>
</div>
@endsection
