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
                                <input type="radio" class="radio-inline" id="tcs" name="fav-sub" value="TCS">
                                <label for="tcs">TCS</label>
                                <input type="radio" class="radio-inline" id="ssic" name="fav-sub" value="SSIC">
                                <label for="ssic">SSIC</label>
                                <input type="radio" class="radio-inline" id="mp" name="fav-sub" value="MP">
                                <label for="mp">MP</label>
                                <input type="radio" class="radio-inline" id="iis" name="fav-sub" value="IIS">
                                <label for="ssic">IIS</label> 
                                <input type="radio" class="radio-inline" id="adbms" name="fav-sub" value="ADBMS">
                                <label for="adbms">ADBMS</label>
                                <input type="radio" class="radio-inline" id="pbl" name="fav-sub" value="PBL">
                                <label for="pbl">PBL</label>
                            </div>
                        </div>

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