 @extends('layouts.adminapp')
 @section('content')
     <div class="row">
         <div class="col-md-6 col-sm-6 col-xs-12">
             <div class="panel panel-info">
                 <div class="panel-heading">
                     Create Class
                 </div>
                 <div class="panel-body">
                     <form role="form">
                         <div class="form-group">
                             <label>Class Name</label>
                             <input class="form-control" type="text">
                             <p class="help-block">Help text here.</p>
                         </div>
                         <div class="form-group">
                             <label>Total Seats</label>
                             <input class="form-control" type="number">
                             <p class="help-block">Help text here.</p>
                         </div>
                         <div class="form-group">
                             <label>Age of Kids</label>
                             <div class="d-flex">
                                 <input class="form-control" type="number" placeholder="Min">
                                 <input class="form-control" type="number" placeholder="Max">
                             </div>
                             <p class="help-block">Help text here.</p>
                         </div>
                         <div class="form-group">
                             <label>Class Details</label>
                             <textarea class="form-control" rows="3"></textarea>
                         </div>


                         <button type="submit" class="btn btn-info">Send Message </button>

                     </form>
                 </div>
             </div>
         </div>
         <div class="col-md-6 col-sm-6 col-xs-12">
             <div class="panel panel-danger">
                 <div class="panel-heading">
                     SINGUP FORM
                 </div>
                 <div class="panel-body">
                     <form role="form">

                         <div class="form-group">
                             <label>Enter Email</label>
                             <input class="form-control" type="text">
                             <p class="help-block">Help text here.</p>
                         </div>
                         <div class="form-group">
                             <label>Enter Password</label>
                             <input class="form-control" type="password">
                             <p class="help-block">Help text here.</p>
                         </div>
                         <div class="form-group">
                             <label>Re Type Password </label>
                             <input class="form-control" type="password">
                             <p class="help-block">Help text here.</p>
                         </div>

                         <button type="submit" class="btn btn-danger">Register Now </button>

                     </form>
                 </div>
             </div>
         </div>
     </div>
 @endsection
