<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    <p>{!! $forum->id !!}</p>
</div>

<!-- Title Field -->
<div class="form-group">
    {!! Form::label('title', 'Title:') !!}
    <p>{!! $forum->title !!}</p>
</div>

<!-- Body Field -->
<div class="form-group">
    {!! Form::label('body', 'Body:') !!}
    <p>{!! $forum->body !!}</p>
</div>

<!-- Forum Type Field -->
<div class="form-group">
    {!! Form::label('forum_type', 'Forum Type:') !!}
    <p>{!! $forum->forum_type !!}</p>
</div>

