<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Create user</title>
</head>
<body>
  
<form action="{{$url}}" method="post">
    @csrf
    <div class="form-group">
      <label for="exampleFormControlInput1">Title</label>
      <input type="text" class="form-control" name="title" id="exampleFormControlInput1" value="{{$post->title}}">
    </div>
    <div class="form-group">
    <div class="form-group">
      <label for="exampleFormControlTextarea1">Details</label>
      <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="details">{{$post->details}}</textarea>
    </div>
    <div class="mb-3">
      <label for="formFile" class="form-label">upload image</label>
      <input class="form-control" type="file" name="image" id="formFile" value="{{$post->image}}">
    </div>

  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</body>
</html>