<div class="services_section layout_padding">
         <div class="container">
            <h1 > All posts</h1>
           
            <div class="services_section_2">
               <div class="row">
                  @foreach ($post as $post)
                      
                  <div class="col-md-4">
                     <div><img src="postimage/{{$post->image}}" class="services_img"></div>
                     <h4>{{$post->title}}</h4>
                     <h4>{{$post->name}}</h4>
                     <div class="btn_main"><a href="#">Read more</a></div>
                  </div>
                 
               </div>
               @endforeach
            </div>
         </div>
      </div>