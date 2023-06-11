<div class="modal-dialog modal-xl">
    <div class="modal-content">
        <div class="modal-header bg-info">
            <h4 class="modal-title text-light">{{ __('New Test') }} </h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
            <form id="item_create">
                @csrf
                <div class="row">
                    <div class="col-md-3 col-sm-3 col">
                        <div class="form-group">
                            <label for="">Name</label>
                            <input type="text" name="name" id="name" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-3 col">
                        <div class="form-group">
                            <label for="">Alias</label>
                            <input type="text" name="alias" id="alias" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-3 col">
                        <div class="form-group">
                            <label for="">Code</label>
                            <input type="text" name="code" id="code" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-3 col">
                        <div class="form-group">
                            <label for="">Description</label>
                            <input type="text" name="description" id="description" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3 col-sm-3 col">
                        <div class="form-group">
                            <label for="">Cost</label>
                            <input type="text" name="cost" id="cost" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-3 col">
                        <div class="form-group">
                            <label for="">Discount</label>
                            <input type="text" name="discount" id="discount" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-3 col">
                        <div class="form-group">
                            <label for="">Rate</label>
                            <input type="text" name="amount" id="amount" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-3 col">
                        <div class="form-group">
                            <label for="">Duration</label>
                            <input type="text" name="test_duration" id="test_duration" class="form-control">
                        </div>
                    </div>
                </div>


                <div class="row">
                    <div class="col-md-3">
                        <div class="form-group  ">

                            <label for="test_group_id">Under Group ?</label>

                            <select class="form-control itemgroup_select" name="item_group_id" id="item_group_id"
                                data-url="{{ route($role.'.test.get-category-by-groupid') }}">
                                <option value="" class="text-bold">SELECT GROUP</option>

                                @forelse ($item_groups as $tg)
                                    <option value="{{ $tg['id'] }}">
                                        {{ $tg['name'] }}
                                    </option>

                                @empty
                                    <option value="">No record found
                                    </option>
                                @endforelse



                            </select>


                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="form-group ">

                            <label for="item_category_id">Under Category ?</label>

                            <select class="form-control itemcategory_select" name="item_category_id"
                                id="item_category_id">
                                <option value="" style=" font-weight: bold" data-has-attributes="0">SELECT
                                    CATEGORY</option>

                                {{-- @forelse($item_categories as $tc)
                                    @if ($tc['item_group_id'] == 1)
                                        <option value="{{ $tc['id'] }}"
                                            data-has-attributes="{{ !empty($tc['has_method']) ? '1' : '0' }}">
                                            {{ !empty($tc['name']) ? $tc['name'] : 'unknown' }}
                                        </option>
                                    @endif
                                @empty
                                    <option value="" data-has-attributes="NO">No record found
                                    </option>
                                @endforelse --}}




                            </select>
                              </div>

                    </div>

                </div>
                <div class="row" id="Attributes" style="display: none;" data-aos="fade-in">
                    <input type="hidden" id="has_method" name="has_method" value="true">

                    <div class="col-md-3">
                        <div class="form-group ">

                            <label for="inhouse_test">Inhouse Test ?</label>

                            <select class="form-control " name="inhouse_test" id="inhouse_test">
                                <option value="1">YES</option>
                                <option value="0">NO</option>


                            </select>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">

                            <label for="Unit">Unit</label>


                            <select class="form-control " name="item_unit_id" id="item_unit_id">
                                <option value="" class="text-bold">SELECT UNIT</option>
                                @forelse ($item_units as $tu)
                                    <option value="{{ $tu['id'] }}">
                                        {!! $tu['code'] !!}
                                    </option>

                                @empty
                                    <option value="" data-has-attributes="NO">No record found
                                    </option>
                                @endforelse


                            </select>
                        </div>

                    </div>
                    <div class="col-md-3">
                        <div class="form-group  ">
                            <label for="Specimen">Specimen</label>
                            <input type="text" class="form-control" name="specimen" id="Specimen"
                                placeholder="Specimen" value="">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group ">
                            <label for="TestMethod">Test Method</label>
                            <input type="text" class="form-control" name="test_method" id="test_method"
                                placeholder="TestMethod" value="">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="test_method_description">Method Description</label>
                            <input type="text" class="form-control" name="test_method_description"
                                id="test_method_description" placeholder="TestMethodDescription" value="">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group ">
                            <label for="reference_ange">Reference Range</label>
                            <input type="text" class="form-control" name="reference_ange" id="reference_ange"
                                placeholder="ReferenceRange" value="">
                        </div>
                    </div>



                </div>

                <div class="text-center mt-3">
                    <input type="submit" value="{{ __('Submit') }}" id="create_test" class="btn btn-success w-50">
                </div>
            </form>
        </div>

    </div>
</div>

<script>
    $(document).ready(function() {
        $('#item_create').on("submit", function(event) {
            event.preventDefault();
            $('#create_item').prop('disabled', true);
            $('#create_item').html(
                '<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span> '
            );

            var url = "{{ route($role . '.test.store') }}";

            var formData = new FormData($(this)[0]);

            $.ajax({
                type: "POST",
                url: url,
                data: formData,
                processData: false,
                contentType: false,
                success: function(response) {
                    if (response.status === 400) {
                        console.log(response);
                        $('#create_item').prop('disabled', false);
                        $('#create_item').val('Submit');
                    } else if (response.status === 200) {
                        console.log(response);
                        setTimeout(() => {
                            // $('.search').click();
                            // getIndexData();
                            // $('.close').click();
                            toastr.success(response.messages);
                        }, 1000);
                    }
                }
            });
        });
        $(document).on("change", "#item_group_id", function() {
            // var parent_elm = $(this).parents(".test_group_category_container");
            //$('#test_category_id').val('').trigger('change');
            var elm = $("#Attributes");
            $(elm).hide();
            var parent_elm = $("#item_category_id");
            var item_group_id = $(this).val();

            if (item_group_id != '') {
                // $(".page-loader").show();
                var url = $(this).data('url');

                $.ajax({
                    url: url,
                    type: "GET",
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    contentType: "application/json; charset=utf-8",
                    dataType: "json",
                    data: {
                        'item_group_id': item_group_id
                    },
                    success: function(response) {

                        parent_elm.empty();
                        parent_elm.append(
                            '<option value="" style=" font-weight: bold" data-has-attributes="0">Select Category</option>'
                            );
                        $.each(response, function(key, value) {
                            parent_elm.append('<option value="' + value.id +
                                '" data-has-attributes="' + value.has_method +
                                '">' + value.name + '</option>');
                        });

                    },
                    error: function(xhr, status, error) {
                        parent_elm.empty();
                        parent_elm.append(
                            '<option value="" style=" font-weight: bold" data-has-attributes="0">Select Category</option>'
                            );

                    }
                });
            } else {
                parent_elm.empty();
                parent_elm.append(
                    '<option value="" style=" font-weight: bold" data-has-attributes="0">Select Category</option>'
                    );

            }


        });

        $(document).on("change", "#item_category_id", function() {
            // console.log('test_category_id');
            var parent_elm = $("#Attributes");

            var ItemCategoryID = $(this).val();
            if (this.selectedOptions[0].getAttribute('data-has-attributes') == '0') {
                // alert('NO');
                $(parent_elm).hide();
            } else {
                //alert('YES');
                $(parent_elm).show();
            }
            $("#has_method").val(this.selectedOptions[0].getAttribute('data-has-attributes'));

        });
    });
</script>
