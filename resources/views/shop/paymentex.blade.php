<!doctype html>
<html lang="es">
<head>
<meta charset="UTF-8">
<title>CheckOut</title>
<meta name="viewport"
	content="width=device-width, initial-scale=1, shrink-to-fit=no">
<!-- <link rel="stylesheet" -->
<!-- 	href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" -->
<!-- 	integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" -->
<!-- 	crossorigin="anonymous"> -->
<!-- <link rel="stylesheet" -->
<!-- 	href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css"> -->
<!-- <link rel="stylesheet" -->
<!-- 	href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" -->
<!-- 	integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" -->
<!-- 	crossorigin="anonymous"> -->
<!--  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script> -->

<script src="https://code.jquery.com/jquery-1.11.3.min.js" charset="UTF-8"></script>

<link href="https://cdn.paymentez.com/js/ccapi/stg/paymentez.min.css" rel="stylesheet" type="text/css" />
<script src="https://cdn.paymentez.com/js/ccapi/stg/paymentez.min.js" charset="UTF-8"></script>


<style>
.panel {
	margin: 0 auto;
	background-color: #F5F5F7;
	border: 1px solid #ddd;
	padding: 20px;
	display: block;
	width: 80%;
	border-radius: 6px;
	box-shadow: 0 2px 4px rgba(0, 0, 0, .1);
}

.btn {
	background: rgb(140, 197, 65); /* Old browsers */
	background: -moz-linear-gradient(top, rgba(140, 197, 65, 1) 0%,
		rgba(20, 167, 81, 1) 100%); /* FF3.6-15 */
	background: -webkit-linear-gradient(top, rgba(140, 197, 65, 1) 0%,
		rgba(20, 167, 81, 1) 100%); /* Chrome10-25,Safari5.1-6 */
	background: linear-gradient(to bottom, rgba(140, 197, 65, 1) 0%,
		rgba(20, 167, 81, 1) 100%);
	/* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */
	filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#44afe7',
		endColorstr='#3198df', GradientType=0);
	color: #fff;
	display: block;
	width: 100%;
	border: 1px solid rgba(46, 86, 153, 0.0980392);
	border-bottom-color: rgba(46, 86, 153, 0.4);
	border-top: 0;
	border-radius: 4px;
	font-size: 17px;
	text-shadow: rgba(46, 86, 153, 0.298039) 0px -1px 0px;
	line-height: 34px;
	-webkit-font-smoothing: antialiased;
	font-weight: bold;
	display: block;
	margin-top: 20px;
}

.btn:hover {
	cursor: pointer;
}
</style>
</head>
<body>
	@include('partials.header')
	<!-- 	<div class="container"> -->


	<!-- 		<div class="row"> -->
	<!-- 			<div class="col-sm-6 col-md-6 col-md-offset-3 col-sm-offset-3"> -->
	<h1>CheckOut</h1>
	<h4>Su total: {{$total}}</h4>
	<!-- 				<div id="charge-error" -->
	<!-- 					class="alert alert-danger {{ !Session::has('error') ? 'hidden' : ''  }}"> -->
	<!-- 					{{ Session::get('error') }}</div> -->
	<!-- 				<form action="{{route('checkout')}}" method="post" -->
	<!-- 					id="checkout-form"> -->

	<!-- 					<div class="row"> -->
	<!-- 						<div class="col-md-12"> -->
	<!-- 							<div class="form-group"> -->
	<!-- 								<label for="name">Tú nombre:</label> <input type="text" -->
	<!-- 									id="name" class="form-control" required> -->
	<!-- 							</div> -->
	<!-- 						</div> -->
	<!-- 						<div class="col-md-12"> -->
	<!-- 							<div class="form-group"> -->
	<!-- 								<label for="address">Tú dirección:</label> <input type="text" -->
	<!-- 									id="address" class="form-control" required> -->
	<!-- 							</div> -->
	<!-- 						</div> -->
	<!-- 						<hr> -->
	<!-- 						<div class="col-md-12"> -->
	<!-- 							<div class="form-group"> -->
	<!-- 								<label for="card-name">El nombre que esta en tú tarjeta:</label> -->
	<!-- 								<input type="text" id="card-name" class="form-control" required> -->
	<!-- 							</div> -->
	<!-- 						</div> -->
	<!-- 						<div class="col-md-12"> -->
	<!-- 							<div class="form-group"> -->
	<!-- 								<label for="card-number">El número de tú tarjeta:</label> <input -->
	<!-- 									type="text" id="card-number" class="form-control" required> -->
	<!-- 							</div> -->
	<!-- 						</div> -->
	<!-- 						<div class="col-md-12"> -->
	<!-- 							<div class="row"> -->
	<!-- 								<div class="col-md-6"> -->
	<!-- 									<div class="form-group"> -->
	<!-- 										<label for="card-expiry-month">Mes de Expiración:</label> <input -->
	<!-- 											type="text" id="card-expiry-month" class="form-control" -->
	<!-- 											required> -->
	<!-- 									</div> -->
	<!-- 								</div> -->
	<!-- 								<div class="col-md-6"> -->
	<!-- 									<div class="form-group"> -->
	<!-- 										<label for="card-expiry-year">Año de Expiración:</label> <input -->
	<!-- 											type="text" id="card-expiry-year" class="form-control" -->
	<!-- 											required> -->
	<!-- 									</div> -->
	<!-- 								</div> -->
	<!-- 							</div> -->
	<!-- 						</div> -->
	<!-- 						<div class="col-md-12"> -->
	<!-- 							<div class="form-group"> -->
	<!-- 								<label for="card-cvc">CVC</label> <input type="text" -->
	<!-- 									id="card-cvc" class="form-control" required> -->
	<!-- 							</div> -->
	<!-- 						</div> -->
	<!-- 					</div> -->
	<!-- 					{{ csrf_field() }} -->
	<!-- 					<button type="submit" class="btn btn-success">Comprar Ahora!</button> -->

	<!-- 				</form> -->


	<!-- 			</div> -->
	<!-- 		</div> -->
	<!-- 	</div> -->


	<div class="panel">
		<form id="add-card-form"  data-use-dropdowns="true" >
			<div class="paymentez-form" id="my-card" data-capture-name="true" data-use-dropdowns="true"></div>
			<button class="btn">Agregar Tarjeta</button>
			<br />
			<div id="messages"></div>
		</form>

	</div>
