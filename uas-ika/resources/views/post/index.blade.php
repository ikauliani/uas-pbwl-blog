
@extends('layouts.app') 

@section('content') 
<div class="container">

    <h3>POST</h3>
    <h4>
    <a href="{{ url('/post/create') }}"class="btn btn-primary btn-sm float-right">Tambah Data</a><br>
    </h4>
    <table class="table table-bordered" >
        <tr>
            <th>ID</th>
            <th>Date</th>
            <th>Slug</th>
            <th>Title</th>
            <th>Text</th>
            <th>Cat ID</th>
            <th>DELETE</th>

        </tr>
            @foreach($rows as $row)
        <tr>
            <td>{{ $row->id }}</td>
            <td>{{ $row->date }}</td>
            <td>{{ $row->slug }}</td>
            <td>{{ $row->title }}</td>
            <td>{{ $row->text }}</td>
            <td>{{ $row->cat_id }}</td>
    <td><form action="{{ url('/post/' . $row->id) }}" method="POST">
            <input name="_method" type="hidden" value="DELETE">
            @csrf
        <button>Hapus</button>
    </form></td>
        </tr>
            @endforeach
    </table>
 </div> 
@endsection 