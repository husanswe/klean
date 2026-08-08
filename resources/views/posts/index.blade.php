<x-layouts.main>
    <x-slot:title>
        Blog
    </x-slot:title>

    <x-page-hdr>
        Blog
    </x-page-hdr>

    <!-- Blog Start -->
    <div class="container-fluid py-5">
        <div class="container">

            @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
            @endif
            
            <div class="row align-items-end mb-4">
                <div class="col-lg-6">
                    <h6 class="text-secondary fw-semi-bold text-uppercase mb-3">Latest Blog</h6>
                    <h1 class="section-title mb-3">Latest Articles From Our Blog</h1>
                </div>
                <div class="col-lg-6">
                    <h4 class="fw-normal text-muted mb-3">Eirmod kasd duo eos et magna, diam dolore stet sea clita sit ea erat lorem. Ipsum eos ipsum magna lorem stet</h4>
                </div>
            </div>

            <div class="row">

                @foreach ($posts as $post)
                    <div class="col-lg-4 col-md-6 mb-5">
                        <div class="position-relative mb-4">
                            <img class="img-fluid rounded w-100" src="{{ asset('storage/'.$post->photo) }}" alt="Image">
                            <div class="blog-date">
                                <h4 class="fw-bold mb-n1">01</h4>
                                <small class="text-white text-uppercase">Jan</small>
                            </div>
                        </div>

                        <div class="d-flex mb-2">
                            @foreach ($post->tags as $tag)
                                <a class="text-secondary text-uppercase fw-medium">{{ $tag->name }}</a>
                                <span class="text-primary px-2">|</span>
                            @endforeach
                        </div>

                        <div class="d-flex mb-2">
                            <a class="bg-secondary rounded text-center text-white px-2 py-1">{{ $post->category->name }}</a>
                        </div>

                        <h5 class="fw-medium mb-2">{{ $post->title }}</h5>
                        <p class="mb-4">{{ $post->short_content }}</p>
                        <a class="btn btn-sm btn-primary py-2" href="{{ route('posts.show', ['post' =>$post->id]) }}">Read More</a>
                    </div>
                @endforeach
                
                {{ $posts->links() }}
            </div>

        </div>
    </div>
    <!-- Blog End -->

</x-layouts.main>