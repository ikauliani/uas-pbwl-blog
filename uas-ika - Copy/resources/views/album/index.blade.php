
@extends('layouts.app') 

@section('content') 
<div class="container">

    <h3>ALBUM</h3>
    <h4>
    <a href="{{ url('/album/create') }}"class="btn btn-primary btn-sm float-right">Tambah Data</a><br>
    </h4>

    <table class="table table-bordered" >
        <tr>
            <th>ID</th>
            <th>Nama</th>
            <th>Text</th>
            <th>Photo_id</th>
            <th>DELETE</th>

        </tr>
            @foreach($rows as $row)
        <tr>
            <td>{{ $row->id }}</td>
            <td>{{ $row->nama }}</td>
            <td>{{ $row->text }}</td>
            <td>{{ $row->photo_id }}</td>
           
            
    <td><form action="{{ url('/album/' . $row->album_id) }}" method="POST">
            <input name="_method" type="hidden" value="DELETE">
            @csrf
            <button>Hapus</button>
    </form></td>
        
        </tr>
            @endforeach
    </table>
 </div> 
@endsection 