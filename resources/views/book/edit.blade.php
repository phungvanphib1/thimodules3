@extends('master')
@section('content')
<div class="container">
    <div class="panel-body">
        <form role="form" class="form-horizontal " action="{{ route('book.update', $book->id)}}" method="POST">
            @method('PUT')
            @csrf
            <div class="form-group has-warning">
                <label class="col-lg-3 control-label">Name</label>
                <div class="col-lg-12">
                    <input type="text" value="{{ $book->name}}" name="name" placeholder=""  class=" @error('name') is-invalid @enderror form-control ">
                    @error('name')
                        <div class="text text-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="form-group has-warning">
                <label class="col-lg-3 control-label">isbn</label>
                <div class="col-lg-12">
                    <input type="text" value="{{ $book->isbn}}" name="isbn" placeholder=""  class=" @error('isbn') is-invalid @enderror form-control ">
                    @error('isbn')
                        <div class="text text-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="form-group has-warning">
                <label class="col-lg-3 control-label">author</label>
                <div class="col-lg-12">
                    <input type="text" value="{{ $book->author}}" name="author" placeholder=""  class=" @error('author') is-invalid @enderror form-control ">
                    @error('author')
                        <div class="text text-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="form-group has-warning">
                <label class="col-lg-3 control-label">type</label>
                <div class="col-lg-12">
                    <input type="text" value="{{ $book->type}}" name="type" placeholder=""  class=" @error('type') is-invalid @enderror form-control ">
                    @error('type')
                        <div class="text text-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="form-group has-warning">
                <label class="col-lg-3 control-label">number_pages</label>
                <div class="col-lg-12">
                    <input type="text" value="{{ $book->number_pages}}" name="number_pages" placeholder=""  class=" @error('number_pages') is-invalid @enderror form-control ">
                    @error('number_pages')
                        <div class="text text-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="form-group has-warning">
                <label class="col-lg-3 control-label">year</label>
                <div class="col-lg-12">
                    <input type="text" value="{{ $book->year}}" name="year" placeholder=""  class=" @error('year') is-invalid @enderror form-control ">
                    @error('year')
                        <div class="text text-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>

            <div class="form-group">
                <div class="col-lg-offset-3 col-lg-6">
                    <a href="{{ route('book.index') }}" class="btn btn-danger" type="submit">Cancel</a>
                    <button class="btn btn-primary" type="submit">Submit</button>
                </div>
            </div>
        </form>
    </div>
</div>

@endsection




