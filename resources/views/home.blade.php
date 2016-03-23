@extends('layout') @section('content')
<h2 align="center">{{$head}}</h2>
@foreach($post as $posts)

<div class="list-group"
	style="border-top-right-radius: 20px !important; padding-left: 230px !important; padding-top: 30px !important; padding-right: 230px !important; border-top-left-radius: 20px !important;">
	<div class="list-group-item">

		<h3>
			<a href="">{{$posts->title}}</a>


			<!-- 			<button class="btn" style="float: right">-->
			<!-- 				<a href="">Edit Post</a> -->
			<!-- 			</button> -->

			<!-- 			<button class="btn" style="float: right">-->
			<!-- 				<a href="">Edit Draft</a> -->
			<!-- 			</button> -->


		</h3>

		<div class="list-group-item">{{$posts->body}}</div>
	</div>
	<div class="list-group-item">
		<article>

			<p>
				By <a href="">{{$posts->author_id}}</a>
			</p>
		</article>
	</div>
</div>

@endforeach @endsection
