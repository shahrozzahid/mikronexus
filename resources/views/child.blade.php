
@extends('layouts.app')

@section('content')
                <!-- /# row -->
                <section id="main-content">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-title pr">
                                    <h4>All Products</h4>

                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table student-data-table m-t-20">
                                            <thead>
                                                <tr>
                                                    <th>{!! __('ID') !!}</th>
                                                    <th>{!! __('Image') !!}</th>
                                                    <th>{!! __('Name') !!}</th>
                                                    <th>{!! __('Description') !!}</th>
                                                    <th>{!! __('Price') !!}</th>
                                                    <th>{!! __('Timings') !!}</th>
                                                    <th>{!! __('Status') !!}</th>
                                                    
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>#2901</td>
                                                    <td>
                                                        <img width="50" height="50" src="{{ asset('assets/images/c1.jpg') }}" alt="Second slide">
                                                    </td>
                                                    <td>
                                                        Chocolate
                                                    </td>
                                                    <td>
                                                        Amazing product
                                                    </td>
                                                    <td>
                                                        200
                                                    </td>
                                                    <td>
                                                        12/03/2022
                                                    </td>
                                                    <td>
                                                        <span class="badge badge-warning">Pending</span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>#2901</td>
                                                    <td>
                                                        <img width="50" height="50" src="{{ asset('assets/images/c2.jpg') }}" alt="Second slide">
                                                    </td>
                                                    <td>
                                                        Chocolate
                                                    </td>
                                                    <td>
                                                        Amazing product
                                                    </td>
                                                    <td>
                                                        200
                                                    </td>
                                                    <td>
                                                        12/03/2022
                                                    </td>
                                                    <td>
                                                        <span class="badge badge-warning">Pending</span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>#2901</td>
                                                    <td>
                                                        <img width="50" height="50" src="{{ asset('assets/images/c3.jpg') }}" alt="Second slide">
                                                    </td>
                                                    <td>
                                                        Chocolate
                                                    </td>
                                                    <td>
                                                        Amazing product
                                                    </td>
                                                    <td>
                                                        200
                                                    </td>
                                                    <td>
                                                        12/03/2022
                                                    </td>
                                                    <td>
                                                        <span class="badge badge-warning">Pending</span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>#2901</td>
                                                    <td>
                                                        <img width="50" height="50" src="{{ asset('assets/images/avatar.png') }}" alt="Second slide">
                                                    </td>
                                                    <td>
                                                        Chocolate
                                                    </td>
                                                    <td>
                                                        Amazing product
                                                    </td>
                                                    <td>
                                                        200
                                                    </td>
                                                    <td>
                                                        12/03/2022
                                                    </td>
                                                    <td>
                                                        <span class="badge badge-warning">Pending</span>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /# column -->
                    </div>
@endsection