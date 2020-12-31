 <!-- Masthead-->
 <style type="text/css">
     .column {
  float: left;
  width: 25%;
  padding: 0 5px;
}

.row {margin: 0 -5px;}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Responsive columns */
@media screen and (max-width: 600px) {
  .column {
    width: 100%;
    display: block;
    margin-bottom: 10px;
  }
}

/* Style the counter cards */
.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  padding: 16px;
  text-align: center;
  background-color: #444;
  color: white;
}

.fa {font-size:50px;}
 </style>
        <header class="masthead">
            <div class="container">
                <div class="row h-100 align-items-center justify-content-center text-center">
                        <div style="margin-top: 200px;">
                            <h2 style="color: #EC9453;">Come & enjoy precious moment with us</h2><br>
                        </div>
                        <div class="col-lg-10 align-self-end mb-4" style="background: none;">
                            <h1 class="text-uppercase text-white font-weight-bold">Welcome To Booking.com</h1>
                            <hr class="divider my-4" />
                        </div>
                    <div class="col-lg-10 align-self-end mb-4">
                    	<div class="card" id="filter-book">
                    		<div class="card-body">
                    			<div class="container-fluid">
                    				<form action="index.php?page=list" id="filter" method="POST">
                    					<div class="row">
                                            <div class="col-md-3">
                                                <label for="">Booking.com</label>
                                                <label class="btn-btn-block btn-primary" style="padding-right: 10px; padding-left: 10px; padding-top: 10px; padding-bottom: 10px;">Pick A Date Now !</label>
                                            </div>
                    						<div class="col-md-3">
                    							<label for="">Check-in Date</label>
                    							<input style="height: 45px;"  type="text" class="form-control datepicker" name="date_in" autocomplete="off">
                    						</div>
                    						<div class="col-md-3">
                    							<label for="">Check-out Date</label>
                    							<input style="height: 45px;" type="text" class="form-control datepicker" name="date_out" autocomplete="off">
                    						</div>
                    						
                    						<div class="col-md-3">
                    							<button style=" margin-top: 30px; padding-right: 10px; padding-left: 10px; padding-top: 10px; padding-bottom: 10px;" class="btn-btn-block btn-primary">Check Availability</button>
                    						</div>

                    					</div>
                    				</form>
                    			</div>
                    		</div>
                    	</div>
                    </div>
                    
                </div>
            </div>
        </header>
	<section class="page-section">
                        <div class=" align-self-end mb-4" style="background: none;">
                            <center><h1 class="text-uppercase text-black font-weight-bold">Our Packages</h1></center>
                            <hr class="divider my-4" />
                        </div>
        </section>
	<div id="portfolio" style="background-color: #0000002e; padding-top: 50px; padding-bottom: 50px;">
            <div class="container-fluid p-0">
                <div class="row no-gutters">
                	<?php 
                	include'admin/db_connect.php';
                	$qry = $conn->query("SELECT * FROM  room_categories order by rand() ");
                	while($row = $qry->fetch_assoc()):
                	?>
                    <div class="col-lg-4 col-sm-4">
                        <a class="portfolio-box" href="index.php?page=list">
                            <img class="img-fluid" src="assets/img/<?php echo $row['cover_img'] ?>" alt="" />
                            <div class="portfolio-box-caption">
                                <div class="project-category text-white-30"><?php echo "$ ".number_format($row['price'],2) ?> per day</div>
                                <div class="project-name"><?php echo $row['name'] ?></div>
                            </div>
                        </a>
                    </div>
                	<?php endwhile; ?>

                </div>
            </div>
        </div>

        <div class=" align-self-end mb-4" style="background: none; margin-top: 100px;">
            <center><h1 class="text-uppercase text-black font-weight-bold">Room Features</h1></center>
            <hr class="divider my-4" />
        </div>

        <div class="row" style="margin-top: 150px;">
            <div class="column">
                <div class="card">
                    <p><i class="fas fa-bed fa-3x" style="size: 10%"></i></p>
                    <h3>MASTER BEDROOMS</h3>
                    <p>BOOKING.COM</p>
                </div>
            </div>

        <div class="column">
          <div class="card">
            <p><i class="fas fa-water fa-3x"></i></p>
            <h3>SEA VIEW BALCONY</h3>
            <p>BOOKING.COM</p>
          </div>
        </div>
  
  <div class="column">
    <div class="card">
      <p><i class="fas fa-coffee fa-3x"></i></p>
      <h3>LARGE CAFE</h3>
      <p>BOOKING.COM</p>
    </div>
  </div>
  
  <div class="column">
    <div class="card">
      <p><i class="fas fa-wifi fa-3x"></i></p>
      <h3>WIFI COVERAGE</h3>
      <p>BOOKING.COM</p>
    </div>
  </div>
    </div>
</div>