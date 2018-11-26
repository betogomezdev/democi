<html>
 <head>
        <title>CodeIgniter Tutorial</title>
        <link rel="stylesheet" href="<?php echo base_url().'assets/css/bootstrap.min.css'; ?>">
        <script src="<?php echo base_url().'assets/js/jquery.js'; ?>" charset="utf-8"></script>
        <script src="<?php echo base_url().'assets/js/bootstrap.min.js'; ?>" charset="utf-8"></script>
        <script src="<?php echo base_url().'assets/js/app.js'; ?>" charset="utf-8"></script>
        </head>
 <body>

<div class="top-row pl-4 navbar navbar-dark">
    <a class="navbar-brand" href="">ServerSideSPA</a>
    <button class="navbar-toggler" >
        <span class="navbar-toggler-icon"></span>
    </button>
</div>
<div class= "collapse" >
    <ul class="nav flex-column">
        <li class="nav-item px-3">
                <span class="oi oi-home" aria-hidden="true"></span> Home
        </li>
        <li class="nav-item px-3">
            <NavLink class="nav-link" href="fetchemployee">
                <span class="oi oi-list-rich" aria-hidden="true"></span> Fetch employee
            </NavLink>
        </li>
    </ul>
</div>
<h1><?php echo $title; ?></h1>
