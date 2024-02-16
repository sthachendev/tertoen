<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Oraganogram</title>
    <style>
        p {
            font-size: 14px;
            text-align: justify;
            line-height: 1.5;
        }
    </style>
</head>

<body>

    @Include('header')

    <h4 id="title" class="text-center my-5" data-aos="fade-up" data-aos-duration="1000">
        BAYUEL KINZANG WOESEL CHOELING FOUNDATION
    </h4>

    <p class="text-secondary mb-5" data-aos="fade-up" data-aos-duration="1000"
        style="margin:0 10% 0 10%; line-height: 29px;">
        Our Team
        The Board of directors is the governing body of the Foundation and provides overall guidance and directives to
        the Committees, the Secretariat and various other units and divisions of the Foundation
    </p>
    {{-- 
    <h4 id="title" class="text-center my-3" data-aos="fade-up"
        data-aos-duration="1000">
        BOARD OF DIRECTORS
    </h4> --}}

    <div class="text-secondary d-flex justify-content-center" data-aos="fade-up" data-aos-duration="1000">
        <img src="{{ asset('images/trulku.jpg') }}" alt="logo" class="mx-5 img-fluid">
    </div>

    <h4 id="title" class="text-center my-3" data-aos="fade-up" data-aos-duration="1000">
        HE Truelku Ugyen Drodrul Thinley Kunchap Rinpoche
    </h4>
    <p class="text-center fs-6" data-aos="fade-up" data-aos-duration="1000">
        President
    </p>
    <br><br>
    <div class="mb-5 text-center d-flex flex-wrap justify-content-center" data-aos="fade-up" data-aos-duration="1000">
        <figure class="mx-3 mb-4">
            <img src="{{ asset('images/lamsonam.png') }}" alt="Secretary" height="120px" width="120px">
            <figcaption class="mt-3">
                <strong>Secretary</strong>
                <br>
                Lam Sonam
                <br>
            </figcaption>
        </figure>

        <figure class="mx-3 mb-4">
            <img src="{{ asset('images/khenpo.png') }}" alt="Secretary" height="120px" width="120px">
            <figcaption class="mt-3">
                <strong>Treasurer</strong>
                <br>
                Khenpo Tshering Samdrup
            </figcaption>
        </figure>
    </div>

    <div class="mb-5 text-center d-flex flex-wrap justify-content-center" data-aos="fade-up" data-aos-duration="1000">
        <figure class="mx-5 mb-4">
            <img src="{{ asset('images/leki.png') }}" alt="Secretary" height="120px" width="120px">
            <figcaption class="mt-3">
                <strong>Advisor to Board Members</strong>
                <br>
                Mr. Leki Wangdi
                <br>
            </figcaption>
        </figure>

        <figure class="mx-5 mb-4">
            <img src="{{ asset('images/sangay.png') }}" alt="Secretary" height="120px" width="120px">
            <figcaption class="mt-3">
                <strong>Executive Director</strong>
                <br>
                Mr. Sangay Dorji
                <br>
            </figcaption>
        </figure>

        <figure class="mx-5 mb-4">
            <img src="{{ asset('images/yeshi.png') }}" alt="Secretary" height="120px" width="120px">
            <figcaption class="mt-3">
                <strong>Advisor to Board Members</strong>
                <br>
                Mr. Yeshi Nidup
            </figcaption>
        </figure>
    </div>

    <div class="mb-5 text-center d-flex flex-wrap justify-content-center" data-aos="fade-up" data-aos-duration="1000">
        <figure class="mx-3 mb-4">
            <img src="{{ asset('images/mssonam.png') }}" alt="Secretary" height="120px" width="120px">
            <figcaption class="mt-3">
                <strong>Administrative Head</strong>
                <br>
                Ms. Sonam Palden
                <br>
            </figcaption>
        </figure>

        <figure class="mx-3 mb-4">
            <img src="{{ asset('images/tshul.png') }}" alt="Secretary" height="120px" width="120px">
            <figcaption class="mt-3">
                <strong>Finance Head</strong>
                <br>
                Mr. Tshultrim Dorji
                <br>
            </figcaption>
        </figure>
    </div>

    {{-- <div class="mb-5 text-center d-flex flex-wrap justify-content-center" data-aos="fade-up" data-aos-duration="1000">
        <figure class="mx-5 mb-4">
            <img src="{{ asset('images/dp.png') }}" alt="Secretary" height="120px" width="120px">
            <figcaption class="mt-3">
                <strong>Developer</strong>
                <br>
                Mr. Kelden Norbu
                <br>
            </figcaption>
        </figure>

        <figure class="mx-5 mb-4">
            <img src="{{ asset('images/dp.png') }}" alt="Secretary" height="120px" width="120px">
            <figcaption class="mt-3">
                <strong>Developer</strong>
                <br>
                Mr. Sherab Tharchen Dorji
                <br>
            </figcaption>
        </figure>

        <figure class="mx-5 mb-4">
            <img src="{{ asset('images/dp.png') }}" alt="Secretary" height="120px" width="120px">
            <figcaption class="mt-3">
                <strong>Developer</strong>
                <br>
                Mr. Tandin Dorji
            </figcaption>
        </figure>
    </div> --}}

    @Include('footer')

</body>

</html>
