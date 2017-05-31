@extends('layouts.app')
@section('content')
<section class="content">
    <div class="row">
        <div class="col-sm-12">
          <div class="box box-white">

                <!-- form start -->
                {!! Form::model($item, array('method' => 'PATCH', 'url' => $ctrl_url.'/'.$item['id'],'class'=>'form-horizontal','id'=>'setting-form')) !!}
                    @include($view_path.'.partials.form')

                    <div class="box-footer">
                        <button type="submit" name="save" class="btn btn-success">Update</button>
                        <a class="btn btn-danger" href="{{ $ctrl_url }}">Cancel</a>
                    </div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
</section>    
@stop
