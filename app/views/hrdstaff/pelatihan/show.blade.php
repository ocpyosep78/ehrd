@extends('master')

@section('content')
<!-- Datepicker -->
{{ HTML::style('assets/css/plugins/datepicker/datepicker.css') }}
<!-- Datepicker -->
{{ HTML::script('assets/js/plugins/datepicker/bootstrap-datepicker.js') }}
<!-- CKEditor -->
{{ HTML::script('assets/js/plugins/ckeditor/ckeditor.js') }}
<!-- Plupload -->
{{ HTML::style('assets/css/plugins/plupload/jquery.plupload.queue.css') }}  
<!-- PLUpload -->
{{ HTML::script('assets/js/plugins/plupload/plupload.full.js') }}
{{ HTML::script('assets/js/plugins/plupload/jquery.plupload.queue.js') }}
{{ HTML::script('assets/js/plugins/fileupload/bootstrap-fileupload.min.js') }}
<body>
    @include('menu')
    </div>
    <div class="container-fluid" id="content"> <!-- <div class="container-fluid nav-hidden" id="content"> -->
        @include('hrdstaff.left')
        <div id="main">
            <div class="container-fluid">
                <div class="page-header">
                    <div class="pull-left">
                        <h1>Detail Pelatihan</h1>
                    </div>
                </div>
                <div class="breadcrumbs">
                    <ul>
                        <li>
                            <a href="{{Url::asset('hrdstaff/')}}">Home</a>
                            <i class="icon-angle-right"></i>
                        </li>
                        <li>
                            <a href="{{Url::asset('hrdstaff/pelatihan')}}">Pelatihan</a>
                            <i class="icon-angle-right"></i>
                        </li>
                        <li>
                            <a href="#">Detail Pelatihan</a>
                        </li>
                    </ul>
                    <div class="close-bread">
                        <a href="#"><i class="icon-remove"></i></a>
                    </div>
                </div>
                <div class="row-fluid">
                    <div class="span12">
                        <div class="box">
                            <div class="box-title">
                                <h3>{{ $data['pelatihan']->judul }}</h3>
                            </div>
                            <div class="box-content nopadding" style="padding-top:15px">
                                <table class="table table-striped table-invoice">
                                    <tr>
                                        <td widht=30%><strong>Tanggal</strong></td>
                                        <td>{{ date('d M Y', strtotime($data['pelatihan']->tanggalmulai)) }} - {{ date('d M Y', strtotime($data['pelatihan']->tanggalselesai)) }}</td>
                                    </tr>
                                    <tr>
                                        <td widht=30%><strong>Kuota</strong></td>
                                        <td>{{ $data['pelatihan']->kuota }}</td>
                                    </tr>
                                    <tr>
                                        <td widht=30%><strong>Biaya</strong></td>
                                        <td>{{ $data['pelatihan']->biaya == null ? '-' : $data['pelatihan']->biaya }}</td>
                                    </tr>

                                    <tr>
                                        <td widht=30%><strong>No. Rekening</strong></td>
                                        <td>{{ $data['pelatihan']->norekening == null ? '-' : $data['pelatihan']->norekening }}</td>
                                    </tr>
                                    <tr>
                                        <td widht=30%><strong>DP</strong></td>
                                        <td>{{ $data['pelatihan']->dp == null ? '-' : $data['pelatihan']->dp }}</td>
                                    </tr>
                                    <tr>
                                        <td widht=30%><strong>Pelunasan</strong></td>
                                        <td>{{ $data['pelatihan']->pelunasan == null ? '-' : $data['pelatihan']->pelunasan }}</td>
                                    </tr> 
                                    <tr>
                                        <td colspan=2>{{ $data['pelatihan']->uraian }}</td>
                                    </tr>   
                               </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div></div>
@stop