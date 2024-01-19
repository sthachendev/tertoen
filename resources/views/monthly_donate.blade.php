<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Monthly donate</title>
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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>

    @Include('header')

    <div class="main-conatiner d-flex flex-column flex-wrap">
    
    <div class="image-container w-100 position-relative">
        <div class="position-absolute top-100 start-50 translate-middle bg-white rouned col-10 col-sm-9 col-md-8 col-lg-6">
           <div class="d-flex flex-nowrap jusify-content-between p-4 ">
                    <div class="">
                        <span>You are making a monthly donation of <span style = "color: #FF8B00;">BTN</span></span> <span style = "color: #FF8B00;">250</span>
                    </div>
                    <div class="ms-auto" style = "color: #FF8B00;">
                        <a > Change Amount</a>
                    </div>
            </div>

           <div>

            <div class=" text-white p-4" style="background-color: #24408F;">
                <h4 >Join BKWC Foundation by donating monthly.</h4>
                <p>Smaller monthly donations can better support our long-term projects to reach more people around the world.</p>
                </div>
            </div>
            </div>
    </div>

    <div class=" d-flex flex-column justify-content-center align-items-center " style="margin-top: 150px;">

        <div class="row w-75 d-flex justify-content-around m-3">
            <div class="col-4">
            <h5 class="text-muted text-center" >Account Number</h5>
            </div>
            <div class="col-4">
            <h5 class="text-muted text-center" >Name</h5>
            </div>
            <div class="col-4">
            <h5 class="text-muted text-center" >Bank</h5>
            </div>
        </div>
        <div class="row row-cols-3 w-75 d-flex justify-content-around m-3">
            <div class="col-4">
            <div class="">  
                <p class="text-center" style="font-weight: 700;">20234029 <span class="ms-3"> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#24408F" class="bi bi-clipboard" viewBox="0 0 16 16">
                    <path d="M4 1.5H3a2 2 0 0 0-2 2V14a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V3.5a2 2 0 0 0-2-2h-1v1h1a1 1 0 0 1 1 1V14a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V3.5a1 1 0 0 1 1-1h1z"/>
                    <path d="M9.5 1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-3a.5.5 0 0 1-.5-.5v-1a.5.5 0 0 1 .5-.5zm-3-1A1.5 1.5 0 0 0 5 1.5v1A1.5 1.5 0 0 0 6.5 4h3A1.5 1.5 0 0 0 11 2.5v-1A1.5 1.5 0 0 0 9.5 0z"/>
                </svg></span></p>
            

            </div>
            </div>
            <div class="col-4">
            <div>
            
            <p style="font-weight: 700;" class="text-center" >Tortoen Foundation</p>
        </div>
            </div>
            <div class="col-4">
            <div>
            
            <p class="text-center" style="font-weight: 700;">Bank of Bhutan</p>
        </div>
            </div>
        </div>
        <div class="row row-cols-3 w-75 d-flex justify-content-around m-3">
        <div class="col-4">
        <div class="">  
            <p class="text-center" style="font-weight: 700;">5100161378001 <span class="ms-3"> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#24408F" class="bi bi-clipboard" viewBox="0 0 16 16">
                <path d="M4 1.5H3a2 2 0 0 0-2 2V14a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V3.5a2 2 0 0 0-2-2h-1v1h1a1 1 0 0 1 1 1V14a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V3.5a1 1 0 0 1 1-1h1z"/>
                <path d="M9.5 1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-3a.5.5 0 0 1-.5-.5v-1a.5.5 0 0 1 .5-.5zm-3-1A1.5 1.5 0 0 0 5 1.5v1A1.5 1.5 0 0 0 6.5 4h3A1.5 1.5 0 0 0 11 2.5v-1A1.5 1.5 0 0 0 9.5 0z"/>
            </svg></span></p>
           

        </div>
        </div>
        <div class="col-4">
        <div>
         
         <p style="font-weight: 700;" class="text-center" >Tortoen Foundation</p>
     </div>
        </div>
        <div class="col-4">
        <div>
         
         <p class="text-center" style="font-weight: 700;">Bhutan National Bank Limited</p>
     </div>
        </div>
    </div>
    <hr />
    <div class=" row col-10 col-sm-9 col-md-9 col-lg-9 d-flex justify-content-evenly  m-3 " style="min-height: 295px;">    
        <div class="form-container col-11 col-sm-11 col-md-11 col-lg-5">
            <h4 class="text-muted mb-4">Personal Details</h4>
            <form action="" class="d-flex justify-content-between flex-column">
                <div class="input-group mb-4">
                <input type="text" class="form-control" placeholder="Name">
                </div>
                <div class="input-group mb-4">
                <input type="number" class="form-control" placeholder="CID">
                </div>
                <div class="input-group mb-4">
                <input type="number" class="form-control" placeholder="Mobile/Phone No">
                </div>
                <div class="input-group mb-4">
                <select class="form-select" aria-label="Default select example">
                    <option selected>Country of Residence</option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                </select>
                </div>
                <div class="input-group mb-4">
                <select class="form-select" aria-label="Default select example">
                    <option selected>Dzongkhag</option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                </select>
                </div>
                <div class="input-group mb-4">
                <select class="form-select" aria-label="Default select example">
                    <option selected>Gewog</option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                </select>
                </div>
                <div class="input-group mb-4">
                <select class="form-select" aria-label="Default select example">
                    <option selected>Village</option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                </select>
                </div>
  
            </form>
        </div>
        <div class="form-container col-11 col-sm-11 col-md-11 col-lg-5">
        <h4 class="text-muted mb-4">Transaction Details</h4>
            <form action="" class="d-flex justify-content-between flex-column">
                <div class="input-group mb-4">
                    <select class="form-select" aria-label="Payment platform (mbob, mpay)">
                        <option selected>Payment platform (mbob, mpay)</option>
                        <option value="1">mBOB</option>
                        <option value="2">mPay</option>
            
                    </select>
                </div>
                <div class="input-group mb-4">
                    <select class="form-select" aria-label="Paid to bank">
                        <option selected>Paid to bank</option>
                        <option value="1">BOB</option>
                        <option value="2">BNBL</option>
                    </select>
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
                
                <div class="form-check mb-4">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
                    <label class="form-check-label" for="flexCheckChecked">
                        I here by accept the
                    </label>
                    <a style="font-weight: 600 !important; color: #24408F;" data-bs-toggle="modal" data-bs-target="#exampleModal">Membership Criteria </a> 
                    </div>
                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">Membership Criteria</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                        I here by declare that the information provided in this form is true and accurate to confirm my membership registration and to provide my support to the BKWC Foundation and that BKWC Foundation is not liable for my voluntary registration. I have read and understood the organization’s mission and objectives, and I am committed to supporting and participation in its actives. I understand that my membership is voluntary, and I agreed to abide by the organization’s  rules and guidelines
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                        </div>
                        </div>
                    </div>
                    </div>
                <div class="input-group mb">
                    <button class="btn text-white w-100 " style="background-color: #F6821F">SEND TRANSACTION DETAILS</button>
                </div>
            </form>
        </div>
    </div>
    </div>

</div>

    @Include('footer')
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>

</html>
