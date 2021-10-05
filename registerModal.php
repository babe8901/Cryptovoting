<div id="registerModal" class="modal fade" role="dialog">
        <div class="modal-dialog modal-lg" role="content">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Register</h4>
                    <button type="button" class="close registerCancel">
                        &times;
                    </button>
                </div>
                <div class="modal-body">
                    <form method="POST" action="register.php">
    
                        <div class="form-row">
                            <div class="form-group col-sm-6">
                                <!-- <i class="fas fa-user fa-lg me-3 fa-fw"></i> -->
                                <label class="sr-only" for="registerName">Your Name</label>
                                <input type="text" id="registerName" name="registerName" class="form-control" placeholder="Your Name"/>
                            </div>
            
                            <div class="form-group col-sm-6">
                                <!-- <i class="fas fa-envelope fa-lg me-3 fa-fw"></i> -->
                                <label class="sr-only" for="registerEmail">Your Email</label>
                                <input type="email" id="registerEmail" name="registerEmail" class="form-control" placeholder="Your Email"/>
                            </div>
                        </div>
        

                        <div class="form-row">
                            <div class="form-group col-sm-6">
                                <!-- <i class="fas fa-lock fa-lg me-3 fa-fw"></i> -->
                                <label class="sr-only" for="registerPassword">Password</label>
                                <input type="password" id="registerPassword" name="registerPassword" class="form-control" placeholder="Password"/>
                            </div>
            
                            <div class="form-group col-sm-6">
                                <!-- <i class="fas fa-key fa-lg me-3 fa-fw"></i> -->
                                <label class="sr-only" for="registerRepassword">Repeat your password</label>
                                <input type="password" id="registerRepassword" name="registerRepassword" class="form-control" placeholder="Repeat your password"/>
                            </div>
                        </div>
                        
                        <div class="form-row align-items-center">
                            <div class="col-sm-auto">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox">
                                    <label class="form-check-label"> 
                                        I agree all statements in <a href="#!">Terms of service</a>
                                    </label>
                                </div>
                            </div>
                        </div>

                        <br>

                        <div class="form-row">
                            <button type="button" class="btn btn-secondary btn-sm ml-auto registerCancel">Cancel</button>
                            <button type="submit" class="btn btn-primary btn-sm ml-1">Register</button>
                        </div>
    
                    </form>
                </div>
            </div>
        </div>
    </div>