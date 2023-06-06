{{-- <style scoped>
        .imgtop1 {
            height: 40rem;
            width: 100%;
            background-size: cover;
            background-position: center;
            padding-top: 7rem;
        }

        .box1 {
            box-sizing: border-box;
            height: 200px;
            width: 100%;
            background-color: rgba(255, 255, 255, 1.00);
            position: relative;
        }

        .textbox1 {
            box-sizing: border-box;
            height: 160px;
            width: 30%;
            border: 3px solid rgba(185, 181, 181, 1.00);
            box-shadow: 5px 5px 5px black;

            margin-left: 6rem;
            margin-top: 1rem;
            vertical-align: top;
            display: inline-block;
        }

        .textcontent1 {
            height: 4rem;
            width: 100%;
            text-align: center;
            font-size: 2rem;
            color: white;
            background-color: rgba(4, 96, 26, 1.00);
            padding: 2px;
            font-family: Impact, Haettenschweiler, "Franklin Gothic Bold", "Arial Black", sans-serif;
        }

        .textcontent2 {
            height: 3rem;
            font-size: 1.75rem;
            color: black;
            text-align: center;
            font-family: Impact, Haettenschweiler, "Franklin Gothic Bold", "Arial Black", sans-serif;
        }

        .textcontent3 {
            font-size: 16px;
            color: black;
            text-align: center;
            font-family: "Gill Sans", "Gill Sans MT", "Myriad Pro", "DejaVu Sans Condensed", Helvetica, Arial, sans-serif;
        }

        .textcontent4 {
            font: Impact, Haettenschweiler, "Franklin Gothic Bold", "Arial Black", sans-serif;
            font-size: 24px;
            text-align: center;
            padding: 5px;
            padding-top: 4rem;
            right: 6rem;
            height: 100%;
            display: inline-block;
            vertical-align: text-bottom;
            width: 60%;
        }

        .imgbox3 {
            box-sizing: border-box;
            height: 333px;
            width: 100%;
            background-image: url({{ asset('website/images/pathology/new.png');
            background-size: cover;
            border-top: 2px solid rgba(132, 127, 127, 1.00);
        }
    </style>

    <div class="container">
        <div class="imgtop1">
            <img src="{{ asset('website/images/pathology/H.jpg') }}" alt="" style="width: 100%; height: 100%;">
        </div>
        <div class="box1">
            <div class="textbox1">

                <div class="textcontent1"> HOME IS WHERE HEALTH IS </div>

                <div class="textcontent2"> OUR HOME SERVICES </div>

                <div class="textcontent3"> Blood Collection </div>

                <div class="textcontent3"> Portable E.C.G. </div>
            </div>
            <div class="textcontent4"> To Know More, call:03512 - 255443 <br><br> Mobile : 8759835989/8370840099</div>
        </div>
        <div class="imgbox3"></div>

    </div> --}}
@extends('website.index')
@section('content')
    <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
            font-family: Arial, Helvetica, sans-serif;
        }

        .main {
            background-color: #1c1b25;
        }


        .bg_image {
            margin: 120px;
            height: 468px;
            width: 500px;
            background-image: url(/images/scooter.png);
            background-repeat: no-repeat;
            background-size: cover;
            /* background-attachment: fixed; */
        }

        .overlay {

            font-size: 45px;
            color: white;
            text-shadow: 2px 1.5px 3px aqua;
            margin-top: 180px;
        }

        .overlay-2 {
            font-size: 55px;
            color: rgb(255, 204, 0);
            margin-top: 40px;
            font-weight: 600;
            text-shadow: 2px 1.5px 3px rgb(225, 255, 28);



        }

        .overlay-3 {
            margin-top: 30px;
            font-size: 25px;
            word-spacing: 3px;
            letter-spacing: 1px;
            color: #8afffd;
            text-shadow: 1px 0.5px 2px rgb(198, 248, 255);


        }

        .overlay-4 {
            font-size: 25px;
            margin-top: 15px;
            word-spacing: 3px;
            letter-spacing: 1px;
            text-shadow: 1px 0.5px 2px rgb(198, 248, 255);
            color: #1bfffb;
        }

        .overlay-5 {
            margin-top: 15px;
            word-spacing: 3px;
            letter-spacing: 1px;
            text-shadow: 1px 0.5px 2px rgb(198, 248, 255);
            font-size: 25px;
            color: #8afffd;
        }

        .hr-1 {
            display: block;
            height: 1px;
            border: 0;
            border-top: 6px solid rgb(255, 204, 0);
            margin: auto;
            margin-top: 50px;
            padding: 0;
            width: 500px;
            transform: skew(20deg);
            margin-bottom: 40px;
            margin-left: 5px;
        }


        .textbox2 {
            color: #fff;
            border: 1px solid black;
            width: 400px;
            font-size: 20px;
            margin: 40px;
        }

        .box-2 {
            width: 100%;
            margin-bottom: 40px;
        }

        .row-1 {
            width: 50%;
            background-color: rgb(255, 204, 0);
            height: 150px;
            text-align: center;
            color: #000029;
            margin-bottom: 20px;
            border-top: 10px solid #000029;
            border-bottom: 10px solid #000029;
        }

        .row-2 {
            width: 50%;
            background-color: #001a67;
            height: 150px;
            border-top: 10px solid rgb(255, 204, 0);
            border-bottom: 10px solid rgb(255, 204, 0);
            color: rgb(255, 204, 0);
            margin-right: -5px;

        }

        @media only screen and (max-width: 1200px) {
            body {
                width: 100%;
            }

            .main {
                width: 100%;
            }

            .bg_image {
                width: 530px;
                height: 500px;
                margin: auto;
                margin-top: 250px;
            }

            .row {
                width: 100%;
            }

            .row-1 {
                width: 100%;
                margin: auto;
            }

            .row-2 {
                width: 100%;
                margin: 30px auto;
            }

            .row-txt-1 {
                margin: auto;
                margin-left: 80px;
                margin-top: -70px;
            }

            .hr-1 {
                width: 100%;
            }
        }


        @media only screen and (max-width: 1000px) {
            body {
                width: 100%;
            }

            .main {
                width: 100%;
            }

            .bg_image {
                width: 450px;
                height: 430px;
                margin: auto;
                margin-top: 250px;
            }

            .row {
                width: 100%;
            }

            .row-1 {
                width: 100%;
                margin: auto;
            }

            .row-2 {
                width: 100%;
                margin: 30px auto;
            }

            .row-txt-1 {
                margin: auto;
                margin-left: 80px;
                margin-top: -70px;
            }

            .hr-1 {
                width: 100%;
            }
        }

        @media only screen and (max-width: 700px) {
            body {
                width: 100%;
            }

            .main {
                width: 100%;
            }

            .row {
                width: 100%;
            }

            .row-1 {
                width: 100%;
                margin: auto;
            }

            .row-2 {
                width: 100%;
                margin: 30px auto;
            }


            .bg_image {
                width: 350px;
                height: 330px;
                margin: auto;
                margin-top: 150px;
            }

            .row-txt-1 {
                margin: auto;
                margin-left: 40px;
                margin-top: -70px;
            }

            .hr-1 {
                width: 100%;
            }
        }

        @media only screen and (max-width: 400px) {
            body {
                width: 100%;
            }

            .main {
                width: 100%;
            }

            .row {
                width: 100%;
            }

            .bg_image {
                width: 350px;
                height: 330px;
                margin: auto;
                margin-top: 150px;
            }

            .overlay {
                font-size: 35px;

            }

            .overlay-2 {
                font-size: 45px;
            }

            .row-1 {
                width: 100%;
                margin: auto;
                padding-bottom: 10px;
                height:200px;
            }

            .row-2 {
                width: 100%;
                margin: 30px auto;
            }

            .row-txt-1 {
                margin: auto;
                margin-left: 40px;
                margin-top: -70px;
            }

            .hr-1 {
                width: 100%;
            }
        }
        @media only screen and (max-width: 370px) {
            body {
                width: 100%;
            }

            .main {
                width: 100%;
            }

            .row {
                width: 100%;
            }

            .bg_image {
                width: 350px;
                height: 330px;
                margin: auto;
                margin-top: 180px;
            }

            .overlay {
                font-size: 35px;

            }

            .overlay-2 {
                font-size: 45px;
            }

            .row-1 {
                width: 100%;
                margin: auto;padding-bottom: 5px;
            }

            .row-2 {
                width: 100%;
                margin: 30px auto;
            }

            .row-txt-1 {
                margin: auto;
                margin-left: 40px;
                margin-top: -70px;
            }

            .hr-1 {
                width: 100%;
            }
        }

    </style>
    <div class="main">
        <div class="row ">
            <div class="col-md-6 bg_image"> </div>
            <div class="col-md-6 row-txt-1">
                <div class="overlay">
                    NO MORE LAB
                </div>
                <div class="overlay-2">
                    QUOTES
                </div>
                <hr class="hr-1">
                <div class="overlay-3">
                    GET YOUR BLOODTEST DONE
                </div>
                <div class="overlay-4">
                    AT YOUR HOME
                </div>
                <div class="overlay-5">
                    WITH ONLINE REPORT DELIVERY
                </div>
                <hr class="hr-1">
            </div>
        </div>

        <div class="row box-2">
            <div class="col-md-6 row-1" style="  ">
                <div class="card text-white mb-3" style=" padding:20px;border-radius:2px;">
                    <div class="card-header" style="font-size: 23px;font-weight:600; ">HOME IS WHERE HEALTH IS</div>
                    <div class="card-body">
                        <div class="card-title" style="color: #000029; font-weight:600; font-size:18px;margin-top:6px;"> OUR
                            HOME SERVICES </div>
                        <div class="card-text" style="font-size: 20px;">Blood Collection </div>
                        <div class="card-text" style="font-size: 20px;"> Portable E.C.G. </div>
                    </div>
                </div>

            </div>
            <div class="col-md-6 row-2" style="">
                <div class="card text-white  mb-3"
                    style="padding:20px; border-radius:2px;font-size:20px;text-align:center;line-height:20px;">
                    <div class="card-header" style="margin-bottom:10px;font-size:25px;font-weight:600;">To Know More</div>
                    <div class="card-body">
                        <div class="card-text">
                            Call : 03512 - 255443
                        </div>
                        <div class="card-text "  style="margin-top: 8px;">
                            Mobile : 8759835989/8370840099
                        </div>
                    </div>
                </div>


            </div>

        </div>
        {{-- <div class="box-2">
            <div class="textbox2">

                <div class="textcontent"> HOME IS WHERE HEALTH IS </div>

                <div class="textcontent"> OUR HOME SERVICES </div>

                <div class="textcontent"> Blood Collection </div>

                <div class="textcontent"> Portable E.C.G. </div>
            </div>
            <div class="textcontent4"> To Know More, call:03512 - 255443 <br><br> Mobile : 8759835989/8370840099</div>
        </div> --}}


    </div>

    </div>
@endsection
