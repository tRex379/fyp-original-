	 <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
	 <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
	 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<!------ Include the above in your HEAD tag ---------->
<style type="text/css">
body {
    position: relative;
    overflow-x: hidden;
}
body,
html { height: 100%;}
.nav .open > a, 
.nav .open > a:hover, 
.nav .open > a:focus {background-color: transparent;}

/*-------------------------------*/
/*           Wrappers            */
/*-------------------------------*/

#wrapper {
    padding-left: 0;
    -webkit-transition: all 0.5s ease;
    -moz-transition: all 0.5s ease;
    -o-transition: all 0.5s ease;
    transition: all 0.5s ease;
}

#wrapper.toggled {
    padding-left: 220px;
}

#sidebar-wrapper {
    z-index: 1000;
    left: 220px;
    width: 0;
    height: 100%;
    margin-left: -220px;
    overflow-y: auto;
    overflow-x: hidden;
    background: #1a1a1a;
    -webkit-transition: all 0.5s ease;
    -moz-transition: all 0.5s ease;
    -o-transition: all 0.5s ease;
    transition: all 0.5s ease;
}

#sidebar-wrapper::-webkit-scrollbar {
  display: none;
}

#wrapper.toggled #sidebar-wrapper {
    width: 220px;
}

#page-content-wrapper {
    width: 100%;
    padding-top: 70px;
}

#wrapper.toggled #page-content-wrapper {
    position: absolute;
    margin-right: -220px;
}

/*-------------------------------*/
/*     Sidebar nav styles        */
/*-------------------------------*/

.sidebar-nav {
    position: absolute;
    top: 0;
    width: 220px;
    margin: 0;
    padding: 0;
    list-style: none;
}

.sidebar-nav li {
    position: relative; 
    line-height: 20px;
    display: inline-block;
    width: 100%;
}

.sidebar-nav li:before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    z-index: -1;
    height: 100%;
    width: 3px;
    background-color: #1c1c1c;
    -webkit-transition: width .2s ease-in;
      -moz-transition:  width .2s ease-in;
       -ms-transition:  width .2s ease-in;
            transition: width .2s ease-in;

}
.sidebar-nav li:first-child a {
    color: #fff;
    background-color: #1a1a1a;
}
.sidebar-nav li:nth-child(2):before {
    background-color: #ec1b5a;   
}
.sidebar-nav li:nth-child(3):before {
    background-color: #79aefe;   
}
.sidebar-nav li:nth-child(4):before {
    background-color: #314190;   
}
.sidebar-nav li:nth-child(5):before {
    background-color: #279636;   
}
.sidebar-nav li:nth-child(6):before {
    background-color: #7d5d81;   
}
.sidebar-nav li:nth-child(7):before {
    background-color: #ead24c;   
}
.sidebar-nav li:nth-child(8):before {
    background-color: #2d2366;   
}
.sidebar-nav li:nth-child(9):before {
    background-color: #35acdf;   
}
.sidebar-nav li:hover:before,
.sidebar-nav li.open:hover:before {
    width: 100%;
    -webkit-transition: width .2s ease-in;
      -moz-transition:  width .2s ease-in;
       -ms-transition:  width .2s ease-in;
            transition: width .2s ease-in;

}

.sidebar-nav li a {
    display: block;
    color: #ddd;
    text-decoration: none;
    padding: 10px 15px 10px 30px;    
}

.sidebar-nav li a:hover,
.sidebar-nav li a:active,
.sidebar-nav li a:focus,
.sidebar-nav li.open a:hover,
.sidebar-nav li.open a:active,
.sidebar-nav li.open a:focus{
    color: #fff;
    text-decoration: none;
    background-color: transparent;
}

.sidebar-nav > .sidebar-brand {
    height: 65px;
    font-size: 20px;
    line-height: 44px;
}
.sidebar-nav .dropdown-menu {
    position: relative;
    width: 100%;
    padding: 0;
    margin: 0;
    border-radius: 0;
    border: none;
    background-color: #222;
    box-shadow: none;
}

/*-------------------------------*/
/*       Hamburger-Cross         */
/*-------------------------------*/

