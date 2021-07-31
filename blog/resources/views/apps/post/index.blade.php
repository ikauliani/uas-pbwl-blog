@extends('layouts.master')

@section('title-page')
<h4>Post</h4>
@endsection

@section('content')
<div class="row">
    <div class="col-8">
        <div class="card-cs">
            <div class="card-title-cs"><h5>Post Data</h5></div>

            <div class="row">
                <div class="col-6">
                    <a href="{{ route('admin.post.create') }}">
                        <button class="btn-cs btn-cs-success">Tambah</button>
                    </a>
                </div>
            </div>

            <div class="table-responsive" style="margin-top: 10px">
                <table class="table table-sm table-bordered table-striped">
                    <thead>
                        <tr>
                            <th width="5%">No</th>
                            <th>Title</th>
                            <th>Date</th>
                            <th>Slug</th>
                            <th>Text</th>
                            <th>Category</th>
                            <th width="20%">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($post as $item)
                        <tr>
                            <td>{{ $loop->iteration + $skipped }}</td>
                            <td>{{ $item->title }}</td>
                            <td>{{ $item->date }}</td>
                            <td>{{ $item->slug }}</td>
                            <td>{{ $item->text }}</td>
                            <td>{{ $item->category->name }}</td>
                            <td>
                                <a href="{{ route('admin.post.edit', $item->id) }}">
                                    <button class="btn-cs btn-cs-warning">Edit</button>
                                </a>

                                <form action="{{ route('admin.post') }}" method="post" style="display: inline-block">
                                    @csrf @method('delete')
                                    <input type="hidden" name="id" value="{{ $item->id }}">
                                    <button type="submit" class="btn-cs btn-cs-danger">Delete</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

        </div>
    </div>
</div>    
@endsection