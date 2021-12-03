<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Laravel App</title>
</head>

<body>
    </br>
    <div class="container">
        <div class="row">

            {{-- <livewire:datatable /> --}}

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
    </div>
</body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</html>