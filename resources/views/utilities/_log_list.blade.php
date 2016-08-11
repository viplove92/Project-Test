    <table class="table table-striped table-bordered">
    <thead>
    <tr>
        <th width="5%">ID</th>
        <th width="20%">Date</th>
        <th width="5%">UID</th>
        <th width="60%">Description</th>
        <th>IP</th>
    </tr>
    </thead>
    <tbody>

    @foreach($lists as $list)
        <tr>
            <td><p>{{ $list->id }}</p></td>
            <td><p>{{ $list->created_at }}</p></td>
            <td><p>{{ $list->user_id }}</p></td>
            <td><p>{{ $list->text }}</p></td>
            <td><p>{{ $list->ip_address }}</p></td>
        </tr>
    @endforeach

    </tbody>
    </table>