<div class="officails-con">
    <h4>Barangay Officails</h4>
    <div class="add-con float-end"> <button class="add-official-btn btn-primary rounded" data-bs-toggle="modal" data-bs-target="#addOfficial" onclick="loadingState('show', 'play', 'hide', '')">
            Add New <span> <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="1em" height="1em" preserveAspectRatio="xMidYMid meet" viewBox="0 0 32 32" style="-ms-transform: rotate(360deg); -webkit-transform: rotate(360deg); transform: rotate(360deg);">
                    <path fill="currentColor" d="M16 4c6.6 0 12 5.4 12 12s-5.4 12-12 12S4 22.6 4 16S9.4 4 16 4m0-2C8.3 2 2 8.3 2 16s6.3 14 14 14s14-6.3 14-14S23.7 2 16 2z" />
                    <path fill="currentColor" d="M24 15h-7V8h-2v7H8v2h7v7h2v-7h7z" />
                </svg>
            </span>
        </button> </div>

    <div class="main-con">

        <div class="option p-1"> 
            <div class="search-div btn btn-outline-info m-1">
                <button>
                    <svg width="17" height="16" fill="none" xmlns="http://www.w3.org/2000/svg" role="img" aria-labelledby="search">
                        <path d="M7.667 12.667A5.333 5.333 0 107.667 2a5.333 5.333 0 000 10.667zM14.334 14l-2.9-2.9" stroke="currentColor" stroke-width="1.333" stroke-linecap="round" stroke-linejoin="round"></path>
                    </svg>
                </button>
                <input class="input officail-search-btn" placeholder="Search" required="" type="text">
                <button class="reset" type="reset">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"></path>
                    </svg>
                </button>
            </div>


        </div>
        <div class="official-info-con d-md-grid d-md-grid ">

            <!-- Officials view -->
            <div class="left-con d-md-block">
            <button type="button" class="btn-close d-sm-none" aria-label="Close"></button>
                <div class="position-con m-1 position-relative d-flex justify-content-between">
                    <div>
                        <h5 id="official-position" class=" m-1"></h5>
                        <input type="hidden" id="official-id">
                    </div>

                    <div class="official-edit-con position-relative ">
                        <button id="officail-edit" class=" m-2 btn btn-sm  btn-outline-success"  data-bs-toggle="modal" data-bs-target="#editOfficial" onclick='loadingState("hide", "pause", "hide", "")'>Edit</button>
                    </div>
                </div>

                <div class="photo-con  text-center m-2">
                    <img id="official-photo" class=" img-fluid text-center" src="" alt="photo">
                </div>
                <div class="name-con text-center">

                    <p id="official-name"></p>
                </div>

                <div class="info-con m-1">
                    <div class="info  d-flex justify-content-between">
                        <div>
                            <h6>Age</h6>
                        </div>
                        <div>
                            <p id="official-age" class=" m-0"></p>
                        </div>

                    </div>
                    <div class="info  d-flex justify-content-between">
                        <div>
                            <h6>Gender</h6>
                        </div>
                        <div>
                            <p id="official-gender" class=" m-0"></p>
                        </div>
                    </div>
                    <div class="info  d-flex justify-content-between">
                        <div>
                            <h6>Civil Status</h6>
                        </div>
                        <div>
                            <p id="official-civilstatus" class=" m-0"></p>
                        </div>
                    </div>
                    <div class="info  d-flex justify-content-between">
                        <div>
                            <h6>Birth Date</h6>
                        </div>
                        <div>
                            <p id="official-birthdate" class=" m-0"></p>
                        </div>
                    </div>
                    <div class="info  d-flex justify-content-between">
                        <div>
                            <h6>Contact</h6>
                        </div>
                        <div>
                            <p id="official-contact" class=" m-0"></p>
                        </div>
                    </div>
                    <div class="info d-flex justify-content-between">
                        <div>
                            <h6>Term</h6>
                        </div>
                        <div>
                            <p id="official-term" class=" m-0"></p>
                        </div>
                    </div>
                    <div class="info  d-flex justify-content-between">
                        <div>
                            <h6>Status</h6>
                        </div>
                        <div>
                            <p id="official-status" class=" m-0"></p>
                        </div>
                    </div>


                </div>
             



            </div>
            <!-- Right View -->

            <div class="right-con">

                <!-- <div class="con">

                    <div class="position-con m-1 position-relative text-center ">
                        <div>
                            <h5 class="official-position" class=" m-1">Captain</h5>
                        </div>
                        <div class="photo-con  text-center m-2">
                            <img class="official-photo " class=" img-fluid text-center" src="../../image/sample1.jpeg" alt="">
                        </div>

                    </div>


                    <div class="name-con text-center">
                        <p class="officail-name">MArkjohn</p>

                    </div>

                    <div class="option-con text-center">
                        <ul class="list-con text-center">
                            <li>Status</li>
                            <li>Age</li>
                            <li>View</li>

                        </ul>
                     

                        <ul class="list-con2">
                            <li>active</li>
                            <li>23</li>
                            <li><button class=" btn btn-sm btn- ">view</button></li>
                        </ul>
                    </div>
                </div> -->


                <!-- sample 2 -->
                <!-- <div class="con">

                    <div class="position-con m-1 position-relative text-center ">
                        <div>
                            <h5 class="official-position" class=" m-1">Captain</h5>
                        </div>
                        <div class="photo-con  text-center m-2">
                            <img class="official-photo " class=" img-fluid text-center" src="../../image/sample1.jpeg" alt="">
                        </div>

                    </div>


                    <div class="name-con text-center">
                        <p class="officail-name">MArkjohn</p>

                    </div>

                    <div class="option-con text-center">
                        <ul class="list-con text-center">
                            <li>Status</li>
                            <li>Age</li>
                            <li>View</li>

                        </ul>
                       
                        <ul class="list-con2">
                            <li>active</li>
                            <li>23</li>
                            <li><button class=" btn btn-sm btn- ">view</button></li>
                        </ul>
                    </div>
                </div>
                
                    <div class="con">

                    <div class="position-con m-1 position-relative text-center ">
                        <div>
                            <h5 class="official-position" class=" m-1">Captain</h5>
                        </div>
                        <div class="photo-con  text-center m-2">
                            <img class="official-photo " class=" img-fluid text-center" src="../../image/sample1.jpeg" alt="">
                        </div>

                    </div>


                    <div class="name-con text-center">
                        <p class="officail-name">MArkjohn</p>

                    </div>

                    <div class="option-con text-center">
                        <ul class="list-con text-center">
                            <li>Status</li>
                            <li>Age</li>
                            <li>View</li>

                        </ul>
                       

                        <ul class="list-con2">
                            <li>active</li>
                            <li>23</li>
                            <li><button class=" btn btn-sm btn- ">view</button></li>
                        </ul>
                    </div>
                </div> -->


            </div>



        </div>




    </div>


</div>