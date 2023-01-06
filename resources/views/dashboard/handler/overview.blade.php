@extends("layout.dash-layout")
@section("content")
    <div class="page-content">
        <div class="row row-cols-1 row-cols-md-2 row-cols-xl-4">
            <div class="col">
                <div class="card radius-10">
                    <div class="card-body">
                        <div class="d-flex align-items-center justify-content-between">
                            <div>
                                <p class="mb-0">Total Users</p>
                                <h5 class="mb-0">85K</h5>
                            </div>
                            <div id="chart1"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card radius-10">
                    <div class="card-body">
                        <div class="d-flex align-items-center justify-content-between">
                            <div>
                                <p class="mb-0">Page Views</p>
                                <h5 class="mb-0">42,892</h5>
                            </div>
                            <div id="chart2"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card radius-10">
                    <div class="card-body">
                        <div class="d-flex align-items-center justify-content-between">
                            <div>
                                <p class="mb-0">Session</p>
                                <h5 class="mb-0">45K</h5>
                            </div>
                            <div id="chart3"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card radius-10">
                    <div class="card-body">
                        <div class="d-flex align-items-center justify-content-between">
                            <div>
                                <p class="mb-0">Bounce Rate</p>
                                <h5 class="mb-0">51.4%</h5>
                            </div>
                            <div id="chart4"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--end row-->
        <div class="row">
            <div class="col-12 col-lg-12 col-xl-12 col-xxl-6 d-flex">
                <div class="card radius-10 w-100">
                    <div class="card-body">
                        <div class="row row-cols-1 row-cols-md-3 row-cols-xl-3 g-3">
                            <div class="col">
                                <div class="card radius-10 mb-0 shadow-none border bg-transparent">
                                    <div class="card-body">
                                        <div class="text-center">
                                            <div class="widgets-icons rounded-circle mx-auto bg-light text-white mb-3"><i class="bx bxl-facebook-square"></i>
                                            </div>
                                            <h4 class="my-1">84K</h4>
                                            <p class="mb-0 text-light-70">Facebook Users</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card radius-10 mb-0 shadow-none border bg-transparent">
                                    <div class="card-body">
                                        <div class="text-center">
                                            <div class="widgets-icons rounded-circle mx-auto bg-light text-white mb-3"><i class="bx bxl-twitter"></i>
                                            </div>
                                            <h4 class="my-1">34M</h4>
                                            <p class="mb-0 text-light-70">Twitter Followers</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card radius-10 mb-0 shadow-none border bg-transparent">
                                    <div class="card-body">
                                        <div class="text-center">
                                            <div class="widgets-icons rounded-circle mx-auto bg-light text-white mb-3"><i class="bx bxl-linkedin-square"></i>
                                            </div>
                                            <h4 class="my-1">56K</h4>
                                            <p class="mb-0 text-light-70">Linkedin Followers</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card radius-10 mb-0 shadow-none border bg-transparent">
                                    <div class="card-body">
                                        <div class="text-center">
                                            <div class="widgets-icons rounded-circle mx-auto bg-light text-white mb-3"><i class="bx bxl-youtube"></i>
                                            </div>
                                            <h4 class="my-1">38M</h4>
                                            <p class="mb-0 text-light-70">YouTube Subscribers</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card radius-10 mb-0 shadow-none border bg-transparent">
                                    <div class="card-body">
                                        <div class="text-center">
                                            <div class="widgets-icons rounded-circle mx-auto bg-light text-white mb-3"><i class="bx bxl-dropbox"></i>
                                            </div>
                                            <h4 class="my-1">28K</h4>
                                            <p class="mb-0 text-light-70">Dropbox Users</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card radius-10 mb-0 shadow-none border bg-transparent">
                                    <div class="card-body">
                                        <div class="text-center">
                                            <div class="widgets-icons rounded-circle mx-auto bg-light text-white mb-3"><i class='bx bxl-dribbble'></i>
                                            </div>
                                            <h4 class="my-1">49K</h4>
                                            <p class="mb-0 text-light-70">Dribbble Users</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--end row-->
        <div class="row row-cols-1 row-cols-md-1">
            <div class="col col-lg-8">
                <div class="container py-2">
                    <!-- timeline item 1 -->
                    <div class="row">
                        <!-- timeline item 1 left dot -->
                        <div class="col-auto text-center flex-column d-none d-sm-flex">
                            <div class="row h-50">
                                <div class="col">&nbsp;</div>
                                <div class="col">&nbsp;</div>
                            </div>
                            <h5 class="m-2">
                            <span class="badge rounded-pill bg-light border">&nbsp;</span>
                        </h5>
                            <div class="row h-50">
                                <div class="col border-end">&nbsp;</div>
                                <div class="col">&nbsp;</div>
                            </div>
                        </div>
                        <!-- timeline item 1 event content -->
                        <div class="col py-2">
                            <div class="card radius-15">
                                <div class="card-body">
                                    <div class="float-end">Mon, Jan 9th 2020 7:00 AM</div>
                                    <h4 class="card-title text-white">Day 1 Orientation</h4>
                                    <p class="card-text">Welcome to the campus, introduction and get started with the tour.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--/row-->
                    <!-- timeline item 2 -->
                    <div class="row">
                        <div class="col-auto text-center flex-column d-none d-sm-flex">
                            <div class="row h-50">
                                <div class="col border-end">&nbsp;</div>
                                <div class="col">&nbsp;</div>
                            </div>
                            <h5 class="m-2">
                            <span class="badge rounded-pill bg-light">&nbsp;</span>
                        </h5>
                            <div class="row h-50">
                                <div class="col border-end">&nbsp;</div>
                                <div class="col">&nbsp;</div>
                            </div>
                        </div>
                        <div class="col py-2">
                            <div class="card border-light shadow radius-15">
                                <div class="card-body">
                                    <div class="float-end">Tue, Jan 10th 2019 8:30 AM</div>
                                    <h4 class="card-title text-white">Day 2 Sessions</h4>
                                    <p class="card-text">Sign-up for the lessons and speakers that coincide with your course syllabus. Meet and greet with instructors.</p>
                                    <button class="btn btn-sm btn-light" type="button" data-bs-target="#t2_details" data-bs-toggle="collapse">Show Details ▼</button>
                                    <div class="collapse border" id="t2_details">
                                        <div class="p-2 text-monospace">
                                            <div>08:30 - 09:00 Breakfast in CR 2A</div>
                                            <div>09:00 - 10:30 Live sessions in CR 3</div>
                                            <div>10:30 - 10:45 Break</div>
                                            <div>10:45 - 12:00 Live sessions in CR 3</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--/row-->
                    <!-- timeline item 3 -->
                    <div class="row">
                        <div class="col-auto text-center flex-column d-none d-sm-flex">
                            <div class="row h-50">
                                <div class="col border-end">&nbsp;</div>
                                <div class="col">&nbsp;</div>
                            </div>
                            <h5 class="m-2">
                            <span class="badge rounded-pill bg-light border">&nbsp;</span>
                        </h5>
                            <div class="row h-50">
                                <div class="col border-end">&nbsp;</div>
                                <div class="col">&nbsp;</div>
                            </div>
                        </div>
                        <div class="col py-2">
                            <div class="card radius-15">
                                <div class="card-body">
                                    <div class="float-end">Wed, Jan 11th 2019 8:30 AM</div>
                                    <h4 class="card-title">Day 3 Sessions</h4>
                                    <p>Shoreditch vegan artisan Helvetica. Tattooed Codeply Echo Park Godard kogi, next level irony ennui twee squid fap selvage. Meggings flannel Brooklyn literally small batch, mumblecore PBR try-hard kale chips. Brooklyn vinyl lumbersexual bicycle rights, viral fap cronut leggings squid chillwave pickled gentrify mustache. 3 wolf moon hashtag church-key Odd Future. Austin messenger bag normcore, Helvetica Williamsburg sartorial tote bag distillery Portland before they sold out gastropub taxidermy Vice.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--/row-->
                    <!-- timeline item 4 -->
                    <div class="row">
                        <div class="col-auto text-center flex-column d-none d-sm-flex">
                            <div class="row h-50">
                                <div class="col border-end">&nbsp;</div>
                                <div class="col">&nbsp;</div>
                            </div>
                            <h5 class="m-2">
                            <span class="badge rounded-pill bg-light border">&nbsp;</span>
                        </h5>
                            <div class="row h-50">
                                <div class="col">&nbsp;</div>
                                <div class="col">&nbsp;</div>
                            </div>
                        </div>
                        <div class="col py-2">
                            <div class="card radius-15">
                                <div class="card-body">
                                    <div class="float-end">Thu, Jan 12th 2019 11:30 AM</div>
                                    <h4 class="card-title">Day 4 Wrap-up</h4>
                                    <p>Join us for lunch in Bootsy's cafe across from the Campus Center.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--/row-->
                </div>
            </div>
            <div class="col col-lg-4">
                <div class="card radius-10 overflow-hidden">
                    <div class="card-header p-3">
                        <div class="d-lg-flex align-items-center">
                            <div>
                                <h5 class="mb-0">Top Countries</h5>
                            </div>
                            <div class="ms-auto">
                                <h3 class="mb-0"><span class="font-14">Total Visits:</span> 15K</h3>
                            </div>
                        </div>
                    </div>
                    <div class="dashboard-top-countries mb-3 p-3">
                        <ul class="list-group list-group-flush radius-10">
                            <li class="list-group-item d-flex align-items-center radius-10 mb-2 border">
                                <div class="d-flex align-items-center">
                                    <div class="font-20"><i class="flag-icon flag-icon-in"></i>
                                    </div>
                                    <div class="flex-grow-1 ms-2">
                                        <h6 class="mb-0">India</h6>
                                    </div>
                                </div>
                                <div class="ms-auto">647</div>
                            </li>
                            <li class="list-group-item d-flex align-items-center radius-10 mb-2 border">
                                <div class="d-flex align-items-center">
                                    <div class="font-20"><i class="flag-icon flag-icon-us"></i>
                                    </div>
                                    <div class="flex-grow-1 ms-2">
                                        <h6 class="mb-0">United States</h6>
                                    </div>
                                </div>
                                <div class="ms-auto">435</div>
                            </li>
                            <li class="list-group-item d-flex align-items-center radius-10 mb-2 border">
                                <div class="d-flex align-items-center">
                                    <div class="font-20"><i class="flag-icon flag-icon-vn"></i>
                                    </div>
                                    <div class="flex-grow-1 ms-2">
                                        <h6 class="mb-0">Vietnam</h6>
                                    </div>
                                </div>
                                <div class="ms-auto">287</div>
                            </li>
                            <li class="list-group-item d-flex align-items-center radius-10 mb-2 border">
                                <div class="d-flex align-items-center">
                                    <div class="font-20"><i class="flag-icon flag-icon-au"></i>
                                    </div>
                                    <div class="flex-grow-1 ms-2">
                                        <h6 class="mb-0">Australia</h6>
                                    </div>
                                </div>
                                <div class="ms-auto">432</div>
                            </li>
                            <li class="list-group-item d-flex align-items-center radius-10 mb-2 border">
                                <div class="d-flex align-items-center">
                                    <div class="font-20"><i class="flag-icon flag-icon-dz"></i>
                                    </div>
                                    <div class="flex-grow-1 ms-2">
                                        <h6 class="mb-0">Angola</h6>
                                    </div>
                                </div>
                                <div class="ms-auto">345</div>
                            </li>
                            <li class="list-group-item d-flex align-items-center radius-10 mb-2 border">
                                <div class="d-flex align-items-center">
                                    <div class="font-20"><i class="flag-icon flag-icon-ax"></i>
                                    </div>
                                    <div class="flex-grow-1 ms-2">
                                        <h6 class="mb-0">Aland Islands</h6>
                                    </div>
                                </div>
                                <div class="ms-auto">134</div>
                            </li>
                            <li class="list-group-item d-flex align-items-center radius-10 mb-2 border">
                                <div class="d-flex align-items-center">
                                    <div class="font-20"><i class="flag-icon flag-icon-ar"></i>
                                    </div>
                                    <div class="flex-grow-1 ms-2">
                                        <h6 class="mb-0">Argentina</h6>
                                    </div>
                                </div>
                                <div class="ms-auto">147</div>
                            </li>
                            <li class="list-group-item d-flex align-items-center radius-10 mb-2 border">
                                <div class="d-flex align-items-center">
                                    <div class="font-20"><i class="flag-icon flag-icon-be"></i>
                                    </div>
                                    <div class="flex-grow-1 ms-2">
                                        <h6 class="mb-0">Belgium</h6>
                                    </div>
                                </div>
                                <div class="ms-auto">210</div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!--end row-->
        <div class="card radius-10">
            <div class="card-body">
                <div class="table-responsive lead-table">
                    <table class="table mb-0 align-middle">
                        <thead class="table-light">
                        <tr>
                            <th>Potential Leads</th>
                            <th>Diposit</th>
                            <th>Progress</th>
                            <th>Last Update</th>
                            <th>Status</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>
                                <div class="d-flex align-items-center">
                                    <div>
                                        <input class="form-check-input me-3" type="checkbox" value="" aria-label="...">
                                    </div>
                                    <div class="">
                                        <img src="{{asset("assets-dash/images/avatars/avatar-1.png")}}" class="rounded-circle" width="40" height="40" alt="">
                                    </div>
                                    <div class="ms-2">
                                        <h6 class="mb-0 font-14">Ronald Waters</h6>
                                        <p class="mb-0 font-13 text-secondary">Lead Designers</p>
                                    </div>
                                </div>
                            </td>
                            <td>$89,620</td>
                            <td class=" w-25">
                                <div class="progress radius-10" style="height:4.5px;">
                                    <div class="progress-bar" role="progressbar" style="width: 66%"></div>
                                </div>
                            </td>
                            <td>14 Oct 2020</td>
                            <td>
                                <div class="badge rounded-pill bg-light w-100">In Progress</div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="d-flex align-items-center">
                                    <div>
                                        <input class="form-check-input me-3" type="checkbox" value="" aria-label="...">
                                    </div>
                                    <div class="">
                                        <img src="{{asset("assets-dash/images/avatars/avatar-2.png")}}" class="rounded-circle" width="40" height="40" alt="">
                                    </div>
                                    <div class="ms-2">
                                        <h6 class="mb-0 font-14">David Buckley</h6>
                                        <p class="mb-0 font-13">Lead Designers</p>
                                    </div>
                                </div>
                            </td>
                            <td>$38,520</td>
                            <td class=" w-25">
                                <div class="progress radius-10" style="height:4.5px;">
                                    <div class="progress-bar" role="progressbar" style="width: 76%"></div>
                                </div>
                            </td>
                            <td>15 Oct 2020</td>
                            <td>
                                <div class="badge rounded-pill bg-light w-100">Cancelled</div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="d-flex align-items-center">
                                    <div>
                                        <input class="form-check-input me-3" type="checkbox" value="" aria-label="...">
                                    </div>
                                    <div class="">
                                        <img src="{{asset("assets-dash/images/avatars/avatar-3.png")}}" class="rounded-circle" width="40" height="40" alt="">
                                    </div>
                                    <div class="ms-2">
                                        <h6 class="mb-0 font-14">James Caviness</h6>
                                        <p class="mb-0 font-13">Lead Designers</p>
                                    </div>
                                </div>
                            </td>
                            <td>$63,820</td>
                            <td class=" w-25">
                                <div class="progress radius-10" style="height:4.5px;">
                                    <div class="progress-bar" role="progressbar" style="width: 100%"></div>
                                </div>
                            </td>
                            <td>16 Oct 2020</td>
                            <td>
                                <div class="badge rounded-pill bg-light w-100">Completed</div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="d-flex align-items-center">
                                    <div>
                                        <input class="form-check-input me-3" type="checkbox" value="" aria-label="...">
                                    </div>
                                    <div class="">
                                        <img src="{{asset("assets-dash/images/avatars/avatar-4.png")}}" class="rounded-circle" width="40" height="40" alt="">
                                    </div>
                                    <div class="ms-2">
                                        <h6 class="mb-0 font-14">John Roman</h6>
                                        <p class="mb-0 font-13">Lead Designers</p>
                                    </div>
                                </div>
                            </td>
                            <td>$97,420</td>
                            <td class=" w-25">
                                <div class="progress radius-10" style="height:4.5px;">
                                    <div class="progress-bar" role="progressbar" style="width: 58%"></div>
                                </div>
                            </td>
                            <td>18 Oct 2020</td>
                            <td>
                                <div class="badge rounded-pill bg-light w-100">In Progress</div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="d-flex align-items-center">
                                    <div>
                                        <input class="form-check-input me-3" type="checkbox" value="" aria-label="...">
                                    </div>
                                    <div class="">
                                        <img src="{{asset("assets-dash/images/avatars/avatar-7.png")}}" class="rounded-circle" width="40" height="40" alt="">
                                    </div>
                                    <div class="ms-2">
                                        <h6 class="mb-0 font-14">Johnny Seitz</h6>
                                        <p class="mb-0 font-13">Lead Designers</p>
                                    </div>
                                </div>
                            </td>
                            <td>$48,360</td>
                            <td class=" w-25">
                                <div class="progress radius-10" style="height:4.5px;">
                                    <div class="progress-bar" role="progressbar" style="width: 66%"></div>
                                </div>
                            </td>
                            <td>22 Oct 2020</td>
                            <td>
                                <div class="badge rounded-pill bg-light w-100">Cancelled</div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="d-flex align-items-center">
                                    <div>
                                        <input class="form-check-input me-3" type="checkbox" value="" aria-label="...">
                                    </div>
                                    <div class="">
                                        <img src="{{asset("assets-dash/images/avatars/avatar-8.png")}}" class="rounded-circle" width="40" height="40" alt="">
                                    </div>
                                    <div class="ms-2">
                                        <h6 class="mb-0 font-14">Pauline Bird</h6>
                                        <p class="mb-0 font-13">Lead Designers</p>
                                    </div>
                                </div>
                            </td>
                            <td>$74,620</td>
                            <td class=" w-25">
                                <div class="progress radius-10" style="height:4.5px;">
                                    <div class="progress-bar" role="progressbar" style="width: 100%"></div>
                                </div>
                            </td>
                            <td>24 Oct 2020</td>
                            <td>
                                <div class="badge rounded-pill bg-light w-100">Completed</div>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
