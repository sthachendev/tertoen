<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Donate</title>
    <style>
    
.main-container {
    width: 100%;
    height: 100vh;
    background-image: url("{{ asset('images/donation-bg.png') }}"); 
    background-size: cover; 
    background-position: center; 
    background-repeat: no-repeat; 
            
            
        }

.custom-text{
  background-color: #24408F !important;
}
.btn-main{
  border: 1px solid #24408F !important;
  color: white !important;
  background-color: #24408F !important;
  border-radius: 7px !important;
  /* font-weight: 900; */
}

.btn-reverse{
  border: 1px solid #24408F !important;
  color: #24408F !important;
  background-color: white !important;
  border-radius: 7px !important;
  /* font-weight: 900; */
}

.img-1{
  width: 50%;
    height: 10vh;

  background-image: url("{{ asset('images/bob.png') }}"); 
  background-size: contain; 
    background-position: center; 
    background-repeat: no-repeat; 
}
.img-2{
  width: 50%;
    height: 10vh;
  background-image: url("{{ asset('images/bbnb.png') }}"); 
  background-size: contain; 
    background-position: center; 
    background-repeat: no-repeat; 
}
.img-3{
  width: 50%;
    height: 10vh;
background-image: url("{{ asset('images/bnb.png') }}"); 
  background-size: contain; 
    background-position: center; 
    background-repeat: no-repeat; 
}

@media only screen and (max-width: 768px) {
  .donation-box {
    width: 95%;
    margin-left: auto;
    margin-right: auto;
    margin-top: 10vh; /* You may need to adjust this margin as needed */
  }

  
}
input::-webkit-outer-spin-button,
input::-webkit-inner-spin-button {
  -webkit-appearance: none;
  margin: 0;
}

/* Firefox */
input[type=number] {
  -moz-appearance: textfield;
}

    </style>
</head>

<body>

    @Include('header')
  
    <div class="main-container position-relative ">
      <div class="inner-container position-absolute text-center w-100 h-100  d-flex justify-content-center align-items-center">
        <div class="row m-0 p-0 w-100 h-100">
          <div class="col-12 col-sm-8 col-md-7 col-lg-6 col-xl-5 d-flex align-items-center justify-content-center flex-column">
            <form id="dontate-form" action="">
              <div class="d-flex flex-column border dark rounded bg-white py-4 px-5 ">
              <h2 class="mb-4 mt-3" style="color: #24408F; font-weight: 600 !important;">Donate</h2>  
                <div>
                  <button id="one-time-btn" class="btn btn-main w-50 rounded-start " style="border-radius: 7px 0 0px 7px !important">One time</button><button id="yearly-btn" class="btn btn-reverse w-50 rounded-end "  style="border-radius: 0px 7px 7px 0px !important">Yearly</button>
                </div>
                <p class="my-3">Choose an amount to donate</p>
              <div class="mb-3">
                  <button class="btn btn-reverse amt-1">BTN 200</button>
                  <button class="btn btn-main amt-2">BTN 350</button>
                  <button class="btn btn-reverse amt-3">BTN 500</button>
              </div>
              
              <div class="input-group my-2">
                <span class="input-group-text bg-white " style="color: #24408F !important; " id="basic-addon1">BTN</span>
                <input type="number" class="form-control donation-amt" placeholder="Other amount" aria-label="Other amount" aria-describedby="basic-addon1">
              </div>
              <div class="my-3">
                <button class="btn w-100" style="color:white; background-color:#FF8B00">
                  Donate now
                </button>
              </div>
              <div class="row d-flex flex-wrap mt-4">
                
                <div class="col-3 img-1 mx-1">
                </div>
                <div class="col-3 img-2 mx-1">

                </div>
                <div class="col-5 img-3 mx-1">
    
                </div>
              </div>
            </div>
                          
            </form>
          </div>
        
        </div>
      </div>
    </div>


    @Include('footer')

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
      $(document).ready(function() {
        // When the "yearly" button is clicked
        $('#yearly-btn').click(function(event) {
          event.preventDefault();
          $(this).removeClass('btn-reverse').addClass('btn-main');
          $('#one-time-btn').addClass('btn-reverse').removeClass('btn-main')
          $('.amt-1').text('BTN 1000');
          $('.amt-2').text('BTN 1200');
          $('.amt-3').text('BTN 1500');
        });
          // When the "yearly" button is clicked
          $('#one-time-btn').click(function(event) {
            event.preventDefault();
          $(this).removeClass('btn-reverse').addClass('btn-main');
          $('#yearly-btn').addClass('btn-reverse').removeClass('btn-main')
          $('.amt-1').text('BTN 200');
          $('.amt-2').text('BTN 350');
          $('.amt-3').text('BTN 500');
        });

        $('.amt-1').click(function(event) {
          event.preventDefault();
          $(this).removeClass('btn-reverse').addClass('btn-main');
          $('.amt-2').addClass('btn-reverse').removeClass('btn-main')
          $('.amt-3').addClass('btn-reverse').removeClass('btn-main')
        });
        $('.amt-2').click(function(event) {
          event.preventDefault();
          $(this).removeClass('btn-reverse').addClass('btn-main');
          $('.amt-1').addClass('btn-reverse').removeClass('btn-main')
          $('.amt-3').addClass('btn-reverse').removeClass('btn-main')
        });
        $('.amt-3').click(function(event) {
          event.preventDefault();
          $(this).removeClass('btn-reverse').addClass('btn-main');
          $('.amt-1').addClass('btn-reverse').removeClass('btn-main')
          $('.amt-2').addClass('btn-reverse').removeClass('btn-main')
        });

        // on submit
        $('#donate-form').submit(function(event) {
          event.preventDefault();

        });

      });
</script>

</body>

</html>
