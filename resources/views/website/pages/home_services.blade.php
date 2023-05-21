@extends('website.index')
@section('content')
<style scoped>

    .imgtop1{ height: 40rem;
                width: 100%;
                background-size:cover;
        background-position: center;
        padding-top: 7rem;
        }
    .box1{ box-sizing:border-box;
                height:200px;
                width:100%;
        background-color: rgba(255,255,255,1.00);
                position: relative;
                }
    .textbox1{ box-sizing:border-box;
                height:160px;
                width:30%;
                border:3px solid rgba(185,181,181,1.00);
        box-shadow: 5px 5px 5px black;

        margin-left:6rem;
        margin-top:1rem;
        vertical-align: top;
        display: inline-block;
                }
    .textcontent1{ height:4rem;
                width:100%;
                text-align:center;
                font-size:2rem;
                color:white;
                background-color:rgba(4,96,26,1.00);
                padding:2px;
                font-family:Impact, Haettenschweiler, "Franklin Gothic Bold", "Arial Black", sans-serif;
                    }
    .textcontent2{ height:3rem; font-size:1.75rem;
                    color:black;
                    text-align: center;
                    font-family:Impact, Haettenschweiler, "Franklin Gothic Bold", "Arial Black", sans-serif;
                    }
    .textcontent3{ font-size:16px;
                    color:black;
                    text-align: center;
                    font-family:"Gill Sans", "Gill Sans MT", "Myriad Pro", "DejaVu Sans Condensed", Helvetica, Arial, sans-serif;
                    }
    .textcontent4{ font:Impact, Haettenschweiler, "Franklin Gothic Bold", "Arial Black", sans-serif;
                    font-size:24px;
                    text-align:center;
                    padding:5px;
        padding-top:4rem;
                     right:6rem;
                    height: 100%;
        display: inline-block;
        vertical-align: text-bottom;
        width: 60%;
                    }
    .imgbox3{ box-sizing:border-box;
                height: 333px;
                width:100%;
                background-image:url({{asset('website/images/pathology/new.png')}});
                background-size:cover;
        border-top:2px solid rgba(132,127,127,1.00);
        }

    </style>

    <div class="container">
    <div class="imgtop1">
        <img src="{{asset('website/images/pathology/H.jpg')}}" alt="" style="width: 100%; height: 100%;"></div>
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

    </div>
@endsection