.hamburger {
  position: fixed;
  top: 20px;  
  z-index: 999;
  display: block;
  width: 32px;
  height: 32px;
  margin-left: 15px;
  background: transparent;
  border: none;
}
.hamburger:hover,
.hamburger:focus,
.hamburger:active {
  outline: none;
}
.hamburger.is-closed:before {
  content: '';
  display: block;
  width: 100px;
  font-size: 14px;
  color: #fff;
  line-height: 32px;
  text-align: center;
  opacity: 0;
  -webkit-transform: translate3d(0,0,0);
  -webkit-transition: all .35s ease-in-out;
}
.hamburger.is-closed:hover:before {
  opacity: 1;
  display: block;
  -webkit-transform: translate3d(-100px,0,0);
  -webkit-transition: all .35s ease-in-out;
}

.hamburger.is-closed .hamb-top,
.hamburger.is-closed .hamb-middle,
.hamburger.is-closed .hamb-bottom,
.hamburger.is-open .hamb-top,
.hamburger.is-open .hamb-middle,
.hamburger.is-open .hamb-bottom {
  position: absolute;
  left: 0;
  height: 4px;
  width: 100%;
}
.hamburger.is-closed .hamb-top,
.hamburger.is-closed .hamb-middle,
.hamburger.is-closed .hamb-bottom {
  background-color: #1a1a1a;
}
.hamburger.is-closed .hamb-top { 
  top: 5px; 
  -webkit-transition: all .35s ease-in-out;
}
.hamburger.is-closed .hamb-middle {
  top: 50%;
  margin-top: -2px;
}
.hamburger.is-closed .hamb-bottom {
  bottom: 5px;  
  -webkit-transition: all .35s ease-in-out;
}

.hamburger.is-closed:hover .hamb-top {
  top: 0;
  -webkit-transition: all .35s ease-in-out;
}
.hamburger.is-closed:hover .hamb-bottom {
  bottom: 0;
  -webkit-transition: all .35s ease-in-out;
}
.hamburger.is-open .hamb-top,
.hamburger.is-open .hamb-middle,
.hamburger.is-open .hamb-bottom {
  background-color: #1a1a1a;
}
.hamburger.is-open .hamb-top,
.hamburger.is-open .hamb-bottom {
  top: 50%;
  margin-top: -2px;  
}
.hamburger.is-open .hamb-top { 
  -webkit-transform: rotate(45deg);
  -webkit-transition: -webkit-transform .2s cubic-bezier(.73,1,.28,.08);
}
.hamburger.is-open .hamb-middle { display: none; }
.hamburger.is-open .hamb-bottom {
  -webkit-transform: rotate(-45deg);
  -webkit-transition: -webkit-transform .2s cubic-bezier(.73,1,.28,.08);
}
.hamburger.is-open:before {
  content: '';
  display: block;
  width: 100px;
  font-size: 14px;
  color: #fff;
  line-height: 32px;
  text-align: center;
  opacity: 0;
  -webkit-transform: translate3d(0,0,0);
  -webkit-transition: all .35s ease-in-out;
}
.hamburger.is-open:hover:before {
  opacity: 1;
  display: block;
  -webkit-transform: translate3d(-100px,0,0);
  -webkit-transition: all .35s ease-in-out;
}

/*-------------------------------*/
/*            Overlay            */
/*-------------------------------*/

