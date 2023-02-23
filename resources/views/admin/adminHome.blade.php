@extends('admin.layouts.admin_app_layouts')

@section('title')
Admin Home
@endsection


@section('content')
 <!-- Page-Title -->
 <div class="row">
    <div class="col-sm-12">
        <div class="page-title-box">
            <div class="float-end">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Metrica</a>
                    </li><!--end nav-item-->
                    <li class="breadcrumb-item"><a href="#">Dashboard</a>
                    </li><!--end nav-item-->
                    <li class="breadcrumb-item active">Analytics</li>
                </ol>
            </div>
            <h4 class="page-title">Analytics</h4>
        </div><!--end page-title-box-->
    </div><!--end col-->
</div>
<!-- end page title end breadcrumb -->
<!-- end page title end breadcrumb -->
<div class="row">
    <div class="col-lg-9">
        <div class="row justify-content-center">
            <div class="col-md-6 col-lg-3">
                <div class="card">
                    <div class="card-body">
                        <div class="row d-flex justify-content-center">
                            <div class="col-9">
                                <p class="text-dark mb-0 fw-semibold">Total Browse</p>
                                <h3 class="my-1 font-20 fw-bold">{{$analytics['total_browse']}}</h3>
                                <p class="mb-0 text-truncate text-muted"><span class="text-success"><i class="mdi mdi-trending-up"></i>8.5%</span> New Sessions Today</p>
                            </div><!--end col-->
                            <div class="col-3 align-self-center">
                                <div class="d-flex justify-content-center align-items-center thumb-md bg-light-alt rounded-circle mx-auto">
                                    <i class="ti ti-users font-24 align-self-center text-muted"></i>
                                </div>
                            </div><!--end col-->
                        </div><!--end row-->
                    </div><!--end card-body--> 
                </div><!--end card--> 
            </div> <!--end col--> 
            <div class="col-md-6 col-lg-3">
                <div class="card">
                    <div class="card-body">
                        <div class="row d-flex justify-content-center">                                                
                            <div class="col-9">
                                <p class="text-dark mb-0 fw-semibold">Unique Visitor</p>
                                <h3 class="my-1 font-20 fw-bold">{{$analytics['unique_visitor_count']}}</h3>
                                <p class="mb-0 text-truncate text-muted"><span class="text-success"><i class="mdi mdi-trending-up"></i>1.5%</span> Weekly Avg.Sessions</p>
                            </div><!--end col-->
                            <div class="col-3 align-self-center">
                                <div class="d-flex justify-content-center align-items-center thumb-md bg-light-alt rounded-circle mx-auto">
                                    <i class="ti ti-clock font-24 align-self-center text-muted"></i>
                                </div>
                            </div> <!--end col-->
                        </div><!--end row-->
                    </div><!--end card-body--> 
                </div><!--end card--> 
            </div> <!--end col--> 
            <div class="col-md-6 col-lg-3">
                <div class="card">
                    <div class="card-body">
                        <div class="row d-flex justify-content-center">                                                
                            <div class="col-9">
                                <p class="text-dark mb-0 fw-semibold">Unique Rand Visitor</p>
                                <h3 class="my-1 font-20 fw-bold">{{$analytics['unique_random_visitor_count']}}</h3>
                                <p class="mb-0 text-truncate text-muted"><span class="text-danger"><i class="mdi mdi-trending-down"></i>35%</span> Bounce Rate Weekly</p>
                            </div><!--end col-->
                            <div class="col-3 align-self-center">
                                <div class="d-flex justify-content-center align-items-center thumb-md bg-light-alt rounded-circle mx-auto">
                                    <i class="ti ti-activity font-24 align-self-center text-muted"></i>
                                </div>
                            </div> <!--end col-->
                        </div><!--end row-->
                    </div><!--end card-body--> 
                </div><!--end card--> 
            </div> <!--end col--> 
            <div class="col-md-6 col-lg-3">
                <div class="card">
                    <div class="card-body">
                        <div class="row d-flex justify-content-center">
                            <div class="col-9">  
                                <p class="text-dark mb-0 fw-semibold">Todays Visit

                                </p>                                         
                                <h3 class="my-1 font-20 fw-bold">{{ $analytics['unique_visitor_count_today'] }}</h3>
                                <p class="mb-0 text-truncate text-muted"><span class="text-success"><i class="mdi mdi-trending-up"></i>10.5%</span> Completions Weekly</p>
                            </div><!--end col-->
                            <div class="col-3 align-self-center">
                                <div class="d-flex justify-content-center align-items-center thumb-md bg-light-alt rounded-circle mx-auto">
                                    <i class="ti ti-confetti font-24 align-self-center text-muted"></i>
                                </div>
                            </div><!--end col--> 
                        </div><!--end row-->
                    </div><!--end card-body--> 
                </div><!--end card--> 
            </div> <!--end col-->                               
        </div><!--end row-->
        <div class="card">
            <div class="card-header">
                <div class="row align-items-center">
                    <div class="col">                      
                        <h4 class="card-title">Audience Overview</h4>                      
                    </div><!--end col-->
                    <div class="col-auto"> 
                        <div class="dropdown">
                            <a href="#" class="btn btn-sm btn-outline-light dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                               This Year<i class="las la-angle-down ms-1"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-end">
                                <a class="dropdown-item" href="#">Today</a>
                                <a class="dropdown-item" href="#">Last Week</a>
                                <a class="dropdown-item" href="#">Last Month</a>
                                <a class="dropdown-item" href="#">This Year</a>
                            </div>
                        </div>               
                    </div><!--end col-->
                </div>  <!--end row-->                                  
            </div><!--end card-header-->
            <div class="card-body">
                <div class="">
                    <div id="ana_dash_1" class="apex-charts"></div>
                </div> 
            </div><!--end card-body--> 
        </div><!--end card--> 
    </div><!--end col-->
    <div class="col-lg-3">
        <div class="card">
            <div class="card-header">
                <div class="row align-items-center">
                    <div class="col">                      
                        <h4 class="card-title">Sessions Device</h4>                      
                    </div><!--end col-->
                    <div class="col-auto"> 
                        <div class="dropdown">
                            <a href="#" class="btn btn-sm btn-outline-light dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                               All<i class="las la-angle-down ms-1"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-end">
                                <a class="dropdown-item" href="#">Purchases</a>
                                <a class="dropdown-item" href="#">Emails</a>
                            </div>
                        </div>         
                    </div><!--end col-->
                </div>  <!--end row-->                                  
            </div><!--end card-header-->
            <div class="card-body">
                <div class="text-center">
                    <div id="ana_device" class="apex-charts"></div>
                    <h6 class="bg-light-alt py-3 px-2 mb-0">
                        <i data-feather="calendar" class="align-self-center icon-xs me-1"></i>
                        From App Launch Till Now
                    </h6>
                </div>  
                <div class="table-responsive mt-2">
                    <table class="table border-dashed mb-0">
                        <thead>
                            <tr>
                                <th>Device</th>
                                <th class="text-end">Visits</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Dasktop</td>
                                <td class="text-end">{{ $analytics['desktop_visitors'] }}</td>
                            </tr>

                            <tr>
                                <td>Mobile</td>
                                <td class="text-end">{{ $analytics['mobile_visitors'] }}</td>
                            </tr>

                        </tbody>
                    </table>
                    <!--end /table-->
                </div>                              
            </div><!--end card-body--> 
        </div><!--end card--> 
    </div> <!--end col--> 
