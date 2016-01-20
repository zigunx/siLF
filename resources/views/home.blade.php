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


							 <form class="form-horizontal" method="POST" action="mahasiswa/simpan">
                                
								<div class="form-group">
                                 <label class="col-sm-2 control-label" for="form-field-1"> jurusan </label>
                                    <div class="col-sm-9">
                                        <select name="id_jurusan" class="form-control" ng-model="data.id_jurusan">
                                            <option value="">Pilih jurusan</option>
                                            <option ng-repeat="unit in jurusan" ng-selected="" value=""></option>
                                        </select>
                                    </div>
                                </div>
                                
                                <div class="form-group">
                                    <label class="col-sm-2 control-label" for="nama"> Nama mahasiswa </label>
                                    <div class="col-sm-9">
                                        <input type='text' class='col-sm-10 form-control' id="nama" name='nama_mahasiswa' />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label" for="ttl"> Tempat/Tanggal Lahir </label>
                                    <div class="col-sm-9">
                                        <input type='text' class='col-sm-10 form-control' id="ttl" name='tmp_tgl_lahir'  />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label" for="jenkel"> Jenis Kelamin </label>
                                    <div class="col-sm-9">
                                        <input type='text' class='col-sm-10 form-control' id="jenkel" name='jenkel' />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label" for="agama"> Agama </label>
                                    <div class="col-sm-9">
                                        <input type='text' class='col-sm-10 form-control' id="agama" name='agama'  />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label" for="ukuranjas"> Ukuran Jas </label>
                                    <div class="col-sm-9">
                                        <input type='text' class='col-sm-10 form-control' id="ukuranjas" name='ukuranjas'  />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label" for="s_kerja"> Status Pekerjaan </label>
                                    <div class="col-sm-9">
                                        <input type='text' class='col-sm-10 form-control' id="s_kerja" name='s_kerja' />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label" for="s_nikah"> Status Pernikahan </label>
                                    <div class="col-sm-9">
                                        <input type='text' class='col-sm-10 form-control' id="s_nikah" name='s_nikah'  />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label" for="alamat"> Alamat </label>
                                    <div class="col-sm-9">
                                        <input type='text' class='col-sm-10 form-control' name='alamat'  />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label" for="no_hp"> No. HP </label>
                                    <div class="col-sm-9">
                                        <input type='text' class='col-sm-10 form-control' id="no_hp" name='no_hp'  />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label" for="nama_ortu"> Nama Orang Tua </label>
                                    <div class="col-sm-9">
                                        <input type='text' class='col-sm-10 form-control' id="nama_ortu" name='nama_ortu'  />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label" for="nama_suis"> Nama Suami/Istri </label>
                                    <div class="col-sm-9">
                                        <input type='text' class='col-sm-10 form-control' id="nama_suis" name='nama_suis'/>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label" for="pendidikan_terakhir"> Pendidikan Terakhir </label>
                                    <div class="col-sm-9">
                                        <input type='text' class='col-sm-10 form-control' id="pendidikan_terakhir" name='pendidikan_terakhir'/>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label" for="form-field-1"> Alamat Sekolah </label>
                                    <div class="col-sm-9">
                                        <input type='text' class='col-sm-10 form-control' name='alamat_skolah' />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label" for="form-field-1"> Berkas Persyaratan </label>
                                    <div class="col-sm-9">
                                        <input type='text' class='col-sm-10 form-control' name='persyaratan' />
                                    </div>
                                </div>			

                                  <div class="box-footer">
                                    <button type="submit" class="btn btn-primary">Simpan</button>
                                    <button type="reset" class="btn btn-default pull-right">Ulangi</button>
                                  </div>                               
                                </form>		



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

