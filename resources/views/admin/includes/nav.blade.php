<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="{{route('index')}}">kider</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="{{Request()->routeIs("createtestimonial")?'active':''}}"><a href="{{route('createtestimonial')}}">insert testimonial</a></li>
      <li class="{{Request()->routeIs("testimonials")?'active':''}}"><a href="{{route('testimonials')}}">all testimonial</a></li>
      <li class="{{Request()->routeIs("trashedtestimonial")?'active':''}}"><a href="{{ route('trashedtestimonial') }}">trashed testimonial</a></li>
      <li class="{{Request()->routeIs("contacts")?'active':''}}"><a href="{{route('contacts')}}">all contacts</a></li>
      <li class="{{Request()->routeIs("trashedcontact")?'active':''}}"><a href="{{ route('trashedcontact') }}">trashed contact</a></li>
      <li class="{{Request()->routeIs("appointments")?'active':''}}"><a href="{{route('appointments')}}">all appointments</a></li>
      <li class="{{Request()->routeIs("trashedappointment")?'active':''}}"><a href="{{ route('trashedappointment') }}">trashed appointment</a></li>
    </ul>
  </div>
</nav>
