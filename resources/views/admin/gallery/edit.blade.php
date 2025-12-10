@extends('admin.layouts.app');
@section('content')
<section class="content-section col primary-bg-light p-xl-4 p-3">
                    <div class="bg-white rounded-3 shadow-sm p-3">
                        <div class="row">
                            <div class="col-12">
                                <div class="small fw-medium d-flex flex-wrap">Gallery<span><i class="bi bi-chevron-right"></i></span>View Details</div>
                                <hr class="mb-4">
                                <h5>Gallery Details</h5>
                                <form action="{{ route('admin.gallery.update', $gallery->id) }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')  
                                <div class="row g-2 gy-3">
                                        <div class="col-lg-8">
                                            <label for="" class="form-label fw-semibold">Title</label>
                                            <input type="text" class="form-control shadow-none" name="title" value="{{ old('title', $gallery->title) }}" id="" placeholder="" disabled>
                                            @error('title')
                                        <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                        </div>
                                        <div class="col-lg-8">
                                            <label for="" class="form-label fw-semibold">Featured Image/Video</label>
                                            <img src="{{ asset('storage/' . $gallery->image_path) }}" alt="Gallery Image" class="mb-3" style="max-width: 200px; display: block;">
                                            <input type="file" name="image" class="form-control shadow-none" id="" placeholder="" value="{{ old('image', $gallery->image) }}" disabled>
                                            @error('image')
                                        <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                        </div>
                                        <div class="col-lg-8">
                                            <label for="" class="form-label fw-semibold">Description</label>
                                            <textarea name="main_content" id="editor1" class="form-control shadow-none" rows="3" disabled>{{ old('main_content', $gallery->main_content) }}</textarea>
                                            @error('main_content')
                                        <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                        </div>
                                        <div class="col-12">
                                            <button type="button" id="editBtn" class="btn btn-type1 px-5 border-0 shadow-sm">Edit</button>
                                            <button type="submit" id="updateBtn" class="btn btn-type1 px-5 border-0 shadow-sm d-none">Save</button>
                                            <button type="button" onclick="history.back()" class="btn btn-type1 px-5 border-0 shadow-sm ms-2">Go Back</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </section>
                @endsection