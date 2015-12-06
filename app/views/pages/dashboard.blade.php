@extends('templates.first')
@section('page_head')
<title>Dashboard</title>
    <link href="./assets/css/dashboard.css" rel="stylesheet">
@stop

@section('page_content')

    <!-- Always shows a header, even in smaller screens. -->



           <div class="mdl-grid">
               <div class="mdl-cell mdl-cell--1-col-desktop mdl-grid"></div>
          <div class="mdl-color--white mdl-shadow--2dp mdl-cell mdl-cell--10-col-desktop mdl-cell--8-col-tablet mdl-grid">

            <div class="mdl-cell mdl-cell--4-col mdl-cell--3-col-desktop  ">
                <a href="student">
               <div class="count-box mdl-js-ripple-effect " style="background-color: #ACEC00;">

                            <span class="glyphicon glyphicon-dashboard" style="font-size: 4em; color: #fff; float: right; padding-top: 0.3em; padding-right: 0.3em;"></span>
                            <h1 class="mdl-card__title-text size-4" style="padding-top: 0.5em;">5</h1>
                            <h2 class="mdl-card__title-text">Students</h2>
                </div>
                    </a>
              </div>

              <div class="mdl-cell mdl-cell--4-col mdl-cell--3-col-desktop">
               <div class="count-box" style="background-color: #00BBD6 ;">
                            <span class="glyphicon glyphicon-blackboard" style="font-size: 4em; color: #fff; float: right; padding-top: 0.3em; padding-right: 0.3em;"></span>

                            <h1 class="mdl-card__title-text size-4" style="padding-top: 0.5em;">3</h1>
                            <h2 class="mdl-card__title-text">Teachers</h2>
                </div>
              </div>

              <div class="mdl-cell mdl-cell--4-col mdl-cell--3-col-desktop">
               <div class="count-box" style="background-color: #BA65C9;">
                            <span class="glyphicon glyphicon-user" style="font-size: 4em; color: #fff; float: right; padding-top: 0.3em; padding-right: 0.3em;"></span>

                            <h1 class="mdl-card__title-text size-4" style="padding-top: 0.5em;">3</h1>
                            <h2 class="mdl-card__title-text">Parents</h2>
                </div>
              </div>

            <div class="mdl-cell mdl-cell--4-col mdl-cell--3-col-desktop">
               <div class="count-box" style="background-color: #EF3C79;">
                            <span class="glyphicon glyphicon-pencil" style="font-size: 4em; color: #fff; float: right; padding-top: 0.3em; padding-right: 0.3em;"></span>

                            <h1 class="mdl-card__title-text size-4" style="padding-top: 0.5em;">10</h1>
                            <h2 class="mdl-card__title-text">Attendance</h2>
                </div>
              </div>
          </div>
            </div>



           <div class="mdl-grid">
               <div class="mdl-cell mdl-cell--1-col mdl-grid"></div>
           <div class="mdl-card mdl-cell mdl-cell--10-col mdl-shadow--2dp">
              <div class="mdl-card__supporting-text mdl-grid mdl-grid--no-spacing">
                <h4 class="mdl-cell mdl-cell--12-col"><br>NOTICE</h4>
                <div class="section__circle-container mdl-cell mdl-cell--2-col mdl-cell--1-col-phone">
                  <div class="section__circle-container__circle mdl-color--primary">
                   <i class="mdl-color-text--white  material-icons" style="margin-left: 0.65em; margin-top:0.65em;">open_with</i>
                    </div>
                </div>
                <div class="section__text mdl-cell mdl-cell--10-col-desktop mdl-cell--6-col-tablet mdl-cell--3-col-phone">
                  <h5>Lorem ipsum dolor sit amet</h5>
                  Dolore ex deserunt aute fugiat aute nulla ea sunt aliqua nisi cupidatat eu. Duis nulla tempor do aute et eiusmod velit exercitation nostrud quis <a href="#">proident minim</a>.<hr style="margin-bottom: -1em;">
                </div>
                <div class="section__circle-container mdl-cell mdl-cell--2-col mdl-cell--1-col-phone">
                  <div class="section__circle-container__circle mdl-color--primary"> <i class="mdl-color-text--white  material-icons" style="margin-left: 0.65em; margin-top:0.65em;">open_with</i></div>
                </div>
                <div class="section__text mdl-cell mdl-cell--10-col-desktop mdl-cell--6-col-tablet mdl-cell--3-col-phone">
                  <h5>Lore ipsum dolor sit amet</h5>
                  Dolore ex deserunt aute fugiat aute nulla ea sunt aliqua nisi cupidatat eu. Duis nulla tempor do aute et eiusmod velit exercitation nostrud quis <a href="#">proident minim</a>.<hr style="margin-bottom: -1em;">
                </div>
                <div class="section__circle-container mdl-cell mdl-cell--2-col mdl-cell--1-col-phone">
                  <div class="section__circle-container__circle mdl-color--primary"> <i class="mdl-color-text--white  material-icons" style="margin-left: 0.65em; margin-top:0.65em;">open_with</i></div>
                </div>
                <div class="section__text mdl-cell mdl-cell--10-col-desktop mdl-cell--6-col-tablet mdl-cell--3-col-phone">
                  <h5>Lorem ipsum dolor sit amet</h5>
                  Dolore ex deserunt aute fugiat aute nulla ea sunt aliqua nisi cupidatat eu. Duis nulla tempor do aute et eiusmod velit exercitation nostrud quis <a href="#">proident minim</a>.
                </div>
              </div>
              <div class="mdl-card__actions">
                <a href="#" class="mdl-button mdl-color-text--blue_grey-400">Read more</a>
              </div>
            </div>
           </div>
        </div>

    </div>



@stop

@section('page_footer')
    <script type="text/javascript">
    </script>
@stop
