<!DOCTYPE html>
<html>
<head>
    <title>Laravel Scout</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.1/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container">
    <h1>Laravel Scout </h1>

    <form method="GET">
        <div class="input-group mb-3">
          <input
            type="text"
            name="search"
            value="{{ request()->get('search') }}"
            class="form-control"
            placeholder="Search..."
            aria-label="Search"
            aria-describedby="button-addon2">&nbsp;&nbsp;
          <button class="btn btn-success" type="submit" id="button-addon2">Search</button>&nbsp;&nbsp;
          <button class="btn btn-danger" type="button" id="clear-button">Clear</button>
        </div>
    </form>

    <table class="table table-bordered data-table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
            </tr>
        </thead>
        <tbody>
            @foreach($users as $user)
            <tr>
                <td>{{ $user->id }}</td>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <div class="d-flex justify-content-center">
        {{ $users->appends(request()->query())->links('pagination::bootstrap-4') }}
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function() {
        $('#clear-button').click(function() {
            $('#search-input').val('');
            $('#button-addon2').click();
        });
    });
</script>

</body>
</html>
