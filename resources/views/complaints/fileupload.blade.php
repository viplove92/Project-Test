<div class="fileUpload">
{!! Form::file('image', ['id'=>'imgInp', 'class'=>'upload']) !!}
<h6>Complaint Images</h6>

    {!! HTML::image('../images/complaints/blank-complaint.png', 'Preview Complaint Pic', ['id' => 'blah','width' => '100%','height' => '100%']) !!}

</div>
<br/>
