@props(['category'])
<div>
    <!-- The biggest battle is the war against ignorance. - Mustafa Kemal Atatürk -->
    <div>
    {{$category->category_name}}( {{$category->id}})  <a href="#"><i class="las la-pen text-success font-16"></i></a>
                                <a href="#"><i class="las la-trash-alt text-danger font-16"></i></a>

    @foreach ( $category->children as $child)
    <div class="mx-5"> 
       {{$child->id}} {{$child->category_name}} {{$child->parent_id}}  <a href="#"><i class="las la-pen text-success font-16"></i></a>
                                <a href="#"><i class="las la-trash-alt text-danger font-16"></i></a>
        @foreach ($child->children as $subchild)
        <div class="mx-5">
            {{$subchild->category_name}} {{$subchild->parent_id}}  <a href="#"><i class="las la-pen text-success font-16"></i></a>
                                <a href="#"><i class="las la-trash-alt text-danger font-16"></i></a>
        </div>
        @endforeach

    </div>
  
        
    @endforeach

</div>
</div>