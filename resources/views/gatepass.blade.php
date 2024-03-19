<!DOCTYPE html>
<html lang="english">

<head>
  <title>Gatepass</title>
  <link rel="icon" type="image/x-icon" href="/images/spc-logo.ico">
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
  <script src="https://unpkg.com/html5-qrcode"></script>
  
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta charset="utf-8" />
  <meta property="twitter:card" content="summary_large_image" />

  <!-- Styles -->
  <style data-tag="reset-style-sheet">html{line-height: 1.15}body{margin: 0}*{box-sizing: border-box;border-width: 0;border-style: solid}p,li,ul,pre,div,h1,h2,h3,h4,h5,h6,figure,blockquote,figcaption{margin: 0;padding: 0}button{background-color: transparent}button,input,optgroup,select,textarea{font-family: inherit;font-size: 100%;line-height: 1.15;margin: 0}button,select{text-transform: none}button::-moz-focus-inner,[type="button"]::-moz-focus-inner,[type="reset"]::-moz-focus-inner,[type="submit"]::-moz-focus-inner{border-style: none;padding: 0}button:-moz-focus,[type="button"]:-moz-focus,[type="reset"]:-moz-focus,[type="submit"]:-moz-focus{outline: 1px dotted ButtonText}a{color: inherit;text-decoration: inherit}input{padding: 2px 4px}img{display: block}html{scroll-behavior: smooth}</style>
  <style data-tag="default-style-sheet">html{font-family: Inter;font-size: 16px}body{font-weight: 400;font-style: normal;text-decoration: none;text-transform: none;letter-spacing: normal;line-height: 1.15;color: var(--dl-color-gray-black);background-color: var(--dl-color-gray-white)}</style>
  
  <link rel="stylesheet" href="https://unpkg.com/animate.css@4.1.1/animate.css" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&amp;display=swap" data-tag="font" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&amp;display=swap" data-tag="font" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&amp;display=swap" data-tag="font" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Goblin+One:wght@400&amp;display=swap" data-tag="font" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Goblin+One:wght@400&amp;display=swap" data-tag="font" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Goblin+One:wght@400&amp;display=swap" data-tag="font" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Goblin+One:wght@400&amp;display=swap" data-tag="font" />
  <link rel="stylesheet" href="https://unpkg.com/@teleporthq/teleport-custom-scripts/dist/style.css" />
</head>
<body>
  <div>
    <link rel="stylesheet" href="css/gatepass.css" />
    <div class="gate-pass-container">
      <div class="gate-pass-gate-pass">
        <img src="images/gatepass/box.png" class="gate-pass-rectangle75" />
        <img src="images/gatepass/pic.png" class="gate-pass-rectangle73" />
        
        <img src="images/gatepass/box1.png" class="gate-pass-rectangle11" />
        <span class="gate-pass-text">Gatepass Scanner</span>
        <img src="images/gatepass/box3.png" class="gate-pass-rectangle72" />
       <button>
        <a href="{{ route('gatepass1') }}" class="bg-green-500 hover:bg-green-600 active:bg-green-700 text-white font-bold py-2 px-1 rounded h-8" style="top: 370px; left: 321px; width: 137px; height: auto; opacity: 0.9; position: absolute; font-size: 10px; font-style: Medium; text-align: center; font-family: Inter; font-weight: 500; line-height: normal; font-stretch: normal; text-decoration: none;">
          Request Camera Access 
        </a>
       </button> 
        <img src="images/gatepass/vector2221-2hxt.svg" class="gate-pass-vector" />
        <span class="gate-pass-text1"><span>Student Info</span></span>
        <span class="gate-pass-text3"><span>Scan First</span></span>
        <img src="images/gatepass/line204101-l1k.svg" class="gate-pass-line20" />
        <span class="gate-pass-text7"><span>Scan First</span></span>
        <a href="{{ route('admin') }}">
            <img src="images/gatepass/SPClogo.png" class="gate-pass-spclogo4 cursor-pointer mt-0.25rem" />
        </a>
      </div>
    </div>
  </div>
</body>
</html>