<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="<?= base_url() ?>front_assets/agility/agiliti-favicon.png">
    <title>Agiliti | 2022 Commercial Kickoff</title>

    <!-- Bootstrap core CSS -->
    <link href="<?=base_url()?>front_assets/login_template/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?=base_url()?>front_assets/font-awesome-modified/css/all.css" rel="stylesheet" type="text/css">
    <script src="<?=base_url()?>front_assets/font-awesome-modified/js/pro.js"></script>
</head>

<style>
    .zoom {
      overflow: scroll;
    }

    @media (max-width: 750px) {
        .text-right {
            text-align: center !important;
        }
        .home-icon{
            margin: auto;
        }

        .text-left {
            text-align: center !important;
        }
    }

    .home-menu-icon:hover{
        color: #55c7ff !important;
    }
</style>

<nav class="navbar navbar-expand-lg navbar-light bg-light" style="padding-bottom: 10px;padding-top: 10px;">
    <a class="navbar-brand" href="#"><img src="<?=base_url()?>front_assets/agility/Agiliti_logo_transparent.png" style="width: 100px;"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">

        </ul>

<!--        <ul class="navbar-nav">-->
<!--            <li class="nav-item dropdown">-->
<!--                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"  style="color: white;">-->
<!--                    <i class="fas fa-envelope" style="font-size: 22px;" aria-hidden="true"></i> <span class="msg-noti-count badge badge-danger" style="display: none">0</span>-->
<!--                </a>-->
<!--                <div class="unread-msgs-list dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">-->
<!--                    <div class="msg-divider dropdown-divider" style="display: none"></div>-->
<!--                    <span class="msg-mark-all-read dropdown-item" style="cursor: pointer; display: none"><i class="fas fa-check-double" style="color: #2290df;"></i> Mark all as read</span>-->
<!--                </div>-->
<!--            </li>-->
<!--        </ul>-->

        <ul class="main-menu nav navbar-nav" style="margin-right:20px;">
            <li><a href="<?= base_url() ?>home" style="color: black;">LOBBY</a></li>
        </ul>
<!--        <ul class="main-menu nav navbar-nav" style="margin-right:20px;">-->
<!--            <li><a href="--><?//= base_url() ?><!--sessions/prework" style="color: black;">PREWORK</a></li>-->
<!--        </ul>-->
<!--        <ul class="main-menu nav navbar-nav" style="margin-right:20px;">-->
<!--            <li><a href="--><?//= base_url() ?><!--sessions" style="color: black;">SESSIONS</a></li>-->
<!--        </ul>-->
<!--        <ul class="main-menu nav navbar-nav" style="margin-right:20px;">-->
<!--            <li><a href="--><?//= base_url() ?><!--sessions/event_extras" style="color: black;">EVENT EXTRAS</a></li>-->
<!--        </ul>-->
<!--        <ul class="main-menu nav navbar-nav" style="margin-right:20px;">-->
<!--            <li><a href="--><?//= base_url() ?><!--front_assets/agility/2021_Commercial_Kickoff-Participant_Workbook.pdf" target="_blank" style="color: black;">MEETING RESOURCES</a></li>-->
<!--        </ul>-->
<!--        <ul class="main-menu nav navbar-nav" style="margin-right:20px;">-->
<!--            <li><a href="#" id="header_agenda" style="color: black">AGENDA</a></li>-->
<!--        </ul>-->
        <ul class="main-menu nav navbar-nav" style="margin-right:20px;">
            <li><a style="color: black" href="<?=base_url()?>prework" id="header_agenda">RESOURCES</a></li>
        </ul>
        <ul class="main-menu nav navbar-nav" style="margin-right:20px;">
            <li><a href="https://yourconference.live/support/submit_ticket" target="_blank" style="color: black;">SUPPORT</a></li>
        </ul>





        <ul class="navbar-nav">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"  style="color: black;">
                    <?=($profile_data->profile == null)?'<i class="fas fa-user-circle"></i>':'<img src="'.base_url().'uploads/customer_profile/'.$profile_data->profile.'" alt="Avatar" style="border-radius: 50%;width: 25px;height: 26px;">'?> <?= $profile_data->first_name ?>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="<?= base_url() ?>register/user_profile/<?= $profile_data->cust_id ?>"><i class="fas fa-user-edit"></i> Edit Profile</a>
