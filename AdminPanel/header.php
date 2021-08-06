<html>
<head>
	<title>Header</title>
</head>
<body>
<div class="container-fluid">
	<div class="row">
	<div class="col-sm-12">
	<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Admin Page</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      
      <li class="nav-item">
		<a class="nav-link" href="profile.php">My account</a>
      </li>
      <li class="nav-item">
		<a class="nav-link" href="update.php">Update profile</a>      </li>
		 <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Sell Property
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="addsellproperty.php">Add property</a>
          <a class="dropdown-item" href="viewsellproperty.php">View Property</a>
          </div>
		  </li>
		  
	  <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Govt Project
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="govtaddproperty.php">Add Project</a>
          <a class="dropdown-item" href="govtviewproperty.php">View Project</a>
          </div>
		  </li>
	  <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          History
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="historyadd.php">Add History</a>
          <a class="dropdown-item" href="historyview.php">View History</a>
          </div>
		  </li>
      
	   <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Job
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="jobadd.php">Add Job</a>
          <a class="dropdown-item" href="jobview.php">View Job</a>
          </div>
		  </li>
		  <li class="nav-item">
        <a class="nav-link" href="feeback.php">Feedback</a>
      </li>
	  <li class="nav-item">
        <a class="nav-link" href="logout.php">logout</a>
      </li>
    </ul>
  </div>
</nav>
	</div>
	</div>
</div>
</body>
</html>