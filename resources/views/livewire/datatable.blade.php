<div>

    <table class="table table-dark table-hover">
        <thead>
            <tr>
                <th scope="col">Log Ip</th>
                <th scope="col">Log Domain</th>
                <th scope="col">Log Uri</th>
                <th scope="col">Log Reason</th>
                <th scope="col">Log User</th>
            </tr>
        </thead>
         
        <tbody>
            @foreach($dataArray as $value)
            <tr>
                <td>{{ $value->log_ip }}</td>
                <td>{{ $value->log_domain }}</td>
                <td>{{ $value->log_uri }}</td>
                <td>{{ $value->log_reason }}</td>
                <td>{{ $value->log_user }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>

    {{ $dataArray->links() }}

</div>