<!--                    <a class="dropdown-item" href="--><?//= base_url() ?><!--home/notes"><i class="fas fa-briefcase"></i> My Briefcase</a>-->
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="<?= base_url() ?>login/logout"><i class="fas fa-sign-out-alt"></i> Logout</a>
                </div>
            </li>
        </ul>

    </div>
</nav>

<body style="background-image: url(<?=base_url()?>front_assets/agility/Agility_login_background.png);padding-top: 0;">

<div class="container">

    <div class="row" style="margin-top: 1%">
        <div class="col-md-12 text-center">
            <div class="text-neon">
           <!--  <p style="color: white; font-size: 20px">  2022 Commercial Kickoff starts in: </p>
            <p  style="color: white; font-size: 40px" id="countdown-timer"></p>-->
            </div><br>
            <img class="" src="<?= base_url() ?>front_assets/agility/agility_neon_banner.png" style="width: 100%;">
        </div>
    </div>

    <?php if (isset($lobby_video->status) && $lobby_video->status == 1)
    { ?>
        <div class="row">
            <div class="col-md-12">
                <div style="padding:56.25% 0 0 0;">
                    <iframe src="https://player.vimeo.com/video/<?=$lobby_video->vimeo_video_id?>?title=0&byline=0&portrait=0" style="position:absolute;top:0;left:0;width:100%;height:100%;" frameborder="0" ></iframe>
                </div>
                <script src="https://player.vimeo.com/api/player.js"></script>
            </div>
        </div>
    <?php
    }
    ?>

    <?php if(!isset($_GET['testing_v2'])):?>
        <style>
            .home-icon{
                box-shadow: -10px 10px 50px  #FF7C27;
                border-radius: 100px;
                padding: 10px;
                margin-bottom: 10px;
                cursor: pointer;
                background-color: white;
                padding-bottom: 25px;
                padding-top: 25px;
                width: 165px;
                height: 165px;
            }

            .icon-text{
                margin-top: 15px;
                color: #012547;
                font-size: 15px;
                font-weight: 400;
            }
            .home-icon-fa{
                font-size: 60px
                !important; color: #01426a;
            }

            .text-neon{
                color: white;
                text-shadow: 0 0 20px #fff, 0 0 20px orangered, 0 0 20px orangered, 0 0 20px orangered, 0 0 20px orangered;
            }
            .text-neon-blue {
                color: white;
                text-shadow: 0 0 20px #fff, 0 0 20px deepskyblue, 0 0 20px deepskyblue, 0 0 20px deepskyblue, 0 0 20px deepskyblue;
                text-decoration: underline deepskyblue;
            }
            .bg-brick{
                background-image: url("<?=base_url()?>front_assets/agility/Agility_login_background.png");
                color: white;
                border-radius: 10px;
            }

            .bg-blur {
                backdrop-filter: blur(1px);
            }

            .border-white {
                box-shadow: inset 0 0 10px 10px white;
                padding: 10px;
                border-radius: 10px  ;
            }
            .tb-title{
                line-height: 50px;
            }
        </style>

        <div class="row text-center" style="margin-top: 5%">

            <div class="col-lg-3 col-md-6 col-sm-6 text-center mt-sm-2">
                <div class="home-icon m-sm-auto" onclick="location.href='<?= base_url() ?>sessions/prework'">
                    <i class="fas fa-clipboard-list home-menu-icon home-icon-fa"></i>
                    <div class="icon-text">PREWORK</div>
                </div>
            </div>

<!--            <div class="col-lg-3 col-md-6 col-sm-6 text-center mt-sm-2" >-->
<!--                <div class="home-icon m-sm-auto" id="agendaBtn">-->
<!--                    <i class="fas fa-calendar-check home-menu-icon home-icon-fa"></i>-->
<!--                    <div class="icon-text">AGENDA</div>-->
<!--                </div>-->
<!--            </div>-->
<!--            <div class="col-lg-3 col-md-6 col-sm-6 text-center mt-sm-2">-->
<!--                <div class="home-icon m-sm-auto" id="activityBtn">-->
<!--                    <img class="activities_attire" src="--><?//=base_url()?><!--front_assets/agility/Agility_activities.png" width="62px">-->
<!--                    <div class="icon-text">ACTIVITIES & ATTIRE</div>-->
<!--                </div>-->
<!--            </div>-->
<!--            <div class="col-lg-3 col-md-6 col-sm-6 text-center mt-sm-2">-->
<!--                <div class="home-icon m-sm-auto" id="travelBtn">-->
<!--                    <i class="fas fa-plane home-menu-icon home-icon-fa"></i>-->
<!--                    <div class="icon-text">TRAVEL & HOTEL</div>-->
<!--                </div>-->
<!--            </div>-->


