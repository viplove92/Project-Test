<div class="easybox float-e-margins" xmlns="http://www.w3.org/1999/html">
<div class="easybox-content" id="easybox_form">

    <!-- Title Form Input -->
    <div class="form-group form-group-default">
        {!! Form::label('title', 'Title:', ['class' => 'control-label']) !!}
        {!! Form::text('title', null, [
                            'class'                         => 'form-control',
                            'placeholder'                   => '',
                            'required',
                            'id'                            => 'inputTitle',
                            'data-parsley-required-message' => 'Title is required',
                            'data-parsley-trigger'          => 'change focusout',
                            'data-parsley-minlength'        => '2',
                            'data-parsley-maxlength'        => '100'
                        ]) !!}
    </div>

    <main id="app">
            <table class="table table-hover table-bordered" cellspacing="0" width="100%">
            <tr v-for="item in items">

            <td class="form-group form-group-default">
                {!! Form::label('option[]', 'Option:@{{$index + 1}}', ['class' => 'control-label']) !!}
                {!! Form::text('option[]', null, [
                                    'class'                         => 'form-control',
                                    'placeholder'                   => '',
                                    'required',
                                    'data-parsley-required-message' => 'Option is required',
                                    'v-model'                       => 'item.option',
                                    'v-on'                          => 'keydown:addItem',
                                    'id'                            => 'inputOption',
                                    'data-parsley-trigger'          => 'change focusout',
                                    'data-parsley-minlength'        => '2',
                                    'data-parsley-maxlength'        => '100'
                                ]) !!}
            </td>

            <td align="center">
                <button @click='removeItem(item)' class="btn btn-xs btn-danger">&times;</button>
            </td>
        </table>

        <div align="center">
        <button class="btn btn-info" @click="addItem"><i class="fa fa-plus"></i> Add Option</button>
        </div>

    </main>

</div>
</div>
@include('includes.partials._button')


