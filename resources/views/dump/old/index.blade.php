
@extends('......layouts.backend')

@section('content')

    <div class="row">
   <div class="col-md-6">

      @include('......includes.status')
      @include('......includes.errors')

       <table id="myDataTable" class="table table-hover" cellspacing="0" width="100%">
           <thead>
           <tr>
               <th>id</th>
               <th>first-name</th>
               <th>last_name</th>
               <th>address_1</th>
               <th>address_2</th>
               <th>landmark</th>
               <th>phone</th>
               <th>uida</th>
               <th>photo</th>
           </tr>
           </thead>

           <tfoot>
           <tr>
               <th>id</th>
               <th>first-name</th>
               <th>last_name</th>
               <th>address_1</th>
               <th>address_2</th>
               <th>landmark</th>
               <th>phone</th>
               <th>uida</th>
               <th>photo</th>
           </tr>
           </tfoot>


           <tbody>
           <tr>
               <td>Tiger Nixon</td>
               <td>{{ $staff->first_name }}</td>
               <td>System Architect</td>
               <td>Edinburgh</td>
               <td>61</td>
               <td>2011/04/25</td>
               <td>$320,800</td>
           </tr>


           </tbody>
       </table>






   <a href="{{ route('staffs.create') }}" class="btn btn-primary" class="fa fa-plus-circle"> Add new </a>
   </div>

    </div>

@stop


@push('scripts')

{!! HTML::script('../plugins/jquery-datatable/media/js/jquery.dataTables.min.js') !!}
{!! HTML::script('../plugins/jquery-datatable/extensions/TableTools/js/dataTables.tableTools.min.js') !!}
{!! HTML::script('../plugins/datatables-responsive/js/datatables.responsive.js') !!}
{!! HTML::script('../plugins/datatables-responsive/js/lodash.min.js') !!}

@endpush

@push('scripts')
<script>
        $(document).ready(function() {
                $('#myDataTable').DataTable();
    });
</script>
@endpush



{{--<table id="uploads-table" class="table table-striped table-bordered">--}}
    {{--<thead>--}}
    {{--<tr>--}}
        {{--<th>Staff Name</th>--}}

        {{--<th data-sortable="false">More details</th>--}}
    {{--</tr>--}}
    {{--</thead>--}}

    @foreach($staffs as $staffs)

        {{--<tr>--}}
            {{--<th> {{ $staffs->first_name}} {{ $staffs->last_name}}</th>--}}
            {{--<td>  <a href="{{ route('staffs.show', $staffs->id) }}" <i class="fa fa-eye fa-lg"> </i></a></td>--}}

        {{--</tr>--}}

{{--@endforeach--}}



