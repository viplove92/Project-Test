<div class="col-sm-6" align="center">
<div class="form-group-attached">

<div class="panel panel-default">

    <div class="panel-body">
    <h5 align="center">Photograph</h5>

<div class="fileUpload" align="center">
    {!! Form::file('image', ['id'=>'imgInp', 'class'=>'upload']) !!}
    <h6>Complaint Photograph</h6>

<div align="center">
@if(is_null($staff->photo_url) or $staff->photo_url == 'blank-complaint.png')
<img src="http://easymanage.dev/images/complaints/blank-complaint.png" width="200" height="auto" id="blah" alt="Preview Staff Photograph">
@else
<img src="http://easymanage.dev/images/complaints/{{ $complaint->photo_url }}" width="200" height="auto" id="blah" alt="Preview Staff Photograph">
@endif
</div>


</div>
<br/>

</div>
</div>
</div>
</div>