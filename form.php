<!DOCTYPE html>
<html lang="en">
<head>
    <title>Home</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script src="assets/ajax.js"></script>
    <style>
        html{
            scroll-behavior: smooth;
        }
        .border-w-3{
            border-width: 1.4px !important;
        }

        .fakeimg {
            height: 200px;
            width: 50%;
            background: #aaa;
        }
        .btn{
            margin: 0.5rem;
        }

    </style>
</head>
<body>
<div class="container-fluid bg-danger text-white">
    <div class="row">
        <div class="col-sm-2">
            <center><img src="sjfsd.jpg" height="100" width="100"></center>
        </div>
        <div class="col-sm-10">
            <br>
            <center><h1> PARI-UDAAN YOJANA</h1></center>
        </div>
    </div>
</div>
<marquee bgcolor="#f8f9fa" text="white" height="20%">
    aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa
</marquee>
<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
    <a class="navbar-brand" href="index.html">Home</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="collapsibleNavbar">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="#">Link</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Link</a>
            </li>
            <li  class="nav-item">
                <a class="nav-link" href="register.html">Register</a>
            </li>
            <li class="nav-item">
                <a class="nav-link active" href="#">Login</a>
            </li>
        </ul>
    </div>
</nav>
&nbsp;&nbsp;
<div class="container-fluid">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                    <div id="sf1" class="frm">
                        <div class="card">
                            <div class="card-header" id="steps"><h3>Your Profile</h3></div>
                            <div class="card-body">


                                <!-- id will be unique, but class name will be same -->



                                <fieldset>
                                    <legend>Personal Details</legend>
                                    <form id="form_step1"><input type="hidden" name="step" value="1">
                                    <div class="form-group">
                                        <label for="firstName" class="col-sm-3 control-label">Name*</label>
                                        <div class="col-sm-9">
                                            <input type="text" id="firstName" name="firstName" placeholder="First Name" class="form-control" autofocus>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-9">
                                            <input type="text" id="middleName" name="middleName" placeholder="Middle Name" class="form-control" autofocus>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-9">
                                            <input type="text" id="lastName" name="lastName" placeholder="Last Name" class="form-control" autofocus>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="motherName" class="col-sm-3 control-label">Mother's Name* </label>
                                        <div class="col-sm-9">
                                            <input type="text" id="motherName" name="mother" placeholder="Mother's Name" class="form-control" required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="email" class="col-sm-3 control-label">Email* </label>
                                        <div class="col-sm-9">
                                            <input type="email" id="email" name="email" placeholder="Email" class="form-control" name= "email">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="birthDate" class="col-sm-3 control-label">Date of Birth*</label>
                                        <div class="col-sm-9">
                                            <input type="date" id="birthDate1" name="dob" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="phoneNumber" class="col-sm-3 control-label">Phone number* </label>
                                        <div class="col-sm-9">
                                            <input type="phoneNumber" id="phoneNumber" name="contact" placeholder="Phone number" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="address" class="col-sm-3 control-label">Addesss </label>
                                        <div class="col-sm-9">
                        <textarea id="address" name="address" placeholder="Addesss" class="form-control" rows="5">
                    </textarea>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-lg-10 col-lg-offset-2">
                                            <!-- open1 is given in the class that is binded with the click event -->
                                            <input type="submit" class="btn btn-primary open1" id="next1" value="Next"><span class="fa fa-arrow-right"></span></input>
                                        </div>
                                    </div>
                                    </form>
                                </fieldset>

                            </div>
                        </div></div>
                    &nbsp;
                    <div id="sf2" class="frm" style="display: none;">
                        <div class="card">
                            <div class="card-header"><h3>Your Profile</h3></div>
                            <div class="card-body">
                                <!-- id will be unique, but class name will be same -->


                                <fieldset>
                                    <legend>Academic Details</legend>
                                    <form id="form_step2"><input type="hidden" name="step" value="2">

                                    <div class="form-group">
                                        <label for="grade" class="col-sm-3 control-label">Class (currently studying): </label>
                                        <div class="col-sm-9">
                                            <select class="form-control" id="class" name="class">
                                                <option>8</option>
                                                <option>9</option>
                                                <option>10</option>
                                                <option>11</option>
                                                <option>12</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="board" class="col-sm-3 control-label">Board: </label>
                                        <div class="col-sm-9">
                                            <select class="form-control" id="board" name="board">
                                                <option>SSC</option>
                                                <option>HSC</option>
                                                <option>CBSE</option>
                                                <option>ISCE</option>
                                                <option>Other</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="marks" class="col-sm-3 control-label">Marks Obtained:</label>
                                        <div class="col-sm-9">
                                            <input type="text" name="marks" id="marks" class="form-control" placeholder="Marks Obtained">

                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="Tmarks" class="col-sm-3 control-label">Total Marks:</label>
                                        <div class="col-sm-9">
                                            <input type="text" name="tmarks" id="tmarks" class="form-control" placeholder="Total Marks">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="percentage" class="col-sm-3 control-label">Percentage:</label>
                                        <div class="input-group col-sm-9">
                                            <input type="text" class="form-control" placeholder="Your Percentage" name="per" id="per">
                                            <div class="input-group-append">
                                                <span class= "input-group-text">%</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="school" class="col-sm-3 control-label">Highschool Name:</label>
                                        <div class="col-sm-9">
                                            <input type="text" id="school" placeholder="Highschool Name" class="form-control" name="school">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="address" class="col-sm-3 control-label">Highschool Addesss: </label>
                                        <div class="col-sm-9">
                        <textarea id="schooladd" placeholder="Highschool Addesss" class="form-control" rows="5" name="schooladd">
                    </textarea>
                                        </div>
                                    </div>

                                    <div class="clearfix" style="height: 10px;clear: both;"></div>

                                    <div class="form-group">
                                        <div class="col-lg-10 col-lg-offset-2">
                                            <!-- back2 unique class name  -->
                                            <button class="btn btn-warning back2" id="back2" type="button"><span class="fa fa-arrow-left"></span> Back</button>
                                            <!-- open2 unique class name -->
                                            <input type="submit" class="btn btn-primary open1" id="next2" value="Next"><span class="fa fa-arrow-right"></span></input>
                                        </div>
                                    </div>
                                    </form>
                                </fieldset>
                            </div>
                        </div></div>
                    &nbsp;
                    <div id="sf3" class="frm" style="display: none;">
                        <div class="card">
                            <div class="card-header"><h3>Your Profile</h3></div>
                            <div class="card-body">


                                <fieldset>
                                    <legend>Upload Documents</legend>

                                    <div class="form-group">
                                        <form action="photo.php" method="post" enctype="multipart/form-data" id="form_up1"><input type="hidden" name="pic_name" value="photo">
                                        <label for="fileToUpload" class="col-sm-3 control-label">Photo: </label>
                                            <input type="file" name="fileToUpload" id="photo1" class="form-control-file border" >
                                            <input type="submit" class="float-right btn btn-dark" id="upload1" value="Upload" name="submit">   <!--Check Button type-->
                                            <button class="btn btn-success float-right" id="view1" type="button" style="visibility: hidden;"><span class="fa fa-arrow-left"></span> View Uploaded document</button>
                                        </form>
                                    </div>
                                    &nbsp;
                                    <div class="form-group">
                                        <form action="photo.php" method="post" enctype="multipart/form-data" id="form_up2"><input type="hidden" name="pic_name" value="marksheet">
                                            <label for="fileToUpload" class="col-sm-3 control-label">Marksheet: </label>
                                            <input type="file" name="fileToUpload" id="photo2" class="form-control-file border" >
                                            <input type="submit" class="float-right btn btn-dark" id="upload2" value="Upload" name="submit">   <!--Check Button type-->
                                            <button class="btn btn-success float-right" id="view2" type="button" style="visibility: hidden;"><span class="fa fa-arrow-left"></span> View Uploaded document</button>
                                        </form>
                                    </div>
                                    &nbsp;
                                    <div class="form-group">
                                        <form action="photo.php" method="post" enctype="multipart/form-data" id="form_up2"><input type="hidden" name="pic_name" value="aadhar">
                                            <label for="fileToUpload" class="col-sm-3 control-label">Aadhar: </label>
                                            <input type="file" name="fileToUpload" id="photo3" class="form-control-file border" value="ab">
                                            <input type="submit" class="float-right btn btn-dark" id="upload3" value="Upload" name="submit">   <!--Check Button type-->
                                            <button class="btn btn-success float-right" id="view3" type="button" style="visibility: hidden;"><span class="fa fa-arrow-left"></span> View Uploaded document</button>
                                        </form>
                                    </div>
                                    <br>
                                    &nbsp;


                                    <div class="form-group">
                                        <div class="col-lg-10 col-lg-offset-2">
                                            <form id="form_step3"><input type="hidden" name="step" value="3">
                                            <button class="btn btn-warning back2" id="back3" type="button"><span class="fa fa-arrow-left"></span> Back</button>
                                            <input type="submit" class="btn btn-primary open1" id="next3" value="Submit" disabled></form>
                                            <img src="spinner.gif" alt="" id="loader" style="display: none">
                                        </div>
                                    </div>
                                    </form>
                                </fieldset>
                            </div></div>

                    </div>
                <div id="sf4" class="frm" style="display: none;">
                    <div class="card">
                        <div class="card-header"><h3>Success</h3></div>
                        <div class="card-body">


                            <fieldset>
                                <legend>Form was submitted successfully!</legend>
                                <br><br><br>
                                <div class="text-center" style="width: 100%">
                                    <button class="btn btn-primary" id="edit" type="button"><span class="fa fa-arrow-left"></span> Edit Form</button>
                                </div>
                            </fieldset>
                        </div></div>
            </div>
        </div>
    </div>
</div>
</body>
</html>