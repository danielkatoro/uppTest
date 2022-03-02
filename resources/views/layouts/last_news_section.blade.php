@extends('./layouts._default',['title'=>'Laste News'])

@section('content')

<section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <ul class="breadcrumb breadcrumb-style ">
                            <li class="breadcrumb-item">
                                <h4 class="page-title">Last news</h4>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="card">
                        <div class="header">
                            <ul class="header-dropdown m-r--5">
                                <li class="dropdown">
                                    <a href="#" onClick="return false;" class="dropdown-toggle"
                                        data-bs-toggle="dropdown" role="button" aria-haspopup="true"
                                        aria-expanded="false">
                                        <i class="material-icons">more_vert</i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="body">
                            <div class="table-responsive">
                                <table class="table table-hover js-basic-example contact_list">
                                    <thead>
                                        <tr>
                                            <th class="center">Image</th>
                                            <th class="center"> Titre </th>
                                            <th class="center"> Details </th>
                                            <th class="center"> Date </th>
                                            <th class="center"> Action </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($last_news as $item)
                                        <tr class="odd gradeX">
                                            <td class="table-img center">
                                                <img src="{{asset('images')}}/{{$item->image}}" alt="">
                                            </td>
                                            <td class="center">{{$item->titre}}</td>
                                            <td class="center">{{$item->text}}</td>
                                            <td class="center">{{$item->date}}</td>
                                            <td class="center">
                                                <a href="edit-employee.html" class="btn btn-tbl-edit">
                                                    <i class="material-icons">create</i>
                                                </a>
                                                <a href="#" class="btn btn-tbl-delete">
                                                    <i class="material-icons">delete_forever</i>
                                                </a>
                                            </td>
                                        </tr>
                                        @endforeach
                                        
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                        <th class="center">Image</th>
                                            <th class="center"> Titre </th>
                                            <th class="center"> Details </th>
                                            <th class="center"> Date </th>
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