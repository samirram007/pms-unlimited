@extends('website.index')
@section('content')
    <style scoped>
        .page {
            min-height: 100%;
            width: 100%;
            box-sizing: border-box;
            border: 2px solid rgba(102, 85, 85, 1.00);
            padding: 2px;
            background-image: url('/images/gallary-bg.jpg');
            background-size: cover;
            background-repeat: no-repeat;

        }

        .img1 {
            width: 100%;
            margin: 1px;
            border: 1px;
            padding: 2px;
            background-image: url("{{ asset('/images/gallary_head.png') }}");
            position: relative;


        }

        .gallery_txt {
            position: absolute;
            font-size: 80px;
            font-weight: 800;
            margin-top: 200px;
            margin-left: 220px;
            color: #ffffff;
            text-shadow:  0 5px 5px #ecaaff, 
               0 2px 0 #ffb4fa,
               0 3px 0 #ffc1f2,
               0 4px 0 #ff1add,
               0 5px 0 #bf008c,
               0 6px 1px rgba(148, 0, 143, 0.285),
               0 0 5px rgba(148, 0, 216, 0.738),
               0 1px 3px rgba(0,0,0,.3),
               0 3px 5px rgba(0,0,0,.2),
               0 5px 10px rgba(0,0,0,.25),
               0 10px 10px rgba(0,0,0,.2),
               0 20px 20px rgba(0,0,0,.15);

        }
        @media only screen and (max-width: 700px) {
            .gallery_txt{
            margin-left: 150px;
            font-size: 60px;
            margin-top: 150px;
            }

        }
        @media only screen and (max-width: 800px) {
            .gallery_txt{
            margin-left: 160px;
            font-size: 60px;
            margin-top: 180px;
            }

        }

        /* .line{
  position: absolute;
  width: 300px;
  height: 5px;
  border: 18px solid ;
  border-color: rgb(255, 232, 255) transparent transparent transparent;
  border-radius: 50%/100% 100% 100%/0% 0% 30% 30%;   transform: rotate(180deg);
  margin-left: -10px;
  margin-top: 50px;}
 */
        .content {
            padding: 2rem 10rem;
            margin: 2rem auto;


        }

        .text2 {
            font-size: 2rem;
            font-family: "Gill Sans", "Gill Sans MT", "Myriad Pro", "DejaVu Sans Condensed", Helvetica, Arial, sans-serif;
            color: rgba(72, 6, 94, 1.00);
            padding-top: 5px;
            text-align: justify;
            vertical-align: top;
        }

        .imgbox {
            width: 550px;
            height: 250px;
            background-size: cover;
            border-bottom-left-radius: 15px;
            border-top-right-radius: 15px;
            border: 10px solid rgba(185, 92, 11, 0.30);
            position: relative;
            margin: 10px auto;
            display: inline-block;
            margin-top: 30px;
            transition: all 0.3s;
        }

        .imgbox:hover {
            filter: grayscale(95%);
            cursor: pointer;
            box-shadow: 5px 5px 5px rgba(10, 10, 10, 0.5);
            border: 40px solid rgba(77, 7, 154, 0.20);
        }

        .wrapText {
            width: calc(100% - 320px);
            padding: 0px 15px;
            vertical-align: top;
            display: inline-block;
        }

        .textHeader {
            font-size: 2.5rem;
            padding-bottom: 1rem;
            text-decoration: underline;
            font-family: "Gill Sans", "Gill Sans MT", "Myriad Pro", "DejaVu Sans Condensed", Helvetica, Arial, sans-serif;
        }

        .gap {
            min-height: 2rem;
        }

        #ImagePop {
            display: none;
            /* Hidden by default */
            position: fixed;
            /* Stay in place */
            z-index: 101;
            /* Sit on top */
            padding-top: 100px;
            /* Location of the box */
            left: 0;
            top: 0;
            width: 100%;
            /* Full width */
            height: 100%;
            /* Full height */
            overflow: auto;
            /* Enable scroll if needed */
            background-color: rgb(0, 0, 0);
            /* Fallback color */
            background-color: rgba(0, 0, 0, 0.9);
            /* Black w/ opacity */

            transition: all 0.3s;
        }

        .Anim {
            animation: Blury 2s cubic-bezier(.33, .36, .26, .36) both;
        }

        .Anim1 {
            animation: Blury 2s cubic-bezier(.33, .36, .26, .36) both;
        }

        .Anim2 {
            animation: Blury 3s cubic-bezier(.33, .36, .26, .36) both;
        }

        .Anim3 {
            animation: Blury 4s cubic-bezier(.33, .36, .26, .36) both;
        }

        .Anim4 {
            animation: Blury 5s cubic-bezier(.33, .36, .26, .36) both;
        }

        @keyframes Blury {
            0% {

                filter: blur(4px);
            }

            50% {
                filter: blur(2px);
            }

            100% {
                filter: blur(0px);
            }
        }

        #PreviewImage {

            -webkit-background-size: cover;
            -moz-background-size: cover;
            -o-background-size: cover;
            background-size: auto;
            background-position: center;
            background-repeat: no-repeat;

            min-height: 90%;

            vertical-align: middle;
            background-color: #fefefe;
            margin: auto;
            padding: 20px;
            border: 3px solid rgba(240, 231, 232, 0.83);
            box-shadow: 5px 5px 5px black;
            border-radius: 10px;
            width: 60%;

        }

        #ImagePopClose {
            position: absolute;
            background-color: rgba(248, 235, 235, 0.71);
            border-radius: 50%;
            padding: 10px 15px;
            font-size: 28px;
            right: 20px;
            top: 10px;
            color: rgba(16, 18, 18, 1.00);
            font-weight: bold;
            cursor: pointer;
        }

        #ImagePopClose:hover,
        #ImagePopClose:focus {
            color: #000;
            text-decoration: none;
            cursor: pointer;
        }
    </style>
    <script>
        function ImagePopClose() {

            document.getElementById("ImagePop").style.display = "none";

        }

        function ShowImage(elmnt) {
            var image = elmnt.style.backgroundImage;
            document.getElementById("ImagePop").style.display = "block";

            document.getElementById("PreviewImage").style.backgroundImage = image;
        }
    </script>
    <div class="page">
        <div id="ImagePop">
            <div id="ImagePopClose" onClick="ImagePopClose();" style="">&times;</div>
            <div id="PreviewImage" class="Anim"></div>

        </div>
        <div>
            <div class="img1">
                <div class="gallery_txt">Gallery <div class="line"></div></div>
            </div>
        </div>
        <div>
            <div class="content">


                <div class="text2">

                    <div class="imgbox Anim1" onClick="ShowImage(this);"
                        style="background-image:url({{ asset('website/images/gallery/1.jpeg') }});">
                    </div>
                    <div class="imgbox Anim2" onClick="ShowImage(this);"
                        style="background-image:url({{ asset('website/images/gallery/2.jpeg') }});">
                    </div>
                    <div class="imgbox Anim3" onClick="ShowImage(this);"
                        style="background-image:url({{ asset('website/images/gallery/3.jpeg') }});"></div>
                    <div class="imgbox Anim4" onClick="ShowImage(this);"
                        style="background-image:url({{ asset('website/images/gallery/4.jpeg') }});"></div>
                    <div class="imgbox Anim" onClick="ShowImage(this);"
                        style="background-image:url({{ asset('website/images/gallery/5.jpeg') }});"></div>
                    <div class="imgbox Anim" onClick="ShowImage(this);"
                        style="background-image:url({{ asset('website/images/gallery/6.jpeg') }});"></div>

                    <div class="imgbox Anim" onClick="ShowImage(this);"
                        style="background-image:url({{ asset('website/images/gallery/7.jpeg') }});"></div>
                    <div class="imgbox Anim" onClick="ShowImage(this);"
                        style="background-image:url({{ asset('website/images/gallery/8.jpeg') }});"></div>
                    <div class="imgbox Anim" onClick="ShowImage(this);"
                        style="background-image:url({{ asset('website/images/gallery/9.jpeg') }});"></div>

                    <div class="imgbox Anim" onClick="ShowImage(this);"
                        style="background-image:url({{ asset('website/images/gallery/10.jpeg') }});"></div>
                    <div class="imgbox Anim" onClick="ShowImage(this);"
                        style="background-image:url({{ asset('website/images/gallery/11.jpeg') }});"></div>

                    <div class="gap"></div>


                </div>
            </div>
        @endsection
    </div>