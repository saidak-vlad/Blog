
<div class="col">
    <article class="article-preview  ">
        <div class="card mb-3" style="max-width: 900px;height:auto; ">
            <div class="row no-gutters ">
                <div class="col-md-4">
                    <a href="{{route("posts.show",$post->id)}}">
                        <img src="/storage/posts/{{ $post->thumbnail }}" class="img-fluid " alt="Responsive image "style="height:auto; ">
                    </a>
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title">{{ $post->title }}</h5>
                        <p class="card-text">
                            {!! $post->preview !!}
                        </p>
                        <a href="{{route("posts.show",$post->id)}}" class="more text-muted ">Read more</a>
                    </div>
                </div>
            </div>
        </div>
    </article>
</div>