.overlay {
    position: fixed;
    display: none;
    width: 100%;
    height: 100%;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background-color: rgba(250,250,250,.8);
    z-index: 1;
}
</style>
    <div id="wrapper">
        <div class="overlay"></div>
    
        <!-- Sidebar -->
        <nav class="navbar navbar-inverse navbar-fixed-top" id="sidebar-wrapper" role="navigation">
            <ul class="nav sidebar-nav">
                <li class="sidebar-brand">
                    <a href="#">
                       Brand
                    </a>
                </li>
                <li>
                    <a href="#">Home</a>
                </li>
                <li>
                    <a href="#">About</a>
                </li>
                <li>
                    <a href="#">Events</a>
                </li>
                <li>
                    <a href="#">Team</a>
                </li>
                <li class="dropdown">
                  <a class="dropdown_list" data-toggle="#dropdown-menu" data-target=".navbar-collapse">Works <span class="caret"></span></a>
                  <ul id="dropdown-menu navbar-collapse" role="menu">
                    <li class="dropdown-header">Dropdown heading</li>
                    <li><a href="#">Action</a></li>
                    <li><a href="#">Another action</a></li>
                    <li><a href="#">Something else here</a></li>
                    <li><a href="#">Separated link</a></li>
                    <li><a href="#">One more separated link</a></li>
                  </ul>
                </li>
                <li>
                    <a href="#">Services</a>
                </li>
                <li>
                    <a href="#">Contact</a>
                </li>
                <li>
                    <a href="https://twitter.com/maridlcrmn">Follow me</a>
                </li>
            </ul>
        </nav>
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
        <div id="page-content-wrapper">
            <button type="button" class="hamburger is-closed" data-toggle="offcanvas">
                <span class="hamb-top"></span>
    			<span class="hamb-middle"></span>
				<span class="hamb-bottom"></span>
            </button>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <h1>Fancy Toggle Sidebar Navigation</h1>
                        <p>Bacon ipsum dolor sit amet tri-tip shoulder tenderloin shankle. Bresaola tail pancetta ball tip doner meatloaf corned beef. Kevin pastrami tri-tip prosciutto ham hock pork belly bacon pork loin salami pork chop shank corned beef tenderloin meatball cow. Pork bresaola meatloaf tongue, landjaeger tail andouille strip steak tenderloin sausage chicken tri-tip. Pastrami tri-tip kielbasa sausage porchetta pig sirloin boudin rump meatball andouille chuck tenderloin biltong shank </p>
                        <p>Pig meatloaf bresaola, spare ribs venison short loin rump pork loin drumstick jowl meatball brisket. Landjaeger chicken fatback pork loin doner sirloin cow short ribs hamburger shoulder salami pastrami. Pork swine beef ribs t-bone flank filet mignon, ground round tongue. Tri-tip cow turducken shank beef shoulder bresaola tongue flank leberkas ball tip.</p>
                        <p>Filet mignon brisket pancetta fatback short ribs short loin prosciutto jowl turducken biltong kevin pork chop pork beef ribs bresaola. Tongue beef ribs pastrami boudin. Chicken bresaola kielbasa strip steak biltong. Corned beef pork loin cow pig short ribs boudin bacon pork belly chicken andouille. Filet mignon flank turkey tongue. Turkey ball tip kielbasa pastrami flank tri-tip t-bone kevin landjaeger capicola tail fatback pork loin beef jerky.</p>
                        <p>Chicken ham hock shankle, strip steak ground round meatball pork belly jowl pancetta sausage spare ribs. Pork loin cow salami pork belly. Tri-tip pork loin sausage jerky prosciutto t-bone bresaola frankfurter sirloin pork chop ribeye corned beef chuck. Short loin hamburger tenderloin, landjaeger venison porchetta strip steak turducken pancetta beef cow leberkas sausage beef ribs. Shoulder ham jerky kielbasa. Pig doner short loin pork chop. Short ribs frankfurter rump meatloaf.</p>
                        <p>Filet mignon biltong chuck pork belly, corned beef ground round ribeye short loin rump swine. Hamburger drumstick turkey, shank rump biltong pork loin jowl sausage chicken. Rump pork belly fatback ball tip swine doner pig. Salami jerky cow, boudin pork chop sausage tongue andouille turkey.</p>                         
                    </div>
                </div>
            </div>
        </div>
        <!-- /#page-content-wrapper -->

    </div>
    <!-- /#wrapper -->
	<script>
$(document).ready(function () {
  var trigger = $('.hamburger'),
      overlay = $('.overlay'),
     isClosed = false;

    trigger.click(function () {
      hamburger_cross();      
    });

    function hamburger_cross() {

      if (isClosed == true) {          
        overlay.hide();
        trigger.removeClass('is-open');
        trigger.addClass('is-closed');
        isClosed = false;
      } else {   
        overlay.show();
        trigger.removeClass('is-closed');
        trigger.addClass('is-open');
        isClosed = true;
      }
  }
  
  $('[data-toggle="offcanvas"]').click(function () {
        $('#wrapper').toggleClass('toggled');
  });  
});
	</script>