<!---->
            <div class="col-lg-3 col-md-6 col-sm-6 text-center mt-sm-2">
                <div class="home-icon m-sm-auto" onclick="location.href='<?= base_url() ?>//sessions/event_extras'">
                   <img class="heart_in_hand" src="<?=base_url()?>front_assets/agility/heart_in_hand.png" width="62px">
                    <div class="icon-text">EVENT EXTRAS</div>
                </div>
            </div>

<!--               <div class="col-lg-3 col-md-6 col-sm-6 text-center mt-sm-2">-->
<!--               <div class="home-icon m-sm-auto" onclick="">-->
<!--                   <i class="fas fa-chalkboard-teacher home-menu-icon home-icon-fa"></i>-->
<!--                   <div class="icon-text">TRAINING</div>-->
<!--               </div>-->
<!--           </div>-->
            <div class="col-lg-3 col-md-6 col-sm-6 text-center mt-sm-2">
                <div class="home-icon m-sm-auto" onclick="redirectToSessions()">
                    <i class="fas fa-users-class home-menu-icon home-icon-fa"></i>
                    <div class="icon-text">SESSIONS</div>
                </div>
            </div>
<!---->
<!--            <div class="col-lg-3 col-md-4 col-sm-6 text-center mt-sm-2">-->
<!--                <div class="home-icon m-sm-auto" onclick="showEventPhotosVideo('517591955');">-->
<!--                    <i class="fas fa-camera-retro home-menu-icon home-icon-fa"></i>-->
<!--                    <div class="icon-text">MEETING</div>-->
<!--                </div>-->
<!--            </div>-->
<!---->
<!--            <div class="col-lg-3 col-md-4 col-sm-6 text-center mt-sm-2">-->
<!--                <div class="home-icon m-sm-auto" onclick="showEventPhotosVideo('520352760');">-->
<!--                    <i class="fas fa-trophy home-menu-icon home-icon-fa"></i>-->
<!--                    <div class="icon-text">ON-DEMAND SESSIONS</div>-->
<!--                </div>-->
<!--            </div>-->
<!---->
<!--            <div class="col-lg-3 col-md-4 col-sm-6 text-center mt-sm-2">-->
<!--                <div class="home-icon m-sm-auto" onclick="showEventPhotosVideo('520352760');">-->
<!--                    <i class="fas fa-trophy home-menu-icon home-icon-fa"></i>-->
<!--                    <div class="icon-text">NON-PROFIT PARTNERSHIP</div>-->
<!--                </div>-->
<!--            </div>-->
<!---->
<!--            <div class=" col-lg-3 col-md-6 col-sm-6 text-center mt-2" style="margin: auto">-->
<!--                <div class="home-icon m-sm-auto float-lg-none float-md-right " onclick="showEventPhotosVideo('520352760');">-->
<!--                    <i class="fas fa-trophy home-menu-icon home-icon-fa"></i>-->
<!--                    <div class="icon-text">MATERIALS</div>-->
<!--                </div>-->
<!--            </div>-->


<!--            <div class="col-lg-3 col-md-6 col-sm-6 text-center mt-2" >-->
<!--                <div class="home-icon m-sm-auto float-lg-none" id="health_safety">-->
<!--                    <i class="fas fa-notes-medical home-menu-icon home-icon-fa"></i>-->
<!--                    <div class="icon-text">HEALTH & SAFETY</div>-->
<!--                </div>-->
<!--            </div>-->

            <div class="col-lg-3 col-md-6 col-sm-6 text-center mt-2" >
                <div class="home-icon m-sm-auto float-lg-none " onclick="window.open('https://yourconference.live/support/submit_ticket', '_blank')">
                    <i class="fas fa-info-circle home-menu-icon home-icon-fa"></i>
                    <div class="icon-text">SUPPORT</div>
                </div>
            </div>

