<?php
header("HTTP/1.1 404 Not Found");
?>
<?php
/**
 * The template for displaying the site home page: by default sends a 404 signal and shows a 404 message
 * This page could be used as a static home page: just replace the body's markup with yours & remove the 404 header
 * Change this and no other templates and then the home page will be the only one not to show 410 or 404 messages
 * If this page is modified to have content in the body (instead of the 404 message) then the 404 PHP header should be removed:
 * The line `header("HTTP/1.1 404 Not Found");` should be deleted if this homepage serves actual (non-404) content
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy
 *
 * @package four-ten-gone
 */
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>404 Not Found</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" href="../../../../wp-content/themes/four-ten-gone/layouts/style-index.css">

</head>

<body>

  <div id="core410">
    <!-- This code is for pages that have been removed -->
    <!-- copryright 2018 Dan McKeown Licensed under MIT license -->
    <section id="fourTenGone">
      <span id="fourTen">404</span>
  
      <span id="spacer"> </span>
      <span id="Gone">Not Found</span>
     
      <img id="parrot" src="../../../../../../../wp-content/themes/four-ten-gone/pacificpelican_as_a_modern_logo_isometric_3c81214f-c3ba-4eda-80c5-60c656253560.webp" alt="parrot" />
  
    </section>
    
    <aside id="siteLink">
      <a href="../../../../../../../..">
        <svg width="16px" height="16px" viewBox="0 0 16 16" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
          <!-- Generator: Sketch 40.3 (33839) - http://www.bohemiancoding.com/sketch -->
          <title>home</title>
          <desc>Created with Sketch.</desc>
          <defs></defs>
          <g id="Octicons" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
            <g id="home" fill="#000000">
              <path d="M16,9 L13,6 L13,2 L11,2 L11,4 L8,1 L0,9 L2,9 L3,14 C3,14.55 3.45,15 4,15 L12,15 C12.55,15 13,14.55 13,14 L14,9 L16,9 L16,9 Z M12,14 L9,14 L9,10 L7,10 L7,14 L4,14 L2.81,7.69 L8,2.5 L13.19,7.69 L12,14 L12,14 Z"
                id="Shape"></path>
            </g>
          </g>
        </svg>
      </a>
    </aside>
  </div>
  <script src='../../../../../../../wp-content/themes/four-ten-gone/js/mo.min.js'></script>

  <script src="../../../../../../../wp-content/themes/four-ten-gone/js/index-index.js"></script>
  <style>
    body {
      background-color: black;
    }
    img#parrot {
      width: 22vw;
      float: right;
      border-radius: 50%;
    }
    </style> 
</body>

</html>
