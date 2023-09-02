@extends('backend.layouts.app1')


@section('content')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Home Page</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Home</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">

        @include('_message')
        <!-- Small boxes (Stat box) -->
        <div class="row">
          
          <div class="col-md-12">
            <div class="card card-info">
              <div class="card-header">
                 <h3 class="card-title">Home page </h3>
                     
              </div>

                 <form class="form-horizontal" method="post" action="{{url('admin/home/post')}}" enctype="multipart/form-data">
                   
                  {{ csrf_field()}}
                  <div class="card-body">

                     <div class="form-group row">
                       <label class="col-sm-2 col-form-lable">
                        Profile Image
                       </label>
                       <div class="col-sm-10">
                        <input type="file" name="profile_image" class="form-control">
                          @if (!empty($insertRecord->profile_image))
                          <img src="{{ asset($insertRecord->profile_image) }}" alt="Profile Image" style="max-width: 200px;">
                          @else
                          <p>No profile image available</p>
                          @endif
                      

                       </div>
                     </div>



                     <div class="form-group row">
                      <label class="col-sm-2 col-form-lable">
                       Your name
                      </label>
                      <div class="col-sm-10">
                       <input type="text" name="your_name" class="form-control" placeholder="Enter your name">
                      </div>
                    </div>

                    <div class="form-group row">
                      <label class="col-sm-2 col-form-lable">
                       Who Am I
                      </label>
                      <div class="col-sm-10">
                       <textarea name="who_am_i" class="form-control" placeholder="Enter your infomations"></textarea>
                      </div>
                    </div>

                    <div class="form-group row">
                      <label class="col-sm-2 col-form-lable">
                       Parsonal Information
                      </label>
                      <div class="col-sm-10">
                      <textarea name="personal_info" class="form-control" placeholder="Enter your infomations"></textarea>
                      </div>
                    </div>

                    <div class="form-group row">
                      <label class="col-sm-2 col-form-lable">
                       My Expertise
                      </label>
                      <div class="col-sm-10">
                        <textarea name="my_expertise" class="form-control" placeholder="Enter your expertise infomations"></textarea>
                      </div>
                    </div>

                    <div class="form-group row">
                      <label class="col-sm-2 col-form-lable">
                       Description
                      </label>
                      <div class="col-sm-10">
                        <textarea name="description" class="form-control" placeholder="Enter your description infomations"></textarea>
                      </div>
                    </div>

                   </div>

                   <div class="card-footer">
                     <button type="submit" class="btn btn-info">Add</button>
                     <a href="" class="btn btn-default float-right">Cancel</a>
                   </div>
                </form>

           
            </div> 
          </div>
          <!-- ./col -->
        </div>
        <!-- /.row -->
        <!-- Main row -->
       
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
 




@endsection

