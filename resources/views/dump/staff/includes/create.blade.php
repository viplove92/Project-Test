<div class="col-md-12">

    {!! Form::open(['url' => route('auth.register-post'), 'class' => 'form-signin', 'data-parsley-validate' ] ) !!}


            <h2 class="form-signin-heading">Check</h2>

            <label for="inputEmail" class="sr-only">Email address</label>
            {!! Form::email('email', null, [
                'class'                         => 'form-control',
                'placeholder'                   => 'Email address',
                'required',
                'id'                            => 'inputEmail',
                'data-parsley-required-message' => 'Email is required',
                'data-parsley-trigger'          => 'change focusout',
                'data-parsley-type'             => 'email'
            ]) !!}

             <label for="inputFirstName" class="sr-only">First name</label>
                    {!! Form::text('first_name', null, [
                        'class'                         => 'form-control',
                        'placeholder'                   => 'First name',
                        'required',
                        'id'                            => 'inputFirstName',
                        'data-parsley-required-message' => 'First Name is required',
                        'data-parsley-trigger'          => 'change focusout',
                        'data-parsley-pattern'          => '/^[a-zA-Z]*$/',
                        'data-parsley-minlength'        => '2',
                        'data-parsley-maxlength'        => '32'
                    ]) !!}

                    <label for="inputLastName" class="sr-only">Last name</label>
                    {!! Form::text('last_name', null, [
                        'class'                         => 'form-control',
                        'placeholder'                   => 'Last name',
                        'required',
                        'id'                            => 'inputLastName',
                        'data-parsley-required-message' => 'Last Name is required',
                        'data-parsley-trigger'          => 'change focusout',
                        'data-parsley-pattern'          => '/^[a-zA-Z]*$/',
                        'data-parsley-minlength'        => '2',
                        'data-parsley-maxlength'        => '32'
                    ]) !!}
<br/>
{!! Form::button('Add Staff', ['class' => 'btn btn-primary']) !!}

{!! Form::close() !!}

</div>