<!--            <div class="col-lg-3 col-md-6 col-sm-6 text-center mt-2" >-->
<!--                <div class="home-icon m-sm-auto float-lg-none " onclick="">-->
<!--                    <i class="fas fa-person-booth home-menu-icon home-icon-fa"></i>-->
<!--                    <div class="icon-text">PHOTO BOOTH</div>-->
<!--                </div>-->
<!--            </div>-->

        </div>
    <?php endif; ?>

</div> <!-- /container -->

<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg==" crossorigin="anonymous"></script>
<script defer src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
<script defer src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>

<script src="<?=base_url()?>front_assets/login_template/vendor/bootstrap/js/ie10-viewport-bug-workaround.js"></script>
<!--<script src="https://kit.fontawesome.com/fd91b3535c.js" crossorigin="anonymous"></script>-->


<script src="https://cdnjs.cloudflare.com/ajax/libs/socket.io/2.3.0/socket.io.js" integrity="sha512-v8ng/uGxkge3d1IJuEo6dJP8JViyvms0cly9pnbfRxT6/31c3dRWxIiwGnMSWwZjHKOuY3EVmijs7k1jz/9bLA==" crossorigin="anonymous"></script>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" integrity="sha512-3pIirOrwegjM6erE5gPSwkUzO+3cTjpnV9lexlNZqvupR64iZBnOOTiiLPb9M36zpMScbmUNIcHUqKD47M719g==" crossorigin="anonymous" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous"></script>
<script src="<?=base_url()?>front_assets/js/home-new.js?v=2"></script>
</body>

