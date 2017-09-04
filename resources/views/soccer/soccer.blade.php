<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <style>
            .selected{background-color: #f1f3f9;
                border: 2px solid #e5e5e5 !important;
                }
        </style>

        <title>Soccer Team</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
    </head>
    <body>
        <div class="container">
            <div class="content">
                <div class="row title">
                    <div class="col-lg-12 h1 text-center m ">Soccer Team DashBoard</div>
                </div>
                
                    <div class="row">
                    @if(!empty($teams))
                        <div id="team-list-container" class="col-lg-5 ">
                         @include("soccer.team")
                        </div>   
                    @endif
                    @if(!empty($players))
                        <div id="player-list-container" class="col-lg-7 border border-box">
                            @include("soccer.player")
                        </div>
                    </div>
                    @endif
                
            </div>
            <div class="row">
                <div class="col-lg-12">&nbsp;
                </div>
            </div>
            <div class="footer">
                <script
              src="https://code.jquery.com/jquery-3.2.1.min.js"
              integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
              crossorigin="anonymous"></script>

              <script>

                function getPlayers(teamId){
                $.ajax({
                            url:'getPlayers/',
                            data: {'team_id':teamId},
                            type:'get',
                            success:function(res) {
                                $('#player-list-container').html(res);
                                $('#team-list-container .row.mark').removeClass('mark mark-success');
                                $('#'+teamId).addClass('mark');
                            },
                            dataType: "html"
                        });
                } 
              </script>
            </div>
        </div>
    </body>
</html>
