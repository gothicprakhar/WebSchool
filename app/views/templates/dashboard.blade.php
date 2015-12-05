<!DOCTYPE html>
<html>
<head>
<style>
* {
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  -o-box-sizing: border-box;
  box-sizing: border-box;
  /* adds animation for all transitions */
  
  -webkit-transition: .25s ease-in-out;
  -moz-transition: .25s ease-in-out;
  -o-transition: .25s ease-in-out;
  transition: .25s ease-in-out;
  margin: 0;
  padding: 0;
  -webkit-text-size-adjust: none;
}
/* Makes sure that everything is 100% height */

html,
body {
  height: 100%;
  overflow: hidden;
}
/* gets the actual input out of the way; 
we're going to style the label instead */

#drawer-toggle {
  position: absolute;
  opacity:1;
}
#drawer-toggle-label {
  -webkit-touch-callout: none;
  -webkit-user-select: none;
  -khtml-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none;
  left: 0px;
  height: 50px;
  width: 50px;
  display: block;
  position: fixed;
  background: rgba(255, 255, 255, .0);
  z-index: 1;
}
/* adds our "hamburger" menu icon */

#drawer-toggle-label:before {
  content: '';
  display: block;
  position: absolute;
  height: 2px;
  width: 24px;
  background: #8d8d8d;
  left: 13px;
  top: 18px;
  box-shadow: 0 6px 0 #8d8d8d, 0 12px 0 #8d8d8d;
}

header {
  width: 100%;
  position: fixed;
  left: 0px;
  background: #efefef;
  padding: 10px 10px 10px 50px;
  font-size: 30px;
  line-height: 30px;
  z-index: 0;
}
#drawer {
  position: fixed;
  top: 0;
  left: -300px;
  height: 100%;
  width: 300px;
  background: #2f2f2f;
  overflow-x: hidden;
  overflow-y: scroll;
  padding: 20px;
  -webkit-overflow-scrolling: touch;
}
/* actual page content pane */

#page-content {
  margin-left: 0px;
  margin-top: 50px;
  width: 100%;
  height: calc(100% - 50px);
  overflow-x: hidden;
  overflow-y: scroll;
  -webkit-overflow-scrolling: touch;
  padding: 20px;
}
#drawer-toggle:checked ~ #drawer-toggle-label {
  height: 100%;
  width: calc(100% - 300px);
  background: rgba(255, 255, 255, .8);
}

#drawer-toggle:checked ~ #drawer-toggle-label,
#drawer-toggle:checked ~ header {
  left: 300px;
}

#drawer-toggle:checked ~ #drawer {
  left: 0px;
}

#drawer-toggle:checked ~ #page-content {
  margin-left: 300px;
}
/* checked styles (menu open state) */

#drawer-toggle:checked ~ #drawer-toggle-label {
  height: 100%;
  width: calc(100% - 300px);
  background: rgba(255, 255, 255, .8);
}

#drawer-toggle:checked ~ #drawer-toggle-label,
#drawer-toggle:checked ~ header {
  left: 300px;
}

#drawer-toggle:checked ~ #drawer {
  left: 0px;
}

#drawer-toggle:checked ~ #page-content {
  margin-left: 300px;
}
</style>
@yield('page_head')
</head>
<body>
   <input type="checkbox" id="drawer-toggle" name="drawer-toggle"/>
   <label for="drawer-toggle" id="drawer-toggle-label"></label>
   <header>Header</header>
   <nav id="drawer">
      <ul>
          <li><a href="{{URL::route('profile')}}">Menu Item</a></li>
          <li><a href="{{url('welcome')}}">Menu Item</a></li>
          <li><a href="{{url('welcome')}}">Menu Item</a></li>
          <li><a href="{{url('welcome')}}">Menu Item</a></li>
      </ul>
   </nav>
    <div id="page-content">
     <div class="container">
    @yield('page_content')
</div>
        <div class"page_footer">

        @yield('page_footer')
        </div>
    </div>

    </body>
</html>
