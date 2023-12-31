<main>
    <div class="section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="mb-5">
                        <h2 class="mb-4" style="line-height:1.5">{{ $singleArticle->title }}</h2>
                        <span>{{ \Carbon\Carbon::parse($singleArticle->created_at)->format('d M Y') }}<span
                                class="mx-2">/</span> </span>
                        <p class="list-inline-item">Category : <a href="#"
                                class="ml-1">{{ $singleArticle->category_name }} </a>
                        </p>
                        <p class="list-inline-item">Author : <a href="#"
                                class="ml-1">{{ $singleArticle->author }} </a>
                        </p>
                        {{-- <p class="list-inline-item">Author : <a href="#!" class="ml-1">Photo </a> ,<a
                                href="#!" class="ml-1">Image </a>
                        </p> --}}
                    </div>
                    <div class="mb-5 text-center">
                        <div class="post-slider rounded overflow-hidden">
                            <img loading="lazy" decoding="async" src="{{ asset('storage/' . $singleArticle->image) }}"
                                alt="Post Thumbnail"" alt="Post Thumbnail">

                        </div>
                    </div>
                    <div class="content">
                        {!! $singleArticle->content !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
