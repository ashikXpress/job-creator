@extends('layout.admin_layout')
@section('content')

    <div class="row">
        <div class="col-md-12">
            <form method="post">

            <div class="box box-info">

                <div class="form-group">
                    <label>Textarea</label>
                    <textarea class="form-control" rows="3" placeholder="Enter ..."></textarea>
                </div>
                <div class="box-header">
                    <h3 class="box-title">Type Short Descriptions</h3>

                </div>
                <!-- /.box-header -->
                <div class="box-body pad">

                    <textarea id="editor1" name="short_description" rows="7" cols="80" placeholder="Short description">

                    </textarea>



                </div>
                <div class="box-header">
                    <h3 class="box-title">Type Full Descriptions</h3>

                </div>
                <div class="box-body pad">
                        <textarea id="editor2" name="short_description" rows="11" cols="80" placeholder="Short description">

                        </textarea>
                </div>
            </div>
            <!-- /.box -->
            </form>
        </div>
        <!-- /.col-->
    </div>

@endsection