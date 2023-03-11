<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>Laravel</title>
</head>
<body>
    <div class="container">
    <h2>Welcome Home Page</h2>

    @if(session()->has('message'))
    <p>{{ session()->get('message')}} </p>@endif


    <div>
        <a href="{{ route('octhomepage')}}" class="btn btn-primary btn-lg active float-end" role="button" aria-pressed="true">Template</a>

    </div><div>
        <a href="{{ route('new')}}" class="btn btn-primary btn-lg active float-end" role="button" aria-pressed="true">new</a>

    </div>
        <table class="table">



        <thead>
          <tr>
            <th scope="col">Id</th>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col">Mobile</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)


          <tr>


            <th scope="row">{{ $users->firstitem() + $loop->index}}</th>

            <td>{{ $user->name}}</td>
            <td>{{ $user->email }}</td>
            <td>{{ $user->phone }}</td>
            <td>



            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
      <div>
           {{ $users->links() }}

      </div>
    </div>
</body>

</html>
