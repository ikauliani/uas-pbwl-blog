@extends('layouts.master')

@section('title-page')
<h4>Album</h4>
@endsection

@section('content')
<div class="row">
    <div class="col-8">
        <div class="card-cs">
            <div class="card-title-cs"><h5>Add Album</h5></div>

            <form action="{{ route('admin.album') }}" method="post" class="form-cs">
                @csrf @method('put')
                <input type="hidden" name="id" value="{{ $album->id }}">

                <div class="form-group-cs">
                    <label for="" class="label-form-cs">Name</label>
                    <input type="text" name="name" value="{{ $album->name }}" class="form-control-cs">
                </div>

                <div class="form-group-cs">
                    <label for="" class="label-form-cs">text</label>
                    <input type="text" name="text" value="{{ $album->text }}" class="form-control-cs">
                </div>

                <div class="form-group-cs">
                    <label for="" class="label-form-cs">Photo Title</label>
                    <select name="photo_id" class="form-control-cs">
                        <option>- Please Select -</option>
                        @foreach ($photos as $item)
                            <option value="{{ $item->id }}"
                                @if ($item->id == $album->photo_id)
                                    selected
                                @endif>{{ $item->title }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="card-footer-cs">
                    <button class="btn-cs btn-cs-success">Simpan</button>
                    <button class="btn-cs btn-cs-danger">Batal</button>
                </div>
            </form>

        </div>
    </div>
</div>    
@endsection