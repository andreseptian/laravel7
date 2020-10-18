@extends('layouts.app')

@section('content')
    <h1>Ini Halaman Artikel!</h1>
    <a href="/artikel/create" class="btn btn-primary">Tambah Artikel +</a>
    @foreach ($articles as $article)
    <div class="card mb-1">
        <div class="card-body">
        <p><strong> Judul: {{$article['title']}}</strong></p>
        <p>{{$article['subject']}}</p>
        </div>
    </div>
    @endforeach

    <div>
        {{ $articles->links() }}
    </div>

@endsection
