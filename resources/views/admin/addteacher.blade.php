<!DOCTYPE html>
<html lang="en">
<head>
  <title>Add teacher</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
    @include('admin.includes.nav')
<div class="container">
  <h2>Add new teacher</h2>
  <form action="{{ route('storeteacher') }}" method="post" enctype="multipart/form-data" >
    @csrf
    <div class="form-group">
      <label for="name">name:</label>
      <input type="text" class="form-control" id="name" placeholder="Enter name" name="name" value="{{old('name')}}">
    </div>
    @error('name')
    {{$message}}
    @enderror
    <div class="form-group">
      <label for="designation">designation:</label>
      <input type="date" class="form-control" id="designation" placeholder="Enter designation" name="designation" value="{{old('designation')}}">
    </div>
    @error('designation')
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
      <label for="facebook">facebook:</label>
      <input type="ipAddress" class="form-control" id="facebook" placeholder="Enter facebook" name="facebook" value="{{old('facebook')}}">
    </div>
    @error('facebook')
    {{$message}}
    @enderror

    <div class="form-group">
      <label for="twitter">twitter:</label>
      <input type="text" class="form-control" id="ptwitter" placeholder="Enter twitter" name="twitter" value="{{old('twitter')}}">
    </div>
    @error('twitter')
    {{$message}}
    @enderror
    <div class="form-group">
      <label for="instagram">instagram:</label>
      <input type="text" class="form-control" id="instagram" placeholder="Enter instagram" name="instagram" value="{{old('instagram')}}">
    </div>
    @error('instagram')
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
