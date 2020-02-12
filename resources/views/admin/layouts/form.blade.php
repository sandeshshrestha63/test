<form class="forms-sample" method="POST" action="{{route('customers.store')}}">
                    @csrf
                    <div class="form-group">
                      
                      <label for="exampleInputFirstname1">Full Name</label>
                      <br>
                      <input type="text" class="form-control col-md-3 d-inline" id="exampleInputFirstname1" name="first_name" placeholder="First Name">
                   
                      <input type="text" class="form-control col-md-3 d-inline" id="exampleInputMiddlename1" name="middle_name" placeholder="Middle Name">
                    
                      <input type="lastname" class="form-control col-md-3 d-inline" id="exampleInputLastname" name="last_name" placeholder="Last Name">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputAddress1">Address</label>
                      <input type="text" class="form-control" id="exampleInputAddress1" name="address" placeholder="Address">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputcontact1">Amount</label>
                      <input type="text" class="form-control" id="exampleInputcontact1" name="amount" placeholder="Amount">
                    </div>
                    
                    <button type="submit" class="btn btn-primary mr-2">Submit</button>
                    <button class="btn btn-light">Cancel</button>
                  </form>