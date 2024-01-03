<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Centres</title>
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

    {{-- <div style="height: 25vh" class="text-center text-secondary mt-5">
        No centres available
    </div> --}}

    <img src="{{ asset('images/monastry.jpg') }}" alt="logo" class="mx-5" data-aos="fade-right" data-aos-easing="ease"
        data-aos-duration="1000">

    <h4 id="title" class="text-center my-4" data-aos="fade-right">
        BAYUEL KINZANG YOESEL CENTRE
    </h4>

    <p class="text-secondary mb-5" data-aos="fade-right" style="margin:0 10% 0 10%; line-height: 29px;">
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

    @Include('footer')

</body>

</html>
