<script>
var geoNamesUsername = 'uberboomtest';

$('.typeahead').typeahead([
    {
        name: 'posts',
        limit: 10,
    	valueKey: 'ifsc',
    	hint: true,
        highlight: true,

        remote: {
            url: 'http://localhost:9200/easymanage/banks/_search?from=0&size=20&q=%QUERY*',

            filter: function (parsedResponse) {
                var result = [];
                $.each(parsedResponse.hits.hits, function () {
                    var item = $(this)[0]._source;
                    result.push({
                        id: item.id,
                        bank: item.bank,
                        ifsc: item.ifsc,
                        address: item.address,
                        branch: item.branch,
                        micrcode: item.micrcode,
                        city: item.city,
                        state: item.state,
                        district: item.district,
                        contact: item.contact,
                        lat: item.lat,
                        lng: item.lng
                    });
                });
                return result;
            }

        },
        cache: false,

        header: '<h4 class="suggestion-header" align="center">Bank Name</h4><hr/>',

        template:
        [
        	'<a href="#"><div align="left" ">',
            '<p class="symbols-name"><b> @{{ bank }} </b></p>',
            '<p class="geo-address text-muted"><b>	IFSC </b>- @{{ ifsc }} <br/> <b> Branch </b> - @{{ branch }} <br/><b> Address </b> - @{{ address }} </p>',
            '</div></a><hr/>'
        ].join(''),
        engine: Hogan
    }
]);

$('.typeahead').on('typeahead:initialized', function (e, data) {

    var hint = $(e.target).prev('.tt-hint');
    var small = $(e.target).is('.input-sm');
    var large = $(e.target).is('.input-lg');
    if (small) {
        hint.addClass('input-sm');
    } else if (large) {
        hint.addClass('input-lg');
    } else {
        hint.addClass('input');
    }
    hint.addClass('form-control');

});

</script>