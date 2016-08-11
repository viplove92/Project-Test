@extends('layouts.backend')

@section('title', ' | Bank')@stop

@section('content')

<div class="row">
<div id="BankController" style="padding-top: 2em">

            {{--<div class="alert alert-danger" v-if="!isValid">--}}
                    {{--<ul>--}}
                        {{--<li v-show="!validation.account">Account field is required.</li>--}}
                        {{--<li v-show="!validation.description">Description a valid email address.</li>--}}
                        {{--<li v-show="!validation.balance">Balance field is required.</li>--}}
                    {{--</ul>--}}
                {{--</div>--}}

<div class="col-sm-4">

    <form action="#" @submit.prevent="AddBank" method="POST">

        <div class="form-group">
        <label for="name">Bank Name:</label>
        <input v-model="newBank.account" id="name" type="text" name="name" class="form-control" />
        </div>

        <div class="form-group">
        <label for="description">Description:</label>
        <input v-model="newBank.description" id="description" type="text" name="description" class="form-control" />
        </div>

        <div class="form-group">
        <label for="balance">Initial Balance:</label>
        <input v-model="newBank.balance" id="balance" type="text" name="balance" class="form-control"/>
        </div>

       <div class="form-group">
            <button :disabled="!isValid" class="btn btn-default" type="submit" v-if="!edit">Add Account</button>

            <button :disabled="!isValid" class="btn btn-default" type="submit" v-if="edit" @click="EditBank(newBank.id)">Edit Account</button>
        </div>

    </form>

</div>

{{--<div class="alert alert-success" transition="success" v-if="success">New Account added successfully.</div>--}}

<div class="col-sm-8">
<h4 align="center">Accounts List</h4>

    <table class="table table-borderedr">
        <thead>
            <th>ID</th>
            <th>Account Name</th>
            <th>Description</th>
            <th>Balance</th>
            <th>Created</th>
            <th>Updated</th>
            <th>Action</th>
            </thead>

            <tbody>
            <tr v-for="bank in banks">
                <td>@{{ bank.id }}</td>
                <td>@{{ bank.account }}</td>
                <td>@{{ bank.description }}</td>
                <td>@{{ bank.balance }}</td>
                <td>@{{ bank.created_at }}</td>
                <td>@{{ bank.updated_at }}</td>
                <td>
                    <button class="btn btn-default btn-sm" @click="ShowBank(bank.id)">Edit</button>
                    <button class="btn btn-danger btn-sm" @click="RemoveBank(bank.id)">Remove</button>
                </td>
            </tr>
            </tbody>
    </table>


</div>
</div>
</div>


@endsection


@push('scripts')
    {!! HTML::script('/js/bank.js') !!}
@endpush
