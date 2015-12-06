@extends('templates.first')
@section('page_head')
<title>Dashboard</title>
    <link href="./assets/css/dashboard.css" rel="stylesheet">
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
                             <button id="demo-menu-lower-right" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--primary" style="margin-top: 6em; background-color: #FF5252;">
  One &nbsp; <span class="glyphicon glyphicon-menu-down" style="margin-top: 0.2em;"></span>
</button>     <ul class="mdl-menu mdl-menu--bottom-right mdl-js-menu mdl-js-ripple-effect"
                                for="demo-menu-lower-right">
                              <li class="mdl-menu__item">One</li>
                              <li class="mdl-menu__item">Two</li>
                              <li class="mdl-menu__item">Three</li>
                            </ul>

                          </div>



                              <div class="mdl-card__supporting-text mdl-grid mdl-grid--no-spacing">

<button class="mdl-button mdl-js-button mdl-button--fab mdl-js-ripple-effect mdl-button--colored" style="margin-top: -1.5em; z-index: 999;  position: absolute;margin-left: 1em;">
                              &nbsp; &nbsp;<i class="material-icons">add</i>
                            </button>
                                  <div class="mdl-cell mdl-cell--12-col" style="margin-bottom: 0em;">
                                      <center>

                               <table  style="width: 95%; margin-top: 3em; line-height: 2em; font-size: 1.1em;">
                                  <tr>
                                    <th>No <hr></th>
                                    <th>Photo <hr></th>
                                    <th>Name <hr></th>
                                    <th>Email <hr></th>

                                    <th >Action <hr></th>
                                </tr>
                                  <tr >
                                    <td>1 <hr></td>
                                    <td>$100 <hr></td>
                                      <td>January <hr></td>
                                    <td>$100 <hr></td>

                                    <td>
                                    <button class="btn btn-sm btn-primary" style="font-size: 0.65em;"><span class="glyphicon glyphicon-file"></span></button>
                                    <button class="btn btn-sm btn-warning" style="font-size: 0.65em;"><span class="glyphicon glyphicon-edit"></span></button>
                                    <button class="btn btn-sm btn-danger" style="font-size: 0.65em;"><span class="glyphicon glyphicon-trash"></span></button>
                                    <hr> </td>

                                  </tr>

                                   <tr>
                                    <td>2 <hr></td>
                                    <td>$100 <hr></td>
                                      <td>January <hr></td>
                                    <td>$100 <hr></td>

                                    <td> <button class="btn btn-sm btn-primary" style="font-size: 0.65em;"><span class="glyphicon glyphicon-file"></span></button>
                                    <button class="btn btn-sm btn-warning" style="font-size: 0.65em;"><span class="glyphicon glyphicon-edit"></span></button>
                                    <button class="btn btn-sm btn-danger" style="font-size: 0.65em;"><span class="glyphicon glyphicon-trash"></span></button> <hr></td>

                                  </tr>

                                   <tr>
                                    <td>3<hr</td>
                                    <td>$10<hr></td>
                                      <td>January<hr></td>
                                    <td>$100<hr></td>

                                    <td> <button class="btn btn-sm btn-primary" style="font-size: 0.65em;"><span class="glyphicon glyphicon-file"></span></button>
                                    <button class="btn btn-sm btn-warning" style="font-size: 0.65em;"><span class="glyphicon glyphicon-edit"></span></button>
                                    <button class="btn btn-sm btn-danger" style="font-size: 0.65em;"><span class="glyphicon glyphicon-trash"></span></button><hr></td>
                                  </tr>
                                   <tr>
                                    <td>4<hr></td>
                                    <td>$100<hr></td>
                                      <td>January<hr></td>
                                    <td>$100<hr></td>

                                    <td> <button class="btn btn-sm btn-primary" style="font-size: 0.65em;"><span class="glyphicon glyphicon-file"></span></button>
                                    <button class="btn btn-sm btn-warning" style="font-size: 0.65em;"><span class="glyphicon glyphicon-edit"></span></button>
                                    <button class="btn btn-sm btn-danger" style="font-size: 0.65em;"><span class="glyphicon glyphicon-trash"></span></button><hr></td>
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
                              <div class="mdl-textfield mdl-js-textfield mdl-textfield--expandable">
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
    <script type="text/javascript">
    </script>
@stop
