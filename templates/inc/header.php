<!DOCTYPE html>
<html>
<head>
	<title>JobLister</title>
	<link rel="stylesheet" href="css/flatly-bootstrap.css">
	<link rel="stylesheet" href="css/styles.css">
</head>
<body>
	<div class="container">
    <div class="bs-component">
      <!-- <nav class="navbar navbar-expand-lg bg-body-tertiary"> -->
      <nav class="navbar navbar-expand-lg bg-primary" data-bs-theme="dark">
        <div class="container-fluid">
            <h3 class="text-muted"> <?php echo SITE_TITLE; ?></h3>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <!-- <div class="collapse navbar-collapse" id="navbarColor01"> -->
          <!-- <div class="collapse navbar-collapse"> -->
          <div class="d-flex">
            <!-- <ul class="navbar-nav me-auto"> -->
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link active" href="index.php">Home
                  <span class="visually-hidden">(current)</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="create.php">Create Listing</a>
              </li>
              
            </ul>
          </div>
        </div>
      </nav>
      <h3 class="text-muted"><?php // echo SITE_TITLE; ?></h3>
    </div>

<div class="p-4"></div>

    <!-- <div class="header clearfix"> -->
      <!-- <nav>
        <ul class="nav nav-pills pull-right">
          <li role="presentation"><a href="index.php">Home</a></li>
          <li role="presentation"><a href="create.php">Create Listing</a></li>
        </ul>
      </nav> -->
      <!-- <h3 class="text-muted"><?php // echo SITE_TITLE; ?></h3> -->
    <!-- </div> -->
  <?php displayMessage(); ?>


     