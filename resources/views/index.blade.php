<pre>
@foreach ($collection as $news)
<h1>{{$news->title}}</h1> 
{{$news->content}} 
<br>
<br>
@endforeach 
</pre>