<div id="voteModal" class="modal fade" role="dialog">
        <div class="modal-dialog modal-lg" role="content">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Cast a Vote</h4>
                    <button type="button" class="close voteCancel">
                        &times;
                    </button>
                </div>
                <div class="modal-body">
                    <form action="./vote.php" method="POST">
                        <div class="form-group row">
                            <label for="fav-sub" class="col-md-2 col-form-label">Which is your favourite subject ?</label>
                            <div class="col-md-10 align-self-center">
                                <input type="radio" class="radio-inline" id="tcs" name="fav-sub" value="1">
                                <label for="tcs">TCS</label>
                                <input type="radio" class="radio-inline" id="ssic" name="fav-sub" value="2">
                                <label for="ssic">SSIC</label>
                                <input type="radio" class="radio-inline" id="mp" name="fav-sub" value="3">
                                <label for="mp">MP</label>
                                <input type="radio" class="radio-inline" id="iis" name="fav-sub" value="4">
                                <label for="ssic">IIS</label> 
                                <input type="radio" class="radio-inline" id="adbms" name="fav-sub" value="5">
                                <label for="adbms">ADBMS</label>
                                <input type="radio" class="radio-inline" id="pbl" name="fav-sub" value="6">
                                <label for="pbl">PBL</label>
                            </div>
                        </div>

                        <!-- <div class="form-group row">
                            <label for="Section" class="col-md-2 col-form-label">Section</label>
                            <div class="col-md-10 align-self-center btn-group btn-group-toggle" data-toggle="buttons">
                                <label class="col col-3 btn btn-success active">
                                <input type="radio" name="options" id="option1" autocomplete="off" checked> Non-Smoking
                                </label>
                                <label class="col col-2 btn btn-danger">
                                <input type="radio" name="options" id="option2" autocomplete="off"> Smoking
                                </label>
                            </div>
                        </div> -->

                        <!-- <div class="form-group row">
                            <label for="DateAndTime" class="col-md-2 col-form-label">Date And Time</label>
                            <div class="col-md-4">
                                <input type="date" class="form-control" placeholder="Date" id="date">
                            </div>
                            <div class="col-md-4">
                                <input type="time" class="form-control" placeholder="Time" id="time">
                            </div>
                        </div> -->
                        <div class="form-group row">
                            <div class="offset-md-2 col-md-10">
                                <button type="button" class="btn btn-secondary btn-sm ml-auto voteCancel" id="reCan">Cancel</button>
                                <button type="submit" class="btn btn-primary btn-sm">
                                    Vote
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>