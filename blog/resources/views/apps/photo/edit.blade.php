@extends('layouts.master')

@section('title-page')
<h4>Photo</h4>
@endsection

@section('content')
<div class="row">
    <div class="col-8">
        <div class="card-cs">
            <div class="card-title-cs"><h5>Add Photo</h5></div>

            <form action="{{ route('admin.photo') }}" method="post" class="form-cs">
                @csrf @method('put')
                <input type="hidden" name="id" value="{{ $photos->id }}">

                <div class="form-group-cs">
                    <label for="" class="label-form-cs">Name</label>
                    <input type="text" name="name" value="{{ $photos->title }}" class="form-control-cs">
                </div>

                <div class="form-group-cs">
                    <label for="" class="label-form-cs">Date</label>
                    <input type="date" name="date" value="{{ $photos->date }}" class="form-control-cs">
                </div>

                <div class="form-group-cs">
                    <label for="" class="label-form-cs">Text</label>
                    <input type="text" name="text" value="{{ $photos->text }}" class="form-control-cs">
                </div>


                <div class="form-group-cs">
                    <label for="" class="label-form-cs">Post Title</label>
                    <select name="post_id" class="form-control-cs">
                        <option>- Please Select -</option>
                        @foreach ($post as $item)
                            <option value="{{ $item->id }}" 
                                @if ($photos->post_id == $item->id)
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