<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Posts Table</title>
</head>

<body>
<a href="{{url('/post/create')}}"> <button type="button" style="float:right;" class="btn btn-primary">Add post</button></a>


    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">id</th>
                <th scope="col">created_at</th>
                <th scope="col">updated_at</th>
                <th scope="col">title</th>
                <th scope="col">description</th>
                <th scope="col">User Name</th>
                <th scope="col">Images</th>
                <th scope="col">Action</th>
                
            </tr>
        </thead>
        <tbody>
            @foreach($posts as $post )
            <tr>
                <td>{{$post->id}}</td>
                <td>{{date("d F,Y, H:i:A",strtotime($post->created_at))}}</td>
                <td>{{date("d F,Y, H:i:A",strtotime($post->updated_at))}}</td>
                <td>{{$post->title}}</td>
                <td>{{$post->details}}</td> 
                <td>{{$post->user->name}}</td>
                <td><image src="{{asset(Storage::url($post->image))}}" height="50px"/></td>
                <td>
              <a href="{{route('post.delete',['id'=>$post->id])}}"><button type="button" class="btn btn-danger">Delete</button></a>
              <a href="{{route('post.edit',['id'=>$post->id])}}"><button type="button" class="btn btn-primary">Edit</button></a>
            </td>
            </tr>
            @endforeach 
        </tbody>
    </table>

</body>

</html>