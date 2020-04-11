<div>
    <h3><a href="{{route('post.edit', $post->id)}}">{{$post->title}}</a> <div class="float-right">{{$post->created_at->diffForHumans()}}</div></h3>
    <p>{{$post->body}}</p>
</div>
