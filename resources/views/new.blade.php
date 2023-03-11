<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

    <title>Document</title>
</head>
<body>
    <div class="container">



    <form action="{{ 'save'}}" method="post">
        @csrf
        <p></p>
        <div class="form-group">
          <label for="exampleInputEmail1">First Name</label>
          <input type="text" name="name" class="form-control"  >
          @error('name') <p> {{ $message }}</p>@enderror
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Last Name</label>
            <input type="text" name="name2" class="form-control"  >
            @error('name2') <p> {{ $message }}</p>@enderror

          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Mobile</label>
            <input type="text" name="phone" class="form-control"  >
            @error('phone') <p> {{ $message }}</p>@enderror

          </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Email</label>
          <input type="text" class="form-control"  name="email" >
          @error('email') <p> {{ $message }}</p>@enderror

        </div>
        <div class="form-group">
            <label>Date Of Birth</label>
            <input type="text" class="form-control"  name="date_of_birth" >
            @error('date_of_birth') <p> {{ $message }}</p>@enderror

            {{-- value="{{ $edit->date_of_birth}}" --}}
            <p></p>
        </div>
       <div class="form-group">
            <label for="">Status</label>
            <select name="status" id="" class="form-control">
                <option value="1">Active</option>
                <option value="0">Inactive</option>
            </select>
          </div>
        <p></p>
        <button type="submit" name="submit" class="btn btn-primary">Submit</button>
      </form>
    </div>
</body>
</html>
