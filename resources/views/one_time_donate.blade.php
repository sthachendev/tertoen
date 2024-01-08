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
    </style>
</head>

<body>

    @Include('header')
<div class="main-conatiner d-flex flex-column flex-wrap bg-warning">
    
    <div class="image-container w-100 position-relative">
        <div class="position-absolute top-100 start-50 translate-middle bg-white rouned">
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
                <h2>SMALLER AMOUNT, GREATER IMPACT</h2>
                <p>Smaller monthly donations can better support our long-term projects to reach more people around the world.</p>
                </div>
            </div>
            </div>
    </div>

    <div class=" bg-danger">
        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ullam eaque asperiores laboriosam illum exercitationem quam perspiciatis eos omnis nam impedit eligendi voluptatibus, incidunt dolorum, suscipit unde quidem culpa assumenda corporis?
        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur nemo, cupiditate laborum porro aliquam a explicabo unde animi eligendi ex amet pariatur cum harum repellendus omnis. Voluptatum dolorem debitis reprehenderit!    
    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tenetur incidunt odit rem tempore ut quidem, vero sed voluptate. Voluptas ipsam reiciendis consequuntur, dolorum quis officia odio distinctio aperiam incidunt praesentium!
    </div>

</div>
    

    @Include('footer')

</body>

</html>
