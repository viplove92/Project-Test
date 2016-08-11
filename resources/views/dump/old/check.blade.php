
{!! Form::label('isOwner', 'Are you Owner of this Block / Flat / Shop / Villa / Row House') !!}
{!! Form::checkbox('isOwner', 'yes', true, ['class' => 'switchery'])  !!}

<hr>
{!! Form::label('isOwner', 'Are you Vendor') !!}
{!! Form::checkbox('isOwner', 'yes', true, ['class' => 'switchery'])  !!}




<hr>
<div class="checkbox check-warning checkbox-circle">
    <input type="checkbox"  checked="checked" value="1" id="checkbox5">
    <label for="checkbox5">Action</label>
</div>


<hr>
<div class="checkbox check-warning ">
    {!!  Form::checkbox('checkbox', 'yes', true, ['id' => 'checkbox1'])!!}
    {!! Form::label('checkbox1', 'Are you Vendor') !!}
</div>


<hr>
<div class="checkbox check-success">
    <input type="checkbox" checked="checked" value="check1" name="check" id="check1">
    <label for="check1">Checkbox No. 1</label>
</div>
<div class="checkbox check-success">
    <input type="checkbox" value="check2" name="check" id="check2">
    <label for="check2">Checkbox No. 2</label>
</div>

<div class="radio radio-primary">
    {!!  Form::radio('radio3' , 'yes', true, ['id'=>'radio3Yes']) !!}
    {!! Form::label('radio3Yes', 'iOS') !!}

    {!!  Form::radio('radio3' , 'no', false, ['id'=>'radio3No']) !!}
    {!! Form::label('radio3No', 'Android') !!}
    <hr>
</div>

<div class="radio radio-danger">
    <input type="radio" checked="checked" value="yes" name="radio6" id="rdbYes">
    <label for="rdbYes">iOS</label>
    <input type="radio" value="no" name="radio6" id="rdbNo">
    <label for="rdbNo">Android</label>
</div>

{{--<hr>--}}
{{--<br>--}}
<div class="radio radio-warning">
    <input type="radio" checked="checked" value="yes" name="radio2" id="radio2Yes">
    <label for="radio2Yes">Male</label>
    <input type="radio" value="no" name="radio2" id="radio2No">
    <label for="radio2No">Female</label>
</div>

<hr>
<div class="radio radio-primary">
    <input type="radio" disabled="disabled" checked="checked" value="Disabled" name="Disabled" id="Disabled">
    <label for="Disabled">Positive</label>
    <input type="radio" disabled="disabled"  value="ADisabled" name="ADisabled" id="ADisabled">
    <label for="ADisabled">Negative</label>
</div>

<hr>



@push('scripts')

<script>
    var elems = Array.prototype.slice.call(document.querySelectorAll('.switchery'));
    // Success color: #10CFBD
    elems.forEach(function(html) {
        var switchery = new Switchery(html, {color: '#10CFBD'});
    });
</script>

@endpush

