@extends('admin.layouts.admin_app_layouts')
@section('title') Category List
@endsection
@section('css')
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />

@endsection
@section('content')

@foreach ($categories as $category)

<x-category-item:category='$category'/>
<div>
    {{$category->category_name}}( {{$category->id}})

    @foreach ( $category->children as $child)
    <div class="mx-5">
       {{$child->id}} {{$child->category_name}} {{$child->parent_id}}
        @foreach ($child->children as $subchild)
        <div class="mx-5">
            {{$subchild->category_name}} {{$subchild->parent_id}}
    
        </div>
        @endforeach

    </div>
  
        
    @endforeach

</div>

    
@endforeach

<div class="row">
  
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Category list</h4>
               
            </div><!--end card-header-->
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-striped mb-0">
                        <thead>
                        <tr>
                            <th>#Id</th>
                            <th>Category</th>
                            <th>Sub category</th>
                            <th class="text-end">Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td> Aaron Poulin</td>
                            <td>Aaron@example.com</td>
                            <td>+21 21547896</td>
                            <td class="text-end">                                                       
                                <a href="#"><i class="las la-pen text-secondary font-16"></i></a>
                                <a href="#"><i class="las la-trash-alt text-secondary font-16"></i></a>
                            </td>
                        </tr>
                       
                      
                        </tbody>
                    </table><!--end /table-->
                </div><!--end /tableresponsive-->
            </div><!--end card-body-->
        </div><!--end card-->
    </div>

   
</div>


@endsection