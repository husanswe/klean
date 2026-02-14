<x-layouts.main>
    <x-slot:title>Create Post</x-slot:title>

    <x-page-hdr>Create New Post</x-page-hdr>

    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-lg-7">
                <div class="contact-form">
                    <form action="{{ route('posts.store') }}" method="post">
                        @csrf
                        <div class="control-group mb-4">
                            <input type="text" class="form-control p-4" name="title" value="{{ old('title') }}" placeholder="Title"/>
                            @error('title')
                                <p class="help-block text-danger">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="control-group mb-4">
                            <input type="file" class="form-control p-4" placeholder="Image"/>
                            @error('file')
                                <p class="help-block text-danger">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="control-group mb-4">
                            <textarea class="form-control p-4" rows="1" name="short_content" placeholder="Short description">{{ old('short_content') }}</textarea>
                            @error('short_content')
                                <p class="help-block text-danger">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="control-group mb-4">
                            <textarea class="form-control p-4" rows="6" name="content" placeholder="Write a post">{{ old('content') }}</textarea>
                            @error('content')
                                <p class="help-block text-danger">{{ $message }}</p>
                            @enderror
                        </div>

                        <div>
                            <button class="btn btn-primary btn-block py-3 px-5" type="submit">
                                Save
                            </button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>

</x-layouts.main>




