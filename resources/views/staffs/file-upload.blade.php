<div class="col-sm-4" align="center">

    <div class="panel-body">
    <div class="form-group-attached">
    <h5 align="center">Staff Photograph</h5>

<div class="fileUpload" align="center">
    {!! Form::file('image', ['id'=>'imgInp', 'class'=>'upload']) !!}
    <h6>Staff Photograph</h6>

    {!! HTML::image('../images/complaints/blank-complaint.png', 'Preview Complaint Pic', ['id' => 'blah','width' => '100%','height' => '100%']) !!}

</div>
<br/>

</div>
</div>
</div>
