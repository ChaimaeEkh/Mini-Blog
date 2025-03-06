<h1 >Articles du blog</h1>
@foreach ($posts as $post)
<div >
<div >
<h2 >{{ $post->title }}</h2>
<p >{{ Str::limit($post->content, 100) }}</p>
<a href="/posts/{{ $post->id }}" >Lire la suite</a>
</div>
</div>
@endforeach