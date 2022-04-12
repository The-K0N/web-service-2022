@extends('template.master')
@section('judul', 'Tambah Data')

@section('isi')
    <h3>Tambah Data</h3>

    <form action="{{ route('blog.store') }}" method="POST"> 
    @csrf
        <div class="mb-3">
            <label>Author</label>
            <input type="text" name="author" required="required" class="form-control">
        </div>

        <div class="mb-3">
            <label>Title</label>
            <input type="text" name="title" required="required" class="form-control">
        </div>

        <div class="mb-3">
            <label>Body</label>
            <textarea name="body" required="required" class="form-control" cols="30" rows="5"></textarea>
        </div>

        <div class="mb-3">
            <label>Keyword</label>
            <input type="text" name="keyword" required="required" class="form-control">
        </div>

        <input type="submit" name="simpan" value="Simpan Data" class="btn btn-primary">
        <a class="btn btn-danger float-right mt-2" href="{{ url('blog') }}" style="color: white:">Cancel</a>
    </form>

@endsection
