<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us</title>
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

    {{-- about us content --}}
    {{-- <img src="{{ asset('images/monastry.jpg') }}" alt="logo" class="mx-5" data-aos="fade-right" data-aos-easing="ease"
        data-aos-duration="1000"> --}}

    <h4 id="title" class="text-center my-3" data-aos="fade-right">
        BAYUEL KINZANG YOESEL CHOLING FOUNDATION
    </h4>

    <p class="text-secondary" data-aos="fade-right" style="margin:0 10% 0 10%">
        The reincarnation of Terton Drukdra Dorji Rinpoche, known as His Eminence Ugyen Droduel Thinley Kunchap Rinpoche
        has established the Pel Drukdraiing Foundation with the support from his numerous followers, donors, and
        patrons. The Foundation name, Drukdra, is after the country of Bhutan known as Druk and Terton Drukdra Dorji.
        The activities of the Pel Drukdraling Foundation are guided by compassion and wisdom. The Foundation seeks to
        promote and strengthen human values with a sense of spirituality that fosters universal peace and harmony.
        <br>
        <br>
        The Foundation endeavours to preserve and promote the culture and heritage of the country of Bhutan and improve
        social and community vitality through education. Moreover, the Foundation will establish and support a needed
        individuals in and around the country for their education, health and wellbeing. The foundation aims to engage
        in projects that will provide basic needs, housing, medical care, and education for monks. Similarly, the
        foundation shall endeavour to support children from poor and disadvantaged backgrounds and the elderly citizens
        both in Bhutan and wider world in the foreseeable future.
        <br>
        <br>
        As able, the Foundation will take on other beneficial and social activities. The Foundation is governed by a
        board of volunteer members that follow the guidance of Rinpoche who is the Spriritual Head, President and
        Founder of Pel Drukdraling Foundation.
    </p>

    <br>
    <h4 id="title" class="text-center my-3" data-aos="fade-right">
        OBJECTIVIES
    </h4>

    <p style="margin:0 10% 0 10%" class="text-secondary" data-aos="fade-right">
        1. To provide spiritual counselling and support to the recovening adicts and children from disadvantagedd
        backgrounds
        <br>
        <br>
        2. To predserve and promote aged-old culture and tradition of Bhutan, and
        <br>
        <br>
        3. To support and help elderly citizens in Bhutan and wider world in the foreseeable future.
    </p>

    <br>
    <h4 id="title" class="text-center my-3" data-aos="fade-right">
        BOARD OF DIRECTORS
    </h4>

    <div style="text-center" class="text-secondary d-flex justify-content-center" data-aos="fade-right">
        <img src="{{ asset('images/trulku.jpg') }}" alt="logo" class="mx-5" data-aos="fade-right"
            data-aos-easing="ease" data-aos-duration="1000">
    </div>
    <h4 id="title" class="text-center my-3" data-aos="fade-right">
        HE Truelku Ugyen Drodrul Thinley Kunchap Rinpoche
    </h4>
    <p class="text-center fs-6" data-aos="fade-right">
        President/Patron
    </p>
    <br><br>
    <div style="text-center" class="text-secondary d-flex justify-content-center" data-aos="fade-right">
        <figure class="mx-5">
            <img src="{{ asset('images/ed.jpg') }}" alt="logo">
            <figcaption class="mt-3">
                <strong>Executive Director</strong>
                <br>
                Wangchuk Rinzin
                <br>
                <span style="font-size:12px">dzongkhaenglish@yahoo.com</span>
            </figcaption>
        </figure>

        <figure class="mx-5">
            <img src="{{ asset('images/chair.jpg') }}" alt="logo">
            <figcaption class="mt-3">
                <strong>Chair</strong>
                <br>
                Dr. Singye Dorji
            </figcaption>
        </figure>

        <figure class="mx-5">
            <img src="{{ asset('images/treasurer.jpg') }}" alt="logo">
            <figcaption class="mt-3">
                <strong>Treasurer</strong>
                <br>
                Nima Palden
                <br>
                <span style="font-size:12px">npelden@yahoo.com</span>
            </figcaption>
        </figure>
    </div>

    <div class="mt-5"></div>

    @Include('footer')

</body>

</html>
