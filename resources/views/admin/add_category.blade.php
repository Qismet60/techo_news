@extends('admin.main')
@section('main')
    <br><br><br>
    <button style="margin-left: 37%;" type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
       Add Categroy
    </button>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
         aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <label for="">Add new Category</label>
                    <input type="text" class="form-control" name="category" id="category">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary save">Save</button>
                </div>
            </div>
        </div>
    </div>
    <script>
        $('.save').click(function () {
            var category = $('input[name=category]').val();
            axios.post('/add_category',
                {
                    category:category
                }
                .then(function (response) {
                    console.log(response)
                })
                .catch(function (error) {
                    console.log(error)
                })
        })
    </script>

@endsection
