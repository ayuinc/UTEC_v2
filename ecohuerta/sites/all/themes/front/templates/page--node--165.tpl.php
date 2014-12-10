<?php
  global $base_url;
  global $theme_path;
  $path = $base_url.'/'.$theme_path;
?>
<style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        body {
            font-family: 'Roboto', Arial, sans-serif;
        }
        .content-404{
            overflow: hidden;
        }
        body{
            background: url("<?php print $path; ?>/images/backgrounds/3.jpg");
        }
        .head-404{
            background: black;
        }
        .head-404 img{
            max-width: 325px;
            padding: 10px 1%;
        }
        .mensaje-content-404{
            width: 100%;
            margin: 0 auto;
            max-width: 1024px;
            text-align: center;
        }
        .mensaje-404{
            width: 81%;
            color: white;
            padding: 77px 0;
            text-align: center;
            font-family: tahoma;
            display: inline-block;
        }
        .mensaje-404,
        .thumbnail {
            width: 50%;
            float: left;
        }
        .thumbnail {
            padding-top: 35px;
        }
        h1{
            color: #3cc1e0;
            padding: 22px 0;
            font-weight: 400;
        }
        p{
            font-size: 140%;
            font-weight: 300;
        }
        p strong {
            color: #3cc1e0;
        }
        a{
            color: white;
        }
        @media  screen and (max-width: 768px) {
            .mensaje-404 {
                width: 100%;
                padding: 5%;
            }
            .thumbnail {
                display: none;
            }
        }
</style>
<div id="page-wrapper">
    <div id="page">
        <div class="content-404">
            <div class="head-404">
                <img alt="UTEC" src="<?php print $path; ?>/images/logo.png">
            </div>

            <div class="mensaje-content-404">
                <div class="mensaje-404">
                    <h1>
                        ¡Uppss, la página que estás buscando no existe!
                    </h1>

                    <p style="margin-bottom: 15px">
                        Para resolver este problema e ir al home, haz
                    </p>

                    <a href="/">
                        <img height="80" src="<?php print $path; ?>/images/404/click.png">
                    </a>

                    <p style="margin-top: 15px">
                        Quedan más problemas por solucionar
                    </p>

                    <p>
                        Pon tu <strong>#Ingenio En Acción!</strong>
                    </p>
                </div>

                <div class="thumbnail">
                    <img src="<?php print $path; ?>/images/404/light_bulb.png">
                </div>

                <div style="clear: both"></div>
            </div>
        </div>
    </div>
</div>