<!-- 	 	<script  -->
<!-- 	 		src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"  -->
<!-- 	 		integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"  -->
<!-- 			crossorigin="anonymous"></script>  -->
<!-- 	 	<script  -->
<!-- 		src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"  -->
<!--  		integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"  -->
<!-- 		crossorigin="anonymous"></script>  -->

<script>
$(function() {

  //
  // EXAMPLE CODE FOR PAYMENTEZ INTEGRATION
  // ---------------------------------------------------------------------------
  //
  //  1.) You need to import the Paymentez JS -> https://cdn.paymentez.com/js/v1.0.1/paymentez.min.js
  //
  //  2.) You need to import the Paymentez CSS -> https://cdn.paymentez.com/js/v1.0.1/paymentez.min.css
  //
  //  3.) Add The Paymentez Form
  //  <div class="paymentez-form" id="my-card" data-capture-name="true"></div>
  //
  //  3.) Init library
  //  Replace "PAYMENTEZ_CLIENT_APP_CODE" and "PAYMENTEZ_CLIENT_APP_KEY" with your own Paymentez Client Credentials.
  //
  // 4.) Add Card: converts sensitive card data to a single-use token which you can safely pass to your server to charge the user.

  /**
   * Init library
   *
   * @param env_mode `prod`, `stg`, `local` to change environment. Default is `stg`
   * @param paymentez_client_app_code provided by Paymentez.
   * @param paymentez_client_app_key provided by Paymentez.
   */
  Paymentez.init('stg', 'PAYMENTEZ_CLIENT_APP_CODE', 'PAYMENTEZ_CLIENT_APP_KEY');
  
  var form              = $("#add-card-form");
  var submitButton            = form.find("button");
  var submitInitialText = submitButton.text();

  $("#add-card-form").submit(function(e){
    var myCard = $('#my-card');
    $('#messages').text("");
    var cardToSave = myCard.PaymentezForm('card');
  
    if(cardToSave == null){
      $('#messages').text("Invalid Card Data");
    }else{
      submitButton.attr("disabled", "disabled").text("Card Processing...");    
      
      /*
      After passing all the validations cardToSave should have the following structure:

       var cardToSave = {
                          "card": {
                            "number": "5119159076977991",
                            "holder_name": "Martin Mucito",
                            "expiry_month": 9,
                            "expiry_year": 2020,
                            "cvc": "123",
                            "type": "vi"
                          }
                        };

      */

      
      var uid = "uid1234";
      var email = "dev@paymentez.com";

      /* Add Card converts sensitive card data to a single-use token which you can safely pass to your server to charge the user.
       *
       * @param uid User identifier. This is the identifier you use inside your application; you will receive it in notifications.
       * @param email Email of the user initiating the purchase. Format: Valid e-mail format.
       * @param card the Card used to create this payment token
       * @param success_callback a callback to receive the token
       * @param failure_callback a callback to receive an error
       */
       var session_id = Paymentez.getSessionId();
       console.log("Session ID"+session_id);
       console.log(cardToSave);
      Paymentez.addCard(uid, email, cardToSave, successHandler, errorHandler);

    }
    
    e.preventDefault();
  });  


  var successHandler = function(cardResponse) {
    console.log(cardResponse.card);
    if(cardResponse.card.status === 'valid'){
      $('#messages').html('Card Successfully Added<br>'+
                    'status: ' + cardResponse.card.status + '<br>' +
                    "Card Token: " + cardResponse.card.token + "<br>" +
                    "transaction_reference: " + cardResponse.card.transaction_reference
                  );    
    }else if(cardResponse.card.status === 'review'){
      $('#messages').html('Card Under Review<br>'+
                    'status: ' + cardResponse.card.status + '<br>' +
                    "Card Token: " + cardResponse.card.token + "<br>" +
                    "transaction_reference: " + cardResponse.card.transaction_reference
                  ); 
    }else{
      $('#messages').html('Error<br>'+
                    'status: ' + cardResponse.card.status + '<br>' +
                    "message Token: " + cardResponse.card.message + "<br>"
                  ); 
    }
    submitButton.removeAttr("disabled");
    submitButton.text(submitInitialText);
  };

  var errorHandler = function(err) {    
    console.log(err.error);
    $('#messages').html(err.error.type);    
    submitButton.removeAttr("disabled");
    submitButton.text(submitInitialText);
  };

});
</script>


</body>
</html>
