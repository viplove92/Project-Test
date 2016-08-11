<article v-repeat="messages">
        <a href="{{ route('help') }}"
        <h3>@{{ name }}</h3>
        <h6>@{{ address_line1 }}, @{{ address_line2 }},</h6>
        <h6>@{{ address_line3 }}, @{{ landmark }},</h6>
        <h6>@{{ city }}, @{{ state }}, @{{ country }}</h6>
        <h6>@{{ pincode }}</h6>
</article>

   <div id="app">
      <p>@{{ fullName }}</p>
      <input v-model="firstName">
      <input v-model="lastName">
    </div>
<br/>


    {!! Form::select('floorno',
                 [
                       'Ground'             => 'Ground',
                       'Parking'            => 'Parking',
                       'First'              => 'First',
                       'Second'             => 'Second',
                       'Third'              => 'Third',
                       'Fourth'             => 'Fourth',
                       'Fifth'              => 'Fifth',
                       'Sixth'              => 'Sixth',
                       'Seventh'            => 'Seventh',
                       'Eighth'             => 'Eighth',
                       'Ninth'              => 'Ninth',
                       'Tenth'              => 'Tenth',
                       'Other'              => 'Other'
                ],
                null,
                ['class' => 'full-width', 'data-init-plugin' => 'select2']
                ) !!}