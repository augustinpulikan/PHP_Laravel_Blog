@extends('main')
@section('title', '| Home')
@section('content')
  <div class="row">
    <div class="col-md-12">
      <div class="jumbotron">
        <h1>Welcome to my blog</h1>
          <p class="lead">Thank you for visiting my site!!</p>
             <p><a class="btn btn-primary btn-lg" href="#" role="button">Popular post</a></p>
       </div>
     </div>        
  </div> <!-- end of row -->
  
  <div class="row">
      <div class="col-md-8">
         <div class="post">
             <h3>Post title</h3>
             <p>the content of post will display here he content of post will display herehe content of post will display herehe content of post will display here</p>
             <a href="#" class=" btn btn-primary">Read more</a>
         </div>
         <hr>
          <div class="post">
             <h3>Post title</h3>
             <p>the content of post will display here he content of post will display herehe content of post will display herehe content of post will display here</p>
             <a href="#" class=" btn btn-primary">Read more</a>
         </div>
          <hr>
          <div class="post">
             <h3>Post title</h3>
             <p>the content of post will display here he content of post will display herehe content of post will display herehe content of post will display here</p>
             <a href="#" class=" btn btn-primary">Read more</a>
         </div>
          <hr>
      </div>
      <div class="col-md-3 col-md-offset-1">
      <h2>Side bar</h2>
      </div>
  </div>


@endsection