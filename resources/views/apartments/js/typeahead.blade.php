<script>
var geoNamesUsername = 'uberboomtest';

$('.typeahead').typeahead([
    {
        name: 'posts',
        limit: 10,
    	valueKey: 'name',
    	hint: true,
        highlight: true,

        remote: {
            url: 'http://localhost:9200/easymanage/apartments/_search?from=0&size=20&q=%QUERY*',

            filter: function (parsedResponse) {
                var result = [];
                $.each(parsedResponse.hits.hits, function () {
                    var item = $(this)[0]._source;
                    result.push({
                        id: item.id,
                        name: item.name,
                        address_line1: item.address_line1,
                        address_line2: item.address_line2,
                        address_line3: item.address_line3,
                        city: item.city,
                        state: item.state,
                        country: item.country,
                        pincode: item.pincode,
                        lat: item.lat,
                        lng: item.lng
                    });
                });
                return result;
            }

        },
        cache: false,

        header: '<h4 class="suggestion-header" align="center">Apartments</h4><hr/>',

        template:
        [
        	'<a href="#"><div>',
            '<p class="symbols-name"><b> @{{ name }} </b></p>',
            '<p class="geo-address text-muted">	@{{ address_line1 }}, @{{ address_line2 }}, @{{ address_line3 }}, @{{ city }}, @{{ state }}, @{{ country }}, @{{ pincode }}</p>',
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