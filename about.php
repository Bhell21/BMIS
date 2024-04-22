<html style="background: url(Picture/background.png); background-repeat: no-repeat; background-size:cover; ">
<title>About - Barangay Banaba MIS</title>
<link rel="shortcut icon" href="Picture/logo.png" />

<link href="Resident_Profiling/css/bootstrap.min.css" rel="stylesheet">
<link href="Resident_Profiling/vendor/css/dataTables.bootstrap.min.css" rel="stylesheet">
<!-- <link rel="stylesheet" type="text/css" href="Css/homepage.css"> -->
<style type="text/css">
    .card {
      box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
      max-width: 400px !important;
      min-height: 400px;
      margin: auto;
      text-align: center;
      font-family: arial;
      background-color: white;
    }
    .card:hover{
      border: solid 1px;
      background-color: #e9e9e9;
    }
    
    .title {
      color: grey;
      font-size: 18px;
    }
    .nav {
      background-color: #2e4a62;
      border: none;
      width: 100%;
      position:fixed;
      overflow: hidden;
      top: 0;
      left: 0;
      text-transform: uppercase;
      font-family: calibri;
    }
    .nav a {
          float: left;
      display: block;
      color: #f2f2f2;
          text-align: center;
          padding: 14px 16px;
          text-decoration: none;
    }
    .nav a:hover {
          background: #14aa6c;
          color: white;
    } 
    .nav a:active {
      background: #99c74b;
    }
</style>
<div class="nav">
    <a href="index.php">home</a>
    <a href="about.php">about</a>
</div>

<body style="
     background-color: transparent !important;">



    <div class="container" style="padding-top: 5em; padding-left: 15%;">


        <div class="col-sm-3 card ">
            <div style="padding:5px;">
                <img src="Picture/logo.png" alt="John" style="width:100% ">
            </div>
            <h4>BARANGAY INFORMATION SYSTEM</h4>
            <p class="title">Brgy. Profiling System</p>
            <p>is a computerized information-processing system designed to support the activities ...</p>
            <p><button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#bmis">Read More</button></p>
        </div>
        <div class="col-sm-1"></div>
        <div class="card col-sm-3">
            <div style="padding:5px;">
                <img src="Picture/logo.png" alt="John" style="width:100% ">
            </div>
            <h4>MISSION AND VISION</h4>
            <p class="title">Mission and Vision</p>
            <p>Mission: To develop and implement a comprehensive Barangay Profiling System that efficiently gathers, organizes, and analyzes data ...</p>
            <p><button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#mv">Read More</button></p>
        </div>

        
    <!-- Modal -->
    <div id="bmis" class="modal fade" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Barangay Profiling System</h4>
                </div>
                <div class="modal-body">
                    <div>
                        <p><img src="" align="left"> &emsp; The Barangay Profiling System is a computerized information-processing system designed to support the activities, manages files and documents of company or organization.It
                            can provide up to date information of the residents with relatively little effort on the part of the user of the system and put a huge amount of information within convenient and comfortable read. Not mentioning the security
                            and integrity of the document, it also provides.
                            <Br><br>&emsp; The barangay officials will no longer have a hard time when it comes to organizing the data needed by the residents. it will help the barangay to solve the difficulty in retrieving large volume of residents information.
                            It makes things more convenient for the residents and reduces the number of visits in the barangay. &emsp; What will the BPS achieve? To Address barangay efficiency issues and have a Satisfied or happier residents of the barangay.
                        </p>



                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>

        </div>
    </div>
    <!-- Modal -->
    <div id="mv" class="modal fade" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Mission and Vision</h4>
                </div>
                <div class="modal-body">
                    <center>
                        <h1>
                            <font size="5" color="green"><b>Mission</b></font>
                        </h1>
                        <p> To develop and implement a comprehensive Barangay Profiling System that efficiently gathers, organizes, and analyzes data to support evidence-based decision-making, enhance community development initiatives, and improve the delivery of services to residents.</p>

                        <h1>
                            <font size="5" color="green"><b>Vision</b></font>
                        </h1>
                        <p> To establish a dynamic Barangay Profiling System that serves as a cornerstone for sustainable development, fostering a vibrant and inclusive community where every resident's needs are understood, addressed, and prioritized through data-driven strategies and collaborative efforts.</p>
                    </center>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>

        </div>
    </div>


    <script src="Resident_Profiling/jquery/jquery-3.3.1.min.js"></script>
    <script src="Resident_Profiling/js/bootstrap.min.js"></script>
    <script src="Resident_Profiling/vendor/js/jquery.dataTables.min.js"></script>
    <script src="Resident_Profiling/vendor/js/dataTables.bootstrap.min.js"></script>
</body>

</html>