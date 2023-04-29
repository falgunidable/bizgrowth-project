<html>
  <head>
   <title>Google Translate Button</title>
  </head>
 <body>
 
 <style type="text/css">
 
   .fixed-con {
    z-index: 9724790009779558!important;
    background-color: #f7f8fc;
    position: fixed;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
  }
  .VIpgJd-ZVi9od-aZ2wEe-wOHMyf{
   z-index: 9724790009779!important;
   top:0;
   left:unset;
   right:-5px;
   display:none!important;
   border-radius:50%;
   border:2px solid gold;
  }
  .VIpgJd-ZVi9od-aZ2wEe-OiiCO{
    width:80px;
    height:80px;
  }
  /*hide google translate link | logo | banner-frame */
  .goog-logo-link,.gskiptranslate,.goog-te-gadget span,.goog-te-banner-frame,#goog-gt-tt, .goog-te-balloon-frame,div#goog-gt-{
    display: none!important;
  }
  .goog-te-gadget {
    color: transparent!important;
    font-size:0px;
  }

  .goog-text-highlight {
    background: none !important;
    box-shadow: none !important;
  }
   
 /*google translate Dropdown */
 
 #google_translate_element select{
 background:#f6edfd;
 color:#383ffa;
 border: none;
 border-radius:3px;
 padding:6px 8px
 }
   </style>
<div class="fixed-con">
 <h2>This is a simple web page.</h2>
 <p>This is a simple web page and you can translate the content of this page by selecting your
 language in the select box</p>
 <div id='google_translate_element'></div>
</div>
  <script>
 function googleTranslateElementInit() {
 new google.translate.TranslateElement({
 pageLanguage: 'en',
 autoDisplay: 'true',
 layout: google.translate.TranslateElement.InlineLayout.HORIZONTAL
 }, 'google_translate_element');
 }
 </script>
 <script src='//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit'></script>
 <p>This example displays a fully customized Google translate button. </p>
 </body>
 </html>