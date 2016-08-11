{!! HTML::script('../plugins/pace/pace.min.js') !!}
{!! HTML::script('../plugins/modernizr.custom.js') !!}
{!! HTML::script('../plugins/jquery-ui/jquery-ui.min.js') !!}
{!! HTML::script('../plugins/boostrapv3/js/bootstrap.min.js') !!}
{!! HTML::script('../plugins/jquery/jquery-easy.js') !!}
{!! HTML::script('../plugins/jquery-unveil/jquery.unveil.min.js') !!}
{!! HTML::script('../plugins/jquery-bez/jquery.bez.min.js') !!}
{!! HTML::script('../plugins/jquery-ios-list/jquery.ioslist.min.js') !!}
{!! HTML::script('../plugins/imagesloaded/imagesloaded.pkgd.min.js') !!}
{!! HTML::script('../plugins/jquery-actual/jquery.actual.min.js') !!}
{!! HTML::script('../plugins/jquery-scrollbar/jquery.scrollbar.min.js') !!}

{!! HTML::script('../plugins/jquery-autonumeric/autoNumeric.js') !!}
{!! HTML::script('../plugins/switchery/js/switchery.min.js') !!}

{!! HTML::script('../plugins/pages/js/pages.min.js') !!}
{!! HTML::script('../plugins/js/scripts.js') !!}
{!! HTML::script('../plugins/js/gallery.js') !!}

{{-- Start slider --}}
{!! HTML::script('../plugins/imageslider/js/jquery.cbpFWSlider.js') !!}
{{-- End slider --}}

{!! HTML::script('../plugins/bootstrap-select2/select2.min.js') !!}
{!! HTML::script('../plugins/bootstrap-datepicker/js/bootstrap-datepicker.js') !!}
{!! HTML::script('../plugins/bootstrap-timepicker/bootstrap-timepicker.min.js') !!}
{!! HTML::script('../plugins/jquery-inputmask/jquery.inputmask.min.js') !!}

{{-- Datatables --}}
{!! HTML::script('../plugins/jquery-datatable/media/js/jquery.dataTables.min.js') !!}
{!! HTML::script('../plugins/jquery-datatable/extensions/TableTools/js/dataTables.tableTools.min.js') !!}
{!! HTML::script('../plugins/datatables-responsive/js/datatables.responsive.js') !!}
{!! HTML::script('../plugins/jquery-datatable/extensions/Bootstrap/jquery-datatable-bootstrap.js') !!}
{!! HTML::script('../plugins/datatables-responsive/js/lodash.min.js') !!}
{{-- End Datatables --}}

{!! HTML::script('../plugins/jquery-isotope/isotope.pkgd.min.js') !!}
{!! HTML::script('../plugins/classie/classie.js') !!}
{!! HTML::script('../plugins/js/upload.js') !!}
{!! HTML::script('../plugins/js/timeline.js') !!}

{!! HTML::script('../plugins/fullcalendar/fullcalendar.js') !!}

{{-- Searcha --}}
{!! HTML::script('../plugins/typeahead/typeahead.min.js') !!}
{{-- End Searcha--}}

{{--VueJS--}}
{!! HTML::script('/js/vendor.js') !!}
{{--{!! HTML::script('/js/vue-select.js') !!}--}}
{!! HTML::script('../plugins/js/tagging.js') !!}

{!! HTML::script('../plugins/js/classified.js') !!}
{!! HTML::script('../plugins/js/complaint.js') !!}

{!! HTML::script('../plugins/highcharts/highcharts.js') !!}
{!! HTML::script('../plugins/highcharts/highcharts-3d.js') !!}
{!! HTML::script('../plugins/highcharts/exporting.js') !!}

{!! HTML::script('../plugins/moment/moment.min.js') !!}
{!! HTML::script('../plugins/datepaginator/bootstrap-datepaginator.min.js') !!}

@include('includes.js.parsleyfooter')
@include('includes.js.hidebar')

@include('includes.js.select2jsfooter')
@include('includes.js.switchery')
@include('includes.js.datepicker')
@include('includes.js.timepicker')
@include('includes.js.deleteconfirm')

@include('includes.js.mobilemask')
@include('includes.js.textmask')
@include('includes.js.parsleyextra')
@include('includes.js.tagging')
@include('includes.js.tableWithSearch')
@include('includes.fullcalendar')

@stack('scripts')