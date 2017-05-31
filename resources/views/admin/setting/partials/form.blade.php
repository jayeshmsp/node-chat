<div class='box-body'>
    <!-- Name -->
    <div class='row'>
        <div class="User-title"><h1 class="user-title-inner ">{{ $title }}</h1></div>
        <!-- Login With -->
        <div class="form-group {{ $errors->has('login_with') ? 'has-error' : '' }}">
            <label class="control-label col-lg-3" for="login_with ">Login With : </label>
            <div class="col-lg-6">
                {!! Form::radio('login_with', 'email' , true) !!} Email
                {!! Form::radio('login_with', 'username' , false) !!} Username
                {!! $errors->first('login_with', '<span class="help-block">:message</span>') !!}
            </div>
        </div>
        <div class="form-group {{ $errors->has('interest') ? 'has-error' : '' }}">
            <label class="control-label col-lg-3" for="interest ">Interests : </label>
            <div class="col-sm-6">
                {!! Form::text('interest',old('interest'),['data-role'=>'tagsinput','id'=>'tags-input']) !!}
                <span class="help-block">
                    <code>Please use " , " for add tag</code>
                </span>
                {!! $errors->first('interest', '<span class="help-block">:message</span>') !!}
            </div>
        </div>
        <div class="form-group {{ $errors->has('skill') ? 'has-error' : '' }}">
            <label class="control-label col-lg-3" for="skill ">Skills : </label>
            <div class="col-sm-6">
                {!! Form::text('skill',old('skill'),['data-role'=>'tagsinput','id'=>'tags-input']) !!}
                <span class="help-block">
                    <code>Please use " , " for add tag</code>
                </span>
                {!! $errors->first('skill', '<span class="help-block">:message</span>') !!}
            </div>
        </div>
    </div>
</div>