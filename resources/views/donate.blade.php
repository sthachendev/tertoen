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



@media only screen and (max-width: 768px) {
  .donation-box {
    width: 95%;
    margin-left: auto;
    margin-right: auto;
    margin-top: 10vh; /* You may need to adjust this margin as needed */
  }

  
}


    </style>
</head>

<body>

    @Include('header')
    <!-- donate content -->
    <div class="main-container">
    <div class="donation-box bg-white">
    <div class="plan">
        <div class="one-time">
          <div class="one-time1 btn">One time</div>
        </div>
        <div class="yearly3">
          <div class="yearly4 btn">Yearly</div>
        </div>
      </div>

      <div class="choose-an-amount">Choose an amount to donate</div>

      <div class="autonums">
        <div class="yearly">
          <div class="btn">BTN 99</div>
        </div>
        <div class="yearly1">
          <div class="btn">BTN 499</div>
        </div>
        <div class="yearly2">
          <div class="btn">BTN 999</div>
        </div>
      </div>

      <div class="otheramts">
        <div class="btn">BTN</div>
        <input type="text" class="other-amount" placeholder="Other Amount">

      </div>

      <div class="donate-button">
        <div class="donate-now">DONATE NOW</div>
      </div>
      

      <div class="banks">
        <img class="images-2-icon" alt="" src="{{ asset('images/bnb.png') }}" />

        <img class="download-3-icon" alt="" src="{{ asset('images/bob.png') }}" />

        <img class="download-4-icon" alt="" src="{{ asset('images/bbnb.png') }}" />
      </div>
       
      
    </div>
    </div>
    


    @Include('footer')

</body>

</html>
