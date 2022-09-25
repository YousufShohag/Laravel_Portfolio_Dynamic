@extends('backend/mastering/master');
@section('content')


<div class="container">
    <div class="row">
        <div class="col-md-6 offset-md-3">
            <div class="msg">
                <button class="btn">Save</button>
            </div>
            <form id="form" action="{{route('storeHome')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="">Full Name</label>
                    <input type="text" name="name" class="name form-control" placeholder="Enter Full Name">
                </div>
                <div class="form-group mt-2">
                    <label for="">Description</label>
                    <textarea name="description" id="" cols="30" rows="10" class="form-control" placeholder="Enter Full Description"></textarea>
                </div>
                <div class="form-group mt-2">
                    <label for="">Image</label>
                    <input type="file" class="image file form-control" name="image">
                </div>
                <button class="btn btn-primary form-control mt-2">Submit Your Data</button>
            </form>
        </div>
    </div>
</div>


<div class="container">
    <div class="row">
        <div class="col-md-12">
            <table class="table mt-5">
                <thead>
                    <tr>
                        <th>Full Name</th>
                        <th>Description</th>
                        <th>Image</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody class="allData">
                   
                </tbody>
            </table>
        </div>
    </div>
</div>



  
  <!-- Modal -->
  <div class="modal fade" id="update" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Update Confirmation?</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <form id="updateform" action="" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="">Full Name</label>
                    <input type="text" name="name" class="name form-control" placeholder="Enter Full Name">
                </div>
                <div class="form-group mt-2">
                    <label for="">Description</label>
                    <textarea name="description" id="" cols="30" rows="10" class="description form-control" placeholder="Enter Full Description"></textarea>
                </div>
                <div id="img" class="mt-2">

                </div>
                <div class="form-group mt-2">
                    <label for="">Image</label>
                    <input type="file" class="image file form-control" name="image">
                </div>
               
            
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button id="update" class="update btn btn-primary">Submit Your Data</button>
        </div>
    </form>
      </div>
    </div>
  </div>




@endsection