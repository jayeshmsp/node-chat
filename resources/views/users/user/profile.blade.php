@extends('layouts.app')
@section('content')
<section class="content">
    <div class="row">
        <div class="col-sm-12">
            <div class="box box-white">
                <!-- form start -->
                {!! Form::model($item, array('method' => 'POST', 'url' => 'user/profile','class'=>'form-horizontal')) !!}
                <div class='box-body'>
                    
                    <!-- Name -->
                    <div class='row'>
                        <div class="User-title"><h1 class="user-title-inner ">{{$title}}</h1></div>
                        <div class='col-sm-6'>
                            <div class="{{ $errors->has('first_name') ? 'has-error' : '' }}">
                                <label class="control-label col-lg-3" for="name">First Name</label>
                                <div class="col-lg-8 input-box">
                                    {!! Form::text('first_name',null,array('class'=>'form-control')) !!}
                                    {!! $errors->first('first_name', '<span class="help-block">:message</span>') !!}
                                </div>
                            </div>
                        </div>
                        <div class='col-sm-6'>
                            <div class="{{ $errors->has('last_name') ? 'has-error' : '' }}">
                                <label class="control-label col-lg-3" for="name">Last Name</label>
                                <div class="col-lg-8 input-box">
                                    {!! Form::text('last_name',null,array('class'=>'form-control')) !!}
                                    {!! $errors->first('last_name', '<span class="help-block">:message</span>') !!}
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class='col-sm-6'>
                            <!-- Email -->
                            <div class="{{ $errors->has('email') ? 'has-error' : '' }}">
                                <label class="control-label col-lg-3" for="first_name">Email address</label>
                                <div class="col-lg-8 input-box">
                                    {!! Form::text('email',null,array('class'=>'form-control')) !!}
                                    {!! $errors->first('email', '<span class="help-block">:message</span>') !!}
                                </div>
                            </div>
                        </div>
                    </div>
                    @if(isset($item->is_profile_updated) && !empty($item->is_profile_updated) )
                        <!-- Passowrd -->
                        <div class='row'>
                            <div class='col-sm-6'>
                                <div class="{{ $errors->has('password') ? 'has-error' : '' }}">
                                    <label class="control-label col-lg-3" for="first_name">Password</label>
                                    <div class="col-lg-8 input-box">
                                        {!! Form::password('password',array('class'=>'form-control')) !!}
                                        {!! $errors->first('password', '<span class="help-block">:message</span>') !!}
                                    </div>
                                </div>
                            </div>
                            <!-- Confirm Passowrd -->
                            <div class='col-sm-6'>
                                <div class="{{ $errors->has('password_confirmation') ? 'has-error' : '' }}">
                                    <label class="control-label col-lg-3" for="first_name">Confirm Password</label>
                                    <div class="col-lg-8 input-box">
                                        {!! Form::password('password_confirmation',array('class'=>'form-control')) !!}
                                        {!! $errors->first('password_confirmation', '<span class="help-block">:message</span>') !!}
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endif
                    <div class='row'>
                        <div class='col-sm-6'>
                            <div class="{{ $errors->has('address') ? 'has-error' : '' }}">
                                <label class="control-label col-lg-3" for="address">Address</label>
                                <div class="col-lg-8 input-box">
                                    {!! Form::textarea('address',old('address'),array('class'=>'form-control','rows'=>'1')) !!}
                                    {!! $errors->first('address', '<span class="help-block">:message</span>') !!}
                                </div>
                            </div>
                        </div>
                        <div class='col-sm-6'>
                            <!-- Email -->
                            <div class="{{ $errors->has('mobile_contact_num') ? 'has-error' : '' }}">
                                <label class="control-label col-lg-3" for="first_name">Mobile</label>
                                <div class="col-lg-8 input-box">
                                    {!! Form::number('mobile_contact_num',old('mobile_contact_num'),array('class'=>'form-control','placeholder'=>'Mobile Num')) !!}
                                    {!! $errors->first('mobile_contact_num', '<span class="help-block">:message</span>') !!}
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class='row'>
                        <div class='col-sm-6'>
                            <div class="{{ $errors->has('work_contact_num') ? 'has-error' : '' }}">
                                <label class="control-label col-lg-3" for="work_contact_num">Office Phone</label>
                                <div class="col-lg-8 input-box">
                                    {!! Form::number('work_contact_num',old('work_contact_num'),array('class'=>'form-control','placeholder'=>'Office Phone Num')) !!}
                                    {!! $errors->first('work_contact_num', '<span class="help-block">:message</span>') !!}
                                </div>
                            </div>
                        </div>
                        <div class='col-sm-6'>
                            <!-- Email -->
                            <div class="{{ $errors->has('home_contact_num') ? 'has-error' : '' }}">
                                <label class="control-label col-lg-3" for="first_name">Home Phone</label>
                                <div class="col-lg-8 input-box">
                                    {!! Form::number('home_contact_num',old('home_contact_num'),array('class'=>'form-control','placeholder'=>'Home Phone Num','size'=>'10')) !!}
                                    {!! $errors->first('home_contact_num', '<span class="help-block">:message</span>') !!}
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class='row'>
                        <div class='col-sm-6'>
                            <div class="{{ $errors->has('interest') ? 'has-error' : '' }}">
                                <label class="control-label col-lg-3" for="interest">Interests</label>
                                <div class="col-lg-8 input-box">
                                    {!! Form::select('interest[]',$interest,old('interest',explode(',', $item['interest'])),array('class'=>'form-control','multiple'=>'multiple')) !!}
                                    {!! $errors->first('interest', '<span class="help-block">:message</span>') !!}
                                </div>
                            </div>
                        </div>
                        <div class='col-sm-6'>
                            <div class="{{ $errors->has('skill') ? 'has-error' : '' }}">
                                <label class="control-label col-lg-3" for="skill">Skills</label>
                                <div class="col-lg-8 input-box">
                                    {!! Form::select('skill[]',$skill,old('skill',explode(',', $item['skill'])),array('class'=>'form-control','multiple'=>'multiple')) !!}
                                    {!! $errors->first('skill', '<span class="help-block">:message</span>') !!}
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="box-footer">
                    <button type="submit" name="save" class="btn btn-success">Update</button>
                    <a class="btn btn-danger" href="{{ url('/home') }}">Cancel</a>
                </div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
</section>
@stop