
<html>
    <head>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css">
    </head>
    <style>
        body{
		background-color: #25274d;
	}
	.contact{
		padding: 4%;
		height: 400px;
	}
	.col-md-3{
		background: #ff9b00;
		padding: 4%;
		border-top-left-radius: 0.5rem;
		border-bottom-left-radius: 0.5rem;
	}
	.contact-info{
		margin-top:10%;
	}
	.contact-info img{
		margin-bottom: 15%;
	}
	.contact-info h2{
		margin-bottom: 10%;
	}
	.col-md-9{
		background: #fff;
		padding: 3%;
		border-top-right-radius: 0.5rem;
		border-bottom-right-radius: 0.5rem;
	}
	.contact-form label{
		font-weight:600;
	}
	.contact-form button{
		background: #25274d;
		color: #fff;
		font-weight: 600;
		width: 25%;
	}
	.contact-form button:focus{
		box-shadow:none;
	}
    </style>

    <body>
       
<div class="container contact">
	<div class="row">
		<div class="col-md-3">
			<div class="contact-info">
				<img src="https://upload.wikimedia.org/wikipedia/en/thumb/1/17/Wafa_Movement.png/300px-Wafa_Movement.png" style="width: 10rem;" alt="image"/>
				
				<h4>pleae Fill the complain Status Form.</h4>
				<!-- <h4>We would love to hear from you !</h4> -->
				<br>
				<h5 style="text-align: center">Yusra Bibi</h5>
				<p style="text-align: center">Information Manager
				WAFA Complaint Emergencies Program
				WAFA Country Office Islamabad</p>
			</div>
		</div>
		<div class="col-md-9">
			<form class="contact-form" id="myform" action="complain_status_validation.php" method="POST">
                <div class="form-group">
                    <label class="control-label col-sm-6" for="fname">Coplain User Id</label>
                    <div class="col-sm-10">          
                      <input type="number" class="form-control" placeholder="Enter Complain User Id" id="fname" name="complain_user_id">
                    </div>
                  </div>
				  
				<div class="form-group">
				  <label class="control-label col-sm-6" for="fname">Complain User Name:</label>
				  <div class="col-sm-10">          
					<input type="text" class="form-control" id="username" placeholder="Enter Complain User name"  name="complain_user_name"/>
				  </div>
				</div>
				<div class="form-group">
                    <label class="control-label col-sm-6" for="email">Complain User Phone Number:</label>
                    <div class="col-sm-10">
                      <input type="number" class="form-control" id="address" placeholder="Enter Phone No.." name="complain_user_phone">
                    </div>
                </div>
                  
				<div class="form-group">
				  <label class="control-label col-sm-6" for="comment"> Complaint Status:</label>
				  <div class="col-sm-10">
                            <select class="form-control" name="complain_user_status">
                            <option value="done">Done</option>
                            <option value="inprogress">In Progress</option>
                            <option value="rejected">Rejected</option>
                   </select>
				  </div>
                </div>
				<div class="form-group">
                    <label class="control-label col-sm-6" for="email">Complain User Email:</label>
                    <div class="col-sm-10">
                      <input type="email" class="form-control" id="address" placeholder="Enter Email.." name="complain_user_email">
                    </div>
                </div>

				<div class="form-group">        
				  <div class="col-sm-offset-2 col-sm-10">
					<button type="submit" class="btn btn-default">Submit</button>
				  </div>
				</div>
			</form>
		</div>
    </div>

</div>
 


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.15.0/umd/popper.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script>


<script>
$(document).ready(function(){
 var form = $('#myform');
 $('#myform').submit(function(event){
     event.preventDefault();
   $.ajax({
       url: form.attr("action"),
       type: 'post',
       data: $("#myform").serialize(),
       success: function(data){
           alert(data);
       }
   })
 });
})
</script>

  




</body>
</html>


