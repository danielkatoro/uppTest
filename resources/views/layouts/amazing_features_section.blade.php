@extends('./layouts._default',['title'=>'App_Config'])

@section('content')

<section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <ul class="breadcrumb breadcrumb-style ">
                            <li class="breadcrumb-item">
                                <h4 class="page-title">All Employees</h4>
                            </li>
                            <li class="breadcrumb-item bcrumb-1">
                                <a href="../../index.html">
                                    <i class="fas fa-home"></i> Home</a>
                            </li>
                            <li class="breadcrumb-item bcrumb-2">
                                <a href="#" onClick="return false;">Employee</a>
                            </li>
                            <li class="breadcrumb-item active">All Employees</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                <strong>All</strong> Testimonials
                            </h2>
                            <ul class="header-dropdown m-r--5">
                                <li class="dropdown">
                                    <a href="#" onClick="return false;" class="dropdown-toggle"
                                        data-bs-toggle="dropdown" role="button" aria-haspopup="true"
                                        aria-expanded="false">
                                        <i class="material-icons">more_vert</i>
                                    </a>
                                    <ul class="dropdown-menu float-end">
                                        <li>
                                            <a href="#" onClick="return false;">Action</a>
                                        </li>
                                        <li>
                                            <a href="#" onClick="return false;">Another action</a>
                                        </li>
                                        <li>
                                            <a href="#" onClick="return false;">Something else here</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="body">
                            <div class="table-responsive">
                                <table class="table table-hover js-basic-example contact_list">
                                    <thead>
                                        <tr>
                                            <th class="center">Element 1</th>
                                            <th class="center"> Details 1 </th>
                                            <th class="center"> Image 1 </th>
                                            <th class="center">Element 2</th>
                                            <th class="center"> Details 2 </th>
                                            <th class="center"> Image 2 </th>
                                            <th class="center">Element 3</th>
                                            <th class="center"> Details 3 </th>
                                            <th class="center"> Image 3 </th>
                                            <th class="center"> Action </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($amazing_features as $item)
                                        <tr class="odd gradeX">
                                            <td class="">{{$item->titre1}}</td>
                                            <td class="">{{$item->text1}}</td>
                                            <td >
                                                <img style="height: 50px;" src="{{asset('images')}}/{{$item->image1}}" alt="">
                                            </td>
                                            <td class="">{{$item->titre2}}</td>
                                            <td class="">{{$item->text2}}</td>
                                            <td class="">
                                                <img style="height: 50px;" src="{{asset('images')}}/{{$item->image2}}" alt="">
                                            </td>
                                            <td class="">{{$item->titre3}}</td>
                                            <td class="">{{$item->text3}}</td>
                                            <td class="">
                                                <img style="height: 50px;" src="{{asset('images')}}/{{$item->image3}}" alt="">
                                            </td>
                                            <td class="center">
                                                <a href="/@dmin/edit_amazing_features/{{$item->id}}" class="btn btn-tbl-edit">
                                                    <i class="material-icons">create</i>
                                                </a>
                                            </td>
                                        </tr>
                                        @endforeach
                                        
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                        <th class="center">Element 1</th>
                                            <th class="center"> Details 1 </th>
                                            <th class="center"> Image 1 </th>
                                            <th class="center">Element 2</th>
                                            <th class="center"> Details 2 </th>
                                            <th class="center"> Image 2 </th>
                                            <th class="center">Element 3</th>
                                            <th class="center"> Details 3 </th>
                                            <th class="center"> Image 3 </th>
                                            <th class="center"> Action </th>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @endsection