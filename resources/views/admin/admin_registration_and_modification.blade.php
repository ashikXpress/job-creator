@extends('layout.admin_layout')
@section('content')

 <div class="box box-primary">
        <div class="box-header with-border">
            <h3 class="box-title">Quick Example
                <span>
                    @if(session()->has('success'))
                        <span class="text-success">{{session()->get('success')}}</span>
                    @endif
                    @if(session()->has('error'))
                        <span class="text-danger">{{session()->get('error')}}</span>
                    @endif
                </span>
            </h3>
        </div>
        <!-- /.box-header -->
        <!-- form start -->
        <form role="form" method="post" action="{{route('createAdmin')}}">
            <div class="box-body">
                <div class="row">

                    {{csrf_field()}}

                    <div class="col-md-6">

                        <div class="form-group">
                            <input type="text" name="name" value="{{old('name')}}" placeholder="Full name" class="form-control">
                            <span class="text-danger">{{$errors->first('name')}}</span>
                        </div>
                        <div class="form-group">
                            <input type="text" name="email" value="{{old('email')}}" placeholder="Email" class="form-control">
                            <span class="text-danger">{{$errors->first('email')}}</span>
                        </div>
                        <div class="form-group">
                            <input type="text" name="mobile_number" value="{{old('mobile_number')}}" placeholder="Mobile number" class="form-control">
                            <span class="text-danger">{{$errors->first('mobile_number')}}</span>
                        </div>
                        <div class="form-group">
                            <input type="password" name="password" value="{{old('password')}}" placeholder="Password" class="form-control">
                            <span class="text-danger">{{$errors->first('password')}}</span>
                        </div>
                        <div class="form-group">
                            <input type="password" name="retype_password" value="{{old('retype_password')}}" placeholder="Retype password" class="form-control">
                            <span class="text-danger">{{$errors->first('retype_password')}}</span>
                        </div>

                        <div class="form-group">
                            <button class="btn btn-primary">Create admin</button>
                            <a href="" class="btn btn-primary">Back</a>

                        </div>
                    </div>


                </div>
            </div>
            <!-- /.box-body -->

        </form>
 </div>



 <div class="col-xs-12">
     <div class="box">
         <div class="box-header">
             <h3 class="box-title">Admin Lists</h3>
         </div>
         <!-- /.box-header -->
         <div class="box-body">
             <div id="example2_wrapper" class="dataTables_wrapper form-inline dt-bootstrap"><div class="row"><div class="col-sm-6"></div><div class="col-sm-6"></div></div><div class="row"><div class="col-sm-12"><table id="example2" class="table table-bordered table-hover dataTable" role="grid" aria-describedby="example2_info">
                             <thead>
                             <tr role="row">
                                 <th>SL</th>
                                 <th>Name</th>
                                 <th>E-mail</th>
                                 <th>Mobile Number</th>
                                 <th>Status</th>
                                 <th>Action</th>
                             </tr>
                             </thead>
                             <tbody>
                             @foreach($admins as $admin)
                             <tr role="row">
                                 <td class="">{{$loop->iteration}}</td>
                                 <td class="">{{$admin->name}}</td>
                                 <td class="">{{$admin->email}}</td>
                                 <td>{{$admin->mobile_number}}</td>
                                 <td>active</td>
                                 <td>
                                     <div class="btn-group">
                                         <button type="button" class="btn btn-default btn-xs dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                             <i class="fa fa-gear tiny-icon"></i><span class="caret"></span>
                                         </button>
                                         <ul class="dropdown-menu dropdown-menu-right" role="menu">
                                             <li>
                                                 <a href="#"><i class="fa fa-trash tiny-icon"></i>Edit</a>
                                                 <a href="#"><i class="fa fa-trash tiny-icon"></i>Suspend</a>
                                                 <a href="#"><i class="fa fa-trash tiny-icon"></i>Delete</a>
                                             </li>


                                         </ul>
                                     </div>
                                 </td>
                             </tr>
                             @endforeach
                             </tbody>
                             <tfoot>
                             <tr>
                                 <th>SL</th>
                                 <th>Name</th>
                                 <th>E-mail</th>
                                 <th>Mobile Number</th>
                                 <th>Status</th>
                                 <th>Action</th>
                             </tfoot>
                         </table>
                     </div>
                 </div>
                 <div class="row">
                     <div class="col-sm-5">
                         {{$admins->links()}}
                     </div>
                 </div>
             </div>
         </div>
         <!-- /.box-body -->
     </div>
     <!-- /.box -->


     <!-- /.box -->
 </div>


@endsection