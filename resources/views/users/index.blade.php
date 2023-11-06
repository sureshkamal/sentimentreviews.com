@extends('layouts.app', [
    'class' => '',
    'elementActive' => 'user'
])

@section('content')          
          
    <div class="content">
        <div class="container-fluid mt--7">
            <div class="row">
                <div class="col">
                    <div class="card shadow">
                        <div class="card-header border-0">
                            <div class="row align-items-center">
                                <div class="col-8">
                                    <h3 class="mb-0">Users</h3>
                                </div>
                                <div class="col-4 text-right">
                                    <a href="#" class="btn btn-sm btn-primary">Add user</a>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-12">
                                                    </div>

                        <div class="table-responsive">
                            <table class="table align-items-center table-flush">
                                <thead class="thead-light">
                                    <tr>
                                        <th scope="col">Name</th>
                                        <th scope="col">Email</th>
                                        <th scope="col">Creation Date</th>
                                        <th scope="col"></th>
                                    </tr>
                                </thead>
                                <tbody>
                                                                            <tr>
                                            <td>Suresh Kamal</td>
                                            <td>
                                                <a href="mailto:sureshkamal1@gmail.com">sureshkamal1@gmail.com</a>
                                            </td>
                                            <td>25/02/2020 11:37</td>
                                                                                    </tr>
                                                                    </tbody>
                            </table>
                        </div>
                        <div class="card-footer py-4">
                            <nav class="d-flex justify-content-end" aria-label="...">
                                
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection