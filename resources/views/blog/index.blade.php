@extends('template.master')

@section('judul', 'Data Blog ')

@section('isi')
    <h1>Data Blog</h1>

    <table class="table table-hover table-bordered">
        <thead>
            <tr>
                <th>id</th>
                <th>author</th>
                <th>title</th>
                <th>body</th>
                <th>keyword</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $row)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $row->author }}</td>
                <td>{{ $row->title }}</td>
                <td>{{ $row->body }}</td>
                <td>{{ $row->keyword }}</td>
                <td></td>
            </tr>
            @endforeach

        </tbody>
    </table>


@endsection
