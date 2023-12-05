<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <title>Add post page</title>
</head>

<body>
  <h1>Post Creation</h1>
  <form method="post" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
      <label for="exampleFormControlInput1">Title</label>
      <input type="text" class="form-control" name="title" id="exampleFormControlInput1">
    </div>
    <div class="form-group">
      <label for="exampleFormControlSelect1">User id select</label>
      <select class="form-control" id="exampleFormControlSelect1" name="user_id">
        @foreach ($posts as $post)
        <option>{{$post->user_id}}</option>
        @endforeach
      </select>
    </div>
    <div class="form-group">
      <label for="exampleFormControlTextarea1">Details</label>
      <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="details"></textarea>
    </div>
    <div class="mb-3">
      <label for="formFile" class="form-label">upload image</label>
      <input class="form-control" type="file" name="image" id="formFile">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</body>

</html>