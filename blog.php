<?php include"header.php"?>


<style>
	
	body {
  padding: 2rem 0rem;
}

.card-img {
  border-bottom-left-radius: 0px;
  border-bottom-right-radius: 0px;
}

.card-title {
  margin-bottom: 0.3rem;
}

.cat {
  display: inline-block;
  margin-bottom: 1rem;
}

.fa-users {
  margin-left: 1rem;
}

.card-footer {
  font-size: 0.8rem;
}
</style>

<center>
	<div style="padding-top:4%;padding-bottom:4%;background: #000;" class="container">
		<h1 style="color:#fff;font-weight:bold;font-size:49px;">Our Blog</h1>
	</div>

</center>
<div style="margin-top:10%;" class="container">
  <div class="row">
    <div class="col-12 col-sm-8 col-md-6 col-lg-4">
      <div class="card">
        <img class="card-img" src="https://amruth.org/wp-content/uploads/2018/10/7a0944cb34c2618e097be784ae96a435.png" alt="Bologna">
        <div class="card-img-overlay">
          <a href="#" class="btn btn-light btn-sm">Jaggery</a>
        </div>
        <div class="card-body">
          <h4 class="card-title">Jaggery</h4>
          <small style="color:#000;font-weight:bold;font-size:12px;" class="text-muted cat">
            <i class="far fa-clock text-info"></i> 30 minutes
            <i class="fas fa-users text-info"></i> 4 portions
          </small>
          <p class="card-text" style="color:#000;font-weight:bold;font-size:12px;">I love quick, simple Jaggery dishes, and this is one of my favorite.</p>
          <a style="background:#000;color:#fff;font-weight:bold;font-size:18px;" href="#" class="btn btn-info">Read Recipe</a>
        </div>
        <div class="card-footer text-muted d-flex justify-content-between bg-transparent border-top-0">
          <div class="views" style="color:#000;font-weight:bold;font-size:15px;">8/7/21  12:45 AM
          </div>
          <div style="color:#000;font-weight:bold;font-size:15px;" class="stats">
           	<i class="far fa-eye"></i> 1347
            <i class="far fa-comment"></i> 12
          </div>
           
        </div>
      </div>
    </div>
  </div>
</div>
<br>
<?php include"footer.php"?>