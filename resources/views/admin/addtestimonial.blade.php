<!DOCTYPE html>
<html lang="en">
<head>
  <title>Add testimonial</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
    @include('admin.includes.nav')
<div class="container">
  <h2>Add new testimonial</h2>
  <form action="{{ route('storetestimonial') }}" method="post" enctype="multipart/form-data" >
    @csrf
    <div class="form-group">
      <label for="name">name:</label>
      <input type="text" class="form-control" id="name" placeholder="Enter name" name="name" value="{{old('name')}}">
    </div>
    @error('name')
    {{$message}}
    @enderror
    <div class="form-group">
      <label for="description">description:</label>
      <textarea class="form-control" name="description" id="" cols="60" rows="3">{{old('description')}}</textarea>
    </div>
    @error('description')
    {{$message}}
    @enderror

    <div class="form-group">
      <label for="image">Image:</label>
      <input type="file" class="form-control" id="image" placeholder="Enter image" name="image">
      @error('image')
        {{ $message }}
      @enderror
    </div>
<div class="form-group">
      <label for="profession">profession:</label>
      <input type="text" class="form-control" id="professsion" placeholder="Enter profession" name="profession" value="{{old('profession')}}">
    </div>
    @error('profession')
    {{$message}}
    @enderror

   
    <div class="checkbox">
      <label><input type="checkbox" name="published" @checked(old('published'))> Published me</label>
    </div>
    <button type="submit" class="btn btn-default">Insert</button>
  </form>
</div>

</body>
</html>
