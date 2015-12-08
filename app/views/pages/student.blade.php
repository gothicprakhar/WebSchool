@extends('templates.first')
@section('page_head')
<title>Students - Connectify</title>
    <link href="./assets/css/dashboard.css" rel="stylesheet">
    <link href="./assets/css/panel.css" rel="stylesheet">
 <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/angular_material/0.11.2/angular-material.min.css">

@stop

@section('page_content')

                     <div class="mdl-grid">
                         <div class="mdl-cell mdl-cell--1-col-desktop mdl-grid"></div>
                         <div class="mdl-cell mdl-cell--10-col mdl-grid">
                          <div class="student-card-wide mdl-card mdl-shadow--2dp">

                           <div class="mdl-card__title" style="z-index: 0;">
                               <!-- Colored FAB button with ripple -->

                               <h2 class="mdl-card__title-text"><i class="material-icons" style="margin-left: 3em;">school</i>&nbsp;Students</h2>
                                <div class="mdl-layout-spacer"></div><br>
                            <!-- Right aligned menu below button -->

                             <button id="demo-menu-lower-right" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--primary" style="margin-top: 6em; background-color: #FF5252;"> <span class="mdl-cell--hide-phone ">SELECT</span> CLASS&nbsp; <span class="glyphicon glyphicon-menu-down" style="margin-top: 0.2em;"></span>

</button>     <ul class="mdl-menu mdl-menu--bottom-right mdl-js-menu mdl-js-ripple-effect"
                                for="demo-menu-lower-right" style="height: 10em;overflow: scroll; ">
                               @for($i=0;$i<sizeof($data['class']);$i++)
                                               <li class="mdl-menu__item" onclick="showstudents({{$data['class'][$i]['id']}})">
                                {{$data['class'][$i]['name']}}
                                                </li>
                                @endfor
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



                                        <div id="showtable">
                                           <br><br>
                                          <i>Please choose a class to view students.</i>
                                          </div>

                         <!--  <table  style="width: 95%; margin-top: 3em; line-height: 5em; font-size: 1.1em;" rules="rows" cellspacing="60">
                                  <tr>
                                    <th class="hide-mobile">No </th>
                                    <th>Photo </th>
                                    <th>Name </th>
                                    <th>Roll No </th>
                                    <th class="hide-mobile">Phone </th>
                                    <th >Action </th>
                                </tr>
                                  <tr >
                                    <td class="hide-mobile">1 </td>
                                    <td>
                                      <div class="section__circle-container__circle mdl-color--primary">
                    </div>
                                      </td>
                                    <td>Lorem Ipsum</td>
                                    <td>100 </td>
                                    <td class="hide-mobile">9090900100 </td>
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
                                    <td>100 </td>
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
                                    <td>100 </td>
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
                                    <td>100 </td>
                                    <td class="hide-mobile">9090900100 </td>
                                    <td>
                                <i class="material-icons mdl-color-text--green-400" style="font-size: 1.1em;">launch </i>
                                    <i class="material-icons mdl-color-text--blue-400" style="font-size: 1.1em;">mode_edit </i>
                                    <i class="material-icons mdl-color-text--red-400" style="font-size: 1.1em;">delete</i>
                                    </td>

                                  </tr>
                                </table> -->

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
        function showstudents(classid) {
           // console.log(classid);
            var url = "/showstudents/"+classid;
            //console.log(url);
            $.ajax({
              'url': url,
              'type': 'GET',
              'contentType': 'text/html',
              async: false,
              success: function (e) {
                  var f = jQuery.parseJSON(e);
                  //console.log(f);
                  var arr = $.map(f, function(el) { return el; })

                  var tbhtml = "<table  style=\"width: 95%; margin-top: 3em; line-height: 5em; font-size: 1.1em;\" rules=\"rows\" cellspacing=\"60\"><tr><th class=\"hide-mobile\">No </th><th>Photo </th><th>Name </th><th>Roll No </th><th class=\"hide-mobile\">Phone </th><th >Action </th> </tr>";

                  for(var i = 0; i < arr.length; i++) {
                      tbhtml += "<tr><td class=\"hide-mobile\">";
                      tbhtml += (i+1);
                      tbhtml += "</td><td><div class=\"section__circle-container__circle mdl-color--primary\"></td>";
                      tbhtml += "<td>";
                      tbhtml += arr[i].name;
                      tbhtml += "</td>";
                      tbhtml += "<td>";
                      tbhtml += arr[i].rollno;
                      tbhtml += "</td>";
                      tbhtml += "<td class=\"hide-mobile\">";
                      tbhtml += arr[i].phone;
                      tbhtml += "</td>"
                      tbhtml += "<td><i class=\"material-icons mdl-color-text--green-400\" style=\"font-size: 1.1em;\">launch </i><i class=\"material-icons mdl-color-text--blue-400\" style=\"font-size: 1.1em;\">mode_edit </i><i class=\"material-icons mdl-color-text--red-400\"style=\"font-size: 1.1em;\">delete</i></td>";
                      tbhtml += "</tr>";
                  }
                  $('#showtable').html(tbhtml);
                 // console.log(tbhtml);
              },
              error: function (g) {
              console.log(g);
              },
              cache: false,
              processData: false
          });
        }
    </script>
@stop
