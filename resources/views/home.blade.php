@extends('layout')
    
    @section('content')
   
    <div style="background: #212529; height:100px">
      <h4 style="color: white; padding:32px; margin-left:340px">
        Dashboard
      </h4> 
    </div>

    <div class="container ">
        <div class="row">
            <div class="col-2"></div> 
    
            <div class="col-8">
              @if (Auth::check())
                 
               
                  
              
              <form action="" method="POST" class="mt-30">
                @csrf
                <label for="fname" class="form-label">Enter your url</label>
                <input type="text" name="url" class="form-control">
    
                <button type="submit" class="btn btn-success mt-10">Submit</button>
              </form>
              
              
            <br>
            <br>  
            <h1 class="display-6 mt-30">Your Links:</h1>
            <br>  
           

            <table class="table">
              <thead class="thead-dark">
                <tr>
                  <th scope="col">Url</th>
                  <th scope="col">Short Url</th>
                  <th scope="col">created_at</th>
                </tr>
              </thead>

              <tbody>
                @foreach ($home as $allmylink)
                <tr>
                  <td>{{$allmylink->url}}</td>
                  <td>
                      <a href="{{$allmylink->url}}" target="none"> 
                      {{$allmylink->short_url}}
                      </a>
                  </td>
                  <td>{{$allmylink->created_at}}</td>
                </tr>
                @endforeach
              </tbody>
            </table>
            
            
          
            
            
           
          @endif
            
            
          </div> 
    
            
              
    
            <div class="col-2"></div> 
        </div>
    
      </div>
    @endsection  