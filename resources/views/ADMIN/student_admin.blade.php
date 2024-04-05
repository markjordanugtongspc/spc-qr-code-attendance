<!DOCTYPE html>
<html lang="english">

<head>
  <title>Student Admin</title>

  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta property="twitter:card" content="summary_large_image" />
  <meta charset="UTF-8" />

  <style data-tag="reset-style-sheet">/* prettier-ignore */html{line-height: 1.15}body{margin: 0}*{box-sizing: border-box;border-width: 0;border-style: solid}p,li,ul,pre,div,h1,h2,h3,h4,h5,h6,figure,blockquote,figcaption{margin: 0;padding: 0}button{background-color: transparent}button,input,optgroup,select,textarea{font-family: inherit;font-size: 100%;line-height: 1.15;margin: 0}button,select{text-transform: none}button,[type="button"],[type="reset"],[type="submit"]{-webkit-appearance: button}button::-moz-focus-inner,[type="button"]::-moz-focus-inner,[type="reset"]::-moz-focus-inner,[type="submit"]::-moz-focus-inner{border-style: none;padding: 0}button:-moz-focus,[type="button"]:-moz-focus,[type="reset"]:-moz-focus,[type="submit"]:-moz-focus{outline: 1px dotted ButtonText}a{color: inherit;text-decoration: inherit}input{padding: 2px 4px}img{display: block}html{scroll-behavior: smooth}</style>
  <style data-tag="default-style-sheet">/* prettier-ignore */html{font-family: Inter;font-size: 16px}body{font-weight: 400;font-style: normal;text-decoration: none;text-transform: none;letter-spacing: normal;line-height: 1.15;color: var(--dl-color-gray-black);background-color: var(--dl-color-gray-white)}</style>
  <linkrel="stylesheet"href="https: //unpkg.com/animate.css@4.1.1/animate.css" />
  <linkrel="stylesheet"href="https: //fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap"data-tag="font" />
  <linkrel="stylesheet"href="https: //fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap"data-tag="font" />
  <linkrel="stylesheet"href="https: //unpkg.com/@teleporthq/teleport-custom-scripts/dist/style.css" />
</head>

<body>
  <link rel="stylesheet" href="css/users/admin/student_admin/style/student_style.css" />
  <link rel="stylesheet" href="css/users/admin/student_admin/main/student_main.css" />
  <div>
    <div class="students-container">
      <div class="students-students">
        <img src="images/ins_stud_adm/rec-kxhw.png" class="students-rectangle168" />
        <img src="images/ins_stud_adm/rec-wcq.png" class="students-rectangle169" />
        <img src="images/ins_stud_adm/rec-f3o.png" class="students-rectangle171" />
        <img src="images/ins_stud_adm/rec-hrfi.png" class="students-rectangle170" />
        <img src="images/ins_stud_adm/rec-o3m.png" class="students-rectangle166" />
        <img src="images/ins_stud_adm/rec-rzvb.png" class="students-rectangle167" />
        <img src="images/ins_stud_adm/rec-sar.png" class="students-rectangle155" />
        <div class="students-group18">
          <img src="images/ins_stud_adm/img-cre9.png" class="students-image5" />
          <img src="images/ins_stud_adm/spclogo-vl4.png" class="students-spcnremovebgpreview14" />
          <span class="students-text"><span>Admin Dashboard</span></span>
          <img src="images/ins_stud_adm/img-q088.png" class="students-image8" />
          <img src="images/ins_stud_adm/rec-0c5a.svg" class="students-rectangle156" />
          <img src="images/ins_stud_adm/rec-jyzx.svg" class="students-rectangle157" />
          <img src="images/ins_stud_adm/rec-vmok.svg" class="students-rectangle158" />
          <div class="button-container">
            <button class="students-text02 active">
              <a href="{{ route('student') }}" class="student-text02">STUDENTS</a>
            </button>
            <button class="students-text04">
              <a href="{{ route('instructor') }}" class="student-text04">INSTRUCTOR</a>
            </button>
            <button class="students-text06">
              <a href="{{ route('attendancelog') }}" class="instructor-text06">ATTENDANCE LOG</a>
            </button>
          </div>
          <span class="students-text08">
            <span>spcregistrar@gmail.com</span>
          </span>
          <span class="students-text10"><span>(+63) 221-6246</span></span>
          <img src="images/ins_stud_adm/img-052m.png" alt="image64828" class="students-image6" />
          <span class="students-text12"><span>my.spc.edu.ph</span></span>
        </div>
        <img src="images/ins_stud_adm/cba.png" class="students-cba1" onclick="window.location.href='/cba';" />
        <img src="images/ins_stud_adm/coc.png" class="students-coc1" onclick="window.location.href='/coc';" />
        <img src="images/ins_stud_adm/coe.png" class="students-coe1" onclick="window.location.href='/coe';" />
        <img src="images/ins_stud_adm/ced.png" class="students-ced1" onclick="window.location.href='/ced';" />
        <img src="images/ins_stud_adm/ccs.png" class="students-ccs1" onclick="window.location.href='/ccs';" />
        <span class="students-text14"><span>STUDENTS</span></span>
        <span class="students-text16">
          <span>College of Business Administration</span>
        </span>
        <span class="students-text18">
          <span>College of Criminology</span>
        </span>
        <span class="students-text20">
          <span>College of Computer Studies</span>
        </span>
        <span class="students-text22">
          <span>College of Arts and Sciences</span>
        </span>
        <span class="students-text24">
          <span>College of Engineering</span>
        </span>
        <span class="students-text26"><span>College of Education</span></span>
        <img src="images/ins_stud_adm/cas.png" class="students-cas3" />
        <form action="" method="POST">
          @csrf
          <button type="submit" class="students-text28 logout-button">
            <span>Log out</span>
          </button>
        </form>
        <img src="images/ins_stud_adm/rec-ylmd.svg" class="students-rectangle163" />
      </div>
    </div>
  </div>
</body>

</html>