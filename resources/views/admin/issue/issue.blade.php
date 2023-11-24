@extends('admin.issue.layout')

@section('content')
                  <div class="pcoded-content">
                      <!-- Page-header start -->
                      <div class="page-header">
                          <div class="page-block">
                              <div class="row align-items-center">
                                  <div class="col-md-8">
                                      <div class="page-header-title">
                                          <h5 class="m-b-10">Hii {{Auth::user()->name}}</h5>
                                          <p class="m-b-0">Welcome To NEDCo I.T HelpDesk</p>
                                      </div>
                                  </div>
                                  <div class="col-md-4">
                                      <ul class="breadcrumb-title">
                                          <li class="breadcrumb-item">
                                              <a href="{{url('/home')}}"> <i class="fa fa-home"></i> </a>
                                          </li>
                                          <li class="breadcrumb-item"><a href="#!">Dashboard</a>
                                          </li>
                                      </ul>
                                  </div>
                              </div>
                          </div>
                      </div>
                      <!-- Page-header end -->
                        <div class="pcoded-inner-content">
                            <!-- Main-body start -->
                            <div class="main-body">
                                <div class="page-wrapper">
                                    <!-- Page-body start -->
                                    <div class="page-body">
                                    <h5 class="m-b-10">My Complains</h5>
                                        <div class="row">
                                            <!-- task, page, download counter  start -->
                                            <div class="col-xl-3 col-md-6">
                                                <div class="card">
                                                    <div class="card-block">
                                                        <div class="row align-items-center">
                                                            <div class="col-8">
                                                                <h4 class="text-c-purple">{{$unfixed}}</h4>
                                                                <h6 class="text-muted m-b-0">Unfixable Complains</h6>
                                                            </div>
                                                            <div class="col-4 text-right">
                                                                <i class="fa fa-bar-chart f-28"></i> 
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="card-footer bg-c-purple">
                                                        <div class="row align-items-center">
                                                        </div>
            
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-3 col-md-6">
                                                <div class="card">
                                                    <div class="card-block">
                                                        <div class="row align-items-center">
                                                            <div class="col-8">
                                                                <h4 class="text-c-green">{{$pending}}</h4>
                                                                <h6 class="text-muted m-b-0">New Complains</h6>
                                                            </div>
                                                            <div class="col-4 text-right">
                                                                <i class="fa fa-file-text-o f-28"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="card-footer bg-c-green">
                                                        <div class="row align-items-center">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-3 col-md-6">
                                                <div class="card">
                                                    <div class="card-block">
                                                        <div class="row align-items-center">
                                                            <div class="col-8">
                                                                <h4 class="text-c-red"> {{$processing}}</h4>
                                                                <h6 class="text-muted m-b-0">Processing Complains</h6>
                                                            </div>
                                                            <div class="col-4 text-right">
                                                                <i class="fa fa-hand-o-up f-28"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="card-footer bg-c-red">
                                                        <div class="row align-items-center">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-3 col-md-6">
                                                <div class="card">
                                                    <div class="card-block">
                                                        <div class="row align-items-center">
                                                            <div class="col-8">
                                                                <h4 class="text-c-blue">{{$complete}}</h4>
                                                                <h6 class="text-muted m-b-0">Fixed Complains</h6>
                                                            </div>
                                                            <div class="col-4 text-right">
                                                                <i class="fa fa-calendar-check-o f-28"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="card-footer bg-c-blue">
                                                        <div class="row align-items-center">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- task, page, download counter  end -->
                                        </div>
                                            <!-- task, page, download counter  start -->
                                            
                                            <!-- Page-header end -->
                        <div class="pcoded-inner-content">
                            <!-- Main-body start -->
                            <div class="main-body">
                                <div class="page-wrapper">

                                 <!-- Page-header end -->
                        <div class="pcoded-inner-content">
                            <!-- Main-body start -->
                            <div class="main-body">
                                <div class="page-wrapper">
                                    <!-- Page-body start -->
                                    <div class="page-body">
                                        <!-- Basic table card start -->
                                        <div class="card">
                                            <div class="card-header">
                                                <h5>My Complains</h5>
                                                <span>Complains status</span>
                                                <div class="card-header-right">
                                                    <ul class="list-unstyled card-option">
                                                        <li><i class="fa fa fa-wrench open-card-option"></i></li>
                                                        <li><i class="fa fa-window-maximize full-card"></i></li>
                                                        <li><i class="fa fa-minus minimize-card"></i></li>
                                                        <li><i class="fa fa-refresh reload-card"></i></li>
                                                        <li><i class="fa fa-trash close-card"></i></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="card-block table-border-style">
                                                <div class="table-responsive">
                                                    <table class="table table-hover">
                                                        <thead>
                                                            <tr>
                                                                <th>#</th>
                                                                <th>Ticket ID</th>
                                                                <th>Complaint From</th>
                                                                <th>Department</th>
                                                                <th>Compliant Statement</th>
                                                                <th>Date</th>
                                                                <th>Status</th>
                                                                <th>Technicians</th>
                                                                <th>Review</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            @foreach($myissues as $index => $myissue)
                                                            <tr>
                                                            <th scope="row">{{$index +1}}</th>
                                                                <td>{{$myissue->ticketID}}</td>
                                                                <td>{{$myissue->username}}</td>
                                                                <td>{{$myissue->department}}</td>
                                                                <td>{{$myissue->description}}</td>
                                                                <td>{{$myissue->created_at}}</td>
                                                                <td class="status-cell {{$myissue->status}}">
                                                                    <b class="status-text">{{$myissue->status}}</b>
                                                                </td>
                                                                <td>{{$myissue->technician}}</td>
                                                                <td>{{$myissue->review}}</td>
                                                            </tr>
                                                            @endforeach
                                                        </tbody>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Hover table card end -->
                                        <!-- Contextual classes table starts -->
                                       
                                      
                                    </div>
                                    <!-- Page-body end -->
                                </div>
                            </div>
                            <!-- Main-body end -->

                            <div id="styleSelector">

                            </div>
                        </div>
                                    <!-- Page-body start -->
                                    <div class="page-body">
                                    <div class="row">
                                            <div class="col-md-6">
                                            
                                        <!-- Basic table card start -->
                                        <div class="card">
                                                    <div class="card-header">
                                                        <h5>My Personal Details</h5>
                                                    </div>
                                                    <div class="card-block">
                                                    <form class="form-material" action="{{url('/addnewissue')}}" method="Post">
                                                       @csrf
                                                       <div class="id-card">
                                                        <div class="id-card-header">
                                                            <h2>ID Card</h2>
                                                        </div>
                                                        <div class="id-card-body">
                                                            <div class="form-group">
                                                                <label for="user_id">User ID:</label>
                                                                <input type="text" value="{{Auth::user()->id}}" name="user_id" class="form-control" required readonly>
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="username">Username:</label>
                                                                <input type="text" name="username" value="{{Auth::user()->name}}" class="form-control" required readonly>
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="email">Email:</label>
                                                                <input type="text" name="email" value="{{Auth::user()->email}}" class="form-control" required readonly>
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="department">Department:</label>
                                                                <input type="text" name="department" value="{{Auth::user()->type}}" class="form-control" required readonly>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    </div>
                                                </div>
                                            </div>

                                           
                                            <div class="col-md-6">
                                                <div class="card">
                                                    <div class="card-header">
                                                        <h5>Issue New Complain</h5>
                                                    </div>
                                                    <div class="card-block">
                                                    <div class="form-group form-default form-static-label">
                                                        <input type="text" id="ticketID" readonly name="ticketID" class="form-control" readonly required>
                                                        <span class="form-bar"></span>
                                                        <label class="float-label">Ticket ID</label>
                                                    </div>

                                                    <script>
                                                        function generateRandomString(length) {
                                                            const characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789';
                                                            let result = '';
                                                            for (let i = 0; i < length; i++) {
                                                                const randomIndex = Math.floor(Math.random() * characters.length);
                                                                result += characters.charAt(randomIndex);
                                                            }
                                                            return result;
                                                        }
                                                    
                                                        const ticketIDInput = document.getElementById('ticketID');
                                                        const generatedTicketID = generateRandomString(10); 
                                                        ticketIDInput.value = generatedTicketID;
                                                    </script>


                                                            <div class="form-group form-default form-static-label">
                                                                <select class="form-control" required name="category">
                                                                <option value="">--Select Category--</option>
                                                                    <option value="Software Problem">Software Problem</option>
                                                                    <option value="Hardware Problem">Hardware Problem</option>
                                                                    <option value="Network Problem">Network Problem</option>
                                                                </select>
                                                                <span class="form-bar"></span>
                                                                <label class="float-label">Complaint Category</label>
                                                            </div>
                                                            <div class="form-group form-default form-static-label">
                                                                <textarea name="description" class="form-control" required></textarea>
                                                                <span class="form-bar"></span>
                                                                <label class="float-label">Complaint Description</label>
                                                            </div>

                                                            <div class="form-group form-default form-static-label">
                                                                <button value="submit" type="submit" class="btn-primary" style="float:right;width:100px;" >Submit</button>
                                                                <span class="form-bar"></span>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        <!-- Hover table card end -->
                                        <!-- Contextual classes table starts -->
                                       
                                      
                                    </div>
                                    <!-- Page-body end -->
                                </div>
                            </div>
                            <!-- Main-body end -->

                            <div id="styleSelector">

                            </div>
                        </div>
                                        </div>
                                    </div>
                                    <!-- Page-body end -->
                                </div>
                                <div id="styleSelector"> </div>
                            </div>
                        </div>
                    </div>
                </div>
      
                @endsection