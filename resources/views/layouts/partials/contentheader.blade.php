<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        @yield('contentheader_title', 'Page Header here')
        <small>@yield('contentheader_description')</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="{{ url('mahasiswa/index')}}"><i class="fa fa-dashboard"></i> @yield('contentheader_title', 'Page Header here')</a></li>
        <li class="active"><a href="{{ url('mahasiswa/add') }}">@yield('contentheader_description')</a></li>
    </ol>
</section>