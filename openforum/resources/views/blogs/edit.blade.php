@extends('layouts.app')

@section('content')
   <section class="content-header">
           <h1>
               Blog
           </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">

           <div class="box-body">
               <div class="row">
                   {!! Form::model($blog, ['route' => ['blogs.update', $blog->id], 'method' => 'patch']) !!}

                    @include('blogs.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection