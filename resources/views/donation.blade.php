<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Donation</title>
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

        input[type="text"]:invalid:focus,
        input[type="date"]:invalid:focus,
        input[type="email"]:invalid:focus,
        select:invalid:focus,
        textarea:invalid:focus {
            border-color: transparent;
            outline: 1px solid #e74c3c !important;
        }

        input[type="text"]:focus,
        input[type="date"]:focus,
        input[type="email"]:focus,
        select:focus,
        textarea:focus {
            outline: none;
        }
    </style>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>

    @Include('header')

    <div class="main-conatiner d-flex flex-column flex-wrap">

        <div class="image-container w-100 position-relative">
            <div
                class="position-absolute top-100 start-50 translate-middle bg-white rouned col-10 col-sm-9 col-md-8 col-lg-6">
                <div class="d-flex flex-nowrap jusify-content-between p-4 ">
                    {{-- <div class="">
                        <span>You are making a yearly donation of <span style = "color: #FF8B00;">BTN</span></span> <span style = "color: #FF8B00;">250</span>
                    </div>
                    <div class="ms-auto" style = "color: #FF8B00;">
                        <a > Change Amount</a>
                    </div> --}}
                    <h4>
                        BAYUEL KINZANG YOESEL CHOLING FOUNDATION
                    </h4>
                </div>

                <div>

                    <div class=" text-white p-4" style="background-color: #24408F;">
                        <h4>Join BKWC Foundation by making a donattion.</h4>
                        <p>Yearly donations can better support our long-term projects to reach more people
                            around the world.</p>
                    </div>
                </div>
            </div>
        </div>

        <div class=" d-flex flex-column justify-content-center align-items-center " style="margin-top: 80px;">

            <div class="row w-75 d-flex justify-content-around m-3">
                <div class="col-4">
                    <h5 class="text-muted text-center">Account Number</h5>
                </div>
                <div class="col-4">
                    <h5 class="text-muted text-center">Name</h5>
                </div>
                <div class="col-4">
                    <h5 class="text-muted text-center">Bank</h5>
                </div>
            </div>
            <div class="row row-cols-3 w-75 d-flex justify-content-around m-3">
                <div class="col-4">
                    <div class="">
                        <p class="text-center" style="font-weight: 700;">20234029 <span class="ms-3"> <svg
                                    xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#24408F"
                                    class="bi bi-clipboard" viewBox="0 0 16 16">
                                    <path
                                        d="M4 1.5H3a2 2 0 0 0-2 2V14a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V3.5a2 2 0 0 0-2-2h-1v1h1a1 1 0 0 1 1 1V14a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V3.5a1 1 0 0 1 1-1h1z" />
                                    <path
                                        d="M9.5 1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-3a.5.5 0 0 1-.5-.5v-1a.5.5 0 0 1 .5-.5zm-3-1A1.5 1.5 0 0 0 5 1.5v1A1.5 1.5 0 0 0 6.5 4h3A1.5 1.5 0 0 0 11 2.5v-1A1.5 1.5 0 0 0 9.5 0z" />
                                </svg></span></p>

                    </div>
                </div>
                <div class="col-4">
                    <div>

                        <p style="font-weight: 700;" class="text-center">BAYUEL KINZANG YOESEL CHOLING FOUNDATION</p>
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
                        <p class="text-center" style="font-weight: 700;">5100161378001 <span class="ms-3"> <svg
                                    xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#24408F"
                                    class="bi bi-clipboard" viewBox="0 0 16 16">
                                    <path
                                        d="M4 1.5H3a2 2 0 0 0-2 2V14a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V3.5a2 2 0 0 0-2-2h-1v1h1a1 1 0 0 1 1 1V14a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V3.5a1 1 0 0 1 1-1h1z" />
                                    <path
                                        d="M9.5 1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-3a.5.5 0 0 1-.5-.5v-1a.5.5 0 0 1 .5-.5zm-3-1A1.5 1.5 0 0 0 5 1.5v1A1.5 1.5 0 0 0 6.5 4h3A1.5 1.5 0 0 0 11 2.5v-1A1.5 1.5 0 0 0 9.5 0z" />
                                </svg></span></p>


                    </div>
                </div>
                <div class="col-4">
                    <div>

                        <p style="font-weight: 700;" class="text-center">BAYUEL KINZANG YOESEL CHOLING FOUNDATION</p>
                    </div>
                </div>
                <div class="col-4">
                    <div>

                        <p class="text-center" style="font-weight: 700;">Bhutan National Bank Limited</p>
                    </div>
                </div>
            </div>
            <hr />
            <div class="alert mb-0">
                @if (Session::has('success'))
                    <div class="alert alert-success alert-dismissible fade show ms-5 me-5 mb-4">
                        {{ Session::get('success') }}
                        <span class="close" style="cursor: pointer;" onclick="this.parentElement.style.display='none';"
                            aria-label="Close">
                            <span class="btn-close"></span>
                        </span>
                    </div>
                @endif

                @if (Session::has('error'))
                    <div class="alert alert-danger alert-dismissible fade show ms-5 me-5 mb-4">
                        {{ Session::get('error') }}
                        <span class="close" style="cursor: pointer;" onclick="this.parentElement.style.display='none';"
                            aria-label="Close">
                            <span class="btn-close"></span>
                        </span>
                    </div>
                @endif
            </div>

            {{-- donation form --}}
            <form class="row col-10 col-sm-9 col-md-9 col-lg-9 d-flex justify-content-evenly m-3"
                style="min-height: 295px;" method="POST" action="{{ route('donations.store') }}">
                @csrf
                <div class="form-container col-11 col-sm-11 col-md-11 col-lg-5">
                    <h4 class="text-muted mb-4">Personal Details</h4>
                    <div action="" class="d-flex justify-content-between flex-column">
                        <div class="input-group mb-4">
                            <input type="text" class="form-control" name="name" placeholder="Name" required
                                pattern="[A-Za-z ]+">
                        </div>
                        <div class="input-group mb-4">
                            <input type="number" class="form-control" name="cid" placeholder="CID" required
                                pattern="[0-9]+" maxlength="20">
                        </div>
                        <div class="input-group mb-4">
                            <input type="tel" class="form-control" name="phone" placeholder="Phone No"
                                required pattern="[0-9]+" maxlength="20">
                        </div>
                        <div class="input-group mb-4">
                            <input type="text" class="form-control" name="nationality" placeholder="Nationality"
                                required pattern="[A-Za-z]+">
                        </div>
                        <div class="input-group mb-4">
                            <select class="form-control shadow-none" id="dzongkhag" name="dzongkhag" required>
                                <option value="" disabled selected>Dzongkha</option>
                                <option value="Bumthang">Bumthang</option>
                                <option value="Chhukha">Chhukha</option>
                                <option value="Dagana">Dagana</option>
                                <option value="Gasa">Gasa</option>
                                <option value="Haa">Haa</option>
                                <option value="Lhuentse">Lhuentse</option>
                                <option value="Mongar">Mongar</option>
                                <option value="Paro">Paro</option>
                                <option value="Pemagatshel">Pemagatshel</option>
                                <option value="Punakha">Punakha</option>
                                <option value="Samdrup Jongkhar">Samdrup Jongkhar</option>
                                <option value="Samtse">Samtse</option>
                                <option value="Sarpang">Sarpang</option>
                                <option value="Thimphu">Thimphu</option>
                                <option value="Trashigang">Trashigang</option>
                                <option value="Trashiyangtse">Trashiyangtse</option>
                                <option value="Trongsa">Trongsa</option>
                                <option value="Tsirang">Tsirang</option>
                                <option value="Wangdue Phodrang">Wangdue Phodrang</option>
                                <option value="Zhemgang">Zhemgang</option>
                            </select>
                        </div>
                        <div class="input-group mb-4">
                            <input type="text" class="form-control" name="gewog" placeholder="Gewog" required
                                pattern="[A-Za-z]+">
                        </div>
                        <div class="input-group mb-4">
                            <input type="text" class="form-control" name="village" placeholder="Village"
                                pattern="[A-Za-z]+" required>
                        </div>
                    </div>
                </div>
                <div class="form-container col-11 col-sm-11 col-md-11 col-lg-5">
                    <h4 class="text-muted mb-4">Transaction Details</h4>
                    <div class="d-flex justify-content-between flex-column">
                        <select class="form-select mb-4 shadow-none" aria-label="Donation Type" name="donation_type"
                            required>
                            <option selected disabled>Donation Type</option>
                            <option value="One-time">One Time</option>
                            <option value="Monthly">Monthly</option>
                            <option value="Yearly">Yearly</option>
                        </select>
                        <div class="input-group mb-4">
                            <select class="form-select shadow-none" aria-label="Payment platform (mbob, mpay)"
                                name="payment_platform" required>
                                <option selected disabled>Payment platform</option>
                                <option value="MBOB">mBOB</option>
                                <option value="MPAY">mPay</option>
                            </select>
                        </div>
                        <div class="input-group mb-4">
                            <select class="form-select shadow-none" aria-label="Paid to bank" name="paid_to_bank"
                                required>
                                <option selected disabled>Paid to bank</option>
                                <option value="BOB">BOB - 20234029</option>
                                <option value="BNB">BNBL - 5100161378001</option>
                            </select>
                        </div>
                        <div class="input-group mb-4">
                            <input type="number" class="form-control" name="journal_no" maxlength="20"
                                placeholder="Jrnl. No / PRNO" required>
                        </div>
                        <div class="input-group mb-4">
                            <input type="number" class="form-control" name="amount" placeholder="Amount" required
                                pattern="[0-9]+" maxlength="20">
                        </div>
                        <div class="input-group mb-4">
                            <textarea rows="4" type="text" class="form-control" name="remarks" placeholder="Remarks" maxlength="30"></textarea>
                        </div>
                        <div class="form-check mb-4">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked"
                                required>
                            <label class="form-check-label" for="flexCheckChecked">
                                I hereby accept the
                            </label>
                            <a style="font-weight: 600 !important; color: #24408F;" data-bs-toggle="modal"
                                data-bs-target="#exampleModal">membership criteria</a>
                        </div>
                        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                            aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="exampleModalLabel">Membership Criteria</h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        I hereby declare that the information provided in this form is true and accurate
                                        to confirm my membership registration and to provide my support to the BKWC
                                        Foundation and that BKWC Foundation is not liable for my voluntary registration.
                                        I have read and understood the organization’s mission and objectives, and I am
                                        committed to supporting and participating in its activities. I understand that
                                        my membership is voluntary, and I agree to abide by the organization’s rules and
                                        guidelines.
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-danger"
                                            data-bs-dismiss="modal">Close</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="input-group mb">
                            <button class="btn text-white w-100" style="background-color: #F6821F"
                                type="submit">SEND TRANSACTION DETAILS</button>
                        </div>
                    </div>
                </div>
            </form>

        </div>

    </div>

    @Include('footer')
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
    </script>
</body>

</html>