<script>
    var user_id = <?= $this->session->userdata("cid") ?>;
    var user_name = "<?= $this->session->userdata('fullname') ?>";
    var base_url = "<?=base_url()?>";
    function extract(variable) {
        for (var key in variable) {
            window[key] = variable[key];
        }
    }

    $(function() {

        $.get( "<?=base_url()?>socket_config.php", function( data ) {
            var config = JSON.parse(data);
            extract(config);

            var socketServer = "https://socket.yourconference.live:443";
            let socket = io(socketServer);
            socket.on('serverStatus', function (data) {
                socket.emit('addMeToActiveListPerApp', {'user_id':user_id, 'app': socket_app_name, 'room': socket_active_user_list});
            });

            // Active again
            function resetActive(){
                socket.emit('userActiveChangeInApp', {"app":socket_app_name, "room":socket_active_user_list, "name":user_name, "userId":user_id, "status":true});
            }
            // No activity let everyone know
            function inActive(){
                socket.emit('userActiveChangeInApp', {"app":socket_app_name, "room":socket_active_user_list, "name":user_name, "userId":user_id, "status":false});
            }

            $(window).on("blur focus", function(e) {
                var prevType = $(this).data("prevType");

                if (prevType != e.type) {   //  reduce double fire issues
                    switch (e.type) {
                        case "blur":
                            inActive();
                            break;
                        case "focus":
                            resetActive();
                            break;
                    }
                }

                $(this).data("prevType", e.type);
            });

            socket.on('unreadMessage', function (data) {
                if(data.chat_to == user_id)
                    fillUnreadMessages();
            });

            var app_name_main = "<?=getAppName("") ?>";
            push_notification_admin();
            //setInterval(push_notification_admin, 2000);
            socket.on('push_notification_change', (socket_app_name) => {
                if (socket_app_name == app_name_main)
                    push_notification_admin();
            });
        });

        fillUnreadMessages();

        $('.msg-mark-all-read').on('click', function () {
            markAllAsRead();
        });


        /************ Auto redirect to next zoom meeting ***************/
        //$.ajax({
        //    url: "<?//= base_url() ?>//sessions/getImmediateMeeting",
        //    type: "post",
        //    dataType: "json",
        //    success: function (data) {
        //
        //        if (data.status == true)
        //        {
        //            if (data.session.zoom_redirect == 1)
        //            {
        //                var zoom_meet_rem_seconds = data.remaining_seconds;
        //
        //                if (data.remaining_seconds <= 0) {
        //                    Swal.fire(
        //                        data.session.session_title,
        //                        'You will be redirected the Zoom meeting in 60 seconds <br>' +
        //                        '<a href="'+data.session.zoom_redirect_url+'" target="_blank">Please click here to go there now.</a>',
        //                        'info'
        //                    );
        //                    setTimeout(function () {
        //                        window.open(data.session.zoom_redirect_url, "_blank") || window.location.replace(data.session.zoom_redirect_url);
        //                    }, 60000);
        //
        //                } else if(data.remaining_seconds <= 60) {
        //                    Swal.fire(
        //                        data.session.session_title,
        //                        'You will be redirected the Zoom meeting in 60 seconds <br>' +
        //                        '<a href="'+data.session.zoom_redirect_url+'" target="_blank">Please click here to go there now.</a>',
        //                        'info'
        //                    );
        //                    setTimeout(function () {
        //                        window.open(data.session.zoom_redirect_url, "_blank") || window.location.replace(data.session.zoom_redirect_url);
        //                    }, 60000);
        //
        //                }else {
        //                    setInterval(function () {
        //
        //                        if (data.remaining_seconds == 60) {
        //                            Swal.fire(
        //                                data.session.session_title,
        //                                'You will be redirected the Zoom meeting in 60 seconds <br>' +
        //                                '<a href="'+data.session.zoom_redirect_url+'" target="_blank">Please click here to go there now.</a>',
        //                                'info'
        //                            );
        //                        }
        //
        //                        if (data.remaining_seconds <= 0) {
        //
        //                            window.open(data.session.zoom_redirect_url, "_blank") || window.location.replace(data.session.zoom_redirect_url);
        //
        //                        } else {
        //                            data.remaining_seconds--;
        //                        }
        //                    }, 1000);
        //                }
        //            }
        //        }
        //    }
        //});
        /************ End of auto redirect to next zoom meeting ***************/
    });

    function fillUnreadMessages() {
        $('.msg-item').remove();
        $.get("<?= base_url() ?>user/UnreadMessages/getUnreadMessages", function (messages) {
            messages = JSON.parse(messages);
            var count = Object.keys(messages).length;
            if (count > 0) {
                $('.msg-noti-count').text(count);
                $('.msg-noti-count').show();
                $('.msg-divider').show();
                $('.msg-mark-all-read').show();
            }
            else {
                $('.unread-msgs-list').prepend('' +
                    '<a class="msg-item dropdown-item" href="lounge"><strong>No new messages</strong></a>');
                $('.msg-noti-count').hide();
                $('.msg-divider').hide();
                $('.msg-mark-all-read').hide();
            }

            $.each(messages, function (number, message) {

                let messageText = (message.text.length > 32)?message.text.substring(0,32)+'...':message.text;

                if (message.from_room_type == 'sponsor'){
                    $('.unread-msgs-list').append('' +
                        '<a target="_blank" class="dropdown-item waves-effect waves-light m-b-20" href="<?= base_url() ?>sponsor/view/' + message.sponsor_id + '"><i class="fa fa-commenting-o" aria-hidden="true"></i><strong>New message from ' + message.company_name + '</strong></a>');
                    //$('.unread-msgs-list').append('' +
                    //    '<a target="_blank" class="dropdown-item waves-effect waves-light" href="<?//= base_url() ?>//sponsor/view/' + message.sponsor_id + '"><strong>New message from ' + message.company_name + '</strong></a>' +
                    //    '<a href="<?//= base_url() ?>//sponsor/view/' + message.sponsor_id + '" target="_blank">' + message.text + '</a>');
                }else{
                    $('.unread-msgs-list').prepend('' +
                        '<a class="msg-item dropdown-item" href="lounge"><strong>'+message.from_name+' </strong><i class="fas fa-angle-right"></i> '+messageText+'</a>');
                }


            });
        });
    }

    function markAllAsRead() {
        $.get("<?= base_url() ?>user/UnreadMessages/markAllInAsRead/", function() {
            fillUnreadMessages();
        });
    }

    function push_notification_admin()
    {
        var push_notification_id = $("#push_notification_id").val();

        $.ajax({
            url: "<?= base_url() ?>push_notification/get_push_notification_admin",
            type: "post",
            dataType: "json",
            success: function (data) {
                if (data.status == "success") {
                    if (push_notification_id == "0") {
                        $("#push_notification_id").val(data.result.push_notification_id);
                    }
                    if (push_notification_id != data.result.push_notification_id) {
                        $("#push_notification_id").val(data.result.push_notification_id);
                        $('#push_notification').modal('show');
                        $("#push_notification_message").text(data.result.message);
                    }
                } else {
                    $('#push_notification').modal('hide');
                }
            }
        });
    }
