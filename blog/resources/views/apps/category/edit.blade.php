@extends('layouts.master')

@section('title-page')
<h4>Category</h4>
@endsection

@section('content')
<div class="row">
    <div class="col-8">
        <div class="card-cs">
            <div class="card-title-cs"><h5>Edit Category</h5></div>

            <form action="{{ route('admin.category') }}" method="post" class="form-cs">
                @csrf @method('put')
                <input type="hidden" name="id" value="{{ $category->id }}">

                <div class="form-group-cs">
                    <label for="" class="label-form-cs">Title</label>
                    <input type="text" name="name" value="{{ $category->name }}" class="form-control-cs">
                </div>

                <div class="form-group-cs">
                    <label for="" class="label-form-cs">Text</label>
                    <input type="text" name="text" value="{{ $category->text }}" class="form-control-cs">
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