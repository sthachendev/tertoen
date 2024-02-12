<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Voluntary Form</title>
    <style>
        body {
            margin: 20px;
        }

        form,
        h4 {
            max-width: 50%;
            margin: auto;
        }

        .alert {
            margin: auto;
            margin-bottom: 0;
        }

        label {
            display: block;
            margin-bottom: 5px;
        }

        input[type="text"],
        input[type="date"],
        input[type="email"],
        select {
            width: 100%;
            padding: 8px;
            margin-bottom: 10px;
            box-sizing: border-box;
        }

        input[type="radio"] {
            margin-right: 5px;

        }

        input[type="checkbox"] {
            margin-right: 5px;
            margin-top: 10px;
        }

        textarea {
            width: 100%;
            height: 100px;
            padding: 8px;
            margin-bottom: 10px;
            box-sizing: border-box;
        }

        .button {
            background-color: #4CAF50;
            color: white;
            padding: 10px 15px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        .button:hover {
            background-color: #45a049;
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
</head>

<body>

    @Include('header')

    {{-- <iframe src="https://docs.google.com/forms/d/e/1FAIpQLSfXNh9G4sbifmbzXJLuH0j5lPgfrvVoWUZ1rRS9pR5MMP-kAw/viewform"
        width="100%" height="800" frameborder="0" marginheight="0" marginwidth="0">Loading...</iframe> --}}

    <h4 class="">BKWC Foundation Voluntary Services Form</h4>

    <div class="alert mb-0">
        @if (Session::has('success'))
            <div class="alert alert-success alert-dismissible fade show ms-5 me-5 mb-0">
                {{ Session::get('success') }}
                <span class="close" style="cursor: pointer;" onclick="this.parentElement.style.display='none';"
                    aria-label="Close">
                    <span class="btn-close"></span>
                </span>
            </div>
        @endif

        @if (Session::has('error'))
            <div class="alert alert-danger alert-dismissible fade show ms-5 me-5 mb-0">
                {{ Session::get('error') }}
                <span class="close" style="cursor: pointer;" onclick="this.parentElement.style.display='none';"
                    aria-label="Close">
                    <span class="btn-close"></span>
                </span>
            </div>
        @endif
    </div>

    <form method="POST" action="{{ route('volunteer.store') }}">
        @csrf

        <label for="fullName">Full Name</label>
        <input type="text" id="fullName" name="fullName" pattern="[A-Za-z ]+" placeholder="full name"
            title="Please enter only letters and spaces" required maxlength="100">
        <br><br>
        <label for="gender">Gender</label>
        <br>
        <select name="gender" required>
            <option value="" disabled selected></option>
            <option value="male">Male</option>
            <option value="female">Female</option>
        </select>
        <br><br>

        <label for="cid">CID No.</label>
        <input type="text" id="cid" name="cid" pattern="[0-9]+" required placeholder="ex. 12345678901"
            maxlength="30">
        <br><br>

        <label for="dob">Date of Birth</label>
        <input type="date" id="dob" name="dob" max="" placeholder="Example: January 7, 2019"
            required>
        <br><br>

        <label for="village">Village</label>
        <input type="text" id="village" name="village" required placeholder="village" pattern="[A-Za-z ]+"
            maxlength="30">
        <br><br>

        <label for="geog">Geog</label>
        <input type="text" id="geog" name="geog" required placeholder="geog" pattern="[A-Za-z ]+"
            maxlength="30">
        <br><br>

        <label for="dzongkhag">Select your Dzongkhag</label>
        <select id="dzongkhag" name="dzongkhag" required>
            <option value="" disabled selected></option>
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
        <br><br>

        <label for="nationality">Nationality</label>
        <input type="text" id="nationality" name="nationality" required placeholder="ex. bhutanese"
            pattern="[A-Za-z ]+" maxlength="20">
        <br><br>

        <label for="email">Email Address</label>
        <input type="email" id="email" name="email" required placeholder="user@email.com">
        <br><br>

        <label for="phone">Phone Number</label>
        <input type="text" id="phone" name="phone" required placeholder="ex. 17123456" pattern="[0-9]+"
            maxlength="20">
        <br><br>

        <label for="mailingAddress">Mailing Address</label>
        <textarea id="mailingAddress" name="mailingAddress" required maxlength="200"></textarea>
        <br><br>

        <label for="areasOfInterestSelected" style="font-weight:bold;">Please select the box next to the Area(s) of
            Voluntary Service You Are
            Interested In:
            <!-- Hidden input field to track checkbox selection -->
            <input type="checkbox" id="areasOfInterestSelected" name="areasOfInterestSelected" required
                style="opacity: 0">

        </label>

        <label for="socialActivities">
            <input type="checkbox" id="socialActivities" name="areasOfInterest[]"
                value="Social activities for community development and enhancement of living conditions of rural people.">
            Social activities for community development and enhancement of living conditions of rural people.
        </label>

        <label for="religiousActivities">
            <input type="checkbox" id="religiousActivities" name="areasOfInterest[]"
                value="Participation in religious activities for the well-being and welfare of everyone and our Country.">
            Participation in religious activities for the well-being and welfare of everyone and our Country.
        </label>

        <label for="projectDevelopment">
            <input type="checkbox" id="projectDevelopment" name="areasOfInterest[]"
                value="Project development and preparation of religious infrastructures.">
            Project development and preparation of religious infrastructures.
        </label>

        <label for="technicalSupport">
            <input type="checkbox" id="technicalSupport" name="areasOfInterest[]"
                value="Engineering and technical support in the preparation of drawings and estimates.">
            Engineering and technical support in the preparation of drawings and estimates.
        </label>

        <label for="fieldSurvey">
            <input type="checkbox" id="fieldSurvey" name="areasOfInterest[]"
                value="Development of project feasibility and field survey works.">
            Development of project feasibility and field survey works.
        </label>

        <label for="internationalFunding">
            <input type="checkbox" id="internationalFunding" name="areasOfInterest[]"
                value="Preparation of projects for seeking international funding sources.">
            Preparation of projects for seeking international funding sources.
        </label>

        <label for="socialSupport">
            <input type="checkbox" id="socialSupport" name="areasOfInterest[]"
                value="Social support activities and physical initiatives to improve the food and clothing security of underprivileged people.">
            Social support activities and physical initiatives to improve the food and clothing security of
            underprivileged people.
        </label>

        <label for="fundraising">
            <input type="checkbox" id="fundraising" name="areasOfInterest[]"
                value="Participating in fundraising programs and religious event hosting.">
            Participating in fundraising programs and religious event hosting.
        </label>

        <label for="webDevelopment">
            <input type="checkbox" id="webDevelopment" name="areasOfInterest[]"
                value="Web-page & App development, photography, audio and visual documentation, digital and IT services.">
            Web-page & App development, photography, audio and visual documentation, digital and IT services.
        </label>

        <label for="constructionMaterials">
            <input type="checkbox" id="constructionMaterials" name="areasOfInterest[]"
                value="Donation of construction materials like cement, bricks, stone boulders, sand and aggregate.">
            Donation of construction materials like cement, bricks, stone boulders, sand and aggregate.
        </label>

        <label for="hardwareMaterials">
            <input type="checkbox" id="hardwareMaterials" name="areasOfInterest[]"
                value="Donation of hardware materials like CGI Sheets, sanitary, plumbing and electrical items.">
            Donation of hardware materials like CGI Sheets, sanitary, plumbing and electrical items.
        </label>

        <label for="monetaryContributions">
            <input type="checkbox" id="monetaryContributions" name="areasOfInterest[]"
                value="Monetary contributions and donations.">
            Monetary contributions and donations.
        </label>

        <br>
        <label for="physicalContributions">
            <input type="checkbox" id="physicalContributions" name="areasOfInterest[]"
                value="Physical and manual contributions.">
            Physical and manual contributions.
        </label>

        <br><br>
        <label for="declaration">
            <input type="checkbox" id="declaration" name="declaration" required>
            I hereby apply for voluntary service with the Baeyuel Kuenzang Woesel Choeling
            Foundation in the area(s) of interest indicated above. I have read and understood the
            organization's <a href="/about-us">mission and objectives</a>, and I am committed to supporting and
            participating
            in its activities. I understand that my membership is voluntary, and I agree to abide by the
            organization's rules and guidelines. </label>

        <br><br>
        <button class="button" type="submit">Submit</button>
        <br><br>

    </form>

    <script>
        var checkboxes = document.querySelectorAll('input[name="areasOfInterest[]"]');
        checkboxes.forEach(function(checkbox) {
            checkbox.addEventListener('change', function() {
                var isChecked = false;
                checkboxes.forEach(function(cb) {
                    if (cb.checked) {
                        isChecked = true;
                        console.log("checked", cb.checked);
                        return; // Exit the loop early if a checkbox is checked
                    }
                });
                document.getElementById("areasOfInterestSelected").checked = isChecked;

            });
        });

        // Get the current date
        var currentDate = new Date();

        // Calculate the date 10 years ago
        var tenYearsAgo = new Date();
        tenYearsAgo.setFullYear(tenYearsAgo.getFullYear() - 10);

        // Format the date to match the date input format (YYYY-MM-DD)
        var tenYearsAgoFormatted = tenYearsAgo.toISOString().split('T')[0];

        // Set the max attribute of the input field
        document.getElementById("dob").setAttribute("max", tenYearsAgoFormatted);
    </script>

    @Include('footer')

</body>

</html>
