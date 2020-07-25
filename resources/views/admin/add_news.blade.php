@extends('admin.main')
@section('main')
    <style>
        .add_news {
            width: 800px;
            display: flex;
            flex-direction: column;
        }

        .add_news select, button {
            width: 250px;
        }

        .add_news > .header {
            display: flex;
            flex-direction: row;
            flex-wrap: nowrap;
            justify-content: space-between;
            align-items: baseline;
            align-content: stretch;
        }

        .add_news input {
            width: 650px;
        }

        .add_news > .status > option {
            width: 160px;
            height: 40px;
            border-radius: 3px;
        }
    </style>

    <div class="add_news">
        <br><br>
        <div class="header">
            <label for="" style="color:white"><h2>News Title</h2></label>
            <input type="text" name="title" class="form-control-lg">
        </div>
        {{--        <div class="img">--}}
        {{--            <input type="file" name="img">--}}
        {{--        </div>--}}
        <div class="description">
            <label for="" style="color:white"><h2>Description</h2></label><br>
            <textarea style="margin-left: 100px!important;" name="editor1" id="editor"></textarea>
            <br>
        </div>
        <div class="category">
            <select name="category_id" id="category_id">
                <option value="1">Phone</option>
                <option value="2">Internet</option>
                <option value="3">Technology</option>
            </select>
        </div>
        <div class="status">
            <label for="status" style="color:white">Select Post Status->></label>
            <select name="status" id="status">
                <option value="0">active</option>
                <option value="1">deactive</option>
            </select>
            <br>
        </div>
        <button class="btn btn-md btn-outline-primary press">Add News</button>
    </div>
    <script>
        CKEDITOR.replace('editor1', {
            width: 1000,
            height: 300,
            filebrowserUploadUrl: "{{route('upload', ['_token' => csrf_token() ])}}",
            filebrowserUploadMethod: 'form'
        });
        $('.press').click(function () {
            var body = CKEDITOR.instances["editor"].editable().getText();
            var title = $('input[name=title]').val();
            var status = $('#status').val();
            var category_id = $('#category_id').val();
            axios.post('/image_upload',
                {
                    body: body,
                    title: title,
                    status: status,
                    category_id: category_id
                })
                .then(function (response) {
                     console.log(response)
                    })
                .catch(function (error) {
                        console.log(error)
                    })
        })

    </script>
@endsection
