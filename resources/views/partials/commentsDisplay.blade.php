<div class="blog-comment">
    <h3 class="section-title">Comments:</h3>
    <div class="comment-list">
    @foreach($comments as $comment)
    <div class="blog-comment-form">

        <div class="comment">
            <div class="thumbnail">
                <img src="{{ asset('assets/media/blog/author-1.png') }}" alt="Blog Comment">
            </div>
            <div class="content" @if($comment->parent_id != null) style="margin-left:40px;" @endif>
                <div class="heading">
                    <h5 class="title">{{ $comment->user_id }}</h5>
                    <div class="comment-date">
                        <p>{{ $comment->created_at }}</p>
                    </div>
                </div>
                <p>{{ $comment->body }}</p>
            </div>
        </div>
</div>
<br>
        @endforeach

    </div>
</div>