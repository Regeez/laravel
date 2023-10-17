<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    <div class="container border border-dark rounded-3 mt-3 p-5">
        <div class="row justify-content-center">
            <card class="col-4 border border-dark rounded p-5">
                <form action="{{ route('addLoan') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="column1" class="form-label">column1</label>
                        <input value="sample" type="text" name="name" class="form-control" placeholder="value">
                    </div>
                    <div class="mb-3">
                        <label for="column2" class="form-label">column2</label>
                        <input value="sample" type="text" name="gender" class="form-control" placeholder="value">
                    </div>
                    <div class="mb-3">
                        <label for="column3" class="form-label">column3</label>
                        <input value="123" type="text" name="amount" class="form-control" placeholder="value">
                    </div>

                    <div class="container d-flex justify-content-center">
                        <input class="btn btn-primary" type="submit" value="Submit">
                    </div>
                </form>
            </card>
        </div>
        <table class="table table-bordered border-dark mt-5 text-center">
            <thead class="table-secondary border-dark">
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Gender</th>
                    <th>Amount</th>
                    <th>Options</th>
                </tr>
            </thead>
            <tbody class="table-group-divider table-striped">
                @foreach ($loan as $loaner)
                    <tr>
                        <td class="align-middle" name='id'>{{ $loaner->id }}</td>
                        <td class="align-middle">{{ $loaner->name }}</td>
                        <td class="align-middle">{{ $loaner->gender }}</td>
                        <td class="align-middle">{{ $loaner->amount }}</td>
                        <td class="align-middle">
                            <button class="btn btn-primary btn-sm"><a class="text-white text-decoration-none"
                                href="{{ route('editLoan', $loaner->id) }}">Edit</a></button>

                            <form action={{ route('deleteLoan', $loaner->id) }} method="POST">
                                @csrf
                                @method('POST')
                                <input type="submit" class="btn btn-danger btn-sm" value="Delete"/>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
</body>

</html>
