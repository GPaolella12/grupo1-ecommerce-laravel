@extends('layouts.app')

@section('main')

<div class="container emp-profile">
    <form method="post">
        <div class="row">
            <div class="col-md-4">
                <div class="profile-img">
                    <img src="https://dummyimage.com/300x200/55595c/fff" alt=""/>
                    
                </div>
            </div>
            <div class="col-md-6">
                <div class="profile-head">
                            <h5>
                                {{$user->completeName()}}
                            </h5>
                            <p class="proile-rating">RANKINGS : <span>8/10</span></p>
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">About</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-md-2">
                <button class="btn">
                    <a style="color:black;" href="/perfil/editar/{{$user->id}}">Editar perfil</a>
                </button>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="profile-work">
                    <p style="color: white;">WORK LINK</p>
                    <a href="" style="color: white;">Website Link</a><br/>
                    <a href="" style="color: white;">Bootsnipp Profile</a><br/>
                    <a href="" style="color: white;">Bootply Profile</a>
                    <p style="color: white;">SKILLS</p>
                    <a href="" style="color: white;">Web Designer</a><br/>
                    <a href="" style="color: white;">Web Developer</a><br/>
                    <a href="" style="color: white;">WordPress</a><br/>
                    <a href="" style="color: white;">WooCommerce</a><br/>
                    <a href="" style="color: white;">PHP, .Net</a><br/>
                </div>
            </div>
            <div class="col-md-8">
                <div class="tab-content profile-tab" id="myTabContent">
                    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                <div class="row">
                                    <div class="col-md-6">
                                        <label>Nombre</label>
                                    </div>
                                    <div class="col-md-6">
                                        <p>{{$user->name}}</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <label>Apellido</label>
                                    </div>
                                    <div class="col-md-6">
                                        <p>{{$user->last_name}}</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <label>Email</label>
                                    </div>
                                    <div class="col-md-6">
                                        <p>{{$user->email}}</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <label>Telefono</label>
                                    </div>
                                    <div class="col-md-6">
                                        <p>{{$user->phone}}</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <label>DNI</label>
                                    </div>
                                    <div class="col-md-6">
                                        <p>{{$user->dni}}</p>
                                    </div>
                                </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </form>           
</div>
    
@endsection