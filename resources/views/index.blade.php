<pre>
@foreach ($collection as $news)
{{$news->author->name}}
<h1>{{$news->title}}</h1> 
{{$news->content}} 
<br>
<br>
@endforeach 
</pre>