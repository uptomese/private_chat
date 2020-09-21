<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        .card-box{
            height: 330px
        }
        .friends{
            height: 280px;
        }
    </style>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

    {{-- <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" /> --}}
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">

    <link rel="stylesheet" href="{{URL::asset('css/box.css')}} ">
    <title>Document</title>
</head>
<body>

<div class="container">
	<div class="row">
	    <div class="chatbox chatbox22 chatbox--tray">
        <div class="chatbox__title">
        <h5><a href="javascript:void()">Leave a message</a></h5>
        <!--<button class="chatbox__title__tray">
            <span></span>
        </button>-->
        <button class="chatbox__title__close">
            <span>
                <svg viewBox="0 0 12 12" width="12px" height="12px">
                    <line stroke="#FFFFFF" x1="11.75" y1="0.25" x2="0.25" y2="11.75"></line>
                    <line stroke="#FFFFFF" x1="11.75" y1="11.75" x2="0.25" y2="0.25"></line>
                </svg>
            </span>
        </button>
    </div>

        <div class="chatbox__body" style="padding: 0%">
            <div class="row">
                <div class="col-md-4" style="padding-right: 0%">
                    <div class="card card-default">
                        <div class="card-header">Private Chat App</div>
                        <div class="card-body friends" style="overflow: auto; padding:0%">
                            <ul class="list-group " >
                                <li class="list-group-item">Cras justo odio</li>
                                <li class="list-group-item">Dapibus ac facilisis in</li>
                                <li class="list-group-item">Morbi leo risus</li>
                                <li class="list-group-item">Porta ac consectetur ac</li>
                                <li class="list-group-item">Vestibulum at eros</li>
                                <li class="list-group-item">Vestibulum at eros</li>
                                <li class="list-group-item">Vestibulum at eros</li>
                            </ul>
                        </div>

                    </div>
                </div>
                <div class="col-md-8" style="padding-left: 0%">
                    <div class="card card-default card-box">
                        <div class="card-header">Chat</div>
                        <div class="card-body" style="overflow: auto">
                            <div>hello</div>
                            <div>how are you</div>
                            <div>what your name?</div>
                            <div>how odl are you</div>
                            <div>hm...</div>
                            <div>salkdfjdkasl</div>
                            <div>aklfjklasj</div>
                            <div>jkl;fadskjdfasjk</div>
                            <div>alkj;fdjlkfdj</div>
                        </div>
                        <form action="" class="card-footer" style="padding-bottom: 0%">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Write here">
                            </div>

                        </form>
                    </div>

            </div>

        </div>
</div>
	</div>
	</div>
	<script src="https://code.jquery.com/jquery-3.1.1.min.js" integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8=" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="{{URL::asset('js/box.js')}} "></script>
</body>
</html>
