<div class="modal fade  " id="exampleModalCenter" tabindex="-1" role="dialog"
    aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header d-flex">
                <div class="modal-title h5" id="exampleModalLongTitle">Choose your login type</div>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row p-4 text-center">
                    <div class="col-xs-12 col-sm-6">
                        <a href="{{ route('admin.login-view') }}" class="btn btn-primary box-100">
                            <img src="{{ asset('website/images/members.png') }}" class="img" alt="">
                            Admin Login</a>
                    </div>

                    <div class="col-xs-12 col-sm-6">
                        <a href="{{ route('employee.login-view') }}" class="btn btn-warning box-100">
                            <img src="{{ asset('website/images/members.png') }}" class="img" alt="">
                            Employee Login</a>
                    </div>
                    <div class="col-xs-12 col-sm-6">
                        <a href="{{ route('patient.login-view') }}" class="btn btn-success box-100">
                            <img src="{{ asset('website/images/members.png') }}" class="img" alt="">
                            Patient Login</a>
                    </div>
                    <div class="col-xs-12 col-sm-6">
                        <a href="{{ route('doctor.login-view') }}" class="btn btn-info box-100">
                            <img src="{{ asset('website/images/members.png') }}" class="img" alt="">
                            Doctor Login</a>
                    </div>
                    <div class="col-xs-12 col-sm-6">

                        <a href="{{ route('associate.login-view') }}" class="btn btn-warning sr-only box-100">
                            <img src="{{ asset('website/images/members.png') }}" class="img" alt="">
                            Associate Login</a>
                    </div>




                </div>



            </div>
            <div class="modal-footer sr-only">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
    <style>
        .box-100 {
            width: 95%;
            height: 100px;
            margin:10px auto;
        }

        .img {
            width: 80px;
            height: 80px;
        }
        .close{
            position: absolute;
            right: 0;
            top: 0;
            margin-top: 10px!important;
            margin-right: 10px!important;
        }
    </style>
</div>
