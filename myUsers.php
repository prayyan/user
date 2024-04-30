<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- Favicons -->
    <link rel="shortcut icon" type="image/x-icon" href="https://res.cloudinary.com/dpdwa1atx/image/upload/v1686602059/Prayyan%20Website/2_ajsout.png">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <title>Admin Users</title>
    <style>
        .highlight {
            background-color: #ff0b0b;
        }

        .list-group-item:hover .collapse.show {
            display: block;
        }

        :root {
            --main-bg-color: #000000;
            --main-text-color: #000000;
            --second-text-color: #f1f3f6;
            --second-bg-color: #f1f3f6;
          }
          .primary-text {
            color: var(--main-text-color);
          }
          
          .second-text {
            color: var(--second-text-color);
          }
          
          .primary-bg {
            background-color: var(--main-bg-color);
          }
          
          .secondary-bg {
            background-color: var(--second-bg-color);
          }
          
          .rounded-full {
            border-radius: 100%;
          }
          
          #wrapper {
            color:"#FFFFFF";
            overflow-x: hidden;
            background-image: linear-gradient(
              to right,
              #e4cd66,
              #faee70,
              #f4dd42,
              #f7e466,
              #f4e164  );
          }
          
          #sidebar-wrapper {
            min-height: 100vh;
            margin-left: -15rem;
            background-image: linear-gradient(
              to right,
              #000000,
              #000000);
            -webkit-transition: margin 0.25s ease-out;
            -moz-transition: margin 0.25s ease-out;
            -o-transition: margin 0.25s ease-out;
            transition: margin 0.25s ease-out;
          }
          
          #sidebar-wrapper .sidebar-heading {
            padding: 0.875rem 1.25rem;
            font-size: 1.2rem;
          }
          
          #sidebar-wrapper .list-group {
            width: 15rem;
            background-image: linear-gradient(
              to right,
              #000000,
              #000000);
          }
          
          #page-content-wrapper {
            min-width: 100vw;
          }
          
          #wrapper.toggled #sidebar-wrapper {
            margin-left: 0;
            background-image: linear-gradient(
              to right,
              #000000,
              #000000);
          }
          
          #menu-toggle {
            cursor: pointer;
          }
          
          .list-group-item {
            border: none;
            padding: 20px 30px;
            background-image: linear-gradient(
              to right,
              #000000,
              #000000);
          }
          
          .list-group-item.active {
            background-color: transparent;
            color: var(--main-text-color);
            font-weight: bold;
            border: none;
          }
          
          @media (min-width: 768px) {
            #sidebar-wrapper {
              margin-left: 0;
            }
          
            #page-content-wrapper {
              min-width: 0;
              width: 100%;
            }
          
            #wrapper.toggled #sidebar-wrapper {
              margin-left: -15rem;
            }
          }  


        .pointer-cursor {
            cursor: pointer;
        }

        .pointer-cursor:hover {
            cursor: pointer;
        }

        .pointer-cursor:active {
            cursor: pointer;
        }

        .outer-wrapper {
            overflow-x: auto;
        }

        .table-wrapper {
            width: max-content;
        }

        
    /* Adjust the popup container styles */
    .popup {
        display: none;
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(0, 0, 0, 0.5);
        z-index: 9999;
    }

    /* Center the popup content vertically and horizontally */
    .popup-content {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        background-color: #fff;
        padding: 20px;
        max-width: 500px;
        width: 100%;
        border-radius: 5px;
        overflow-y: scroll; /* Add this line to enable vertical scrolling */
    }

    /* Add spacing between form elements */
    .popup-content .mb-3 {
        margin-bottom: 20px;
    }

    /* Center the close button */
    .popup-content .text-center {
        text-align: center;
    }

    .popup-container {
      height: 400px; /* Adjust the height as needed */
      overflow: auto;
    }

    </style>
