<div>
    <div class="row"> <!-- Add a wrapping div here -->
        @foreach ($data as $items)
        <div class="col-lg-8 mb-5 mb-lg-0">
            <div class="row">
                <div class="col-12 mb-4">
                    <article class="card article-card">
                        <a href="article.html">
                            <div class="card-image">
                                <div class="post-info">
                                    <span class="text-uppercase">{{$items->created_at}}</span>
                                </div>
                                <img alt="Avatar" class="profile-user-img img-fluid img-circle" src="{{asset('storage')}}/{{$items->profile_photo_path}}">
                            </div>
                        </a>
                        <div class="card-body px-0 pb-1">
                            <h2 class="h1">
                                <a class="post-title">{{$items->name}}</a>
                            </h2>
                            <p class="card-text">{{$items->description}}</p>
                        </div>
                    </article>
                </div>
            </div>
        </div>
        @endforeach
    </div> <!-- Close wrapping div here -->
    {{-- <div class="d-flex justify-content-center mt-4">
        {{ $data->links() }}
    </div> --}}
</div>
