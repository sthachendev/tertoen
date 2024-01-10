<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>One time donate</title>
    <style>
        p {
            font-size: 14px;
            text-align: justify;
            line-height: 1.5;
        }
        .image-container {
            width: 100%;
            height: 45vh;
            background-image: url("{{ asset('images/monastry.jpg') }}"); 
            background-size: cover; 
            background-position: center; 
            background-repeat: no-repeat; 
        }
        input[type=number]::-webkit-inner-spin-button, 
        input[type=number]::-webkit-outer-spin-button { 
            -webkit-appearance: none;
            -moz-appearance: none;
            appearance: none;
            margin: 0; 
        }
    </style>
</head>

<body>

    @Include('header')
<div class="main-conatiner d-flex flex-column flex-wrap">
    
    <div class="image-container w-100 position-relative">
        <div class="position-absolute top-100 start-50 translate-middle bg-white rouned col-10 col-sm-9 col-md-8 col-lg-6">
           <div class="d-flex flex-nowrap jusify-content-between p-4 ">
                    <div class="">
                        <span>You are making a single donation of <span style = "color: #FF8B00;">BTN</span></span> <span style = "color: #FF8B00;">250</span>
                    </div>
                    <div class="ms-auto" style = "color: #FF8B00;">
                        <a > Change Amount</a>
                    </div>
            </div>

           <div>

            <div class=" text-white p-4" style="background-color: #24408F;">
                <h2 >SMALLER AMOUNT, GREATER IMPACT</h2>
                <p>Smaller monthly donations can better support our long-term projects to reach more people around the world.</p>
                </div>
            </div>
            </div>
    </div>

    <div class=" d-flex flex-column justify-content-center align-items-center " style="margin-top: 150px;">
    <div class="col-10 col-sm-9 col-md-9 col-lg-9 d-flex justify-content-around  m-3">
        <div>
            <h5 class="text-muted">Account Number</h5>
            <p style="font-weight: 700;">20234029 <span class="ms-3"> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#24408F" class="bi bi-clipboard" viewBox="0 0 16 16">
                <path d="M4 1.5H3a2 2 0 0 0-2 2V14a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V3.5a2 2 0 0 0-2-2h-1v1h1a1 1 0 0 1 1 1V14a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V3.5a1 1 0 0 1 1-1h1z"/>
                <path d="M9.5 1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-3a.5.5 0 0 1-.5-.5v-1a.5.5 0 0 1 .5-.5zm-3-1A1.5 1.5 0 0 0 5 1.5v1A1.5 1.5 0 0 0 6.5 4h3A1.5 1.5 0 0 0 11 2.5v-1A1.5 1.5 0 0 0 9.5 0z"/>
            </svg></span></p>
           

        </div>
        <div>
            <h5 class="text-muted">Name</h5>
            <p style="font-weight: 700;" >Tortoen Foundation</p>
        </div>
        <div>
            <h5 class="text-muted">Bank</h5>
            <p class="text-nowrap" style="font-weight: 700;">Bank of Bhutan</p>
        </div>

    </div>
    <div class=" row col-10 col-sm-9 col-md-9 col-lg-9 d-flex justify-content-evenly  m-3 " style="min-height: 295px;">
        <div class="screenshot-container col-11 col-sm-11 col-md-11 col-lg-5 rounded shadow-lg pb-2 bg-white">
            <div class="flex-column d-flex justify-content-center align-items-center h-75 ">
            <span>
                <svg width="104" height="104" viewBox="0 0 104 104" fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                <rect width="104" height="104" fill="url(#pattern0)"/>
                <defs>
                <pattern id="pattern0" patternContentUnits="objectBoundingBox" width="1" height="1">
                <use xlink:href="#image0_272_667" transform="scale(0.0111111)"/>
                </pattern>
                <image id="image0_272_667" width="90" height="90" xlink:href="data:image/png;base64,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"/>
                </defs>
            </svg>
            </span>
            </div>
           <div class="d-flex align-items-end h-25">
                <button class="btn text-white w-100 " style="background-color: #F6821F">UPLOAD SCREENSHOT</button>
           </div>
            
        </div>
        <div class=" d-flex align-items-center justify-content-center col-12 col-sm-12 col-md-12 col-lg-1 my-4"><h1 style="color:#24408F; font-weight:600;">OR</h1></div>
        <div class="form-container col-11 col-sm-11 col-md-11 col-lg-5">
            <form action="" class="d-flex justify-content-between flex-column">
                <div class="input-group mb-4">
                <input type="number" class="form-control" placeholder="Phone">
                </div>
                <div class="input-group mb-4">
                <input type="number" class="form-control" placeholder="Jrnl. No / PRNO">
                </div>
                <div class="input-group mb-4">
                <input type="number" class="form-control" placeholder="Amount">
                </div>
                <div class="input-group mb-4">
                <input type="text" class="form-control" placeholder="Remarks">
                </div>
                <div class="input-group">
                    <button class="btn text-white w-100 " style="background-color: #F6821F">SEND TRANSACTION DETAILS</button>
                </div>
            </form>
        </div>
    </div>
    </div>

</div>
    

    @Include('footer')

</body>

</html>
