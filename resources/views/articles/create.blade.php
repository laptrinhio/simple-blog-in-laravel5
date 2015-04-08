@extends ('layouts.master')

@section ('head.title')
Thêm một bài viết mới vào blog
@stop

@section ('body.content')
<div class="container">

    <div class="row">
        <div class="col-sm-6 col-sm-offset-3">
            <h1>Them bai viet</h1>
            <hr>
        </div>
    </div> <!-- .row -->



    <div class="row">
        <div class="col-sm-6 col-sm-offset-3">
            @if (count($errors) > 0)
                <div class="alert alert-danger">
                    <strong>Whoops!</strong> There were some problems with your input.<br><br>
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            {!! Form::open([
                    'route' => [ 'article.store' ],
                    'method' => 'POST',
                    'class' => 'form-horizontal'
                ])
            !!}
                @include('articles._form', [ 'button_name' => 'Create' ])

            {!! Form::close() !!}

        </div>
    </div> <!-- .row -->

</div>
@stop
