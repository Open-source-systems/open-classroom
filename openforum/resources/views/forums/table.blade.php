<table class="table table-responsive" id="forums-table">
    <thead>
        <th>Title</th>
        <th>Body</th>
        <th>Forum Type</th>
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    @foreach($forums as $forum)
        <tr>
            <td>{!! $forum->title !!}</td>
            <td>{!! $forum->body !!}</td>
            <td>{!! $forum->forum_type !!}</td>
            <td>
                {!! Form::open(['route' => ['forums.destroy', $forum->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('forums.show', [$forum->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('forums.edit', [$forum->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>