<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Users Table</title>
</head>
<body>
<a href="{{url('/create')}}"> <button type="button" style="float:right;" class="btn btn-primary">Add user</button></a>


    <table class="table table-striped">
        <thead>
          <tr>
            <th scope="col">id</th>
            <th scope="col">name</th>
            <th scope="col">email</th>
            <th scope="col">created time</th>
            <th scope="col">updated time</th>
            <th scope="col">Actions</th>

          </tr>
        </thead>
        <tbody>
            @foreach($users as $user)
          <tr>
            
            <td>{{$user->id}}</td>
            <td>{{$user->name}}</td>
            <td>{{$user->email}}</td>
            <td>{{date("d F,Y, h:i:A",strtotime($user->created_at))}}</td>
            <td>{{date("d F,Y, h:i:A",strtotime($user->updated_at))}}</td>
           <td>
              <a href="{{route('user.delete',['id'=>$user->id])}}"><button type="button" class="btn btn-danger">Delete</button></a>
              <a href="{{route('user.edit',['id'=>$user->id])}}"><button type="button" class="btn btn-primary">Edit</button></a>
            </td>
          </tr>
          @endforeach
       
        </tbody>
      </table>

</body>
</html>