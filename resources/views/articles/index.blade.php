@extends('layouts.app')

@section('content')
<div id="wrapper">
	<div id="page" class="container">
        @foreach ($articles as $article)
		<div id="content">
            <div class="title">
                <h2>
                    <a href="/articles/{{$article->id}}">{{$article->title}}</a>
                </h2>
            </div>
            <p>
                @foreach ($article->tags as $tag)
                    <a href="/articles?tag={{$tag->name}}">{{$tag->name}}</a>
                @endforeach
            </p>
            <p>
                <img src="{{asset('images/banner.jpg')}}" alt="" class="image image-full" />
            </p>
			<p>{{$article->excerpt}}</p>
		</div>
        @endforeach
	</div>
    <nav aria-label="Page navigation">
        <ul class="pagination justify-content-center">
            <li class="page-item disabled">
                <a class="page-link" href="#" aria-label="Previous">
                <span aria-hidden="true">&laquo;</span>
                <span class="sr-only">Previous</span>
                </a>
            </li>
            <li class="page-item active">
                <a class="page-link" href="#"></a>
            </li>
            <li class="page-item">
                <a class="page-link" href="#"></a>
            </li>
            <li class="page-item">
                <a class="page-link" href="#" aria-label="Next">
                <span aria-hidden="true">&raquo;</span>
                <span class="sr-only">Next</span>
                </a>
            </li>
        </ul>
    </nav>
    {{-- {{ $article->links() }} --}}
</div>
@endsection
