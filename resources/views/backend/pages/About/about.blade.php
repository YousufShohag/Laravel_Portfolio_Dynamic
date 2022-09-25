@extends('backend/mastering/master');
@section('content')
   


    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="alert alert-danger" role="alert">
                    This is About Section Here. Please Input Right Information
                  </div>
            </div>
        </div>
        <div class="row">
           
                <div class="col-md-5">
                    <div class="msg">

                    </div>
            <form id="about_form" action="{{route('store')}}" method="POST" enctype="multipart/form-data">
                 @csrf
                        <input type="text" name="title" placeholder="Enter Your Name" class="form-control title mt-2">
                        <textarea name="about_long_description" class="form-control about_long_description mt-2" id="" cols="30" rows="5" placeholder="About Long Description"></textarea>
                        <textarea name="about_short_description" class="form-control about_short_description mt-2" id="" cols="30" rows="3" placeholder="About Short Description"></textarea>
                        <input type="file" name="image" class="image form-control mt-2">
                        <input type="date" name="birthday" class="birthday form-control mt-2">
                        <input type="text" name="website" class="website form-control mt-2" placeholder="Enter Your Website">
                        
                </div>
                <div class="col-md-5 offset-1">
                        
                        <input type="text" name="phone" class="phone form-control mt-2" placeholder="Enter Your Phone Number">
                        <input type="number" name="age" class="age form-control mt-2" placeholder="Enter Your Age">
                        <input type="text" name="city" class="city form-control mt-2" placeholder="Enter Your City">
                        <input type="text" name="degree" class="degree form-control mt-2" placeholder="Enter Your degree">
                        <input type="text" name="freelance" class="freelance form-control mt-2" placeholder="Enter Your Availity">
                        <input type="email" name="email" class="email form-control mt-2" placeholder="Enter Your Valid Email">
                        <textarea cols="30" rows="5" name="about_footer_desscription" class="about_footer_desscription form-control mt-2" placeholder="Footer Description"></textarea>
                </div>
                <button class="about btn btn-primary form-control mt-2">Save</button>
            </form>
        </div>
    </div>



    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Title</th>
                            <th>Image</th>
                            <th>Birthday</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody class="allData">
                        
                    </tbody>
                </table>
            </div>
        </div>
    </div>




  
  <!-- Modal for delete -->
  <div class="modal fade" id="delete" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Confirmation Message?</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
         Are you sure you want delete this item?
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
          <button  class="delete btn btn-primary">Yes</button>
        </div>
      </div>
    </div>
  </div>


  
  
  <!-- Modal for update-->
  <div class="modal fade" id="update" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Confirmation Message</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <form id="update_about_form" action="" method="" enctype="multipart/form-data">
                @csrf
                       <input type="text" name="title" placeholder="Enter Your Name" id="title" class="form-control  mt-2">
                       <textarea name="about_long_description" id="about_long_description" class="form-control  mt-2" id="" cols="30" rows="5" placeholder="About Long Description"></textarea>
                       <textarea name="about_short_description" id="about_short_description" class="form-control  mt-2" id="" cols="30" rows="3" placeholder="About Short Description"></textarea>
                       <div class="mt-2" id="img">

                       </div>
                       <input type="file" name="image" id="" class="image form-control mt-2">
                       <input type="date" name="birthday" id="birthday" class=" form-control mt-2">
                       <input type="text" name="website" id="website" class=" form-control mt-2" placeholder="Enter Your Website">
                       <input type="text" name="phone" id="phone" class=" form-control mt-2" placeholder="Enter Your Phone Number">
                       <input type="number" name="age" id="age" class=" form-control mt-2" placeholder="Enter Your Age">
                       <input type="text" name="city"  id="city" class=" form-control mt-2" placeholder="Enter Your City">
                       <input type="text" name="degree" id="degree" class=" form-control mt-2" placeholder="Enter Your degree">
                       <input type="text" name="freelance" id="freelance" class=" form-control mt-2" placeholder="Enter Your Availity">
                       <input type="email" name="email" id="email" class=" form-control mt-2" placeholder="Enter Your Valid Email">
                       <textarea cols="30" rows="5" name="about_footer_desscription" id="about_footer_desscription" class=" form-control mt-2" placeholder="Footer Description"></textarea>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button  class="update btn btn-primary">Update</button>
        </div>
    </form>
      </div>
    </div>
  </div>





@endsection

                    