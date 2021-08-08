<?php include"header.php"?>



 <div class="clearfix"></div>
      <div class="clearfix"></div>
      <div class="abt_bx abt_bx_inner" style="background:none; min-height:inherit;">
         <div class="container">
            <div class="col-md-12">
               <h2 class="heading_prd">
                  Contact Us    
                  <div class="clearfix"></div>
                  <img src="1/images/head-ic.png"> 
               </h2>
            </div>
         </div>
      </div>
      <div class="clearfix"></div>
     
      <div class="clearfix"></div>
      <section class="container mt-5">
         <!--Contact heading-->
         <div class="row">
            <!--Grid column-->
            <div class="col-sm-12 mb-4 col-md-5">
               <!--Form with header-->
			  <form method="post" action="#" name="frmContact" id="frmContact" method="post">
               <div class="card border-primary rounded-0">
                  <div class="card-header p-0">
                     <div class="bg-primary text-white text-center py-2">
                        <h3>Write to us:</h3>
                     </div>
                  </div>

                  <div class="card-body p-3">
                     <div class="form-group">
                        <label> Your Name </label>
                        <div style="width:100%;" class="input-group">
                           <input value="" type="text" name="txtName" id="txtName" class="form-control" id="inlineFormInputGroupUsername" placeholder="Name" required />
                        </div>
                     </div>
                     <div class="form-group">
                        <label>Your Email</label>
                        <div style="width:100%;" class="input-group mb-2 mb-sm-0">
                           <input type="email" value="" name="txtEmail" id="txtEmail"  class="form-control" id="inlineFormInputGroupUsername" placeholder="Email" required />
                        </div>
                     </div>
                     <style>
                       .form-group label{
                        font-size:18px;

                       }
                       .form-group input{
                        font-size:18px;

                       }
                     </style>
                       <div class="form-group">
                        <label>Your Phone</label>
                        <div style="width:100%;" class="input-group mb-2 mb-sm-0">
                           <input style="width:100%;" type="number" value="" name="txtPhone" id="txtPhone"   class="form-control" id="inlineFormInputGroupUsername" placeholder="Phone" required />
                        </div>
                     </div>
                     
                     <div class="form-group">
                        <label>Message</label>
                        <div style="width:100%;" class="input-group mb-2 mb-sm-0">
                           <input style="height:130px;" type="text" class="form-control" name="txtComment" id="txtComment" placeholder="Message" required />
                        </div>
                     </div>
           
                    <div class="message_box" style="text-align:left;font-weight:100;"></div>
           
           
           
           
           
                     <div class="text-center">
                        <input type="button" name="frmSubmitContact" id="frmSubmitContact" value="Submit" onClick="btnContactForm()" class="btn btn-primary btn-block rounded-0 py-2" />
            <input id="submitContactForm" type="submit" style="display: none" />
                     </div>
                  </div>
               </div>
         </form>
         <br>
            </div>
            <!--Grid column-->
            <!--Grid column-->
            <div class="col-sm-12 col-md-7">
               <!--Google map-->
               <div class="mb-4">


                  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3774.7786656748663!2d82.52226915032826!3d18.896897787128044!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a3a935efaeadc9b%3A0xfa91b76f55b7700e!2sAmruth(Vignesh%20foods)!5e0!3m2!1sen!2sin!4v1627218083780!5m2!1sen!2sin" width="100%" height="350" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
               </div>
               <!--Buttons-->
               <div class="row text-center">
                  <div class="col-md-4">
                     <a class="bg-primary px-3 py-2 rounded text-white mb-2 d-inline-block"><i class="fa fa-map-marker"></i></a>
                     <p>Bagriaguda, near paper mill jeypore, odisha 764002 India </p>
                  </div>
                  <div class="col-md-4">
                     <a class="bg-primary px-3 py-2 rounded text-white mb-2 d-inline-block"><i class="fa fa-phone"></i></a>
                     <p>+91 9437123433 </p>
                  </div>
                  <div class="col-md-4">
                     <a class="bg-primary px-3 py-2 rounded text-white mb-2 d-inline-block"><i class="fa fa-envelope"></i></a>
                     <p> vigneshfoods.jeypore@gmail.com </p>
                  </div>
               </div>
            </div>
            <!--Grid column-->
         </div>
      </section>
<?php include"footer.php"?>