</script>

    <!-- Welcome Modal -->
    <div class="modal fade" id="welcomeModal" tabindex="-1" role="dialog" aria-labelledby="welcomeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg border-white" role="document">
            <div class="modal-content bg-brick">
                <div class="modal-header bg-blur">
                    <h5 class="modal-title text-neon" id="welcomeModalLabel">Countdown to our 2022 Commercial Kickoff!</h5>
                </div>
                <div class="modal-body bg-blur">
                    <p>Our 2022 Commercial Kickoff brings an opportunity to reconnect with one another in person and reignite our belief that every interaction has the power to change a life.
                        Together we will explore the power in our work as we reconnect with the story of Agiliti, our strategy and opportunities, and our daily choices that impact our teams, results, and potential.
                        We'll spend time preparing for a new year with engaging sessions, team building, and opportunities to celebrate with one another as we welcome both new and tenured team members together.</p>

                    <p>You will leave Anaheim prepared to power into 2022 with the skills and insight to connect our full value to solve customer issues, elevate our positioning, and challenge customers to
                        think differently about Agiliti.</p>

                    <p>We look forward to this important time together!</p>
                    <p> <strong>Questions?</strong>  <br> Contact <a class="text-neon-blue" href="mailto:kickofff@agilitihealth.com">kickofff@agilitihealth.com</a> with inquiries about the event.
                    </p>
                </div>
                <div class="modal-footer bg-blur">
                    <button type="button" class="btn btn-primary close-welcome-msg" style="cursor: pointer;">Mark as read <i class="welcome-msg-saving-spinner fas fa-circle-notch fa-spin" style="display: none;"></i><i class="fas fa-check welcome-msg-saving-done" style="color: #0afd0a; display: none;"></i></button>
                </div>
            </div>
        </div>
    </div>

<!-- Video Modal -->
<style>
    .event-photos-dialog {
        width: 100%;
        height: 98%;
        margin: 0;
        padding: 0;
        max-width: unset;
    }

    .event-photos-content {
        height: 98%;
        min-height: 98%;
        border-radius: 0;
    }
    .event-photos-body{
        height: 100%;
    }

    iframe{
        width: 100% !important;
        height: 100% !important;
    }
</style>
<div class="modal fade" id="videoModal" tabindex="-1" role="dialog" aria-labelledby="videoModalLabel" aria-hidden="true">
    <div class="modal-dialog event-photos-dialog" role="document">
        <div class="modal-content event-photos-content" style="background-color: #ffffff8f;">
            <div class="modal-header" style="padding: unset;border-bottom:unset;">
                <button type="button" class="btn btn-sm btn-danger" data-dismiss="modal" style="cursor: pointer;"><i class="far fa-times-circle"></i> CLOSE</button>
            </div>
            <div id="videoPlayer" class="modal-body event-photos-body">
            </div>
        </div>
    </div>
