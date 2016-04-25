<?php
require_once("header.php");
?>
<div class="container-fluid"> 
    <div class="page-header text-center">
        <h2>Dr. Sayos Garage<small> Best Garage Ever</small></h2>
    </div>
    <div class="col-md-4 opinion-list" style="height: 25em; overflow-y: scroll;"></div>
    <div class="col-md-4">
        <h2>Hello, <?php echo $_SESSION["user"]; ?> </h2>
        <h3> POR ASÉ</h3>
        <ul>
            <li> Recaptcha</li>
            <li> MD5  -> Enric</li>
            <li> Editar (vehicle,mechanic...) -> Enric</li>
            <li> Eliminar (vehicle,mechanic...) -> Enric</li>
            <li> Imprimir PDF Del show History </li>
            <li> Data GRID de algo ( o todas las listas)</li>
        </ul>
    </div>
    <div class="col-md-4 opinion-form">
        <h3>Opinion</h3>
        <input class="form-control" id="opinion_user" type="text" placeholder="Username">
        <textarea class="form-control" id="opinion_text" placeholder="Your opinion"></textarea>
        <button class="btn btn-Primary" id="send_opinion" onclick="sendOpinion()" type="submit">Send</button>
    </div>


    <script type="text/javascript">
        $(document).ready(function () {
            showOpinions();
        });

        function sendOpinion() {

            var parameters = {
                "user": $('#opinion_user').val(),
                "opinion_text": $('#opinion_text').val()
            };
            $.ajax({
                data: parameters,
                url: '../../controller/saveOpinion.php',
                type: 'post',
                success: function (response) {
                    if (response != "ok") {
                        alert('An error has occurred while adding your opinion, please try again later');
                    } else {
                        showOpinions();
                    }
                }
            });
        }

        function showOpinions() {
            $.ajax({
                data: null,
                url: '../../controller/getOpinions.php',
                type: 'post',
                success: function (response) {
                    if (response == 'no') {
                        alert(response);
                    } else {

                        var resp = JSON.parse(response);
                        var list = $('.opinion-list');

                        //list.html(resp.length);
                        for (var i = 0; i < resp.length; i++) {
                            if (i % 2 == 0) {
                                list.prepend('<div class="opinion col-xs-12" style="background-color: black;border-radius: 10px; color: #9d9d9d;"></div>');
                            } else {
                                list.prepend('<div class="opinion col-xs-12" style="border: 1px solid black; border-radius: 10px;"></div>');
                            }
                            $('.opinion:first').attr('id', resp[i][0]);
                            $('.opinion:first').append('<p class="col-xs-6 opid" style="text-align: left;">#' + resp[i][0] + '</p>');
                            $('.opinion:first').append('<p class="col-xs-6 opuser" style="text-align: right;"> By: ' + resp[i][1] + '</p>');
                            $('.opinion:first').append('<p class="col-xs-12 optxt">'+ resp[i][2] + '</p>');
                            $('.opinion:first').append('<p class="col-xs-12 opdate" style="text-align: right;">Date: ' + resp[i][3] + '</p>');
                        }
                    }
                }
            });
        }
    </script>
</div>
