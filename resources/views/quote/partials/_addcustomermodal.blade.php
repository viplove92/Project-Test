<div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">

        {!! Form::open(['url' => route('crm.store'),'class' => 'form-signin' ,'data-parsley-validate', 'files' => true] ) !!}
            @include('crm.crmform')
        {!! Form::close() !!}

        </div>
    </div>
</div>