<div class="col-sm-6 b-r b-dashed b-grey">
    <div class="easybox float-e-margins">
        <div class="easybox-content" id="easybox_form">
            <h4 align="center"> Your Apartments</h4>
            <div class="row">
            <div class="col-sm-8">
                {!! Form::open(['url' => route('setdefault'),'class' => 'form-signin' ,'data-parsley-validate', 'files' => true] ) !!}

                {!! Form::select('apartment', $apartments, Auth::user()->profile->defaultApartment,
                            ['id'=>'group',
                            'class' => 'full-width',
                            'required',
                            'data-parsley-required-message' => 'Bank Account is required',
                            'data-parsley-trigger'          => 'change focusout'
                            ]) !!}
            </div>
            <div class="col-sm-4" align="center">
                <button type="submit" id="submit" class="btn btn-primary"><i class="fa fa-check"></i>  Set Default</button>
                {!! Form::close() !!}
            </div>
            </div>
        </div>
    </div>
</div>

