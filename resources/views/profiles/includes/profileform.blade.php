<div class="col-sm-6">

{!! Form::model($user, ['method' => 'PATCH','route' => ['profiles.update', $user->id]] ) !!}

        @include('includes.status')
        @include('includes.errors')

        <div class="form-group form-group-default disabled">
            <label data-placement="top" title="E-Mail Cannot be changed">E-Mail</label>
            <input data-placement="top" title="E-Mail Cannot be changed" type="email" class="form-control" value="{{ $user->email }}" disabled>
        </div>

        <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group form-group-default">
                            <label>First name</label>
                            <input type="text" name="first_name" class="form-control" value="{{ $user->first_name }}" required>
                        </div>
                </div>
                <div class="col-sm-6">
                        <div class="form-group form-group-default">
                            <label>Last name</label>
                            <input type="text" name="last_name" class="form-control" value="{{ $user->last_name }}">
                        </div>
                    </div>
        </div>

         <div class="row">
         {!! Form::select('gender', ['F' => 'Female', 'M' => 'Male', 'O' => 'Other'], $gender) !!}

         </div>

         <div class="row">
                <div class="col-sm-6">
                    <div class="form-group form-group-default">
                        <label data-placement="top" title="Profile">Mobile Number</label>
                        <input data-placement="top" name="mobile" type="text" max="10" class="form-control" value="{{ $mobile }}">
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group form-group-default">
                        <label data-placement="top" title="Profile">Landline Number</label>
                        <input data-placement="top" name="mobile" type="text" max="10" class="form-control" value="{{ $mobile }}">
                    </div>
                </div>
        </div>

        <div class="row">
                <div class="col-sm-6">
                    <div class="form-group form-group-default">
                        <label data-placement="top" title="Profile">Are you Owner </label>
                        <input type="checkbox" class="switchery" checked />
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group form-group-default">
                        <label data-placement="top" title="Profile">Are You Vendor</label>
                        <input type="checkbox" class="switchery" />

                    </div>
                </div>
        </div>




    {!! Form::submit('Update Profile', ['class' => 'btn btn-primary']) !!}

{!! Form::close() !!}

</div>