</div>
<script src="https://player.vimeo.com/api/player.js"></script>

    <script>

        toastr.options = {
            "closeButton": false,
            "debug": false,
            "newestOnTop": false,
            "progressBar": false,
            "positionClass": "toast-bottom-right",
            "preventDuplicates": false,
            "onclick": null,
            "showDuration": "300",
            "hideDuration": "1000",
            "timeOut": "5000",
            "extendedTimeOut": "1000",
            "showEasing": "swing",
            "hideEasing": "linear",
            "showMethod": "fadeIn",
            "hideMethod": "fadeOut"
        }

        $(function() {

            countdown_timer();

            <?php if($welcome_msg == 'unread'): ?>

            $('#welcomeModal').modal({
                backdrop: 'static',
                keyboard: false
            });

            $('#welcomeModal').modal('show');

            $('.close-welcome-msg').on('click', function () {

                $('.welcome-msg-saving-spinner').show();

                $.get(base_url+'home/welcomeMsgMarkAsRead/'+user_id, function (status) {
                    if (status == 'saved')
                    {
                        $('.welcome-msg-saving-spinner').hide();
                        $('.welcome-msg-saving-done').show();

                        setTimeout(function(){
                            $('#welcomeModal').modal('hide');
                        }, 1000);

                    }
                }).fail(function () {
                    toastr.error("Unable to mark as read, please try again!");
                    $('.welcome-msg-saving-spinner').hide();
                });

            });

            <?php endif; ?>
        });

        function showEventPhotosVideo(videoId)
        {
            var videoUrl = "https://vimeo.com/"+videoId;

            var options = {
                url: videoUrl,
                autoplay: true
            };

            var videoPlayer = new Vimeo.Player('videoPlayer', options);

            videoPlayer.setVolume(1);


            videoPlayer.play().then(function() {
                // The video is playing
            }).catch(function(error) {
                switch (error.name) {
                    case 'PasswordError':
                        // The video is password-protected
                        break;

                    case 'PrivacyError':
                        // The video is private
                        break;

                    default:
                        // Some other error occurred
                        break;
                }
            });

            videoPlayer.on('play', function() {
                console.log('Played the first video');
            });


            $('#videoModal').on('hidden.bs.modal', function () {
                videoPlayer.pause().then(function() {
                    // The video is paused
                }).catch(function(error) {
                    switch (error.name) {
                        case 'PasswordError':
                            // The video is password-protected
                            break;

                        case 'PrivacyError':
                            // The video is private
                            break;

                        default:
                            // Some other error occurred
                            break;
                    }
                });

                videoPlayer.unload().then(function() {
                    // The video has been unloaded
                });

                videoPlayer.destroy().then(function() {
                    // The player is destroyed
                });
            });


            $('#videoModal').modal('show');
        }

    </script>

<!-- ######## STYLE SCRIPT #########-->
<script>
    $(function(){
        $('.activities_attire').hover(function(){
             $('.activities_attire').attr('src',"<?=base_url()?>front_assets/agility/activities_attire_hover.png");
        })
        $('.activities_attire').mouseleave(function(){
            $('.activities_attire').attr('src',"<?=base_url()?>front_assets/agility/Agility_activities.png");
        })

        $('.heart_in_hand').hover(function(){
            $('.heart_in_hand').attr('src',"<?=base_url()?>front_assets/agility/heart_in_hand_hover.png");
        })
        $('.heart_in_hand').mouseleave(function(){
            $('.heart_in_hand').attr('src',"<?=base_url()?>front_assets/agility/heart_in_hand.png");
        })
    })


    function redirectToSessions() {
        toastr.info('Please wait...');

        let to_date = '2022-02-23';
        //if ('<?//=date('Y-m-d')?>//' > '2022-02-23')
        //{
        //    to_date = '<?//=date('Y-m-d')?>//';
        //}
        //if ('<?//=date('Y-m-d')?>//' > '2022-02-24')
        //{
        //    to_date = '2022-02-24';
        //}

        window.location = `<?=base_url()?>sessions/getsessions_data/${to_date}`;
    }

    function countdown_timer(){
        // Set the date we're counting down to
        var countDownDate = new Date("Feb 22, 2022 15:37:25").getTime();

// Update the count down every 1 second
        var x = setInterval(function() {

            // Get today's date and time
            var now = new Date().getTime();

            // Find the distance between now and the count down date
            var distance = countDownDate - now;

            // Time calculations for days, hours, minutes and seconds
            var days = Math.floor(distance / (1000 * 60 * 60 * 24));
            var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
            var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
            var seconds = Math.floor((distance % (1000 * 60)) / 1000);

            // Display the result in the element with id="demo"
            document.getElementById("countdown-timer").innerHTML = days + "d " + hours + "h "
                + minutes + "m " + seconds + "s ";

            // If the count down is finished, write some text
            if (distance < 0) {
                clearInterval(x);
                document.getElementById("countdown-timer").innerHTML = "EXPIRED";
            }
        }, 1000);
    }
</script>

</html>
