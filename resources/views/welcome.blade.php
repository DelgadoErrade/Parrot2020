@extends('admin.login')

@section('content')
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
          <div class="row">
            <!-- left column -->
            <div class="col-md-4 offset-4 mt-5 ">
              <!-- jquery validation -->
              <div class="card card-primary">
                <div class="card-header">
                    <h2>Parrot System 2004</h2>
                  <h3 class="card-title">Ingrese sus datos de acceso al sistema</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form role="form" id="quickForm">
                  <div class="card-body">
                    <div class="form-group">
                      <label for="exampleInputEmail1">Email address</label>
                      <input type="text" name="login" class="form-control" id="login" placeholder="Login">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">Password</label>
                      <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                    </div>
                                     <!-- /.card-body -->
                  <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </div>
                </form>

              </div>
              <!-- /.card -->
              </div>
          </div>
          <!-- /.row -->
        </div><!-- /.container-fluid -->
        <br/>
        <br/>
        <br/>
        <br/>
      </section>
      <!-- /.content -->

@endsection
