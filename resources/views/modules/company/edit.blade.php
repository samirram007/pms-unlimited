<div class="modal-dialog modal-lg  modal-dialog-top mt-4">
    <div class="modal-content bg-white">

        <div class="modal-header bg-dark">
            <h4 class="modal-title text-light">{{ __('Edit Company') }} </h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <form id="formCreate" enctype="multipart/form-data">
            @csrf
            <div class="modal-body bg-light p-0" data-aos="fade-down" data-aos-easing="linear" data-aos-duration="1000">
                <div class=" w-100  ">

                    <section class="content">
                        <div class="rounded   p-3   ">

                            <div class="row">
                                <div class="col-md-12">
                                    <div class="card card-primary">


                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-md-3 sr-only">
                                                    <div class="form-group ">
                                                        <label for="image">{{ __('image') }}</label>
                                                        <input class="form-control" type="file" name="image"
                                                            id="image">

                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="form-group mb-4">
                                                        <div class="controls">
                                                            <div style="width: 100px;  border:1px solid #ececec;">
                                                                 <img id="showImage"
                                                                style="width: 100px; height:100px;  "
                                                                src="{{ !empty($editData['image']) ? url('upload/company/' . $editData['image']) : url('images/logo-dark.png') }}">
                                                                <div class="text-center bg-light rounded">
                                                                    <small class="text-primary">Tap to change</small>
                                                                </div>
                                                            </div>


                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="row">
                                                <div class="col-md-6 mb-2">
                                                    <div class="form-group">
                                                        <label for="name">{{ __('Name') }} <span
                                                                class="text-danger">*</span></label>
                                                        <input type="text" class="form-control" id="name"
                                                            name="name" placeholder="Enter Name"
                                                            value="{{ $editData['name'] }}" >
                                                        <div class="text-danger">
                                                            @error('name')
                                                                {{ $message }}
                                                            @enderror
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-3 mb-2">
                                                    <div class="form-group">

                                                        <label for="company_type_id">{{ __('Company Type') }} <span
                                                                class="text-danger">*</span></label>

                                                        <select class="form-control " name="company_type_id"
                                                            id="company_type_id">
                                                            {{-- <option value="" class="text-bold">Select Company type </option> --}}
                                                            @forelse ($company_types as $company_type)
                                                                <option value="{{ $company_type['id'] }}"
                                                                {{ $company_type['id']==$editData['company_type_id']?'selected':'' }}>
                                                                    {{ __($company_type['name']) }}
                                                                </option>
                                                            @empty
                                                                <option value="">{{ __('No record found') }}
                                                                </option>
                                                            @endforelse
                                                        </select>

                                                    </div>

                                                </div>


                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label for="date_of_foundation">{{ __('Foundation Date') }}
                                                            <span class="text-danger">*</span></label>
                                                        <input type="date"  class="form-control"
                                                            id="date_of_foundation" name="date_of_foundation"
                                                            value="{{ $editData['date_of_foundation']  == null ? date('Y-m-d') : $editData['date_of_foundation'] }}">
                                                    </div>
                                                </div>




                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="email">{{ __('Email') }}
                                                            <span class="text-danger">*</span></label>
                                                        <input type="email" class="form-control" id="email"
                                                            name="email" value="{{ $editData['email'] }}">
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="contact_no">{{ __('Contact No') }}
                                                            <span class="text-danger">*</span></label>
                                                        <input type="text" size="10" class="form-control"
                                                            id="contact_no" name="contact_no" maxlength="10"
                                                            oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/^([0-9]*\.[0-9]{0,2}).*/,'$1');"
                                                            value="{{ $editData['contact_no'] }}">
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label for="address">{{ __('Address') }} <span
                                                                class="text-danger">*</span></label>
                                                        <textarea class="form-control" rows="1" id="address" name="address" placeholder="{{ __('Enter address') }}">{{ $editData['address'] }}</textarea>

                                                    </div>
                                                </div>




                                            </div>

                                            <div class="modal-footer">
                                                <div class="row text-center w-100">
                                                    <div class="col-6 mx-auto">
                                                        <input type="text" class="sr-only" name="id" id="id" value="{{$editData['id']}}">
                                                        <button type="submit" class="submit btn btn-info px-4"><span
                                                                class="iconify" data-icon="mdi:content-save-all-outline"
                                                                data-width="15" data-height="15"></span>
                                                            {{ __('Save') }}</button>

                                                    </div>
                                                    <div class="col-6 mx-auto">
                                                        <button type="button" class=" btn btn-secondary px-4"
                                                            data-dismiss="modal">{{ __('Cancel') }}</button>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </section>

                </div>

            </div>

        </form>

    </div>

</div>
<script>
    $(document).ready(function() {


            $('#image').change(function(e) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    $('#showImage').attr('src', e.target.result);
                }
                reader.readAsDataURL(e.target.files['0']);

            });
            $('#showImage').click(function(){
                $('#image').click();
            });

            $("#formCreate").on("submit", function(event) {

                event.preventDefault();
                // toastr.success("huray");
                $('.submit').html(
                    '<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span> '
                );
                  var id="{{ $editData['id'] }}";

                  var url = "{{ route($role.'.company.update',':id') }}";
                url = url.replace(':id', id);

               var formData = new FormData($(this)[0]);

                $.ajax({
                    type: "POST",
                    url: url,
                    data: formData,
                    processData: false, // don't process the data
                    contentType: false, // set content type to false as jQuery will tell the server its a query string request
                }).done(function(data) {
                    //console.log(data);
                    if (!data.status) {

                        $('.submit').attr('disabled', false);
                        $('.submit').html('Submit');
                        $.each(data.message, function(key, value) {
                            $('#' + key).addClass('is-invalid');
                            $('#' + key).next().text(value);
                            toastr.error(value);
                        });
                        $('.submit').attr('disabled', false);
                        $('.submit').html('Save');

                    } else {
                        setTimeout(() => {
                            //$('.search').click();
                            getIndexData();
                            $('.close').click();
                            toastr.success(data.message);

                        }, 1000);
                    }
                }).fail(function(data) {

                    $('.submit').attr('disabled', false);
                    $('.submit').html('Submit');
                    toastr.error(data.message);

                    // console.log(data);
                });

                // };
                // reader.readAsText(file);
                });


    });
</script>
