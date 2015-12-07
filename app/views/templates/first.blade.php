<!DOCTYPE html>
<html>
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="./assets/js/jquery-2.1.4.min.js"></script>
    <!-- Bootstrap -->
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="./assets/css/bootstrap.min.css">

    <!-- Optional theme -->
    <link rel="stylesheet" href="./assets/css/bootstrap-theme.min.css">

    <!-- Latest compiled and minified JavaScript -->
    <script src="./assets/js/bootstrap.min.js"></script>

    <link rel="stylesheet" href="./assets/css/material.min.css">
    <script src="./assets/js/material.min.js"></script>

    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:300,400,500,700" type="text/css">
     <link href="./assets/css/dashboard.css" rel="stylesheet">
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

        <span class="mdl-layout-title mdl-color--blue-grey-600" style="height: 6em; padding-top: 1em;">  <a class="mdl-navigation__link" ></a>


            <p class="mdl-color-text--white" style="font-size: 0.7em; margin-left: -0.7em; margin-bottom: 0.3em;"><i>gothic.abc@gmail.com<br>
         9858000000 </i></p>

            <div class="section__circle-container__circle mdl-color--accent" style="width: 64px;height: 64px;border-radius: 32px; margin-left: -0.7em; position: absolute;"></div>
            <span class="mdl-color-text--white" style="margin-left: 3.5em;">Admin</span>
            </span>


        <nav class="mdl-navigation " >

         <a class="mdl-navigation__link" href="{{URL::route('dashboard')}}" style="padding-top: 1em;"><i class="mdl-color-text--blue-grey-400 material-icons" style="position: absolute; margin-top: -0.1em;">airplay</i><span style="margin-left: 2.5em;">Dashboard </span> </a>
          <a class="mdl-navigation__link" href="{{URL::route('teacher')}}"style="padding-top: 1em;"><i class="mdl-color-text--blue-grey-400 material-icons" style="position: absolute; margin-top: -0.1em;" >dvr</i><span style="margin-left: 2.5em;"> Teacher</span> </a>

          <a class="mdl-navigation__link" href="{{URL::route('student')}}" style="padding-top: 1em;"><i class="mdl-color-text--blue-grey-400 material-icons" style="position: absolute; margin-top: -0.1em;" >school</i><span style="margin-left: 2.5em;">Students</span> </a>


          <a class="mdl-navigation__link" href="{{URL::route('parent')}}"style="padding-top: 1em;"><i class="mdl-color-text--blue-grey-400 material-icons" style="position: absolute; margin-top: -0.1em;" >person</i><span style="margin-left: 2.5em;"> Parents</span> </a>





            <a class="mdl-navigation__link" href="{{URL::route('user')}}"style="padding-top: 1em;"><i class="mdl-color-text--blue-grey-400 material-icons" style="position: absolute; margin-top: -0.1em;" >group</i><span style="margin-left: 2.5em;"> User</span> </a>
          <a class="mdl-navigation__link" href="{{URL::route('section')}}"style="padding-top: 1em;"><i class="mdl-color-text--blue-grey-400 material-icons" style="position: absolute; margin-top: -0.1em;" >kitchen</i><span style="margin-left: 2.5em;">  Section</span> </a>

         <a class="mdl-navigation__link" href="{{URL::route('subject')}}" style="padding-top: 1em;"><i class="mdl-color-text--blue-grey-400 material-icons" style="position: absolute; margin-top: -0.1em;" >subject</i><span style="margin-left: 2.5em;"> Subject</span> </a>

          <a class="mdl-navigation__link" href="{{URL::route('grade')}}" style="padding-top: 1em;"><i class="mdl-color-text--blue-grey-400 material-icons" style="position: absolute; margin-top: -0.1em;" >grade</i><span style="margin-left: 2.5em;"> Grade</span> </a>


          <a class="mdl-navigation__link" href="{{URL::route('exam')}}" style="padding-top: 1em;"><i class="mdl-color-text--blue-grey-400 material-icons" style="position: absolute; margin-top: -0.1em;" >description</i><span style="margin-left: 2.5em;">Exam</span> </a>


        </nav>
      </div>
             <main class="mdl-layout__content mdl-color--grey-100">
           @yield('page_content')
            </main>
            <script type="text/javascript" src="./assets/js/jquery-2.1.4.min.js">
            $(function(){

});
</script>
            @yield('page_footer')
    </div>
</body>
</html>
