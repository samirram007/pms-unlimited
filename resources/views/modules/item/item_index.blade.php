@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">
                            <i class="fas fa-list-alt"></i>
                            {{ __('Tests') }}
                        </h3>
                        <div class="card-tools">
    
                            <a href="javascript:" data-param="" data-url="{{route('admin.test.test_create')}}" data-size="md"
                                title="{{ __('New Test') }}"
                                class="load-popup float-right btn btn-info btn-sm btn-rounded">
                                <i class="fas fa-plus-circle"></i>
                                {{ __('New Test') }}
                            </a>
                        </div>
                    </div>
                    <div class="card-body">
    
                        <table id="table" class="table table-bordered table-hover dataTable dtr-inline">
    
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>{{ __('Name') }}</th>
                                    <th>{{ __('Type') }}</th>
                                    <th>{{ __('Email') }}</th>
                                    <th>{{ __('Phone') }}</th>
                                    <th>{{ __('Address') }}</th>
                                    <th>{{ __('Action') }}</th>
                                </tr>
                            </thead>
                            <tbody>
                                {{-- @include('modules.company.index_body') --}}
                            </tbody>
                        </table>
    
    
    
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection