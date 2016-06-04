<!-- Title Field -->
<div class="form-group col-sm-6">
    {!! Form::label('title', 'Title:') !!}
    {!! Form::text('title', null, ['class' => 'form-control']) !!}
</div>

<!-- Body Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('body', 'Body:') !!}
    {!! Form::textarea('body', null, ['class' => 'form-control']) !!}
</div>

<!-- Type Field -->
<div class="form-group col-sm-6">
    {!! Form::label('type', 'Type:') !!}
    {!! Form::select('type', ['active' => 'active', 'archived' => 'archived'], null, ['class' => 'form-control']) !!}
</div>

<!-- Private Post Field -->
<div class="form-group col-sm-6">
    {!! Form::label('private_post', 'Private Post:') !!}
    <label class="checkbox-inline">
        {!! Form::hidden('private_post', false) !!}
        {!! Form::checkbox('private_post', 'Yes', null) !!} Yes
    </label>
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('classrooms.index') !!}" class="btn btn-default">Cancel</a>
</div>
