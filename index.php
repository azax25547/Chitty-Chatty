<?php include_once 'header.php' ?>


      <div class="container-fluid">
          <div class="row">
              <div class="col-lg-6 " id="login">
              </div>
              

              <div class="col-lg-6 w3-animate-left" id="join">

              <p class="lead text-left">
                          <span>Chitty Chatty</span> is an international chatroom where you can chat as you like. No limits on any user. Just sign up, registration and login to use <span>Chitty Chatty</span>. Random chatting. Free gaming chat rooms. Random chatting with strangers online as guest in public and private chat rooms, anonymous and mobile friendly
                      <br>
                      <br>
                      If You are existing member, Proceed Here....
                      <br>
                      Haven't joined yet!!!! Sign Up <span>ASAP....</span> or Log In
                  </p>
                  <hr>
          <div id="buttons">                          
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#modelId">
              Log In
            </button>
            
            <!-- Modal -->
            <div class="modal fade" id="modelId" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                  <form action="includes/validation.php" method="POST">
                                <div class="form-groups">
                                        <span class="ip-icon"><i class="fa fa-user"></i></span>
                                  <input type="text"
                                    class="form-control" name="name"  placeholder="Username /Email">
                                  
                                  <span class="form-text text-danger"></span>
                                </div>
                            

                            <div class="form-groups">
                                    <span class="ip-icon" ><i class="fa fa-key"></i></span>
                                    <input type="password"
                                      class="form-control" name="pass" placeholder="Password">
                                    
                                    <span class="form-text text-danger"></span>
                                  </div>
                                  <span><a id="forgot" href="forgot.php">Forgot Password?</a></span>
                                  <center>
                                  <button name="submit" class="btn btn-primary" type="submit">Log In</button>
                                </center>
                                </form>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    
                  </div>
                </div>
              </div>
            </div>

                            


                  <!-- Button trigger modal -->
                  <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#modelId1">
                    Join Us
                  </button>
                  
                  <!-- Modal -->
                  <div class="modal fade" id="modelId1" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                
                        </div>
                        <div class="modal-body">
                        
                      <p>Create a new account <br>
                     It's free and always will be.</p>
                      <form action="includes/registration.php" method="POST">
                      <div class="form-group">
                        <input type="text" class="form-control" name="name"  placeholder="Full Name" >
                        </div>
                       
                      
                        <div class="form-group">
                        <input type="text" name="email" placeholder="Email Address" class="form-control">
                     
                      </div>
                      <div class="form-group">
                        <input type="text" name="user" placeholder="Pick an Username" class="form-control">
                     
                      </div>
                     
                      <div class="form-group">
                        <input type="password" name="pass" placeholder="New Password" class="form-control">
                      </div>

                      <br>
                      <span class="small">By clicking Sign Up, you agree to our <a href="#">Terms</a>,<a href="#"> Data Policy</a> and <a href="#">Cookie Policy</a> . You may receive SMS notifications from us and can opt out at any time</span>
                      <br>
                      <br>
                      <center>
                      <button type="submit" name="submit" class="btn btn-success">Sign UP</button> 
                        </center>
                  </form>
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                       
                        </div>
                      </div>
                    </div>
                  </div>

</div>
                     
              </div>
          </div>
      </div>

    



<?php include_once 'footer.php' ?>