<table id="myDataTable" class="table table-hover responsive" cellspacing="0" width="100%">
    <thead>
        <tr>
            <th>Name</th>
            <th>IFSC</th>
            <th>MICR Code</th>
            <th>Address</th>
            <th>City</th>
            <th>District</th>
            <th>State</th>
            <th>Contact</th>
        </tr>
    </thead>

    <tfoot>
        <tr>
           <th>Name</th>
           <th>IFSC</th>
           <th>MICR Code</th>
           <th>Address</th>
           <th>City</th>
           <th>District</th>
           <th>State</th>
           <th>Contact</th>
        </tr>
    </tfoot>


@foreach($banks as $bank)
    <tbody>
        <tr>
            <td>{{ $bank->bank }}</td>
            <td>{{ $bank->ifsc }}</td>
            <td>{{ $bank->micrcode }}</td>
            <td>{{ $bank->address }}</td>
            <td>{{ $bank->city }}</td>
            <td>{{ $bank->district }}</td>
            <td>{{ $bank->state }}</td>
            <td>{{ $bank->contact }}</td>
        </tr>
    </tbody>
@endforeach

</table>