</head>
<body>
  <div class="d-flex" id="wrapper">
    <!-- Sidebar -->
    <div class="bg-dark" id="sidebar-wrapper">
        <div class="sidebar-heading text-center py-4 primary-text fs-4 fw-bold text-uppercase border-bottom text-white">
            <a href="../template/index.php">
                <img src="https://res.cloudinary.com/dpdwa1atx/image/upload/v1686590888/Prayyan%20Website/Logo2_ndwauh_kpbsum.png" width="150" alt="Prayyan Logo" class="me-2" />
            </a>
        </div>
        <div class="list-group list-group-flush my-3">
            <!-- Dashboard -->
            <a onclick="window.location.href='adminDashboard.php'" class="list-group-item list-group-item-action active text-white pointer-cursor">
                <i class="fas fa-chart-bar me-2"></i>Dashboard
             </a>
             
            <!--Home Page-->
            <a onclick="window.location.href=''" class="list-group-item list-group-item-action active text-white pointer-cursor">
                <i class="fas fa-home me-2"></i>HomePage</a>
            
            <!-- Location -->
            <div class="list-group">
                <a href="" class="list-group-item list-group-item-action fw-bold text-white pointer-cursor" data-bs-toggle="collapse show"
                data-bs-target="#locationCollapse" aria-expanded="false" aria-controls="locationCollapse">
                <i class="fas fa-map-marker-alt me-2 text-white"></i>Location <i class="fas fa-chevron-down float-end"></i>
                </a>

                <div class="collapse" id="locationCollapse">
                    <div class="list-group">
                        <a onclick="window.location.href='addLocation.php'" class="list-group-item list-group-item-action text-white pointer-cursor"
                            onclick="highlightItem(this)">Add Location</a>
                        <a onclick="window.location.href='myLocation.php'" class="list-group-item list-group-item-action text-white pointer-cursor"
                            onclick="highlightItem(this)">My Location</a>
                            <a onclick="window.location.href='pickupDropLocation.php'" class="list-group-item list-group-item-action text-white pointer-cursor"  onclick="highlightItem(this)">Pickup Drop Location</a>
                      <a onclick="window.location.href='mypickupDropLocation.php'" class="list-group-item list-group-item-action text-white pointer-cursor"  onclick="highlightItem(this)">My Pickup Drop Location</a>
                    </div>
                </div>
            </div>
            
            <!-- Bikes -->
            <div class="list-group">
                <a href="#" class="list-group-item list-group-item-action fw-bold text-white pointer-cursor" data-bs-toggle="collapse show"
                    data-bs-target="#bikesCollapse" aria-expanded="false" aria-controls="bikesCollapse">
                    <i class="fas fa-bicycle me-2 text-white "></i>Bikes <i class="fas fa-chevron-down float-end"></i>
                </a>

                <div class="collapse" id="bikesCollapse">
                    <div class="list-group">
                        <a onclick="window.location.href='addNewBike.php'" class="list-group-item list-group-item-action text-white pointer-cursor"  onclick="highlightItem(this)">Add New Bike</a>
                        <a onclick="window.location.href='myBikes.php'" class="list-group-item list-group-item-action text-white pointer-cursor"  onclick="highlightItem(this)">My Bikes</a>
                        <a onclick="window.location.href='bikeTypes.php'" class="list-group-item list-group-item-action text-white pointer-cursor"  onclick="highlightItem(this)">Bike Types</a>
                        
                        <a onclick="window.location.href='bikeBookings.php'" class="list-group-item list-group-item-action text-white pointer-cursor"  onclick="highlightItem(this)">Bike Bookings</a>
                    </div>
                </div>
            </div>
            
            <!-- Cars -->
            <div class="list-group">
                <a href="#" class="list-group-item list-group-item-action fw-bold text-white pointer-cursor" data-bs-toggle="collapse show"
                    data-bs-target="#carsCollapse" aria-expanded="false" aria-controls="carsCollapse">
                    <i class="fas fa-car me-2 text-white"></i> Cars <i class="fas fa-chevron-down float-end"></i>
                </a>

                <div class="collapse" id="carsCollapse">
                    <div class="list-group">
                        <a onclick="window.location.href='addNewCar.php'" class="list-group-item list-group-item-action text-white  pointer-cursor" onclick="highlightItem(this)">Add New Car</a>
                        <a onclick="window.location.href='myCars.php'" class="list-group-item list-group-item-action text-white pointer-cursor" onclick="highlightItem(this)">My Cars</a>
                        <a onclick="window.location.href='carTypes.php'" class="list-group-item list-group-item-action text-white pointer-cursor" onclick="highlightItem(this)">Car Types</a>
                        <a onclick="window.location.href='carFuelType.php'" class="list-group-item list-group-item-action text-white pointer-cursor" onclick="highlightItem(this)">Fuel Type</a>
                        <a onclick="window.location.href='carBookings.php'" class="list-group-item list-group-item-action text-white pointer-cursor" onclick="highlightItem(this)">Car Bookings</a>
                    </div>
                </div>
            </div>
            
            <!-- Users -->
            <div class="list-group">
                <a href="#" class="list-group-item list-group-item-action fw-bold text-white pointer-cursor" data-bs-toggle="collapse show"
                    data-bs-target="#usersCollapse" aria-expanded="false" aria-controls="usersCollapse">
                    <i class="fas fa-user me-2 text-white"></i>User <i class="fas fa-chevron-down float-end"></i>
                </a>

                <div class="collapse show" id="usersCollapse">
                    <div class="list-group">
                        <a onclick="window.location.href='addNewUser.php'" class="list-group-item list-group-item-action text-white pointer-cursor" onclick="highlightItem(this)">Add New User</a>
                        <a onclick="window.location.href='myUsers.php'" class="list-group-item list-group-item-action text-white pointer-cursor" onclick="highlightItem(this)">My Users</a>
                        <a onclick="window.location.href='kyc.php'" class="list-group-item list-group-item-action text-white pointer-cursor" onclick="highlightItem(this)">KYC</a>
                    </div>
                </div>
            </div>
            
            <!-- Partners -->
            <div class="list-group">
                <a href="#" class="list-group-item list-group-item-action fw-bold text-white pointer-cursor" data-bs-toggle="collapse show"
                    data-bs-target="#partnersCollapse" aria-expanded="false" aria-controls="partnersCollapse">
                    <i class="fas fa-handshake me-2 text-white"></i>Partner <i class="fas fa-chevron-down float-end"></i>
                </a>

                <div class="collapse" id="partnersCollapse">
                    <div class="list-group">
                      <a onclick="window.location.href='addNewPartner.php'" class="list-group-item list-group-item-action text-white pointer-cursor"  onclick="highlightItem(this)">Add New Partner</a>
                      <a onclick="window.location.href='myPartners.php'" class="list-group-item list-group-item-action text-white pointer-cursor"  onclick="highlightItem(this)">My Partners</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
        

        <!-- Page Content -->
        <div id="page-content-wrapper">
            <nav class="navbar navbar-expand-lg navbar-light bg-transparent py-4 px-4">
                <div class="d-flex align-items-center">
                    <i class="fas fa-align-left primary-text fs-4 me-3" id="menu-toggle"></i>
                    <h2 class="fs-2 m-0">Dashboard</h2>
                </div>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse show"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
        
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle second-text fw-bold" href="#" id="navbarDropdown"
                                role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="fas fa-user-cog me-2"></i>Admin
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="adminProfile.html">Profile</a></li>
                                <li><a class="dropdown-item" href="adminLogout.html">Logout</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>
            <div class="container mt-4 justify-text-content">
                <div class="row">
                <div class="col-md-12">
                    <h2>User Search</h2>
                    <hr>
                </div>
                </div>
                
                <!-- Search Filter -->
                <div class="row">
                <div class="col-md-2 mb-2">
                    <label class="form-label">Username:</label>
                    <input type="text" class="form-control" placeholder="Enter Username" name="filterUsername" id="filterUsername">
                </div>
                <div class="col-md-2 mb-2">
                    <label class="form-label">E-mail:</label>
                    <input type="text" class="form-control" placeholder="Enter Email" name="filterEmail" id="filterEmail">
                </div>
                <div class="col-md-2 mb-2">
                    <label class="form-label">Phone no:</label>
                    <input type="text" class="form-control" placeholder="Enter Phone Number" name="filterPhoneNumber" id="filterPhoneNumber">
                </div>
                <div class="col-md-2 mb-2">
                    <label class="form-label">City:</label>
                    <select class="form-select" id="filterCity">
                        <option value="">Select City</option>
                        <?php
                            require_once('dbcon.php');
                            // Assuming you have a database connection established
                            $sql = "SELECT DISTINCT city FROM users";
                            $result = mysqli_query($connection, $sql);
                            while ($row = mysqli_fetch_assoc($result)) {
                                echo '<option value="' . $row['city'] . '">' . $row['city'] . '</option>';
                            }
                        ?>
                    </select>
                </div>
                
                <div class="col-md-2 mb-2">
                    <label class="form-label">Pincode:</label>
                    <input type="text" class="form-control" placeholder="Enter Pincode" name="filterPincode" id="filterPincode" maxlength="6">
                </div>
                      
                <div class="col-md-2 mb-2">
                    <label class="form-label">KYC Status:</label>
                    <select id="filterStatus" class="form-select" name="filterStatus">
                      <option value="">Select Status</option>
                      <option value="Verified">Verified</option>
                      <option value="Rejected">Rejected</option>
                    </select>
                </div>
                <button class="btn btn-primary" id="search">Search</button>
                <hr>
          <div class="outer-wrapper">
            <div class="table-wrapper">
              <table class="table table-striped">
                  <thead>
                      <tr>
                          <th> S.No.</th>
                          <th>Username</th>
                          <th>Email Id</th>
                          <th>Mobile Number</th>
                          <th>Date of Birth</th>
                          <th>Door Number</th>
                          <th>Address Line-1</th>
                          <th>City</th>
                          <th>Pincode</th>
                          <th>KYC Status</th>
                          <th>Action</th>
                      </tr>
                  </thead>
                  <tbody id="users">
                  <?php 
                      include 'dbcon.php';
                      $username = '';
                      $email = '';
                      $gender = '';
                      $mobileNumber = '';
                      $dob = '';
                      $password = '';
                      $confirmPassword = '';
                      $doorNumber = '';
                      $addressLine1 = '';
                      $addressLine2 = '';
                      $city = '';
                      $state = '';
                      $pincode = '';
                      $linkedin = '';
                      $facebook = '';
                      $instagram = '';
                      $twitter = '';

                      // Retrieve data from the database
                      $user_query = 'SELECT * FROM users';
                      $temp = $connection->query($user_query);
                      $s = 1;

                      if ($temp->num_rows > 0) {
                        while ($row = $temp->fetch_assoc()) {
                          $id = $row['id'];
                          $username = $row['user'];
                          $email = $row['email'];
                          $gender = $row['gender'];
                          $mobileNumber = $row['mobileNumber'];
                          $dob = $row['dob'];
                          $password = $row['password'];
                          // Check if "confirmPassword" key exists in the $row array
                          $confirmPassword = isset($row['confirmPassword']) ? $row['confirmPassword'] : '';
                          $doorNumber = $row['doorNumber'];
                          $addressLine1 = $row['addressLine1'];
                          $addressLine2 = $row['addressLine2'];
                          $city = $row['city'];
                          $state = $row['state'];
                          $pincode = $row['pincode'];
                          $linkedin = $row['linkedin'];
                          $facebook = $row['facebook'];
                          $instagram = $row['instagram'];
                          $twitter = $row['twitter'];
                          $KYCStatus = $row['KYCStatus'];

                          // Display the retrieved data in the table
                          echo "<tr>";
                          echo "<th scope='row'>$s</th>";
                          echo "<td id='username-$id'>$username</td>";
                          echo "<td id='email-$id'>$email</td>";
                          echo "<td id='mobileNumber-$id'>$mobileNumber</td>";
                          echo "<td id='dob-$id'>$dob</td>";
                          echo "<td id='doorNumber-$id'>$doorNumber</td>";
                          echo "<td id='addressLine1-$id'>$addressLine1</td>";
                          echo "<td id='city-$id'>$city</td>";
                          echo "<td id='pincode-$id'>$pincode</td>";
                          echo "<td id='KYCStatus-$id'>$KYCStatus</td>";
                          echo "<td><button type='button' class='btn btn-primary' onclick='openPopup($id, \"$username\",\"$email\",\"$gender\",\"$mobileNumber\",\"$dob\",\"$password\",\"$confirmPassword\",\"$doorNumber\",\"$addressLine1\",\"$addressLine2\",\"$city\",\"$state\",\"$pincode\",\"$linkedin\",\"$facebook\",\"$instagram\",\"$twitter\")'>View More</button>
                                <button type='button' class='btn btn-danger' onclick='deleteUser($id)'>Delete</button></td>";
                          echo "</tr>";
                          $s = $s + 1;
                        }
                      } else {
                        echo "<tr><td colspan='4'>No data found in the database.</td></tr>";
                      }
                      ?>

                  </tbody>
              </table>
            </div>
          </div>

        </div>

        <!-- /#page-content-wrapper -->
    </div>
          <div id="popup" class="popup">
          <div class="popup-content popup-container">
            <h2>Edit User</h2>
            <form action="updateUser.php" id="update" method="POST" enctype="multipart/form-data">
              <div class="mb-3">
                <input type="hidden" name="editUserId" id="editUserId">
                <label for="editUsername" class="form-label">Username</label>
                <input type="text" class="form-control" name="editUsername" id="editUsername">
              </div>
              <div class="mb-3">
                <label for="editEmail" class="form-label">Email</label>
                <input type="email" class="form-control" name="editEmail" id="editEmail">
              </div>
              <div class="mb-3">
                <label for="editGender" class="form-label">Gender</label>
                <select id="editGender" class="form-select" name="editGender">
                  <option value="">Select Gender</option>
                  <option value="male">Male</option>
                  <option value="female">Female</option>
                  <option value="other">Other</option>
                </select>
              </div>
              <div class="mb-3">
                <label for="editMobileNumber" class="form-label">Mobile Number</label>
                <input type="tel" class="form-control" name="editMobileNumber" id="editMobileNumber">
              </div>
              <div class="mb-3">
                <label for="editDOB" class="form-label">Date of Birth</label>
                <input type="date" class="form-control" name="editDOB" id="editDOB">
              </div>
              <div class="mb-3">
                <label for="editPassword" class="form-label">Password</label>
                <input type="password" class="form-control" name="editPassword" id="editPassword">
              </div>
              <div class="mb-3">
                <label for="editConfirmPassword" class="form-label">Confirm Password</label>
                <input type="password" class="form-control" name="editConfirmPassword" id="editConfirmPassword">
              </div>
              <div class="mb-3">
                <label for="editDoorNumber" class="form-label">Door Number</label>
                <input type="text" class="form-control" name="editDoorNumber" id="editDoorNumber">
              </div>
              <div class="mb-3">
                <label for="editAddressLine1" class="form-label">Address Line 1</label>
                <input type="text" class="form-control" name="editAddressLine1" id="editAddressLine1">
              </div>
              <div class="mb-3">
                <label for="editAddressLine2" class="form-label">Address Line 2</label>
                <input type="text" class="form-control" name="editAddressLine2" id="editAddressLine2">
              </div>
              <div class="mb-3">
                <label for="editCity" class="form-label">City</label>
                <input type="text" class="form-control" name="editCity" id="editCity">
              </div>
              <div class="mb-3">
                <label for="editState" class="form-label">State</label>
                <input type="text" class="form-control" name="editState" id="editState">
              </div>
              <div class="mb-3">
                <label for="editPincode" class="form-label">Pincode</label>
                <input type="text" class="form-control" name="editPincode" id="editPincode">
              </div>
              <div class="mb-3">
                <label for="editLinkedIn" class="form-label">LinkedIn</label>
                <input type="text" class="form-control" name="editLinkedIn" id="editLinkedIn">
              </div>
              <div class="mb-3">
                <label for="editFacebook" class="form-label">Facebook</label>
                <input type="text" class="form-control" name="editFacebook" id="editFacebook">
              </div>
              <div class="mb-3">
                <label for="editInstagram" class="form-label">Instagram</label>
                <input type="text" class="form-control" name="editInstagram" id="editInstagram">
              </div>
              <div class="mb-3">
                <label for="editTwitter" class="form-label">Twitter</label>
                <input type="text" class="form-control" name="editTwitter" id="editTwitter">
              </div>
              <div class="text-center d-flex justify-content-between">
                <button type="submit" class="btn btn-primary" id="save">Save Changes</button>
                <button type="button" class="btn btn-primary" onclick="closePopup()">Close</button>
              </div>
            </form>
          </div>
        </div>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        var el = document.getElementById("wrapper");
        var toggleButton = document.getElementById("menu-toggle");

        toggleButton.onclick = function () {
            el.classList.toggle("toggled");
        };


        function highlightItem(element) {
            var listItems = document.getElementsByClassName("list-group-item-action");
            for (var i = 0; i < listItems.length; i++) {
                listItems[i].classList.remove("active");
            }
            element.classList.add("active");
        };
        
        // Function to hide all submenus except the one clicked
    function showSubMenu(collapseId) {
        var collapses = document.getElementsByClassName("collapse");
        for (var i = 0; i < collapses.length; i++) {
          var collapse = collapses[i];
          if (collapse.id === collapseId) {
            collapse.classList.toggle("show");
          } else {
            collapse.classList.remove("show");
          }
        }
      }
  
      // Event listener for dropdown menu items
      var dropdownItems = document.getElementsByClassName("list-group-item-action");
      for (var i = 0; i < dropdownItems.length; i++) {
        var dropdownItem = dropdownItems[i];
        dropdownItem.addEventListener("click", function(event) {
          event.preventDefault();
          showSubMenu(this.getAttribute("data-bs-target").slice(1));
        });
      }
      function openPopup(id, username, email, gender, mobileNumber, dob, password, confirmPassword, doorNumber, addressLine1, addressLine2, city, state, pincode, linkedin, facebook, instagram, twitter) {
        // Set the values of the inputs in the popup form
        document.getElementById('editUserId').value = id;
        document.getElementById('editUsername').value = username;
        document.getElementById('editEmail').value = email;
        document.getElementById('editGender').value = gender;
        document.getElementById('editMobileNumber').value = mobileNumber;
        document.getElementById('editDOB').value = dob;
        document.getElementById('editPassword').value = password;
        document.getElementById('editConfirmPassword').value = confirmPassword;
        document.getElementById('editDoorNumber').value = doorNumber;
        document.getElementById('editAddressLine1').value = addressLine1;
        document.getElementById('editAddressLine2').value = addressLine2;
        document.getElementById('editCity').value = city;
        document.getElementById('editState').value = state;
        document.getElementById('editPincode').value = pincode;
        document.getElementById('editLinkedIn').value = linkedin;
        document.getElementById('editFacebook').value = facebook;
        document.getElementById('editInstagram').value = instagram;
        document.getElementById('editTwitter').value = twitter;

        // Show the popup
        document.getElementById('popup').style.display = 'block';
      }

      function closePopup() {
        // Hide the popup
        document.getElementById('popup').style.display = 'none';
      }
        function deleteUser(id) {
      // Show a confirmation dialog
      if (confirm('Are you sure you want to delete this user?')) {
        // Send an AJAX request to the server to delete the row
        var xhr = new XMLHttpRequest();
        xhr.open('POST', 'deleteUser.php', true);
        xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
        xhr.onload = function () {
          if (xhr.status === 200) {
            // If the delete operation is successful, reload the page
            location.reload();
          } else {
            // Display an error message if the delete operation fails
            alert('Error deleting user');
          }
        };
        xhr.send('id='+id);
      }
    }

    function searchUsers() {
      var filterUsername = document.getElementById('filterUsername')?.value || '';
      var filterEmail = document.getElementById('filterEmail')?.value || '';
      var filterPhoneNumber = document.getElementById('filterPhoneNumber')?.value || '';
      var filterCity = document.getElementById('filterCity')?.value || '';
      var filterPincode = document.getElementById('filterPincode')?.value || '';
      var filterStatus = document.getElementById('filterStatus')?.value || '';
      
      // Create a new FormData object and append the filter values
      var formData = new FormData();
      formData.append('filterUsername', filterUsername);
      formData.append('filterEmail', filterEmail);
      formData.append('filterPhoneNumber', filterPhoneNumber);
      formData.append('filterCity', filterCity);
      formData.append('filterPincode', filterPincode);
      formData.append('filterStatus', filterStatus);

      console.log(filterStatus);
      
      // Send the form data to the PHP script
      var xhr = new XMLHttpRequest();
      xhr.open('POST', 'userFilter.php');
      xhr.onload = function() {
          if (xhr.status === 200) {
              // Update the table body with the filtered results
              document.getElementById('users').innerHTML = xhr.responseText;
          }
      };
      xhr.send(formData);
    }

    document.getElementById('search').addEventListener('click', function() {
      searchUsers();
    });

    $(document).ready(function () {
      // Function to handle the AJAX request
      function updateUser() {
          $.ajax({
              type: "POST",
              url: "updateUser.php",
              data: new FormData($('#update')[0]), // Use the actual form ID 'update'
              processData: false,
              contentType: false,
              success: function (response) {
                  if (typeof response === 'object') {
                      if (response.message && response.message.startsWith('error')) {
                          Swal.fire({
                              icon: 'error',
                              title: 'Failed to update data',
                              text: 'There was an error updating your User: ' + response.message.substring(6),
                              confirmButtonText: 'OK'
                          });
                      } else if (response.message === 'success') {
                          Swal.fire({
                              icon: 'success',
                              title: 'User updated successfully',
                              text: 'Your data has been updated successfully.',
                              
                              timer: 5000, // Automatically close after 5 seconds
                              didClose: () => {
                                  location.reload();
                              }
                          });
                      }
                  } else {
                      console.log("Response is not a valid JSON object:", response);
                  }
              },
              error: function (error) {
                  console.error("AJAX request failed:", error);
              }
          });
      }

      // Attach the 'submit' event to the form
      $('#update').submit(function (e) {
          e.preventDefault(); // Prevent the default form submission
          updateUser(); // Call the updateLocation function for AJAX request
      });
  });
    </script>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>


</body>

</html>