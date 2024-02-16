<head>
    <style>
        @media (max-width: 769px) {
            iframe {
                width: 90% !important;
            }

            h4 {
                font-size: 16px !important;
            }
        }

        #sideheader {
            position: relative;
            text-align: left;
            min-width: 45%;
        }

        #sideheader::before {
            content: '';
            position: absolute;
            visibility: visible;
            top: 100%;
            /* Position at the bottom of the div */
            left: 50px;
            /* Adjust the right position as needed */
            border: 10px solid transparent;
            border-top: 10px solid #212529;
            /* Make the triangle pointing upwards */
        }

        #sideheader::after {
            content: '';
            position: absolute;
            visibility: visible;
            top: calc(100% + 2px);
            /* Position just below the triangle */
            right: 8px;
            clear: both;
        }

        #sideheader2 {
            position: relative;
            text-align: left;
            min-width: 45%;
        }

        #sideheader2::before {
            content: '';
            position: absolute;
            visibility: visible;
            top: 100%;
            /* Position at the bottom of the div */
            right: 50px;
            /* Adjust the right position as needed */
            border: 10px solid transparent;
            border-top: 10px solid #212529;
            /* Make the triangle pointing upwards */
        }

        #sideheader2::after {
            content: '';
            position: absolute;
            visibility: visible;
            top: calc(100% + 2px);
            /* Position just below the triangle */
            right: 8px;
            clear: both;
        }
    </style>
</head>

<div class="container text-center mt-4">
    <div class="row my-4">
        <!-- Main content -->
        <div class="col-12 col-md-8 col-lg-8">

            {{-- <img src="{{ asset('images/rinpoche-image-1.png') }}" width="630" alt="logo" class="img-fluid"
                data-aos="fade-right" data-aos-easing="ease" data-aos-duration="1000"> --}}

            <img src="{{ asset('images/tertoen.png') }}" width="630" alt="logo" class="img-fluid" data-aos="fade-up"
                data-aos-duration="1000">

            <h4 id="title" class="text-center mt-3" data-aos="fade-up" data-aos-duration="1000">
                H.H Ugyen Droduel Thinley Kunchap Rinpoche
            </h4>
            <div>
            </div>
            <main class="p-3 px-5" data-aos="fade-up" data-aos-duration="1000">
                <p style="font-size:14px; line-height: 29px;" class="text-secondary">
                    The reincarnation of Terton Drukdra Dorji Rinpoche, known as His Eminence Ugyen Droduel Thinley
                    Kunchap Rinpoche has established the Pel Drukdraiing Foundation with the support from his numerous
                    followers, donors, and patrons. The Foundation name, Drukdra, is after the country of Bhutan known
                    as Druk and Terton Drukdra Dorji. The activities of the Pel
                    Drukdraling Foundation are guided by compassion and wisdom. The Foundation seeks to promote and
                    strengthen.
                </p>
            </main>

            <div style="display: flex; justify-content:center;" class="mt-0 mb-5">
                <iframe width="90%" height="340" src="https://www.youtube.com/embed/s4pxZUCmHsc" title="Gorina"
                    frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                    allowfullscreen></iframe>
            </div>
        </div>
        <!-- Side Content -->
        <div class="col-12 col-md-4 col-lg-4">

            <form action="{{ url('/search') }}" method="GET" class="w-100 d-flex" style="justify-content: center;">
                @csrf

                <div class="input-group w-100">
                    <input id="search" name="search" placeholder="Search..."
                        value="{{ old('search', request('search')) }}" class="form-control rounded-0 py-2">
                    <button type="submit" class="btn btn-sm border rounded-0">

                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-search"
                            width="24" height="24" viewBox="0 0 24 24" stroke-width="1" stroke="gray"
                            fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <path d="M10 10m-7 0a7 7 0 1 0 14 0a7 7 0 1 0 -14 0" />
                            <path d="M21 21l-6 -6" />
                        </svg>

                    </button>
                </div>
            </form>


            <p id="sideheader" class="text-center w-100 my-4 p-2 py-3 mt-3 bg-dark text-white mt-5" data-aos="fade-up"
                data-aos-duration="1000" style="letter-spacing: 0.1em;">
                RECENT ACTIVITIES
            </p>
            <ul class="list-group list-group-flush w-100" data-aos="fade-up" data-aos-duration="1000"
                style="font-size: 13px; text-align:left !important;">
                @if ($activities->isEmpty())
                    <li class="list-group-item">No recent posts found.</li>
                @else
                    @foreach ($activities as $activity)
                        <li class="list-group-item">
                            <a href="/activities/{{ rawurlencode($activity->title) }}"
                                style="color: #000; text-decoration: none;">
                                {{ ucfirst(substr($activity->title, 0, 100)) }}{{ strlen($activity->title) > 100 ? '...' : '' }}
                            </a>
                        </li>
                    @endforeach
                @endif
            </ul>

            <p id="sideheader2" class="text-center w-100 my-4 p-2 py-3 mt-3 bg-dark text-white mt-5" data-aos="fade-up"
                data-aos-duration="1000" style="letter-spacing: 0.1em;">
                GET INVOLVED
            </p>
            <ul class="list-group list-group-flush w-100" data-aos="fade-up" data-aos-duration="1000"
                style="font-size: 13px; text-align:left !important;">
                <li class="list-group-item">
                    <a href="/volunteer" class="text-dark text-decoration-none">BKWC Foundation Voluntary Services
                        Form</a>
                </li>
                <li class="list-group-item">
                    <a href="/donation" class="text-dark text-decoration-none">BKWC Foundation Donation / membership Form</a>
                </li>
            </ul>

        </div>

    </div>

</div>
</div>
