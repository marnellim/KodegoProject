@extends('admin.templates.layout')

@section('content')

<div class="row">
    @if($message = Session::get('success'))
    <div class="alert alert-success">
        <p>{{$message}}</p>
    </div>
    @endif

    <form action="{{ route('save.codes') }}" method="POST">
     @csrf
    <button type="submit" class="btn btn-success mb-3"> <i class='bx bx-plus-circle'></i> Generate a code</button>
    </form>

    <div class="nav-align-top mb-4">
        <ul class="nav nav-pills mb-3" role="tablist">
            <li class="nav-item">
                <a href="">
                    <button type="button" class="nav-link active" role="tab" data-bs-toggle="tab"
                    data-bs-target="#navs-pills-top-home" aria-controls="navs-pills-top-home" aria-selected="true">
                    Available Codes
                </a>
            </li>

            <li class="nav-item">
                <button type="button" class="nav-link" role="tab" data-bs-toggle="tab"
                    data-bs-target="#navs-pills-top-profile" aria-controls="navs-pills-top-profile"
                    aria-selected="false">
                    Used Codes
                </button>
            </li>                
        </ul>
        <div class="tab-content">
            <div class="tab-pane fade show active" id="navs-pills-top-home" role="tabpanel">
                <div class="table-responsive text-nowrap">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Activation Code</th>
                                <th>Action</th>
                            </tr>
                            @foreach ($codes as $row)
                            <tr>
                                <td>{{$row ['activationCode']}}</td>
                                <td>
                                    <div class="dropdown">
                                        <button type="button" class="btn p-0 dropdown-toggle hide-arrow"
                                            data-bs-toggle="dropdown">
                                            <i class="bx bx-dots-vertical-rounded"></i>
                                        </button>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="javascript:void(0);"><i
                                                    class="bx bx-edit-alt me-1"></i> Edit</a>
                                            <a class="dropdown-item" href="javascript:void(0);"><i
                                                    class="bx bx-trash me-1"></i> Delete</a>
                                        </div>
                                    </div>
                                </td>
                            </tr>                      
                            @endforeach 
                        </thead>
                    </table>
                </div>
            </div>
            <div class="tab-pane fade " id="navs-pills-top-profile" role="tabpanel">
                <div class="table-responsive text-nowrap">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Activation Code</th>
                                <th>Code Owner</th>
                                <th>Actions</th>
                            </tr>
                              
                                <tr>
                                    <td><i class="fab fa-angular fa-lg text-danger me-3"></i>
                                        <strong>Activation ID</strong>
                                    </td>
                                    <td>Owner Name</td>
                                    <td>
                                        <div class="dropdown">
                                            <button type="button" class="btn p-0 dropdown-toggle hide-arrow"
                                                data-bs-toggle="dropdown">
                                                <i class="bx bx-dots-vertical-rounded"></i>
                                            </button>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="javascript:void(0);"><i
                                                        class="bx bx-edit-alt me-1"></i> Edit</a>
                                                <a class="dropdown-item" href="javascript:void(0);"><i
                                                        class="bx bx-trash me-1"></i> Delete</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>    
                        </thead>
                    </table>
                </div>

            </div>
        </div>
    </div>
</div>


@endsection