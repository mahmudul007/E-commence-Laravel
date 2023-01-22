
@extends('layouts.app_layouts')

@section('title')
Super Shop
@endsection

@section('content')

<section id="slider" class="slider-element min-vh-60 min-vh-md-100 dark error404-wrap include-header" style="background: url(common/images/landing/static.jpg) center;">
    <div class="slider-inner">

        <div class="vertical-middle">
            <div class="container text-center py-5 py-md-0">

                <div class="error404">404</div>

                <div class="heading-block border-bottom-0">
                    <h4>Ooopps.! The Page you were looking for, couldn't be found.</h4>
                    <span>Try the search below to find matching pages:</span>
                </div>

                <form action="#" method="get" class="mx-auto mb-0">
                    <div class="input-group input-group-lg">
                        <input type="text" class="form-control" placeholder="Search for Pages...">
                        <button class="btn btn-danger" type="button"><i class="icon-line-search"></i></button>
                    </div>
                </form>

            </div>
        </div>

    </div>
</section>


@endsection