</div><!--end row-->


<div class="row">                        
    <div class="col-lg-6">
        <div class="card">
            <div class="card-header">
                <div class="row align-items-center">
                    <div class="col">                      
                        <h4 class="card-title">Top visitors</h4>                      
                    </div><!--end col-->                                        
                </div>  <!--end row-->                                  
            </div><!--end card-header-->
            <div class="card-body">
                <div class="table-responsive browser_users">
                    <table class="table mb-0">
                        <thead class="thead-light">
                            <tr>
                                <th class="border-top-0">User Id</th>
                                <th class="border-top-0">Name</th>
                                <th class="border-top-0">Visits</th>
                                <th class="border-top-0">Browse</th>
                            </tr>
                            <!--end tr-->
                        </thead>
                        <tbody>
                            @foreach ($analytics['unique_user_visits']->take(6) as $visitor)
                                @php
                                    $user = \App\Models\User::find($visitor->user_id)
                                @endphp
                                <tr>
                                    <td><a href="" class="text-primary">{{$user->id}}</td>
                                    <td>{{$user->name}}</td>
                                    <td><small class="text-muted">{{$visitor->total}}</small></td>
                                    <td><small class="text-muted">{{$visitor->browse}}</small></td>
                                    {{-- <td> 52.80% <i class="fas fa-caret-up text-success font-16"></i></td> --}}
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <!--end table-->
                </div>
                <!--end /div-->
            </div>
        </div><!--end card--> 
    </div> <!--end col-->   
    
    <div class="col-lg-6">
        <div class="card">
            <div class="card-header">
                <div class="row align-items-center">
                    <div class="col">                      
                        <h4 class="card-title">Browser Used & Traffic Reports</h4>                      
                    </div><!--end col-->                                        
                </div>  <!--end row-->                                  
            </div><!--end card-header-->
            <div class="card-body">
                <div class="table-responsive browser_users">
                    <table class="table mb-0">
                        <thead class="thead-light">
                            <tr>
                                <th class="border-top-0">Browser</th>
                                <th class="border-top-0">Sessions</th>
                                <th class="border-top-0">Bounce Rate</th>
                                <th class="border-top-0">Transactions</th>
                            </tr><!--end tr-->
                        </thead>
                        <tbody>
                            <tr>                                                        
                                <td><img src="admin/assets/images/logos/chrome.png" alt="" height="16" class="me-2">Chrome</td>
                                <td>10853<small class="text-muted">(52%)</small></td>                                   
                                <td> 52.80%</td>
                                <td>566<small class="text-muted">(92%)</small></td>
                            </tr><!--end tr-->     
                            <tr>                                                        
                                <td><img src="admin/assets/images/logos/micro-edge.png" alt="" height="16" class="me-2">Microsoft Edge</td>
                                <td>2545<small class="text-muted">(47%)</small></td>                                   
                                <td> 47.54%</td>
                                <td>498<small class="text-muted">(81%)</small></td>
                            </tr><!--end tr-->    
                            <tr>                                                        
                                <td><img src="admin/assets/images/logos/in-explorer.png" alt="" height="16" class="me-2">Internet-Explorer</td>
                                <td>1836<small class="text-muted">(38%)</small></td>                                   
                                <td> 41.12%</td>
                                <td>455<small class="text-muted">(74%)</small></td>
                            </tr><!--end tr-->    
                            <tr>                                                        
                                <td><img src="admin/assets/images/logos/opera.png" alt="" height="16" class="me-2">Opera</td>
                                <td>1958<small class="text-muted">(31%)</small></td>                                   
                                <td> 36.82%</td>
                                <td>361<small class="text-muted">(61%)</small></td>
                            </tr><!--end tr-->    
                            <tr>                                                        
                                <td><img src="admin/assets/images/logos/chrome.png" alt="" height="16" class="me-2">Chrome</td>
                                <td>10853<small class="text-muted">(52%)</small></td>                                   
                                <td> 52.80%</td>
                                <td>566<small class="text-muted">(92%)</small></td>
                            </tr><!--end tr-->                             
                        </tbody>
                    </table> <!--end table-->                                               
                </div><!--end /div--> 
            </div><!--end card-body--> 
        </div><!--end card--> 
    </div> <!--end col-->
</div><!--end row-->
@section('script')

    var visitorArray = @json(array_column($analytics['date_vs_visits'], 'visits'));
    var browseArray = @json(array_column($analytics['date_vs_visits'], 'browse'));
    var chartDateArray = @json(array_column($analytics['date_vs_visits'], 'date'));

    var mobileVsDesktopX = ['Mobile', 'Desktop'];
    var mobileVsDesktopY = [{{ $analytics['mobile_visitors'] }}, {{ $analytics['desktop_visitors'] }}];
   
@endsection




@endsection



