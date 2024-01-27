@extends('admin.layouts.adminapp')

@section('page-title', 'Список Блогу')

@section('content')

<div class="container py-3">
    <div class="row py-3">
        <div class="col-md-2">
            <a class="btn " href="{{ route('admin.post.create') }}">
                <i class="bi bi-plus-lg me-2"></i>
                Створити
            </a>
        </div>
    </div>
    <div class="tabel-responsive">
        <table class="table">
            <thead>
            <tr>
                <th class="text-center" scope="col">Назва</th>
                <th class="text-center" scope="col">Slug</th>
                <th class="text-center" scope="col">Категорія</th>
                <th class="text-center" scope="col">Змінено</th>
                <th class="text-center" scope="col">Створено</th>
                <th class="text-center" scope="col">Редагувати</th>
                <th class="text-center" scope="col">Видалити</th>
            </tr>
            </thead>
            <tbody>
                @foreach ($posts as $post)
                <tr>
                    <th class="text-center" scope="row">{{ $post->title }}</th>
                    <td class="text-center">{{ $post->slug }}</td>
                    <td class="text-center">{{ $post->category->title }}</td>
                    <td class="text-center">{{ $post->updated_at->format('d-m-Y') }}</td>
                    <td class="text-center">{{ $post->created_at->format('d-m-Y') }}</td>
                    <td class="text-center">
                        <a href="{{ route('admin.post.edit', $post) }}"><i class="bi bi-pencil-fill"></i></a>
                    </td>
                    <td class="text-center">
                        <form class="text-center" action="{{ route('admin.post.delete', $post) }}" method="POST"
                            onsubmit="if(!confirm('Видалити?')) return false">
                            @method('DELETE')
                            @csrf
                            <button type="submit" class="btn"><i class="bi bi-x-square text-danger"></i></button>
                        </form>

                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

@endsection
