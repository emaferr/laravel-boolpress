<div style="height: 660px" class="container py-5">
    <div class="row">
    <div class="col-lg-4 col-md-6" style="margin-top: 20px">
                <div class="card border-primary">
                    <div class="card-body bg-primary text-white">
                        <div class="row">
                            <div class="col-3">
                                <i class="fa fa-newspaper fa-5x"></i>
                            </div>
                            <div class="col-9 text-right">
                                <h1>{{count($articles)}}</h1>
                                <h4>  Articles</h4>
                            </div>
                        </div>
                    </div>
                    <a href="{{route('admin.articles.index')}}">
                        <div class="card-footer bg-light">
                            <span class="float-left">Click for edit</span>
                            <span class="float-right"><i class="fa fa-arrow-circle-right"></i></span>
                            <div class="clearfix"></div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6" style="margin-top: 20px">
                <div class="card border-secondary">
                    <div class="card-body bg-secondary text-white">
                        <div class="row">
                            <div class="col-3">
                                <i class="fa fa-user fa-5x"></i>
                            </div>
                            <div class="col-9 text-right">
                                <h1>{{count($users)}}</h1>
                                <h4> Users</h4>
                            </div>
                        </div>
                    </div>
                    <a href="">
                        <div class="card-footer bg-light text-secondary">
                            <span class="float-left">Click for edit</span>
                            <span class="float-right"><i class="fa fa-arrow-circle-right"></i></span>
                            <div class="clearfix"></div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
    </div>