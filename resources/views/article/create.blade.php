@extends('layouts.app')

@section('content')
    <h1>Tambah Artikel Baru</h1>

    <form action="/artikel" method="POST">
        @csrf
        <div class="form-group">
          <label for="title">Judul</label>
        <input type="text" class="form-control" id="title" name="title" value="{{old('title')}}">
          @error('title')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group">
          <label for="subject">Subject</label>
          <textarea class="form-control" id="subject" name="subject" cols="30" rows="10">{{old('subject')}}</textarea>
          @error('subject')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>

    @endsection
