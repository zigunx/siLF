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
						Selamat Datang  {{ Auth::user()->name }}


					</div>
					</div>
					<div class="panel-heading">
					 <!-- DONUT CHART -->
			          <div class="box box-danger">
			            <div class="box-header with-border">
			              <h3 class="box-title">Data Mahasiswa </h3>

			              <div class="box-tools pull-right">
			                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
			                </button>
			                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
			              </div>
			            </div>
			            <div class="box-body">
			              <canvas id="pieChart" style="height:250px"></canvas>
			            </div>
			          </div> <!-- /.box-body -->
					</div> <!-- /.heading -->
				</div>
			</div>
		</div>
	</div>
	

@endsection

