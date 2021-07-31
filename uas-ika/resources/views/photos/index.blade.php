
@extends('layouts.app') 

@section('content') 
<div class="container">

    <h3>PHOTOS</h3>
    <h4>
    <a href="{{ url('/photos/create') }}"class="btn btn-primary btn-sm float-right">Tambah Data</a><br>
    </h4>
    <table class="table table-bordered" >
        <tr>
            <th>ID</th>
            <th>Date</th>
            <th>Title</th>
            <th>Text</th>
            <th>Post_id</th>
            <th>DELETE</th>

        </tr>
            @foreach($rows as $row)
        <tr>
            <td>{{ $row->id }}</td>
            <td>{{ $row->date }}</td>
            <td>{{ $row->title }}</td>
            <td>{{ $row->text }}</td>
            <td>{{ $row->post_id }}</td>
    <td><form action="{{ url('/photos/' . $row->id) }}" method="POST">
            <input name="_method" type="hidden" value="DELETE">
            @csrf
            <button>Hapus</button>
    </form></td>
        </tr>
            @endforeach
    </table>
 </div> 
@endsection 