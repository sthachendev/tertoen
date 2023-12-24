<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Linage</title>
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

    {{-- Linage content --}}
    <img src="{{ asset('images/rinpoche-image-1.png') }}" alt="logo" class="mx-5" data-aos="fade-right"
    data-aos-easing="ease" data-aos-duration="1000">

    <h4 id="title" class="text-center mt-3" data-aos="fade-right">
        H.H Ugyen Droduel Thinley Kunchap Rinpoche
    </h4>

    <main class="p-3 px-5 pt-3" data-aos="fade-right">
        {{-- <h4 class="text-center">About Terton Drukdra Dorji</h4> --}}
        <p class="text-secondary">
            From the time of the prevailing of the Buddha Dharma to the existing moment in time, there
            are number of unbroken succession of great Buddhas and Bodhisattvas have been attained
            enlightenment, and tirelessly devoted themselves full-time to their beneficial activities
            to other sentient beings that lead to achieve final realisation. In Buddhist tradition, there
            is a well-known belief in recognising the reincarnations of great Buddhas and Bodhisattvas
            such as Buddha and his reincarnations, Guru Rinpoche and his reincarnations known as Truelkus
            and many. They purposely take rebirth, out of control for themselves, out of compassion
            for sentient beings, and to continue their on-going activities from one's previous
            incarnations. Thus, H.E. Truelku Ugyen Drodrul Thinley Kunchap Rinpoche is one of such
            reincarnations and has been taking number of rebirths and unbroken Terton
            (treasure revealers) lineages. Moreover, Guru Padmasambhava is the revered Buddhist
            saint who turned the Wheel of the Dharma by instilling and teaching higher Mahayana
            teachings and the secret Vajrayana or tantric teachings. Guru Padmasambhava travelled
            and taught throughout India, Nepal, Tibet and Bhutan. Due to his miraculous powers,
            Guru Padmasambhava also subdued inauspicious conditions and obstacles that could harm
            or threaten the anchoring and propagation of the Buddhadharma in this world. Guru
            Padmasambhava revealed and taught many sacred teachings that were preserved in texts
            and also gave many treasures.
            <br><br>
            Through his perfect meditative vision, Guru Padmasambhava was able to see and predict when
            in the future the Buddhadharma would be in danger or threatened by harmful conditions and
            circumstances. To further protect and strengthen the Buddhadharma, Guru Padmasambhava buried
            many sacred texts and treasures in various places of the Himalayas that would be discovered
            and revealed in the future by treasure revealers also known as Tertons. These sacred texts
            and treasures would be revealed at certain times by Tertons to alleviate a threat to the
            Buddhadharma, remedy inauspicious circumstances, or reinforce the strength of the
            Buddhadharma in difficult or degenerate times. Tertons reveal these sacred texts or
            treasures by finding the physical place in which they are entombed or through dreams,
            meditative visions, and spontaneous realization.
        </p>

    </main>


    @Include('footer')

</body>

</html>
