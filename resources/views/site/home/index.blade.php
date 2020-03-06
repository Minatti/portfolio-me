<!DOCTYPE html>
<html>
<head>
  <title></title>
</head>
<body>
      @foreach ($user_posts as $p)
         <div class="card shadow-sm rounded border-light mb-3" style="margin-top: 20px;">
            <div class="card-body">
              <div class="row">
                 <div class="col">
                    <h3 class="card-subtitle mb-3 text-primary text-uppercase" style="font-size: 0.8rem;"> <strong>{ Tecnologia }</strong></h3>
                     <img src="" class="img-fluid" alt="Responsive image">
                     <p class="text-muted">{{ $p->name }}</p>
                      <small class="text-primary">{{$p->created_at }}</small>                 
                  </div> 
                      <div class="col">
                           <p class="card-text text-left">{{ $p->description }}</p>
                       <div class="text-right col-sm-12">
                           <a href="detail/{{$p->id}}" class="nav-link">
                           <span class="glyphicon glyphicon-search">Leia mais...</span></a>   
                       </div>                                                                                               
                      </div>
                    </div>                          
                  </div>
                <hr> 
            </div>
        @endforeach    
</body>
</html>
