@extends('./layouts._default',['title'=>'Testimonials'])

@section('content')

<section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <ul class="breadcrumb breadcrumb-style ">
                            <li class="breadcrumb-item">
                                <h4 class="page-title">Testimonials</h4>
                            </li>
                        </ul>
                        <!-- #START# Modal Form Example -->
                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">Ajouter</button>
                        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="formModal" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="formModal">Nouveau sTestimonial</h5>
                                        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <form action="{{ route('testimonials_store')}}" method="POST" enctype="multipart/form-data">
                                            @csrf
                                            <label for="name">Nom</label>
                                            <div class="form-group">
                                                <div class="form-line">
                                                    <input type="text" id="name" class="form-control"  name="name">
                                                </div>
                                            </div>
                                            <label for="name">Titre</label>
                                            <div class="form-group">
                                                <div class="form-line">
                                                    <input type="text" id="titre" class="form-control"  name="titre">
                                                </div>
                                            </div>
                                            <label for="detail">Description</label>
                                            <div class="form-group">
                                                <div class="form-line">
                                                    <input type="text" id="detail" class="form-control"  name="detail">
                                                </div>
                                            </div>
                                            
                                            <div class="form-group">
                                                <label for="file">Logo</label>
                                                <input id="file" type="file" name="file"><br>
                                            </div>
                                            <button type="submit" class="btn btn-info waves-effect">Enregistrer</button>
                                            <button type="button" class="btn btn-danger waves-effect" data-bs-dismiss="modal">Annuler</button>
                                        </form>
                                    </div>
                                    <div class="modal-footer">

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- #END# Modal Form Example -->

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
                                            <th class="center">#</th>
                                            <th class="center"> Titre </th>
                                            <th class="center"> Details </th>
                                            <th class="center"> Nom </th>
                                            <th class="center"> Action </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($testimonials as $item)
                                        <tr class="odd gradeX">
                                            <td class="">
                                                <img style="height: 50px;" src="{{asset('images')}}/{{$item->image}}" alt="">
                                            </td>
                                            <td >{{$item->titre}}</td>
                                            <td >{{$item->detail}}</td>
                                            <td >{{$item->name}}</td>
                                            <td class="center">
                                                <a href="/@dmin/edit_testimonials/{{$item->id}}" class="btn btn-tbl-edit">
                                                    <i class="material-icons">create</i>
                                                </a>
                                                <a href="/@dmin/testimonials_destroy/{{$item->id}}" class="btn btn-tbl-delete">
                                                    <i class="material-icons">delete_forever</i>
                                                </a>
                                            </td>
                                        </tr>
                                        @endforeach
                                        
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                        <th class="center">#</th>
                                            <th class="center"> Titre </th>
                                            <th class="center"> Details </th>
                                            <th class="center"> Nom </th>
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