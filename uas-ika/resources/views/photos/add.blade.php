@extends('layouts.app')

@section('content')

 <div class="container">

 <h3>Tambah Data Photos</h3>
 <form action="{{ url('/photos') }}" method="POST">
 @csrf
        <table>
            <tr>
                <td>ID</td>
                <td><input type="text" name="id"></td>
            </tr>
            <tr>
                <td>Date</td>
                <td><input type="text" name="date"></td>
            </tr>
            <tr>
                <td>Title</td>
                <td><input type="text" name="title"></td>
            </tr>
            <tr>
                <td>Text</td>
                <td><input type="text" name="text"></td>
            </tr>
            <tr>
                <td>Post ID</td>
                <td><input type="text" name="post_id"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" value="SIMPAN"></td>
            </tr>
        </table>
    </form>
</div>

 @endsection