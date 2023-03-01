
@extends('admin.layouts.admin_app_layouts')
@section('title') Category create
@endsection
@section('css')
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />

@endsection
@section('content')

<div class="row">
    @if (Session::has('success'))
                    <p>
                    <div class="alert alert-success " role="alert">
                        {{ Session::get('success') }}
                    </div>

                    </p>
                @endif

    <div class="col-lg-6">
        <form action="{{url('/product/category/create/')}}" enctype="multipart/form-data" method="POST">
            @csrf
        <div class="mb-3 row">
            <label for="example-text-input" class="col-sm-2 col-form-label text-end">Category name:</label>
            <div class="col-sm-10">
                <input class="form-control @error('category_name') is-invalid @enderror" type="text" placeholder="electronics" id="example-text-input" name="category_name">
            
             

            </div>
            
        </div>
     
        <div class="mb-3 row">
            <label class="col-sm-2 col-form-label text-end">Parent Category</label>
            <div class="col-sm-10">
               
                <select class="form-select " aria-label="Default select example" name="parent_id" id="sub_cat" >
                    <option value="" >No subcategory</option>
                    @foreach ($categories as $category)
                    <option value="{{$category->id}}">{{$category->category_name}}</option>
                        
                    @endforeach
                   
                  </select>
            </div>
        </div>

        <button type="submit" class="btn btn-primary mx-5"> Create</button>
    </form>
                                      
    </div>


    
</div>

@endsection

@section('script')


<script>
     $(document).ready(function() {
        $('#sub_cat').select2();
    });
</script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>




@endsection