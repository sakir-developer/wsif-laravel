@extends('layouts.backend.app')
@push('title') | Create @endpush
@push('style')

@endpush
@push('summernote')
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>
    <script>
        $('.description').summernote({
            placeholder: 'Write here',
            tabsize: 2,
            height: 320,
            toolbar: [
                ['style', ['style']],
                ['font', ['bold', 'underline', 'clear']],
                ['color', ['color']],
                ['para', ['ul', 'ol', 'paragraph']],
                ['table', ['table']],
                ['insert', ['link', 'picture', 'video']],
                ['view', ['fullscreen', 'codeview', 'help']]
            ]
        });
    </script>
@endpush

@section('content')
    <div class="col-xl-9 col-lg-8 col-md-7 mt-4 mt-sm-0">
        <div class="row">
            <div class="col-12 mt-4">
                <div class="card component-wrapper border-0 rounded shadow">
                    <div class="p-4 border-bottom">
                        <h5 class="mb-0"> Create new </h5>
                    </div>
                    <div class="p-4">
                        <form method="post" action="{{ route('pageItem.store') }}" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <!--This will be page dropdown-->
                                <input name="page" id="page" type="hidden" class="form-control"  value="1">
                                <!--end col-->
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">Title <span class="text-danger">*</span></label>
                                        <input name="title" id="title" type="text" class="form-control" placeholder="Full Title" value="{{ old('title') }}">
                                        @error('title')
                                        <div class="alert alert-danger" role="alert">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                </div><!--end col-->
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">Image <span class="text-danger">*</span></label>
                                        <input name="image" id="image" type="file" accept="image/*" class="form-control">
                                        @error('image')
                                        <div class="alert alert-danger" role="alert">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                </div><!--end col-->
                                <div class="col-md-12">
                                    <div class="mb-3">
                                        <label class="form-label">Description</label>
                                        <textarea name="description" id="description" rows="4" class="form-control description">{!! old('description') !!}</textarea>
                                        @error('description')
                                        <div class="alert alert-danger" role="alert">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="mb-3">
                                        <label class="form-label">Status</label>
                                        <div class="form-check form-switch">
                                            <input class="form-check-input" type="checkbox" name="status" id="status" value="1" @if(old('active')) checked="" @endif>
                                            <label class="form-check-label" for="status">Check for status activated</label>
                                        </div>
                                        @error('status')
                                        <div class="alert alert-danger" role="alert">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="mb-3">
                                        <label class="form-label">Visibility on Home page</label>
                                        <div class="form-check form-switch">
                                            <input class="form-check-input" type="checkbox" name="home_page_visibility" id="home_page_visibility" value="1" @if(old('show_on_home')) checked="" @endif>
                                            <label class="form-check-label" for="home_page_visibility">Check for status activated</label>
                                        </div>
                                        @error('home_page_visibility')
                                        <div class="alert alert-danger" role="alert">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                </div>
                            </div><!--end row-->
                            <div class="row">
                                <div class="col-sm-12">
                                    <input type="submit" id="submit" name="send" class="btn btn-primary" value="CREATE NEW">
                                </div><!--end col-->
                            </div><!--end row-->
                        </form><!--end form-->
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

