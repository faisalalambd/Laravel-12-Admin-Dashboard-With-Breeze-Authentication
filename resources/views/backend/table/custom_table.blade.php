@extends('admin.dashboard')
@section('admin')
    <div class="page-content">
        <div class="container-fluid">

            {{-- Breadcrumb  --}}
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0 font-size-18">Custom Table</h4>
                        <div class="page-title-right">
                            <a href="{{ route('custom.form') }}" class="btn btn-outline-primary waves-effect waves-light">
                                <i class="bx bx-plus font-size-16 align-middle me-2"></i> Add Form
                            </a>
                            <a href="javascript:history.back()" class="btn btn-outline-dark waves-effect waves-light">
                                <i class="bx bx-undo font-size-16 align-middle me-2"></i> Back
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Custom Table --}}
            <div class="row">

                <div class="col-12">

                    <div class="card">

                        <div class="card-body">

                            <table id="datatable-buttons" class="table table-bordered dt-responsive nowrap w-100">

                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Position</th>
                                        <th>Office</th>
                                        <th>Age</th>
                                        <th>Start date</th>
                                        <th>Salary</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>


                                <tbody>
                                    <tr>
                                        <td>Tiger Nixon</td>
                                        <td>System Architect</td>
                                        <td>Edinburgh</td>
                                        <td>61</td>
                                        <td>2011/04/25</td>
                                        <td>$320,800</td>
                                        <td>
                                            @php
                                                $status = request()->get('status', 'Status');
                                            @endphp
                                            <div class="btn-group" role="group">
                                                <button id="btnGroupDrop1" type="button" class="btn btn-outline-secondary waves-effect waves-light dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                                    {{ $status }} <i class="mdi mdi-chevron-down"></i>
                                                </button>
                                                <ul class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                                                    <li><a class="dropdown-item" href="?status=Active">Active</a></li>
                                                    <li><a class="dropdown-item" href="?status=Pending">Pending</a></li>
                                                    <li><a class="dropdown-item" href="?status=Cancel">Cancel</a></li>
                                                </ul>
                                            </div>
                                            <a href="#" class="btn btn-outline-success waves-effect waves-light">
                                                <i class="bx bx-edit font-size-16 align-middle me-2"></i> Edit
                                            </a>
                                            <a href="#" class="btn btn-outline-danger waves-effect waves-light">
                                                <i class="bx bxs-trash font-size-16 align-middle me-2"></i> Delete
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Garrett Winters</td>
                                        <td>Accountant</td>
                                        <td>Tokyo</td>
                                        <td>63</td>
                                        <td>2011/07/25</td>
                                        <td>$170,750</td>
                                        <td>
                                            @php $status = request()->get('status', 'Status'); @endphp
                                            <div class="btn-group" role="group">
                                                <button id="btnGroupDrop2" type="button" class="btn btn-outline-secondary waves-effect waves-light dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                                    {{ $status }} <i class="mdi mdi-chevron-down"></i>
                                                </button>
                                                <ul class="dropdown-menu" aria-labelledby="btnGroupDrop2">
                                                    <li><a class="dropdown-item" href="?status=Active">Active</a></li>
                                                    <li><a class="dropdown-item" href="?status=Pending">Pending</a></li>
                                                    <li><a class="dropdown-item" href="?status=Cancel">Cancel</a></li>
                                                </ul>
                                            </div>
                                            <a href="#" class="btn btn-outline-success waves-effect waves-light">
                                                <i class="bx bx-edit font-size-16 align-middle me-2"></i> Edit
                                            </a>
                                            <a href="#" class="btn btn-outline-danger waves-effect waves-light">
                                                <i class="bx bxs-trash font-size-16 align-middle me-2"></i> Delete
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Ashton Cox</td>
                                        <td>Junior Technical Author</td>
                                        <td>San Francisco</td>
                                        <td>66</td>
                                        <td>2009/01/12</td>
                                        <td>$86,000</td>
                                        <td>
                                            @php $status = request()->get('status', 'Status'); @endphp
                                            <div class="btn-group" role="group">
                                                <button id="btnGroupDrop3" type="button" class="btn btn-outline-secondary waves-effect waves-light dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                                    {{ $status }} <i class="mdi mdi-chevron-down"></i>
                                                </button>
                                                <ul class="dropdown-menu" aria-labelledby="btnGroupDrop3">
                                                    <li><a class="dropdown-item" href="?status=Active">Active</a></li>
                                                    <li><a class="dropdown-item" href="?status=Pending">Pending</a></li>
                                                    <li><a class="dropdown-item" href="?status=Cancel">Cancel</a></li>
                                                </ul>
                                            </div>
                                            <a href="#" class="btn btn-outline-success waves-effect waves-light">
                                                <i class="bx bx-edit font-size-16 align-middle me-2"></i> Edit
                                            </a>
                                            <a href="#" class="btn btn-outline-danger waves-effect waves-light">
                                                <i class="bx bxs-trash font-size-16 align-middle me-2"></i> Delete
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Cedric Kelly</td>
                                        <td>Senior Javascript Developer</td>
                                        <td>Edinburgh</td>
                                        <td>22</td>
                                        <td>2012/03/29</td>
                                        <td>$433,060</td>
                                        <td>
                                            @php $status = request()->get('status', 'Status'); @endphp
                                            <div class="btn-group" role="group">
                                                <button id="btnGroupDrop4" type="button" class="btn btn-outline-secondary waves-effect waves-light dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                                    {{ $status }} <i class="mdi mdi-chevron-down"></i>
                                                </button>
                                                <ul class="dropdown-menu" aria-labelledby="btnGroupDrop4">
                                                    <li><a class="dropdown-item" href="?status=Active">Active</a></li>
                                                    <li><a class="dropdown-item" href="?status=Pending">Pending</a></li>
                                                    <li><a class="dropdown-item" href="?status=Cancel">Cancel</a></li>
                                                </ul>
                                            </div>
                                            <a href="#" class="btn btn-outline-success waves-effect waves-light">
                                                <i class="bx bx-edit font-size-16 align-middle me-2"></i> Edit
                                            </a>
                                            <a href="#" class="btn btn-outline-danger waves-effect waves-light">
                                                <i class="bx bxs-trash font-size-16 align-middle me-2"></i> Delete
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Airi Satou</td>
                                        <td>Accountant</td>
                                        <td>Tokyo</td>
                                        <td>33</td>
                                        <td>2008/11/28</td>
                                        <td>$162,700</td>
                                        <td>
                                            @php $status = request()->get('status', 'Status'); @endphp
                                            <div class="btn-group" role="group">
                                                <button id="btnGroupDrop5" type="button" class="btn btn-outline-secondary waves-effect waves-light dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                                    {{ $status }} <i class="mdi mdi-chevron-down"></i>
                                                </button>
                                                <ul class="dropdown-menu" aria-labelledby="btnGroupDrop5">
                                                    <li><a class="dropdown-item" href="?status=Active">Active</a></li>
                                                    <li><a class="dropdown-item" href="?status=Pending">Pending</a></li>
                                                    <li><a class="dropdown-item" href="?status=Cancel">Cancel</a></li>
                                                </ul>
                                            </div>
                                            <a href="#" class="btn btn-outline-success waves-effect waves-light">
                                                <i class="bx bx-edit font-size-16 align-middle me-2"></i> Edit
                                            </a>
                                            <a href="#" class="btn btn-outline-danger waves-effect waves-light">
                                                <i class="bx bxs-trash font-size-16 align-middle me-2"></i> Delete
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Brielle Williamson</td>
                                        <td>Integration Specialist</td>
                                        <td>New York</td>
                                        <td>61</td>
                                        <td>2012/12/02</td>
                                        <td>$372,000</td>
                                        <td>
                                            @php $status = request()->get('status', 'Status'); @endphp
                                            <div class="btn-group" role="group">
                                                <button id="btnGroupDrop6" type="button" class="btn btn-outline-secondary waves-effect waves-light dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                                    {{ $status }} <i class="mdi mdi-chevron-down"></i>
                                                </button>
                                                <ul class="dropdown-menu" aria-labelledby="btnGroupDrop6">
                                                    <li><a class="dropdown-item" href="?status=Active">Active</a></li>
                                                    <li><a class="dropdown-item" href="?status=Pending">Pending</a></li>
                                                    <li><a class="dropdown-item" href="?status=Cancel">Cancel</a></li>
                                                </ul>
                                            </div>
                                            <a href="#" class="btn btn-outline-success waves-effect waves-light">
                                                <i class="bx bx-edit font-size-16 align-middle me-2"></i> Edit
                                            </a>
                                            <a href="#" class="btn btn-outline-danger waves-effect waves-light">
                                                <i class="bx bxs-trash font-size-16 align-middle me-2"></i> Delete
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Herrod Chandler</td>
                                        <td>Sales Assistant</td>
                                        <td>San Francisco</td>
                                        <td>59</td>
                                        <td>2012/08/06</td>
                                        <td>$137,500</td>
                                        <td>
                                            @php $status = request()->get('status', 'Status'); @endphp
                                            <div class="btn-group" role="group">
                                                <button id="btnGroupDrop7" type="button" class="btn btn-outline-secondary waves-effect waves-light dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                                    {{ $status }} <i class="mdi mdi-chevron-down"></i>
                                                </button>
                                                <ul class="dropdown-menu" aria-labelledby="btnGroupDrop7">
                                                    <li><a class="dropdown-item" href="?status=Active">Active</a></li>
                                                    <li><a class="dropdown-item" href="?status=Pending">Pending</a></li>
                                                    <li><a class="dropdown-item" href="?status=Cancel">Cancel</a></li>
                                                </ul>
                                            </div>
                                            <a href="#" class="btn btn-outline-success waves-effect waves-light">
                                                <i class="bx bx-edit font-size-16 align-middle me-2"></i> Edit
                                            </a>
                                            <a href="#" class="btn btn-outline-danger waves-effect waves-light">
                                                <i class="bx bxs-trash font-size-16 align-middle me-2"></i> Delete
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Rhona Davidson</td>
                                        <td>Integration Specialist</td>
                                        <td>Tokyo</td>
                                        <td>55</td>
                                        <td>2010/10/14</td>
                                        <td>$327,900</td>
                                        <td>
                                            @php $status = request()->get('status', 'Status'); @endphp
                                            <div class="btn-group" role="group">
                                                <button id="btnGroupDrop8" type="button" class="btn btn-outline-secondary waves-effect waves-light dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                                    {{ $status }} <i class="mdi mdi-chevron-down"></i>
                                                </button>
                                                <ul class="dropdown-menu" aria-labelledby="btnGroupDrop8">
                                                    <li><a class="dropdown-item" href="?status=Active">Active</a></li>
                                                    <li><a class="dropdown-item" href="?status=Pending">Pending</a></li>
                                                    <li><a class="dropdown-item" href="?status=Cancel">Cancel</a></li>
                                                </ul>
                                            </div>
                                            <a href="#" class="btn btn-outline-success waves-effect waves-light">
                                                <i class="bx bx-edit font-size-16 align-middle me-2"></i> Edit
                                            </a>
                                            <a href="#" class="btn btn-outline-danger waves-effect waves-light">
                                                <i class="bx bxs-trash font-size-16 align-middle me-2"></i> Delete
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Colleen Hurst</td>
                                        <td>Javascript Developer</td>
                                        <td>San Francisco</td>
                                        <td>39</td>
                                        <td>2009/09/15</td>
                                        <td>$205,500</td>
                                        <td>
                                            @php $status = request()->get('status', 'Status'); @endphp
                                            <div class="btn-group" role="group">
                                                <button id="btnGroupDrop9" type="button" class="btn btn-outline-secondary waves-effect waves-light dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                                    {{ $status }} <i class="mdi mdi-chevron-down"></i>
                                                </button>
                                                <ul class="dropdown-menu" aria-labelledby="btnGroupDrop9">
                                                    <li><a class="dropdown-item" href="?status=Active">Active</a></li>
                                                    <li><a class="dropdown-item" href="?status=Pending">Pending</a></li>
                                                    <li><a class="dropdown-item" href="?status=Cancel">Cancel</a></li>
                                                </ul>
                                            </div>
                                            <a href="#" class="btn btn-outline-success waves-effect waves-light">
                                                <i class="bx bx-edit font-size-16 align-middle me-2"></i> Edit
                                            </a>
                                            <a href="#" class="btn btn-outline-danger waves-effect waves-light">
                                                <i class="bx bxs-trash font-size-16 align-middle me-2"></i> Delete
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Sonya Frost</td>
                                        <td>Software Engineer</td>
                                        <td>Edinburgh</td>
                                        <td>23</td>
                                        <td>2008/12/13</td>
                                        <td>$103,600</td>
                                        <td>
                                            @php $status = request()->get('status', 'Status'); @endphp
                                            <div class="btn-group" role="group">
                                                <button id="btnGroupDrop10" type="button" class="btn btn-outline-secondary waves-effect waves-light dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                                    {{ $status }} <i class="mdi mdi-chevron-down"></i>
                                                </button>
                                                <ul class="dropdown-menu" aria-labelledby="btnGroupDrop10">
                                                    <li><a class="dropdown-item" href="?status=Active">Active</a></li>
                                                    <li><a class="dropdown-item" href="?status=Pending">Pending</a></li>
                                                    <li><a class="dropdown-item" href="?status=Cancel">Cancel</a></li>
                                                </ul>
                                            </div>
                                            <a href="#" class="btn btn-outline-success waves-effect waves-light">
                                                <i class="bx bx-edit font-size-16 align-middle me-2"></i> Edit
                                            </a>
                                            <a href="#" class="btn btn-outline-danger waves-effect waves-light">
                                                <i class="bx bxs-trash font-size-16 align-middle me-2"></i> Delete
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Jena Gaines</td>
                                        <td>Office Manager</td>
                                        <td>London</td>
                                        <td>30</td>
                                        <td>2008/12/19</td>
                                        <td>$90,560</td>
                                        <td>
                                            @php $status = request()->get('status', 'Status'); @endphp
                                            <div class="btn-group" role="group">
                                                <button id="btnGroupDrop11" type="button" class="btn btn-outline-secondary waves-effect waves-light dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                                    {{ $status }} <i class="mdi mdi-chevron-down"></i>
                                                </button>
                                                <ul class="dropdown-menu" aria-labelledby="btnGroupDrop11">
                                                    <li><a class="dropdown-item" href="?status=Active">Active</a></li>
                                                    <li><a class="dropdown-item" href="?status=Pending">Pending</a></li>
                                                    <li><a class="dropdown-item" href="?status=Cancel">Cancel</a></li>
                                                </ul>
                                            </div>
                                            <a href="#" class="btn btn-outline-success waves-effect waves-light">
                                                <i class="bx bx-edit font-size-16 align-middle me-2"></i> Edit
                                            </a>
                                            <a href="#" class="btn btn-outline-danger waves-effect waves-light">
                                                <i class="bx bxs-trash font-size-16 align-middle me-2"></i> Delete
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Quinn Flynn</td>
                                        <td>Support Lead</td>
                                        <td>Edinburgh</td>
                                        <td>22</td>
                                        <td>2013/03/03</td>
                                        <td>$342,000</td>
                                        <td>
                                            @php $status = request()->get('status', 'Status'); @endphp
                                            <div class="btn-group" role="group">
                                                <button id="btnGroupDrop12" type="button" class="btn btn-outline-secondary waves-effect waves-light dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                                    {{ $status }} <i class="mdi mdi-chevron-down"></i>
                                                </button>
                                                <ul class="dropdown-menu" aria-labelledby="btnGroupDrop12">
                                                    <li><a class="dropdown-item" href="?status=Active">Active</a></li>
                                                    <li><a class="dropdown-item" href="?status=Pending">Pending</a></li>
                                                    <li><a class="dropdown-item" href="?status=Cancel">Cancel</a></li>
                                                </ul>
                                            </div>
                                            <a href="#" class="btn btn-outline-success waves-effect waves-light">
                                                <i class="bx bx-edit font-size-16 align-middle me-2"></i> Edit
                                            </a>
                                            <a href="#" class="btn btn-outline-danger waves-effect waves-light">
                                                <i class="bx bxs-trash font-size-16 align-middle me-2"></i> Delete
                                            </a>
                                        </td>
                                    </tr>
                                </tbody>

                            </table>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>
@endsection
