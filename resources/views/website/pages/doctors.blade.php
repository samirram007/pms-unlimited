
@extends('website.index')
@section('content')
<style scoped>
    .page{ min-height: 100%;
            width:100%;
            box-sizing:border-box;
            border: 2px solid rgba(102,85,85,1.00);
            padding: 2px;
            background: rgba(255,255,255,1.00);
            }
    .img1{ height: 40vh;
                width: 100%;
                margin: 1px;
                border: 1px;
                padding: 2px;
                background-image:url("website/images/pathology/doc.jpg");
                background-size:cover;
                position:relative;


        }
    .text1{ width:40rem;
            height:10rem;
            border:3px outset rgba(244,244,244,0.48);
            background-color:rgba(3,87,176,1.00);

               background: linear-gradient(0deg, rgba(24,124,243,1.00), rgba(3,87,176,1.00));
        border-radius: 5px;
            font-size:4rem;
        padding: 3rem;
            text-align:center;
            vertical-align:middle;
            color:white;
            font-weight:bold;
            bottom:0;
            position:absolute;
            margin-left:10rem;
            font: Impact, Haettenschweiler, "Franklin Gothic Bold", "Arial Black", sans-serif;
            box-shadow:10px 10px 10px black;
            }
    .content{
            padding:2rem 10rem;
            margin:2rem auto;


        }
        .text2{
            font-size:2rem;
                font-family:"Gill Sans", "Gill Sans MT", "Myriad Pro", "DejaVu Sans Condensed", Helvetica, Arial, sans-serif;
                color:rgba(72,6,94,1.00);
                padding-top:5px;
            text-align: justify;
                vertical-align: top;
            }
        .imgbox{ width: 300px;
                height: 400px;


                border-bottom-left-radius:15px;
                border-top-right-radius:15px;
                border:1px solid rgba(184,193,204,1.00);
                position:relative;
              margin: 10px auto;
            background: linear-gradient(to bottom,  rgba(184,193,204,1.00), rgba(225,225,204,1.00));

            background-image:url("website/images/corner.png");
                 cursor: pointer;
          box-shadow: 5px 5px 5px rgba(255,255,255,0.5);
            display: inline-block;
            transition: all 0.3s ease-in-out;
            text-align: center;
            }
        .imgbox:hover{filter: brightness(102%);  box-shadow: 5px 5px 5px rgba(10,10,10,0.1) ;
                border:1px solid rgba(77,7,154,0.20); }
        .roundImg{
            box-sizing: border-box;
            border-radius: 50%; width:200px; height: 200px; margin: 25px auto;
            background-color: rgba(24,124,243,1.00);
               background: linear-gradient(45deg, rgba(24,124,243,1.00), white);
            padding: 2px;
            transition: all 0.9s ease-in-out;
            filter: brightness(100%);
        }
        .roundImg:hover{
               background: linear-gradient(45deg, aqua, rgba(24,124,243,1.00));
            filter: brightness(110%);

        }
        .docName,.docDesg{ color: rgba(4,67,142,1.00);}
        .docName:hover,.docDesg:hover{ font-weight: bold;}
        .wrapText{
            width: calc(100% - 320px);
            padding: 0px 15px;
            vertical-align: top;
            display: inline-block;
        }
        .textHeader{ font-size:2.5rem;
            padding-bottom: 1rem;
                text-decoration:underline;
                font-family:"Gill Sans", "Gill Sans MT", "Myriad Pro", "DejaVu Sans Condensed", Helvetica, Arial, sans-serif;
            }
        .gap{min-height:2rem; }
        #ImagePop{
             display: none; /* Hidden by default */
      position: fixed; /* Stay in place */
      z-index:101; /* Sit on top */
      padding-top: 100px; /* Location of the box */
      left: 0;
      top: 0;
      width: 100%; /* Full width */
      height: 100%; /* Full height */
      overflow: auto; /* Enable scroll if needed */
      background-color: rgb(0,0,0); /* Fallback color */
      background-color: rgba(0,0,0,0.9); /* Black w/ opacity */

     transition: all 0.3s;
        }

        .Anim{
         animation:  Blury 2s cubic-bezier(.33,.36,.26,.36) both;
    }
            .Anim1{
         animation:  Blury 2s cubic-bezier(.33,.36,.26,.36) both;
    }
            .Anim2{
         animation:  Blury 3s cubic-bezier(.33,.36,.26,.36) both;
    }
            .Anim3{
         animation:  Blury 4s cubic-bezier(.33,.36,.26,.36) both;
    }
            .Anim4{
         animation:  Blury 5s cubic-bezier(.33,.36,.26,.36) both;
    }
    @keyframes Blury {
     0% {

         filter:blur(4px);
      }
     50% {
        filter:blur(2px);
      }
      100% {
       filter:blur(0px);
      }
    }
        #PreviewImage{

      -webkit-background-size: cover;
      -moz-background-size: cover;
      -o-background-size: cover;
      background-size: auto;
            background-position: center;
            background-repeat:no-repeat;

             min-height:90%;

            vertical-align: middle;
             background-color: #fefefe;
      margin: auto;
      padding: 20px;
      border: 3px solid rgba(240,231,232,0.83);
            box-shadow: 5px 5px 5px black;
            border-radius: 10px;
      width: 60%;

        }
        #ImagePopClose{position:absolute;
                    background-color: rgba(248,235,235,0.71);
                    border-radius: 50%; padding: 10px 15px;
            font-size:28px;
                    right:20px; top: 10px; color: rgba(16,18,18,1.00); font-weight: bold;
        cursor: pointer;}
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
    function ShowImage(elmnt)
        {
            var image=elmnt.style.backgroundImage;
            document.getElementById("ImagePop").style.display="block";

            document.getElementById("PreviewImage").style.backgroundImage=image;
        }
    </script>
    <div class="page">
        <div id="ImagePop">
        <div id="ImagePopClose" onClick="ImagePopClose();"
             style="">&times;</div>
            <div id="PreviewImage" class="Anim"></div>

        </div>
    <div>
    <div class="img1">
    <div class="text1">Doctor with us</div>
    </div>
    </div>
    <div class="container">
    <div class="content">


    <div class="text2">

    <div class="imgbox " >
        <img class="roundImg" src="{{asset('website/images/doctor/1.jpg')}}" alt="">
        <div class="docName">
            Dr. Abhinav Saket
            </div>
            <div class="docDesg">
            MD., Radiologist
            </div>
        </div>
    <div class="imgbox ">
        <img class="roundImg" src="{{asset('website/images/doctor/2.jpg')}}" alt="">
        <div class="docName">
            Dr. Priyanka Sarkar
            </div>
            <div class="docDesg">
            MBBS., Sonologist
            </div>
        </div>
    <div class="imgbox " >
        <img class="roundImg" src="{{asset('website/images/doctor/3.jpg')}}" alt="">
        <div class="docName">
            Dr. Ramdas Murmu
            </div>
            <div class="docDesg">
            MD., Radiologist
            </div>
        </div>
        <div class="imgbox ">
        <img class="roundImg" src="{{asset('website/images/doctor/4.jpg')}}" alt="">
            <div class="docName">
            Dr. Arijit Biswas
            </div>
            <div class="docDesg">
            MBBS., Sonologist
            </div>
        </div>
        <div class="imgbox ">
        <img class="roundImg" src="{{asset('website/images/doctor/5.jpg')}}" alt="">
            <div class="docName">
            Dr. Jaydeep Tripathy
            </div>
            <div class="docDesg">
            MD., Radiologist
            </div>
        </div>
        <div class="imgbox ">
        <img class="roundImg" src="{{asset('website/images/doctor/6.jpg')}}" alt="">
            <div class="docName">
            Dr. Krishnendu Das
            </div>
            <div class="docDesg">
            MD., Pathologist
            </div>
        </div>
        <div class="imgbox ">
        <img class="roundImg" src="{{asset('website/images/doctor/7.jpg')}}" alt="">
            <div class="docName">
            Dr. Sekhar Das
            </div>
            <div class="docDesg">
            MD., PGDCC(Dip-Card)
            </div>
        </div>

    <div class="gap"></div>


    </div>
    </div>
    @endsection
