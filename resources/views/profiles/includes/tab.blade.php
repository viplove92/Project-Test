<div class="col-sm-6">
<div class="panel">
  <ul class="nav nav-tabs nav-tabs-linetriangle ">
    <li class="active">
      <a data-toggle="tab" href="#tab2Profile">Profile</a>
    </li>
    <li>
      <a data-toggle="tab" href="#tab2ChangePass">Change Password</a>
    </li>
  </ul>

  <div class="tab-content">
    <div class="tab-pane slide-left active" id="tab2Profile">
      <div class="row column-seperation">
        <div class="col-md-12">
          <h3>

            @include('profiles.includes.profileform')

          </h3>
        </div>

      </div>
    </div>

    <div class="tab-pane slide-left" id="tab2ChangePass">
      <div class="row">
        <div class="col-md-12">
          <h3>
            Change Password
            <br>
          </h3>

          @include('profiles.includes.changepass')

        </div>
      </div>
    </div>

  </div>
</div>
</div>