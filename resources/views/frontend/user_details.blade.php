@extends('frontend.layouts.app')
@section('title', 'User-Details')

@section('pagecss')
<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
@endsection
<!-- Name Section -->
@section('content')
   <main id="inner-body-content" class="padd-t-142 padd-b-60">

  <div class="row">
    <div class="col-md-8 col-md-offset-1">
      <form class="form-horizontal" role="form" method="post" action="{{url('user_details/store')}}">
        @csrf
        <fieldset>
          <!-- Form Name -->
          <legend>Personal Information Details</legend>

          <!-- Text input-->
          <div class="form-group">
            <div class="col-sm-4">
              <input type="text" name="fistName" placeholder="First Name" class="form-control" required>
            </div>
           <!-- <div class="col-sm-2">
              <input type="text" name="middleName" placeholder="Middle Name" class="form-control">
            </div>
            <div class="col-sm-4">
              <input type="text" name="lastName" placeholder="Last Name" class="form-control">
            </div>-->
          </div>

          <!-- Text input-->
          <div class="form-group">
            <div class="col-sm-4">
              <input type="date" placeholder="Date Of Birth" class="form-control">
            </div>
          </div>

          <!-- Text input-->
          <div class="form-group">
            <div class="col-sm-4">
              <select type="gender" placeholder="Gender" class="form-control">
                <option value="female">Female</option>
                <option value="male">Male</option>
              </select>
            </div>
          </div>
          <div class="form-group">
            <div class="col-sm-4">
              <input type="checkbox" id="hasSibling" name="hasSibling" value="yes" {{ old('hasSibling') ? 'checked' : '' }}> Has Sibling?
            </div>
          </div>

<!-- Address Section -->
     
<!-- Parent/Guadian Contact Section -->
          <!-- Form Name -->
         <!-- <legend>Parent/Guadian Information</legend>
          <div class="form-group">
            <div class="col-sm-4">
              <input type="text" name="pFistName" placeholder="First Name" class="form-control">
            </div>
            <div class="col-sm-2">
              <input type="text" name="pMiddleName" placeholder="Middle Name" class="form-control">
            </div>
            <div class="col-sm-4">
              <input type="text" name="pLastName" placeholder="Last Name" class="form-control">
            </div>
          </div>
          <div class="form-group">
            <div class="col-sm-2">
              <select type="pContactMethod" placeholder="Contact Method" class="form-control">
                <option>Contact Method</option>
                <option value="phone">Phone</option>
                <option value="text">Text</option>
                <option value="email">Email</option>
              </select>
            </div>  
            <div class="col-sm-4">
              <input type="pPhoneNbr" placeholder="Phone Number" class="form-control">
            </div>
            <div class="col-sm-4">
              <input type="email" name="pEmail" placeholder="Email" class="form-control">
            </div>
           </div> -->

            <legend>Registration for classes</legend>
            <div class="col-md-6">
             <div><input id="female" type="radio" name="gender" value="Female" {{ (old('sex') == 'female') ? 'checked' : '' }} >Female</div>
             <div><input id="male" type="radio" name="gender" value="Male" {{ (old('sex') == 'male') ? 'checked' : '' }} >Male</div>
             <div><input id="other" type="radio" name="gender" value="Others" {{ (old('sex') == 'other') ? 'checked' : '' }} >Other</div>
             </div>

             <div class="col-md-6">
            <label for="sports" class="col-md-4 control-label">Sports</label>
             <input type="checkbox" id="Football" name="check" value="Football"  /> Football
             <input type="checkbox" id="Cricket" name="check" value="Cricket"  /> Cricket
             <input type="checkbox" id="Tennis" name="check" value="Tennis" /> Tennis
             </div>


            <div class="col-md-6">
            <label for="sports" class="col-md-4 control-label">Select Hobbies</label>
             <input type="checkbox" id="Reading" name="hobbies[]" value="Reading"  /> Reading
             <input type="checkbox" id="Gym" name="hobbies[]" value="Gym"  /> Gym
             <input type="checkbox" id="Gaming" name="hobbies[]" value="Gaming" /> Gaming
           </div>

<!-- Command -->
          <div class="form-group">
            <div class="col-sm-5 col-sm-offset-1">
              <div class="pull-right">
                <button type="submit" class="btn btn-default">Cancel</button>
                <button type="submit" class="btn btn-primary">Save</button>
              </div>
            </div>
          </div>
        </fieldset>
      </form>
    </div><!-- /.col-lg-12 -->
</div><!-- /.row -->

</main>
@endsection
@section('pagejs')
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
$("input:checkbox[name='check']").on('click', function() {
  // in the handler, 'this' refers to the box clicked on
  var $box = $(this);
  if ($box.is(":checked")) {
    // the name of the box is retrieved using the .attr() method
    // as it is assumed and expected to be immutable
    var group = "input:checkbox[name='" + $box.attr("name") + "']";
    // the checked state of the group/box on the other hand will change
    // and the current value is retrieved using .prop() method
    $(group).prop("checked", false);
    $box.prop("checked", true);
  } else {
    $box.prop("checked", false);
  }
});
});
</script>



@endsection
