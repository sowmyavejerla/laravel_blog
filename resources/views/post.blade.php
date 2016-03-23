@extends('layout') @section('content')
<h2 align="center">New post</h2>
<div class="container">
	<div class="row">
		<div class="col-sm-12 col-md-10 col-md-offset-1">
			<form action="/newpost" method="post">
				{{csrf_field()}} <input type="hidden" name="_token"
					value="{{ csrf_token() }}">
				<div class="form-group">
					<input required="required" value="" placeholder="Enter title here"
						type="text" name="title" class="form-control" />
				</div>
				<div class=" form-group">
					<select class="form-control" id="sel1" name ="category">
						<option>Select category</option>
						<option>art</option>
						<option>literature</option>
						<option>sports</option>
						<option>stories</option>
					</select>
				</div>
				<div class="form-group">
					<textarea name='body' class="form-control" rows="10"></textarea>
					<!-- 		<textarea class="ckeditor form-control" name="body"></textarea> -->
				</div>
				<input type="submit" name='publish' class="btn btn-success"
					value="Publish" /> <a href="" name='save' class="btn btn-default">Save
					Draft</a>
			</form>
		</div>
	</div>
</div>
@endsection
