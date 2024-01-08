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
.download-3-icon,
.download-4-icon,
.images-2-icon {
  position: absolute;
  top: 20px;
  left: 184px;
  width: 152px;
  height: 48.7px;
  object-fit: cover;
}
.download-3-icon,
.download-4-icon {
  left: 26px;
  width: 52px;
}
.download-4-icon {
  left: 107px;
  width: 47px;
}
.banks {
  position: absolute;
  top: 394px;
  left: 55px;
  background-color: var(--color-white);
  width: 336px;
  height: 87px;
  overflow: hidden;
}
.donate-now {
  position: absolute;
  top: 19px;
  left: 128px;
  text-transform: uppercase;
  font-weight: 500;
}
.donate-button {
  position: absolute;
  top: 323px;
  left: 32px;
  background-color: #FF8B00;
  width: 378px;
  height: 59px;
  overflow: hidden;
  font-size: var(--font-size-lg);
  font-family: var(--font-work-sans);
  color: white;
}
.btn{
  top: 10px;
  left: 25px;
  font-weight: 600;
  border-color: #24408F;
}
.other-amount {
  position: absolute;
  top: 10px;
  left: 25px;
  font-weight: 600;
  left: 94px;
  color: var(--color-black);
}

.otheramts,
.yearly,
.yearly1 {
  border-radius: var(--br-8xs);
  background-color: var(--color-white);
  border: 1px solid var(--color-darkslateblue-200);
  box-sizing: border-box;
  overflow: hidden;
}
.otheramts {
  position: absolute;
  top: 259px;
  left: 30px;
  width: 380px;
  height: 40px;
  color: var(--color-darkslateblue-200);
  
}
.yearly,
.yearly1 {
  top: 0;
  width: 104px;
}
.yearly {
  position: absolute;
  left: 0;
  height: 40px;
}
.yearly1 {
  left: 120px;
}
.autonums,
.yearly1,
.yearly2 {
  position: absolute;
  height: 40px;
}
.yearly2 {
  top: 0;
  left: 240px;
  border-radius: var(--br-8xs);
  background-color: var(--color-white);
  border: 1px solid var(--color-darkslateblue-200);
  box-sizing: border-box;
  width: 104px;
  overflow: hidden;
}
.autonums {
  top: 195px;
  left: 48px;
  width: 344px;
  color: var(--color-darkslateblue-200);
}
.choose-an-amount,
.one-time1 {
  position: absolute;
  font-weight: 600;
}
.choose-an-amount {
  top: 142px;
  left: 109px;
  color: var(--color-black);
}
.one-time1 {
  top: 29px;
  left: 61px;
  color: #ffffff !important;
}
.one-time {
  position: absolute;
  top: 0;
  left: 0;
  background-color: #24408F !important;
  width: 190px;
  height: 78px;
  overflow: hidden;
}
.yearly4 {
  position: absolute;
  top: 29px;
  left: 72px;
  font-weight: 600;
}
.plan,
.yearly3 {
  position: absolute;
  height: 78px;
  overflow: hidden;
}
.yearly3 {
  top: 0;
  left: 190px;
  background-color: var(--color-white);
  width: 190px;
  color: var(--color-darkslateblue-200);
}
.plan {
  top: 30px;
  left: 31px;
  border-radius: 13px;
  border: 1px solid var(--color-darkslateblue-200);
  box-sizing: border-box;
  width: 378px;
}
.donation-box {
  position: relative;
  background-color: var(--color-white);
  width: 60vh;
  height: 494px;
  margin-top: 10vh;
  margin-left: 10vh;  
  overflow: hidden;
  text-align: left;
  font-size: var(--font-size-base);
  color: var(--color-white);
  font-family: var(--font-inter);
}
.other-amount{
  border-radius: 5px;
  
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
            
            <div class="d-flex flex-column border dark rounded bg-white py-4 px-5 ">
            <h2 class="mb-4 mt-3" style="color: #24408F; font-weight: 700 !important;">Donate</h2>  
              <div>
                <button class="btn btn-main w-50 rounded-start " style="border-radius: 7px 0 0px 7px !important">One time</button><button class="btn btn-reverse w-50 rounded-end "  style="border-radius: 0px 7px 7px 0px !important">yearly</button>
              </div>
              <p class="my-3">Choose an amount to donate</p>
             <div class="mb-3">
                <button class="btn btn-reverse">BTN 999</button>
                <button class="btn btn-main">BTN 999</button>
                <button class="btn btn-reverse">BTN 999</button>
             </div>
             <div class="input-group my-2">
              <span class="input-group-text bg-white " style="color: #24408F !important; " id="basic-addon1">BTN</span>
              <input type="number" class="form-control" placeholder="Other amount" aria-label="Other amount" aria-describedby="basic-addon1">
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
          </div>
        
        </div>
      </div>
    </div>


    @Include('footer')

</body>

</html>
