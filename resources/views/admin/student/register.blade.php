<!DOCTYPE html>
<html>
<head>
	<title>register</title>
</head>
<body>
	<form class="forms-sample" method="POST" action="{{route('students.store')}}">
                    @csrf
                    <div class="form-group">
                      
                      <label for="exampleInputFirstname1">Full Name</label>
                      <br>
                      <input type="text" class="form-control col-md-3 d-inline" id="exampleInputFirstname1" name="first_name" placeholder="First Name" >
                   
                      <input type="text" class="form-control col-md-3 d-inline" id="exampleInputMiddlename1" name="middle_name" placeholder="Middle Name" >
                    
                      <input type="lastname" class="form-control col-md-3 d-inline" id="exampleInputLastname" name="last_name" placeholder="Last Name" >
                    </div>
                    <div class="form-group">
                      <label for="exampleInputAddress1">Address</label>
                      <input type="text" class="form-control" id="exampleInputAddress1" name="address" placeholder="Address" >
                    </div>
                    <div class="form-group">
                      <label for="exampleInputAddress1">city</label>
                      <input type="text" class="form-control" id="exampleInputAddress1" name="city" placeholder="city" >
                    </div>
                    <div class="form-group">
                      <label for="exampleInputAddress1">email</label>
                      <input type="text" class="form-control" id="exampleInputAddress1" name="email" placeholder="Address" >
                    </div>
                    <div class="form-group">
                      <label for="exampleInputcontact1">Phone</label>
                      <input type="text" class="form-control" id="exampleInputcontact1" name="phone" placeholder="phone" >
                    </div>
                    <div class="form-group">
                      <label for="exampleInputAddress1">Parent's Name</label>
                      <input type="text" class="form-control" id="exampleInputAddress1" name="parents_name" placeholder="Parents Name" >
                    </div>
                    
                    <button type="submit" class="btn btn-primary mr-2">Submit</button>
                    <button class="btn btn-light">Cancel</button>
                                  </form>
</body>
</html>