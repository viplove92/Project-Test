@extends('layouts.backend')

@section('title', ' | Terms and Conditions')
@stop

@section('content')

{!! Breadcrumbs::render('terms') !!}

<h2>Classifieds</h2>

<div class="col-sm-6 b-r b-dashed b-grey">

<div id="complaint">

<form method="POST" v-on="submit: onSubmitForm">


    <div class="form-group">
        <label for="name">
            Name:
            <span class="error" v-if="! newMessage.name">*</span>
        </label>
        <input type="text" name="name" id="name" class="form-control" v-model="newMessage.name">
    </div>

    <div class="form-group">
        <label for="message">
            Message:
            <span class="error" v-if="! newMessage.message">*</span>
        </label>
        <textarea type="text" name="message" id="message" class="form-control" v-model="newMessage.message"></textarea>
    </div>

        <div class="form-group" v-if="! submitted">
            <button type="submit" class="btn btn-default show-notification" v-attr="disabled: errors">
                Sign Guestbook
            </button>
        </div>

    <div class="alert alert-success show-notification" v-if="submitted">Thanks!
        </div>


</form>

<hr>

    <article v-repeat="messages">
        <h3>@{{ type }}</h3>
        <div class="body">@{{ area }}</div>
    </article>

</div>
</div>


@endsection