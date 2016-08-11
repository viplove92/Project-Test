<div class="row form-group-attached">
<div class="easybox float-e-margins">
<div class="easybox-content" id="easybox_form">

    <div class="row">
        <div class="col-md-12">
            <div class="form-group form-group-default">
                {!! Form::label('subject', 'Subject : ', ['class' => 'control-label']) !!}
                {!! Form::text('subject', null, [
                                    'class'                         => 'form-control',
                                    'placeholder'                   => '',
                                    'required',
                                    'id'                            => 'subject',
                                    'data-parsley-required-message' => 'Subject is required',
                                    'data-parsley-trigger'          => 'change focusout',
                                    'data-parsley-minlength'        => '2',
                                    'data-parsley-maxlength'        => '100'
                                ]) !!}
            </div>
            <hr>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <div class="form-group form-group-default required">
                    {!! Form::label('account_id', 'Contact : ', ['class' => 'control-label']) !!}
                    {!! Form::select('account_id', $crm, null,
                                    ['id'=>'group',
                                    'class' => 'full-width',
                                    'required',
                                    'data-parsley-required-message' => 'Contact is required',
                                    'data-parsley-trigger'          => 'change focusout'
                                    ]) !!}
                </div>
                <span class="help-block"><a href="#" id="contact_add" data-toggle="modal" data-target=".bs-example-modal-lg">| Or Add New Customer</a> </span>
            </div>

            <div class="form-group form-group-default disabled">
                {!! Form::label('address', 'Address : ', ['class' => 'control-label disabled']) !!}
                {!! Form::text('address', null, [
                                    'class'                         => 'form-control',
                                    'placeholder'                   => '',
                                    'disabled',
                                    'id'                            => 'address',
                                ]) !!}
            </div>

            <div class="form-group form-group-default">
                {!! Form::label('quote_prefix', 'Quote Prefix : ', ['class' => 'control-label']) !!}
                {!! Form::text('quote_prefix', null, [
                                    'class'                         => 'form-control',
                                    'placeholder'                   => '',
                                    'id'                            => 'quote_prefix',
                                    'data-parsley-required-message' => 'Quote Prefix is required',
                                    'data-parsley-trigger'          => 'change focusout',
                                    'data-parsley-minlength'        => '2',
                                    'data-parsley-maxlength'        => '100'
                                ]) !!}
            </div>

            <div class="form-group form-group-default">
                {!! Form::label('quote_no', 'Quote # : ', ['class' => 'control-label']) !!}
                {!! Form::text('quote_no', null, [
                                    'class'                         => 'form-control',
                                    'placeholder'                   => '',
                                    'id'                            => 'quote_prefix',
                                    'data-parsley-required-message' => 'Quote Prefix is required',
                                    'data-parsley-trigger'          => 'change focusout',
                                    'data-parsley-minlength'        => '2',
                                    'data-parsley-maxlength'        => '100'
                                ]) !!}
                <p>Keep it Blank to Generate Quote Number Automatically</p>
            </div>

        </div>

        <div class="col-md-6">
            <div class="form-group form-group-default">
                <label class="control-label">Date Created</label>
                <div class="input-group date" id="dp3" data-date-format="yyyy-mm-dd">
                    {!! Form::text('date_created', $date_created, [
                          'class'                         => 'form-control',
                          'placeholder'                   => '',
                          'required',
                          'id'                            => 'date',
                          'data-parsley-required-message' => 'Date Created is required',
                          'data-parsley-trigger'          => 'change focusout'
                      ]) !!}
                    <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
                </div>
            </div>

            <div class="form-group form-group-default">
                <label class="control-label">Date Expiry</label>
                <div class="input-group date" id="dp3" data-date-format="yyyy-mm-dd">
                    {!! Form::text('date_expiry', $date_expiry, [
                          'class'                         => 'form-control',
                          'placeholder'                   => '',
                          'required',
                          'id'                            => 'date',
                          'data-parsley-required-message' => 'Date Expiry is required',
                          'data-parsley-trigger'          => 'change focusout'
                      ]) !!}
                    <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
                </div>
            </div>

            <div class="form-group form-group-default">
                {!! Form::label('stage', 'Stage : ', ['class' => 'control-label']) !!}
                {!! Form::select('stage', $stage, null,
                                ['id'=>'group',
                                'class' => 'full-width',
                                'required',
                                'data-parsley-required-message' => 'Stage is required',
                                'data-parsley-trigger'          => 'change focusout'
                                ]) !!}
            </div>

            <div class="form-group form-group-default">
                {!! Form::label('tax', 'Tax : ', ['class' => 'control-label']) !!}
                {!! Form::select('tax', $tax, null,
                                ['id'=>'group',
                                'class' => 'full-width',
                                ]) !!}
            </div>

            <div class="form-group">
                <div class="form-group form-group-default">
                    {!! Form::label('tax', 'Discount : ', ['class' => 'control-label']) !!}
                    {!! Form::select('tax', $tax, null,
                                    ['id'=>'group',
                                    'class' => 'full-width',
                                    ]) !!}
                </div>
                <span class="help-block"><a href="#" id="contact_add">| Or Set New Discount</a> </span>
            </div>

        </div>
    </div>

    <div class="row">
        <div class="form-group">
            {!! Form::label('tax', 'Proposal Text : ', ['for' => 'customer_notes']) !!}
            {!! Form::textarea('tax', null,
                            ['id'   =>'customer_notes',
                            'class' => 'full-width form-control',
                            'rows'  => '6',
                            ]) !!}
        </div>
    </div>

    <main id="app">
        <table class="table table-hover table-bordered" cellspacing="0" width="100%">
            <tr>
                <th style="padding-left: 20px;">#</th>
                <th style="padding-left: 20px;">Description</th>
                <th style="padding-left: 20px;">Unit</th>
                <th style="padding-left: 20px;">Qty</th>
                <th style="padding-left: 20px;">Price</th>
                <th style="padding-left: 20px;">Tax</th>
                <th style="padding-left: 20px;">Total</th>
                <th></th>
            </tr>

            <tr v-for="item in items">
                <td>@{{$index + 1}}</td>
                <td><textarea class="form-control" name="description[]" id="customer_notes"  rows="3"></textarea></td>
                <td><input type="text" name="unit" min="0" value="Unit" class="form-control"></td>
                <td><input type="number" name="qty[]" min="0" v-model="item.quantity" class="form-control"></td>
                <td><input type="number" name="price[]"  min="0" v-model='item.price' class="form-control"></td>
                <td><input name="taxable[]" class="switchery" type="checkbox" checked /></td>
                <td><input value="@{{ (item.price * item.quantity).toFixed(2) }}" disabled class="form-control"></td>
                <td><button @click='removeItem(item)' class="btn btn-xs btn-danger">&times;</button></td>
            </tr>

        </table>

        <button @click='addItem' type="button" class="btn btn-primary" id="blank-add"><i class="fa fa-plus"></i> Add Item</button>

    <table class="table invoice-total">
        <tbody>
        <tr>
            <td><strong>Sub Total :</strong></td>
            <td data-a-sign="" data-d-group="2" v-model='subtotal'>@{{ subtotal }}</td>
        </tr>

        <tr>
            <td><strong>Discount :</strong></td>
            <td><input id="deposit" type="number" step="1" min="0" v-model="deposit" class="form-control" data-a-sign="" data-a-sep="" data-d-group="2"></td>
        </tr>

        <tr>
            <td><strong>Outstation Charges :</strong></td>
            <td>
                <input type="number" v-model="oc" value="5" min="0" max="99" step="1" class="form-control" style="width:4rem;display:inline">
                @{{ stoc }}
                {{--<input type="number" v-model="stoc" disabled class="form-control" style="width:5rem;display:inline" value="@{{ stoc }}">--}}
            </td>

        </tr>
        <tr>
            <td><strong>TAX :</strong></td>
            <td>
            <input type="number" v-model="hst" value="13" min="0" max="99" step="1" style="width:4rem;display:inline" class="form-control">@{{ tax }}
{{--            <input type="number" v-model="tax" disabled class="form-control" style="width:5rem;display:inline" value="@{{ tax }}">--}}
            </td>
        </tr>
        <tr>
            <td><strong>TOTAL :</strong></td>
            <td>
                {{--<input type="text" v-model="total" disabled class="form-control" style="width:5rem;display:inline" value="@{{ total }}">--}}
                @{{ total }}</td>
        </tr>
        </tbody>
    </table>

    <div class="form-group">
        <label for="customer_notes">Customer Notes</label>
        <textarea class="form-control" id="customer_notes" name="customer_notes" rows="6"></textarea>
        <span class="help-block">Displayed as a Footer to the Quote</span>
    </div>

    </main>

    @include('includes.partials._button')

</div>
</div>
</div>



