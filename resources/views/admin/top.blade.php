
@extends('admin.layouts.admin_app_layouts')

@section('title')
Admin Home
@endsection
@section('css')
<style>.nav-justified {
    .nav-item {
      flex-basis: 0;
      flex-grow: 1;
      text-align: center;
    }
  }</style>
@endsection


@section('content')

<div class="row ">
    <div class="col-12">
     
                <div class="text-center">
                    <div class="row">
                        <div class="col-sm-8 offset-sm-2">
                            <span class=" py-2 bg-white d-block mb-2">
                               <img class="" src="https://uniinfo.com.bd/img/uniinfo-logo.png" style="height: 78px;" alt="">
                            </span>
                        </div>                                                                        
                    </div>
                   
                  
                </div>
         
       
    </div> <!-- end col -->                                 
</div> <!-- end row -->

{{-- <div class="row">
    <div class="col-lg-12">                            
          
                <nav class="nav nav-pills nav-justified " style="background-color: rgba(82, 209, 213, 0.578)">
                    <a class="nav-item nav-link " href="#">HOME</a>
                    <a class="nav-item nav-link " href="#">BANGLADESHI <br> UNIVERSITIES</a>
                    <a class="nav-item nav-link " href="#">CAMPUS <br> UPDATES</a>
                    <a class="nav-item nav-link " href="#">FOREIGHN <br> UNIVERSITIES</a>
                    <a class="nav-item nav-link " href="#">SCHOLARSHIPS</a>
                    <a class="nav-item nav-link " href="#">STUDY <br> ABROAD</a>
                    <a class="nav-item nav-link " href="#">CONVOCATION  <br> UPDATE</a>
                    <a class="nav-item nav-link" href="#">CAREER</a>
                    <a class="nav-item nav-link" href="#">SKILL</a>
                    <a class="nav-item nav-link" href="#">EDUCATION    <br> CORNER</a>
                    <a class="nav-item nav-link" href="#">BLOGS</a>

                    <a class="nav-item nav-link " href="#" tabindex="-1" aria-disabled="true">Login</a>
                </nav>
         
    </div> <!-- end col --> 
</div> --}}


@endsection