@extends('templates.first')
@section('page_head')
<title>Dashboard</title>
    <link href="./assets/css/dashboard.css" rel="stylesheet">
    <link href="./assets/css/panel.css" rel="stylesheet">
@stop

@section('page_content')


                     <div class="mdl-grid">
                         <div class="mdl-cell mdl-cell--1-col-desktop mdl-grid"></div>
                         <div class="mdl-cell mdl-cell--10-col mdl-grid">
                          <div class="teacher-card-wide mdl-card mdl-shadow--2dp">

                           <div class="mdl-card__title" style="z-index: 0;">
                               <!-- Colored FAB button with ripple -->

                               <h2 class="mdl-card__title-text"><i class="material-icons" style="margin-left: 3em;">dvr</i>&nbsp;Teacher</h2>
                                <div class="mdl-layout-spacer"></div><br>
                            <!-- Right aligned menu below button -->
                               <!-- Accent-colored raised button with ripple -->

                             <button id="demo-menu-lower-right" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--primary" style="margin-top: 6em; background-color: #FF5252;"> <span class="mdl-cell--hide-phone ">SELECT</span> CLASS&nbsp; <span class="glyphicon glyphicon-menu-down" style="margin-top: 0.2em;"></span>
</button>     <ul class="mdl-menu mdl-menu--bottom-right mdl-js-menu mdl-js-ripple-effect"
                                for="demo-menu-lower-right">
                              <li class="mdl-menu__item">One</li>
                              <li class="mdl-menu__item">Two</li>
                              <li class="mdl-menu__item">Three</li>
                            </ul>

                          </div>



                              <div class="mdl-card__supporting-text mdl-grid mdl-grid--no-spacing">

<button class="mdl-button mdl-js-button mdl-button--fab mdl-js-ripple-effect mdl-button--colored" id="tt1" style="margin-top: -1.5em; z-index: 999;  position: absolute;margin-left: 1em;">
                              &nbsp; &nbsp;<i class="material-icons">add</i>
                            </button>
                                  <div class="mdl-tooltip" for="tt1">
                                Add a student
                                </div>
                                  <div class="mdl-cell mdl-cell--12-col" style="margin-bottom: 0em;">
                                      <center>
                                     <!--     <br><br>
                                          <i>Please choose a class to view students.</i> -->
                               <table  style="width: 95%; margin-top: 3em; line-height: 5em; font-size: 1.1em;" rules="rows" cellspacing="60">
                                  <tr>
                                    <th class="hide-mobile">No </th>
                                    <th>Photo</th>
                                    <th>Name </th>
                                <th class="hide-mobile">Email </th>
                                    <th >Action </th>
                                </tr>
                                  <tr >
                                    <td class="hide-mobile">1 </td>
                                    <td>
                                      <div class="section__circle-container__circle mdl-color--primary">
                    </div>
                                      </td>
                                    <td>Lorem Ipsum</td>

                                    <td class="hide-mobile">abc@gmail.com </td>
                                    <td>
                                    <i class="material-icons mdl-color-text--green-400" style="font-size: 1.1em;">launch </i>
                                    <i class="material-icons mdl-color-text--blue-400" style="font-size: 1.1em;">mode_edit </i>
                                    <i class="material-icons mdl-color-text--red-400" style="font-size: 1.1em;">delete</i>

                                     </td>
                                  </tr>

                                   <tr >
                                    <td class="hide-mobile">1 </td>
                                    <td><div class="section__circle-container__circle mdl-color--primary"> </td>
                                    <td>Lorem Ipsum </td>

                                    <td class="hide-mobile">9090900100 </td>
                                    <td>
                                   <i class="material-icons mdl-color-text--green-400" style="font-size: 1.1em;">launch </i>
                                    <i class="material-icons mdl-color-text--blue-400" style="font-size: 1.1em;">mode_edit </i>
                                    <i class="material-icons mdl-color-text--red-400" style="font-size: 1.1em;">delete</i>
                                    </td>

                                  </tr>

                                    <tr >
                                    <td class="hide-mobile">1 </td>
                                    <td><div class="section__circle-container__circle mdl-color--primary"></td>
                                    <td>Lorem Ipsum </td>

                                    <td class="hide-mobile">9090900100 </td>
                                    <td>
                                    <i class="material-icons mdl-color-text--green-400" style="font-size: 1.1em;">launch </i>
                                    <i class="material-icons mdl-color-text--blue-400" style="font-size: 1.1em;">mode_edit </i>
                                    <i class="material-icons mdl-color-text--red-400" style="font-size: 1.1em;">delete</i>
                                    </td>

                                  </tr>
                                </table>


                                          </center>
                                  </div>
                          </div>
                          <div class="mdl-card__actions mdl-card--border">
                            <a class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect">

                            </a>
                          </div>

                          <div class="mdl-card__menu">
                              <form action="#">
                              <div class="mdl-textfield mdl-js-textfield mdl-textfield--expandable" >
                                <label class="mdl-button mdl-js-button mdl-button--icon" for="sample6">
                                  <i class="material-icons">search</i>
                                </label>
                                <div class="mdl-textfield__expandable-holder">
                                  <input class="mdl-textfield__input" type="text" id="sample6">
                                  <label class="mdl-textfield__label" for="sample-expandable">Expandable Input</label>
                                </div>
                              </div>
                            </form>


                          </div>
                        </div>
                         </div>


                    </div>



@stop

@section('page_footer')
    <script>
        $(function () {
  $('[data-toggle="tooltip"]').tooltip()
})
    </script>
@stop
