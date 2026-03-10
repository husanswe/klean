<x-layouts.main>
    <x-slot:title>Create Post</x-slot:title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/choices.js/public/assets/styles/choices.min.css">
    
    <style>
        .choices__inner {
            border: 1px solid #ccc;
            border-radius: 50px;
            background-color: #fff;
            padding: 8px 16px;
            font-size: 16px;
            min-height: unset;
        }
        
        .choices__list--dropdown {
            border-radius: 15px;
            border: 1px solid #ccc;
        }
        
        .choices[data-type*=select-multiple] .choices__inner {
            border-radius: 50px;
        }

        .choices__item[data-value=""] {
            display: none;
        }
    </style>
        
    <script src="https://cdn.jsdelivr.net/npm/choices.js/public/assets/scripts/choices.min.js"></script>

    <x-page-hdr>Create New Post</x-page-hdr>

    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-lg-7">
                <div class="contact-form">
                    <form action="{{ route('posts.store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="control-group mb-1">
                            <input type="text" class="form-control p-4" name="title" value="{{ old('title') }}" placeholder="Title"/>
                            @error('title')
                                <p class="help-block text-danger">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="control-group mb-4">
                            <select class="mt-4" name="category_id" 
                                    style="width: 100%;
                                       padding: 12px 16px;
                                       border: 1px solid #ccc;
                                       border-radius: 50px;
                                       outline: none;
                                       font-size: 16px;
                                       color: #999;
                                       background-color: #fff;
                                       appearance: none;">
                                <option style="color: #999;" value="">Select category</option>
                                @foreach ($categories as $category)
                                    <option style="color: #000;" value="{{ $category->id }}">{{ $category->name }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="control-group mb-4">
                            <select class="mt-1 form-control" name="tags[]" id="tags" multiple> 
                                <option style="color: #999;" value="" disabled> Select tag </option>
                                @foreach ($tags as $tag)
                                    <option style="color: #000;" value="{{ $tag->id }}">{{ $tag->name }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="control-group mb-4">
                            <input name="photo" type="file" class="form-control  pt-3 pb-5" style="padding-left: 5%;" placeholder="photo"/>
                            @error('photo')
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

    <script>
        new Choices('#tags', {
            removeItemButton: true,
            placeholder: true,
            placeholderValue: 'Select tag',
        });
    </script>

</x-layouts.main>




