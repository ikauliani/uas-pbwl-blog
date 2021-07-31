@extends('layouts.app')

@section('content')

<div class="container">

    <h3>Tambah Data Album</h3>
    <form action="{{ url('/album') }}" method="POST">
        @csrf
        <table>
            <tr>
                <td>ID</td>
                <td><input type="text" name="album_id"></td>
            </tr>
            <tr>
                <td>Nama</td>
                <td><input type="text" name="nama"></td>
            </tr>
            <tr>
                <td>Text</td>
                <td><input type="text" name="text"></td>
            </tr>
            <tr>
                <td>Photo ID</td>
                <td><input type="text" name="photo_id"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" value="SIMPAN"></td>
            </tr>
        </table>
    </form>
</div>

@endsection