@extends('admin.layouts.app')
@section('content')
 <section id="contentSection" class="content-section col primary-bg-light p-xl-4 p-3">
     <div class="bg-white rounded-3 shadow-sm p-3">
                        <div class="row">
                            <div class="col-12">
                                <div class="small fw-medium d-flex flex-wrap">Gallery<span><i class="bi bi-chevron-right"></i></span>Add Gallery</div>
                                <hr class="mb-4">
                                <h5> Gallery</h5>
                                <form method="POST" action="{{ route('admin.gallery.store') }}" enctype="multipart/form-data">
                                @csrf    
                                <div class="row g-2 gy-3">
                                        <div class="col-lg-8">
                                            <label for="" class="form-label fw-semibold">Title</label>
                                            <input type="text" name="title" value="{{ old('title') }}" class="form-control shadow-none" id="" placeholder="">
                                            @error('title')
                                        <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                        </div>
                                        <div class="col-lg-8">
                                            <label for="" class="form-label fw-semibold">Image</label>
                                            <input type="file" name="image" value="{{ old('image') }}" class="form-control shadow-none" id="" placeholder="" value="">
                                            @error('image')
                                        <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                        </div>
                                        
                                        <div class="col-lg-8">
                                            <label for="" class="form-label fw-semibold">Description</label>
                                            <textarea name="main_content" id="editor1" class="form-control shadow-none" rows="3">{{ old('description') }}</textarea>
                                            @error('main_content')
                                        <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                        </div>

                                        <div class="col-12">
                                            <button type="submit" class="btn btn-type1 px-5 border-0 shadow-sm">Add</button>
                                            <button type="button" onclick="history.back()" class="btn btn-type1 px-5 border-0 shadow-sm ms-2">Go Back</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
     </div>
    </section>

    @endsection