@extends('admin.dashboard')
@section('admin')
    <div class="page-content">

        <div class="container-fluid">

            {{-- Breadcrumb  --}}
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0 font-size-18">Custom Form</h4>
                        <div class="page-title-right">
                            <a href="javascript:history.back()" class="btn btn-outline-dark waves-effect waves-light">
                                <i class="fas fa-arrow-left"></i> Back
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Custom Form --}}
            <div class="row">

                <div class="col-12">

                    <div class="card">

                        <div class="card-body p-4">

                            <form class="row g-3">

                                <div class="col-md-6">
                                    <label for="text" class="form-label">Text</label>
                                    <input type="text" class="form-control" id="text" name="" value="Your Name">
                                </div>

                                <div class="col-md-6">
                                    <label for="email" class="form-label">Email</label>
                                    <input type="email" class="form-control" id="email" name="" value="email@email.com">
                                </div>

                                <div class="col-md-4">
                                    <label for="password" class="form-label">Password</label>
                                    <input type="password" class="form-control" id="password" name="" value="password">
                                </div>

                                <div class="col-md-4">
                                    <label for="number" class="form-label">Number</label>
                                    <input type="number" class="form-control" id="number" name="" value="13">
                                </div>

                                <div class="col-md-4">
                                    <label class="form-label">Select</label>
                                    <select class="form-select">
                                        <option>Select</option>
                                        <option>Large select</option>
                                        <option>Small select</option>
                                    </select>
                                </div>

                                <div class="col-md-6">
                                    <label for="date" class="form-label">Date</label>
                                    <input type="date" class="form-control" id="date" name="" value="{{ \Carbon\Carbon::now()->format('Y-m-d') }}">
                                </div>

                                <div class="col-md-6">
                                    <label for="time" class="form-label">Time</label>
                                    <input type="time" class="form-control" id="time" name="" value="{{ \Carbon\Carbon::now()->format('H:i') }}">
                                </div>

                                <div class="col-md-12">
                                    <label for="textarea" class="form-label">Textarea</label>
                                    <textarea class="form-control" id="textarea" rows="4" placeholder="Enter your message here"></textarea>
                                </div>

                                <div class="col-12">
                                    <label class="form-label">Ckeditor Classic editor</label>
                                    <textarea class="form-control" id="ckeditor-classic"></textarea>
                                </div>

                                <div class="col-12">
                                    <button type="submit" class="btn btn-primary">Sign in</button>
                                </div>

                            </form>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>
@endsection
