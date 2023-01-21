<div id="official-modal">
    <div class="modal fade " id="editOfficial" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Edit Officials info</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="edit-officail-form" method="POST">
                        <div classadd="text-center ">
                            <input type="hidden" name="path" id="edit-photo-path">
                            <input type="hidden" class=" form-control" id="edit-official-id" name="id">
                            <img class="img-fluid" id="edit-official-photo" style="border-radius: 100%; width:5em; height:5em" src="../../assets/ui-user-profile.svg" alt="">
                            <input type="file" accept="image/*" class="text-center form-control" id="edit-official-image" name="photo" style="width:auto ;height:2em">
                        </div>
                        <div class="mb-3">
                            <label for="message-text" class="col-form-label">FullName:</label>
                            <input type="text" class="form-control" id="edit-official-name" name="name">
                            <!--  -->
                            <label for="message-text" class="col-form-label">Position:</label>
                            <input type="text" class="form-control" id="edit-official-position" name="position">
                            <!--  -->
                            <label for="message-text" class="col-form-label">Purok:</label>
                            <input type="text" class="form-control" id="edit-official-purok" name="purok">
                            <!--  -->
                            <label for="message-text" class="col-form-label">Age:</label>
                            <input type="text" class="form-control" id="edit-official-age" name="age">
                            <!--  -->
                            <label for="message-text" class="col-form-label">Gender:</label>
                            <input type="text" class="form-control" id="edit-official-gender" name="gender">
                            <!--  -->
                            <label for="message-text" class="col-form-label">Civil Status:</label>
                            <input type="text" class="form-control" id="edit-official-civilstatus" name="civilstatus">
                            <!--  -->
                            <label for="message-text" class="col-form-label">Birth Date:</label>
                            <input type="date" class=" w-auto form-control" id="edit-official-birthdate" name="birthdate">
                            <!--  -->
                            <label for="message-text" class="col-form-label">Contact: email/number</label>
                            <input type="text" class="form-control" id="edit-official-contact" name="contact">
                            <!--  -->
                            <label for="message-text" class="col-form-label">Term:</label>
                            <input type="text" class="form-control" id="edit-official-term" name="term">


                        </div>
                        <button type="button" class="btn btn-secondary " data-bs-dismiss="modal">Close</button>
                        <input type="submit" id="edit-official-btn" class="btn  btn-outline-primary" value="Save" data-bs-toggle="modal" data-bs-target="#loadingmodal">

                        <!-- loading -->

                    </form>

                </div>
                <div class="modal-footer">
                    <!-- <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Send message</button> -->
                </div>
            </div>
        </div>
    </div>


</div>



<!-- add official Modal -->



<div id="official-modal">
    <div class="modal fade" id="addOfficial" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Add Officials</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="add-officail-form" method="POST">
                        <div class="text-center ">
                                    
                            <img class="img-fluid" id="add-official-photo" style="border-radius: 100%; width:5em; height:5em" src="./../assets/ui-user-profile.svg" alt="official photo">
                            <input type="file" accept="image/*" class="text-center form-control" id="add-official-image" name="photo" style="width:auto ;height:2em">
                        </div>
                        <div class="mb-3">
                            <label for="message-text" class="col-form-label">FullName:</label>
                            <input type="text" class="form-control" id="add-official-name" name="name">
                            <!--  -->
                            <label for="message-text" class="col-form-label">Position:</label>
                            <input type="text" class="form-control" id="add-official-position" name="position">
                            <!--  -->
                            <label for="message-text" class="col-form-label">Purok:</label>
                            <input type="text" class="form-control" id="add-official-purok" name="purok">
                            <!--  -->
                            <label for="message-text" class="col-form-label">Age:</label>
                            <input type="text" class="form-control" id="add-official-age" name="age">
                            <!--  -->
                            <label for="message-text" class="col-form-label">Gender:</label>
                            <input type="text" class="form-control" id="add-official-gender" name="gender">
                            <!--  -->
                            <label for="message-text" class="col-form-label">Civil Status:</label>
                            <input type="text" class="form-control" id="add-official-civilstatus" name="civilstatus">
                            <!--  -->
                            <label for="message-text" class="col-form-label">Birth Date:</label>
                            <input type="date" class=" w-auto form-control" id="add-official-birthdate" name="birthdate">
                            <!--  -->
                            <label for="message-text" class="col-form-label">Contact: email/number</label>
                            <input type="text" class="form-control" id="add-official-contact" name="contact">
                            <!--  -->
                            <label for="message-text" class="col-form-label">Term:</label>
                            <input type="text" class="form-control" id="add-official-term" name="term">


                        </div>
                        <button type="button" class="btn btn-secondary " data-bs-dismiss="modal">Close</button>

                        <input type="submit" id="add-official-btn" class="btn  btn-outline-primary" value="Save" data-bs-toggle="modal" data-bs-target="#loadingmodal">
                    </form>

                </div>
                <div class="modal-footer">
                    <!-- <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Send message</button> -->
                </div>
            </div>
        </div>
    </div>


</div>


<!-- loading modal -->