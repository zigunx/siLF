@extends('layouts.app')

@section('htmlheader_title')
	Home
@endsection
@section('contentheader_title')
	Home1
@endsection
@section('contentheader_description')
	Home2
@endsection


@section('main-content')
	<div class="container spark-screen">
		<div class="row">
			<div class="col-md-10 col-md-offset-1">
				<div class="panel panel-default">
					<div class="panel-heading">Home</div>

					<div class="panel-body">
						You are logged in!
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection
