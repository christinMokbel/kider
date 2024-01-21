<!DOCTYPE html>
<html lang="en">
<head>
  <title>add subject</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
@include('admin.includes.nav')
<div class="container">
  <h2>add subject</h2>
  <form action="{{ route('storesubject') }}" method="post" enctype="multipart/form-data" >
    @csrf
    <div class="form-group">
      <label for="subjectname"> subject name</label>
      <input type="text" class="form-control" id="subjectname" placeholder="Enter subject name" name="subjectname" value="{{old('subjectname')}}">
    </div>
    @error('subjectname')
    {{$message}}
    @enderror
    
    <div class="form-group">
      <label for="capacity"> capacity</label>
      <input type="text" class="form-control" id="capacity" placeholder="Enter capacity" name="capacity" value="{{old('capacity')}}">
    </div>
    @error('capacity')
    {{$message}}
    @enderror

    <div class="form-group">
      <label for="time"> subject time</label>
      <input type="time" class="form-control" id="time" placeholder="Enter subject time" name="time" value="{{old('time')}}">
    </div>
    @error('time')
    {{$message}}
    @enderror

    <div class="form-group">
      <label for="price"> price</label>
      <input type="integer" class="form-control" id="price" placeholder="Enter price" name="price" value="{{old('price')}}">
    </div>
    @error('price')
    {{$message}}
    @enderror

    <div class="form-group">
      <label for="age"> age</label>
      <input type="integer" class="form-control" id="age" placeholder="Enter age" name="age" value="{{old('age')}}">
    </div>
    @error('age')
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
      <label for="teacher">teacher:</label>
      <select name="teacher_id" id="">
        <option value="">Select teacher</option>
      @foreach($teachers as $teacher)

      <option value="{{ $teacher->id }}">{{ $teacher['name']}}</option>
      @endforeach
      </select>
      @error('teacher_id')
        {{ $message }}
      @enderror
    </div>
    
    <div class="checkbox">
      <label><input type="checkbox" name="published" @checked(old('published'))> Published me</label>
    </div>
    <button type="submit" class="btn btn-default">Insert</button>
  </form>
</div>

</body>
</html>
