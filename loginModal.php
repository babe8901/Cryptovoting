<div id="loginModal" class="modal fade" role="dialog">
        <div class="modal-dialog modal-lg" role="content">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Login</h4>
                    <button type="button" class="close loginCancel">
                        &times;
                    </button>
                </div>
                <div class="modal-body">
                    <form action="./login.php" method="POST">
                        <div class="form-row">
                            <div class="form-group col-sm-4">
                                    <label class="sr-only" for="loginEmail">Email address</label>
                                    <input type="email" name="loginEmail" class="form-control form-control-sm mr-1" id="loginEmail" placeholder="Enter email">
                            </div>
                            <div class="form-group col-sm-4">
                                <label class="sr-only" for="loginPassword">Password</label>
                                <input type="password" name="loginPassword" class="form-control form-control-sm mr-1" id="loginPassword" placeholder="Password">
                            </div>
                            <div class="col-sm-auto">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox">
                                    <label class="form-check-label"> Remember me
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <button type="button" class="btn btn-secondary btn-sm ml-auto loginCancel">Cancel</button>
                            <button type="submit" class="btn btn-primary btn-sm ml-1">Sign in</button>        
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>