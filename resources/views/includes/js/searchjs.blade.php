<script type="text/javascript">

var geoNamesUsername = 'uberboomtest';

$(document).ready(function() {
$('.typeahead').typeahead([
    {
        name: 'posts',
        limit: 10,
    	valueKey: 'name',

        remote: {
            url: 'http://localhost:9200/easymanage/_search?from=0&size=10&q=%QUERY*',

            filter: function (parsedResponse) {
                var result = [];
                $.each(parsedResponse.hits.hits, function () {
                    var item = $(this)[0]._source;
                    result.push({
                        id: item.iD,
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

        header: '<h4 class="suggestion-header" align="center">Apartments</h4>',

        template:
        [
        	'<a href="http://easymanage.in/terms"><div>',
            '<p class="symbols-name" >@{{name}}</p>',
            '<p class="geo-address text-muted">	@{{address_line1}},@{{address_line2}}, @{{address_line3}}, @{{city}}, @{{state}}, @{{country}}, @{{pincode}}</p>',
            '</div></a>'

        ].join(''),
        engine: Hogan
    },
    {
        name: 'movies',
 		limit: 10,
    	valueKey: 'name',

        remote: {
            url: 'http://localhost:9200/default/_search?from=0&size=10&q=%QUERY*',
            filter: function (response) {
                var result = [];
                $.each(response.hits.hits, function () {
                    var item = $(this)[0]._source;
                    result.push({
                        id: item.id,
                        name: item.name,
                        address_line1: item.address_line1,
                        address_line2: item.address_line2,
                        address_line3: item.address_line3,
                        city: item.city,
                        pincode: item.pincode
                    });
                });
                return result;
            }
        },
        cache: false,
        header: '<h4 class="suggestion-header">Address</h4>',
        template: [
            '<a href="#"><div>',
            '<p class="geo-name">@{{name}}</p>',
            '<p class="geo-country text-muted">@{{city}} - @{{pincode}}</p>',
            '<p class="geo-country text-muted">@{{address_line1}}</p>',
            '<p class="geo-country text-muted">@{{address_line2}}</p>',
            '<p class="geo-country text-muted">@{{address_line3}}</p>',
            '</div></a>'
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
});
</script>
