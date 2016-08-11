<div class="col-sm-3"></div>

<div class="col-sm-6">
<div class="easybox float-e-margins">
<div class="easybox-content" id="easybox_form">

    <div align="center">
        <h4>{{ $list->title }}</h4>
    </div>
    <hr>

    {!! Form::open(['url' => route('voteup'),'class' => 'form-signin' ,'data-parsley-validate'] ) !!}

    <div class="toggle-btn-grp">
        @foreach($list->options as $option)
        <label onclick="" class="toggle-btn">
                <input type="radio" value="{{ $option->id }}" name="option"/>{{ $option->option }}</label>
            <br>
        @endforeach
    </div>

</div>
</div>

<div align="center">
    <button type="submit" id="submit" title="Vote" class="btn btn-primary"><i class="fa fa-thumbs-up"></i> Vote </button>
</div>

    {!! Form::close() !!}

    <br>
<div align="center">
    <a href="{{ route('polls.index') }}" title="Back" class="btn btn-info"><i class="fa fa-arrow-left"></i> Back</a>
</div>
</div>


<div class="col-sm-3"></div>