@extends('welcome')
@section('title', 'List Student')
@section('content')

    <nav class="breadcrumb " aria-label="breadcrumbs">
        <ul>
            <li>
                <a href="#">
        <span class="icon is-small">
          <i class="fas fa-home" aria-hidden="true"></i>
        </span>
                    <span>Home</span>
                </a>
            </li>
            <li>
                <a href="#">
        <span class="icon is-small">
          <i class="fas fa-book" aria-hidden="true"></i>
        </span>
                    <span>Hentai</span>
                </a>
            </li>
            <li>
                <a href="#">
        <span class="icon is-small">
          <i class="fas fa-puzzle-piece" aria-hidden="true"></i>
        </span>
                    <span>Pornhub</span>
                </a>
            </li>
            <li class="is-active">
                <a href="#">
        <span class="icon is-small">
          <i class="fas fa-thumbs-up" aria-hidden="true"></i>
        </span>
                    <span>SUBSCRIBE</span>
                </a>
            </li>
        </ul>
    </nav>

    <nav class="level">
        <div class="level-item has-text-centered">
            <div>
                <p class="heading">Tweets</p>
                <p class="title">3,456</p>
            </div>
        </div>
        <div class="level-item has-text-centered">
            <div>
                <p class="heading">Following</p>
                <p class="title">123</p>
            </div>
        </div>
        <div class="level-item has-text-centered">
            <div>
                <p class="heading">Followers</p>
                <p class="title">456K</p>
            </div>
        </div>
        <div class="level-item has-text-centered">
            <div>
                <p class="heading">Likes</p>
                <p class="title">789</p>
            </div>
        </div>
    </nav>
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100" src="https://mdbootstrap.com/img/Photos/Slides/img%20(130).jpg" alt="First slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="https://mdbootstrap.com/img/Photos/Slides/img%20(129).jpg" alt="Second slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="https://mdbootstrap.com/img/Photos/Slides/img%20(70).jpg" alt="Third slide">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>


    <form action="{{ route('customer.search')}}" method="get">
        <a class="delete is-large" href="{{route('customer.index')}}" style="margin: 1px 90%;"></a>
        <div class="container">
            <br/>
            <div class="row justify-content-center">
                <div class="col-12 col-md-10 col-lg-8">
                    <form class="card card-sm">
                        <div class="card-body row no-gutters align-items-center">
                            <div class="col-auto">
                                <i class="fas fa-search h4 text-body"></i>
                            </div>
                            <!--end of col-->
                            <div class="col">
                                <input class="form-control form-control-lg form-control-borderless" type="search" placeholder="Search topics or keywords" name="keyword">
                            </div>
                            <!--end of col-->
                            <!--end of col-->
                        </div>
                    </form>
                </div>

                <!--end of col-->
            </div>
        </div>
    </form>

    <div class="field is-grouped is-grouped-multiline" style="margin: 1px 362px;">
        <div class="control">
            <div class="tags has-addons">
                <a class="tag is-link">Technology</a>
                <a class="tag is-delete"></a>
            </div>
        </div>

        <div class="control">
            <div class="tags has-addons">
                <a class="tag is-link">CSS</a>
                <a class="tag is-delete"></a>
            </div>
        </div>

        <div class="control">
            <div class="tags has-addons">
                <a class="tag is-link">Flexbox</a>
                <a class="tag is-delete"></a>
            </div>
        </div>

        <div class="control">
            <div class="tags has-addons">
                <a class="tag is-link">Web Design</a>
                <a class="tag is-delete"></a>
            </div>
        </div>

        <div class="control">
            <div class="tags has-addons">
                <a class="tag is-link">Open Source</a>
                <a class="tag is-delete"></a>
            </div>
        </div>

        <div class="control">
            <div class="tags has-addons">
                <a class="tag is-link">Community</a>
                <a class="tag is-delete"></a>
            </div>
        </div>

        <div class="control">
            <div class="tags has-addons">
                <a class="tag is-link">Documentation</a>
                <a class="tag is-delete"></a>
            </div>
        </div>
    </div>
    <table class="table">
        <thead>
        <tr>
            <th>No</th>
            <th><abbr title="Played">@lang('messages.name')</abbr></th>
            <th><abbr title="Won">@lang('messages.email')</abbr></th>
            <th><abbr title="Won">@lang('messages.addres')</abbr></th>
            <th><abbr title="Won">@lang('messages.phone')</abbr></th>
            <th><abbr title="Won">@lang('messages.image')</abbr></th>
            <th><abbr title="Won">Action</abbr></th>
        </tr>
        </thead>
        @foreach($customers as $customer)
            <tbody>
            <tr class="is-selected">
                <th>{{$customer->id}}</th>
                <th>{{ $customer->name }}</th>
                <th>{{ $customer->email }}</th>
                <th>{{ $customer->addres }}</th>
                <th>{{ $customer->phone }}</th>
                <th><img src="{{'/images/' . $customer->image}}" style="width: 100px"></th>
                <th><a href="{{ route('customer.show', $customer->id) }}" class="btn btn-xs btn-info">SHOW</a>
                <th><a href="{{ route('customer.edit', $customer->id) }}" class="btn btn-xs btn-primary">EDIT</a>
                <th><a href="{{ route('customer.destroy', $customer->id) }}" class="btn btn-xs btn-primary">DELETE</a>
                </th>
            </tr>
            </tbody>
        @endforeach
    </table>
    {{ $customers->links() }}

    <div class="row">
        <div class="col-lg-12">
            <div class="bull-right">
                <a href="{{ route('customer.create') }}" class="btn btn-xs btn-success">Create</a>

            </div>
        </div>

    </div>
@endsection