<table class="table table-responsive" id="classrooms-table">
    <thead>
        <th>Title</th>
        <th>Body</th>
        <th>Type</th>
        <th>Private Post</th>
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    @foreach($classrooms as $classroom)
        <tr>
            <td>{!! $classroom->title !!}</td>
            <td>{!! $classroom->body !!}</td>
            <td>{!! $classroom->type !!}</td>
            <td>{!! $classroom->private_post !!}</td>
            <td>
                {!! Form::open(['route' => ['classrooms.destroy', $classroom->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('classrooms.show', [$classroom->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('classrooms.edit', [$classroom->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>