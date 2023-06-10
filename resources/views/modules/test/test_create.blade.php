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
                            <label for="">Test Name</label>
                            <input type="text" name="name" id="name" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-3 col">
                        <div class="form-group">
                            <label for="">Test Alias</label>
                            <input type="text" name="alias" id="alias" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-3 col">
                        <div class="form-group">
                            <label for="">Test Code</label>
                            <input type="text" name="code" id="code" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-3 col">
                        <div class="form-group">
                            <label for="">Test Description</label>
                            <input type="text" name="description" id="description" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3 col-sm-3 col">
                        <div class="form-group">
                            <label for="">Test Cost</label>
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
                            <label for="">Test Rate</label>
                            <input type="text" name="amount" id="amount" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-3 col">
                        <div class="form-group">
                            <label for="">Test Duration</label>
                            <input type="text" name="test_duration" id="test_duration" class="form-control">
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="">Test Group</label>
                            <select class="form-control" aria-label="Default select example" name="test_group_id">
                                <option selected>Select Group</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="">Test Category</label>
                            <select class="form-control" aria-label="Default select example" name="test_category_id">
                                <option selected>Select Category</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
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
    });
</script>
