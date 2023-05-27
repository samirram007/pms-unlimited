@extends('layouts.app')
@section('content')
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">
                        <i class="fas fa-list-alt"></i>
                        {{ __('Companies') }}
                    </h3>
                    <div class="card-tools">

                        <a href="javascript:" data-param="" data-url="{{ route('admin.company.create') }}" data-size="md"
                            title="{{ __('New Company') }}"
                            class="load-popup float-right btn btn-success btn-sm btn-rounded">
                            <i class="fas fa-plus-circle"></i>
                            {{ __('New Company') }}
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
                        <tbody id="index_body">
                            {{-- @include('modules.company.index_body') --}}
                        </tbody>
                    </table>



                </div>
            </div>
        </div>
    </div>


@endsection

@section('scripts')
<script>
    function getIndexData(){

        $.ajax({
            type: "GET",
            url: "{{ route('admin.company.index_body') }}",
            success: function(data) {
                //console.log(data);
                $('#index_body').html(data.html);
            }
        });
    }
setTimeout(() => {
    getIndexData();
}, 500);




</script>
@endsection
