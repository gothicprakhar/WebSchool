<!DOCTYPE html>
<html>
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Add to homescreen for Chrome on Android -->
    <meta name="mobile-web-app-capable" content="yes">
    <link rel="icon" sizes="192x192" href="images/android-desktop.png">

    <!-- Add to homescreen for Safari on iOS -->
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="apple-mobile-web-app-title" content="Material Design Lite">
    <link rel="apple-touch-icon-precomposed" href="images/ios-desktop.png">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:regular,bold,italic,thin,light,bolditalic,black,medium&amp;lang=en">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="$$hosted_libs_prefix$$/$$version$$/material.cyan-light_blue.min.css">

    <!-- Bootstrap -->
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>

    <!-- JQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

    <link rel="stylesheet" href="https://storage.googleapis.com/code.getmdl.io/1.0.6/material.blue_grey-red.min.css">
    <script src="https://storage.googleapis.com/code.getmdl.io/1.0.6/material.min.js"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:300,400,500,700" type="text/css">
@yield('page_head')
</head>
<body>
        <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header" >

        <header class="mdl-layout__header" style="background-color: #263238;">
        <div class="mdl-layout__header-row">
          <!-- Title -->
          <span class="mdl-layout-title ">Connectify</span>
          <!-- Add spacer, to align navigation to the right -->
          <div class="mdl-layout-spacer"></div>
          <!-- Navigation. -->
          <nav class="mdl-navigation" style="padding-top: 1.3em;">
            <a class="mdl-navigation__link" href=""><i class="mdl-color-text--blue-grey-100 material-icons" role="presentation" >notifications</i></a>
            <a class="mdl-navigation__link" href=""><i class="mdl-color-text--blue-grey-100 material-icons" role="presentation" >flag</i></a>
            <a class="mdl-navigation__link" href=""><i class="mdl-color-text--blue-grey-100 material-icons" role="presentation" >person</i></a>
          </nav>
        </div>
      </header>

        <div class="mdl-layout__drawer">

        <span class="mdl-layout-title mdl-color--blue-grey-600" style="height: 6em;">  <a class="mdl-navigation__link" ></a>

            <span class="mdl-color-text--white">Admin</span>
            <span class="mdl-color-text--white"><small>abc@gmail.com</small> </span>
            <span class="mdl-color-text--white"><small>9858000000</small> </span>

            <div class="section__circle-container__circle mdl-color--accent" style="width: 64px;height: 64px;border-radius: 32px; margin-left:-1.5em; margin-top: 0.5em;"></div>
            </span>


        <nav class="mdl-navigation " >

         <a class="mdl-navigation__link" href="" style="padding-top: 1em;"><i class="mdl-color-text--blue-grey-400 material-icons" style="position: absolute; margin-top: -0.1em;">airplay</i><span style="margin-left: 2.5em;">Dashboard </span> </a>


          <a class="mdl-navigation__link" href="" style="padding-top: 1em;"><i class="mdl-color-text--blue-grey-400 material-icons" style="position: absolute; margin-top: -0.1em;" >school</i><span style="margin-left: 2.5em;">Students</span> </a>


          <a class="mdl-navigation__link" href=""style="padding-top: 1em;"><i class="mdl-color-text--blue-grey-400 material-icons" style="position: absolute; margin-top: -0.1em;" >person</i><span style="margin-left: 2.5em;"> Parents</span> </a>


          <a class="mdl-navigation__link" href=""style="padding-top: 1em;"><i class="mdl-color-text--blue-grey-400 material-icons" style="position: absolute; margin-top: -0.1em;" >dvr</i><span style="margin-left: 2.5em;"> Teacher</span> </a>


            <a class="mdl-navigation__link" href=""style="padding-top: 1em;"><i class="mdl-color-text--blue-grey-400 material-icons" style="position: absolute; margin-top: -0.1em;" >group</i><span style="margin-left: 2.5em;"> User</span> </a>


          <a class="mdl-navigation__link" href=""style="padding-top: 1em;"><i class="mdl-color-text--blue-grey-400 material-icons" style="position: absolute; margin-top: -0.1em;" >kitchen</i><span style="margin-left: 2.5em;">  Section</span> </a>

         <a class="mdl-navigation__link" href="" style="padding-top: 1em;"><i class="mdl-color-text--blue-grey-400 material-icons" style="position: absolute; margin-top: -0.1em;" >subject</i><span style="margin-left: 2.5em;"> Subject</span> </a>

          <a class="mdl-navigation__link" href="" style="padding-top: 1em;"><i class="mdl-color-text--blue-grey-400 material-icons" style="position: absolute; margin-top: -0.1em;" >grade</i><span style="margin-left: 2.5em;"> Grade</span> </a>


          <a class="mdl-navigation__link" href="" style="padding-top: 1em;"><i class="mdl-color-text--blue-grey-400 material-icons" style="position: absolute; margin-top: -0.1em;" >description</i><span style="margin-left: 2.5em;">Exam</span> </a>


        </nav>
      </div>
             <main class="mdl-layout__content mdl-color--grey-100">
           @yield('page_content')
            </main>
            <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js">
            $(function(){

  $('form.material').materialForm();

  $('form').validate({
    errorPlacement: function(error, element) {}
  });

});
</script>
            @yield('page_footer')
    </div>
</body>
</html>
