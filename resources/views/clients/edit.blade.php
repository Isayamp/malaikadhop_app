@extends('layouts.default')


@section('content')
    <div class="page-content">
        <!--breadcrumb-->
        <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
            <div class="breadcrumb-title pe-3">Forms</div>
            <div class="ps-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0 p-0">
                        <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">Form Layouts</li>
                    </ol>
                </nav>
            </div>
            <div class="ms-auto">
                <div class="btn-group">
                    <button type="button" class="btn btn-primary">Settings</button>
                    <button type="button" class="btn btn-primary split-bg-primary dropdown-toggle dropdown-toggle-split"
                        data-bs-toggle="dropdown"> <span class="visually-hidden">Toggle Dropdown</span>
                    </button>
                    <div class="dropdown-menu dropdown-menu-right dropdown-menu-lg-end"> <a class="dropdown-item"
                            href="javascript:;">Action</a>
                        <a class="dropdown-item" href="javascript:;">Another action</a>
                        <a class="dropdown-item" href="javascript:;">Something else here</a>
                        <div class="dropdown-divider"></div> <a class="dropdown-item" href="javascript:;">Separated link</a>
                    </div>
                </div>
            </div>
        </div>
        <!--end breadcrumb-->


        <div class="row">

            <div class="col-12 col-xl-6">
                <h6 class="mb-0 text-uppercase">Nouveau client</h6>
                <hr />
                <div class="card border-top border-0 border-4 border-danger">
                    <div class="card-body p-5">
                        <div class="card-title d-flex align-items-center">
                            <div><i class="bx bxs-user me-1 font-22 text-danger"></i>
                            </div>
                            <h5 class="mb-0 text-danger">Informations client</h5>
                        </div>
                        <hr>
                        <form class="row g-3" method="POST" action="{{ route('clients.update', $client->id) }}">
                            @method('PATCH')
                            @csrf
                            <div class="col-md-6">
                                <label for="inputLastName1" class="form-label">Prénom</label>
                                <div class="input-group"> <span class="input-group-text bg-transparent"><i
                                            class='bx bxs-user'></i></span>
                                    <input name="prenom_client" value="{{ $client->prenom_client }}" maxlength="50" type="text"
                                        class="form-control border-start-0" id="inputLastName1" placeholder="Magambo"
                                         />
                                    @error('prenom_client')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label for="inputLastName2" class="form-label">Nom</label>
                                <div class="input-group"> <span class="input-group-text bg-transparent"><i
                                            class='bx bxs-user'></i></span>
                                    <input name="nom_client" type="text" class="form-control border-start-0"
                                        id="inputLastName2" value="{{ $client->nom_client }}" placeholder="Tulinabintu" />
                                        @error('nom_client_client')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-12">
                                <label for="inputPhoneNo" class="form-label">Téléphone</label>
                                <div class="input-group"> <span class="input-group-text bg-transparent"><i
                                            class='bx bxs-microphone'></i></span>
                                    <input name="telephone_client" type="tel" class="form-control border-start-0"
                                        id="inputPhoneNo" placeholder="+243991234543" />
                                </div>
                            </div>
                            <div class="col-12">
                                <label for="inputEmailAddress" class="form-label">E-mail</label>
                                <div class="input-group"> <span class="input-group-text bg-transparent"><i
                                            class='bx bxs-message'></i></span>
                                    <input name="email_client" type="email" class="form-control border-start-0"
                                        id="inputEmailAddress" placeholder="Email Address" />
                                </div>
                            </div>

                            <div class="col-12">
                                <label for="inputAddress3" class="form-label">Address</label>
                                <textarea name="adresse_client" class="form-control" id="inputAddress3" placeholder="Enter Address" rows="3"
                                    required></textarea>
                            </div>
                            <div class="col-12">
                                <button type="submit" class="btn btn-danger px-5">Eregistrer</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!--end row-->
    </div>
@endsection
