@extends('master')
@section('container')
<div class="panel panel-info">
<div class="panel-heading">

 <strong><a href="{{url('jadwal_matakuliah')}}">
   <i class="fa text-default fa-chevron-left"></i>
 </a>Perbaharui Data Jadwal Matakuliah</strong>
 </div>
 {!! Form::model($jadwalmatakuliah,['url'=>'jadwal_matakuliah/edit/'.$jadwal_matakuliah->id,'class'=>'form-horizontal']) !!}
@include('jadwal_matakuliah.Form')
<div style="width:100%;text-align:right;">
<button class="btn btn-info"><i class="fa fa-save"></i>Perbaharui</button>
<button type="reset" class="btn btn-danger"><i class="fa fa-undo"></i>Ulangi</button>
</div>
{!! Form::close() !!}

</div>
@stop