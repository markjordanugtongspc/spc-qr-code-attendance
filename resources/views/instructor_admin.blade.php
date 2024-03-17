<!DOCTYPE html>
<html lang="english">
  <head>
    <title>Admin Instructor</title> 
    <scale=1">
    <link rel="icon" type="image/x-icon" href="/images/spc-logo.ico">
    <meta charset="utf-8" />
    <meta property="twitter:card" content="summary_large_image" />
    <style data-tag="reset-style-sheet">
      html{line-height:1.15}body{margin:0}*{box-sizing:border-box;border-width:0;border-style:solid}blockquote,div,figcaption,figure,h1,h2,h3,h4,h5,h6,li,p,pre,ul{margin:0;padding:0}button{background-color:transparent}button,input,optgroup,select,textarea{font-family:inherit;font-size:100%;line-height:1.15;margin:0}button,select{text-transform:none}[type=button],[type=reset],[type=submit],button{-webkit-appearance:button}[type=button]::-moz-focus-inner,[type=reset]::-moz-focus-inner,[type=submit]::-moz-focus-inner,button::-moz-focus-inner{border-style:none;padding:0}[type=button]:-moz-focus,[type=reset]:-moz-focus,[type=submit]:-moz-focus,button:-moz-focus{outline:1px dotted ButtonText}a{color:inherit;text-decoration:inherit}input{padding:2px 4px}img{display:block}html{scroll-behavior:smooth}
    </style>
    <style data-tag="default-style-sheet">
      body{font-weight:400;font-style:normal;text-decoration:none;text-transform:none;letter-spacing:normal;line-height:1.15;color:var(--dl-color-gray-black);background-color:var(--dl-color-gray-white)}
    </style>
    <link
      rel="stylesheet"
      href="https://unpkg.com/animate.css@4.1.1/animate.css"
    />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&amp;display=swap"
      data-tag="font"
    />
    <link
      rel="stylesheet"
      href="https://unpkg.com/@teleporthq/teleport-custom-scripts/dist/style.css"
    />
  </head>
  <body>
    <link rel="stylesheet" href="css/instructor_admin_style.css" />
    <div>
      <link rel="stylesheet" href="css/instructor_admin_main.css" />
      <div class="instructor-container">
        <div class="instructor-instructor">
            <img src="images/instructor/yellow.png" class="cba"/>
            <img src="images/instructor/red.png" class="coc"/>
            <img src="images/instructor/green.png"  class="ccs"/>
            <img src="images/instructor/orange.png" class="cas"/>
            <img src="images/instructor/purple.png" class="coe"/>
            <img src="images/instructor/blue.png"  class="ced"/>
            <img src="images/instructor/rec.png" class="rec"/>
        <div class="rec-group">
        <span class="AdminDashboard"><span>Admin Dashboard</span></span>
            <img src="images/instructor/logo.png" class="spclogo"/>
          <a><img src="images/instructor/WebIcon.png" class="web"/></a>
          <a><img src="images/instructor/PhoneIcon.png" class="phone" /></a>
          <a><img src="images/instructor/MsgIcon.png" class="msg"/></a>

        <div class="button-container">
              <button class="students-text02">
                <a href="{{ route('student') }}"  class="students-text02">STUDENTS</a>
              </button>
              <button class="instructor-text03">
                <a href="{{ route('instructor') }}" class="instructor-text03">INSTRUCTOR</a>
              </button>
              <button class="attendancelog-text04">
                <a href="{{ route('attendance_log') }}" class="attendancelog-text04">ATTENDANCE LOG</a>
              </button>
            </div>
            <span class="spcedu"><span>my.spc.edu.ph</span></span>
            <span class="number"><span>(+63) 221-6246</span></span>
            <span class="gmail"><span>spcregistrar@gmail.com</span></span>     
        </div>
          <a href="YOUR_LOGO_ROUTE">
            <img src="images/instructor/cba.png" class="instructor-cba1" /></a>
          <a href="YOUR_LOGO_ROUTE">
            <img src="images/instructor/coc.png" class="instructor-coc1" /></a>
          <a href="YOUR_LOGO_ROUTE">
            <img src="images/instructor/ccs.png" class="instructor-ccs1" /></a>
          <a href="YOUR_LOGO_ROUTE">
            <img src="images/instructor/cas.png"class="instructor-cas1"/></a>
          <a href="YOUR_LOGO_ROUTE">
            <img src="images/instructor/coe.png" class="instructor-coe1" /></a>
          <a href="YOUR_LOGO_ROUTE">
            <img src="images/instructor/ced.png" class="instructor-ced1" /></a>

          <span class="instructor-text1"><span>INSTRUCTOR</span></span>
          <span class="instructor-text2"><span>College of Business Administration</span></span>
          <span class="instructor-text3"><span>College of Criminology</span></span>
          <span class="instructor-text4"><span>College of Computer Studies</span></span>
          <span class="instructor-text5"><span>College of Arts and Sciences</span></span>
          <span class="instructor-text6"><span>College of Engineering</span></span>
          <span class="instructor-text7"><span>College of Education</span></span>
          <a href="YOUR_LOGOUT_ROUTE" class="logout"><span>Log out</span></a>  

        </div>
      </div>
    </div>
  </body>
</html>
