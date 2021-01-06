<html>

  <head>

  </head>

  <body>

<!--Main Script-->

<?php

$url_base = "http" . (($_SERVER['SERVER_PORT'] == 443) ? "s" : "") . "://" . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];

$url_components = parse_url($url_base); 

parse_str($url_components['query'], $params); 

//header

echo '<div style="background-color:black;">

	<center><img src="https://whos.amung.us/swidget/291wmll3t1.png" /></center><h1 style="color:red;text-align:center;margin:4px;font-family:monospace;">Proxy Server</h1>

<center>

  <form action="" method="get" accept-charset="utf-8" target="_self">

    <input value="https://" style="background:black url(none) repeat scroll 0%;border:2px solid red;font-size:0.9em;padding:5px;width:320px;color:red;" name="url" type="text" class="txt" id="input" />

    <input style="font-size:0.9em;font-family:Arial,sans-serif;width:80px;margin:2px; padding:5px;color:red;border:2px solid red;background:black;" type="submit" class="btn" value="Go" />

  </form>';

  echo '<p style="font-family:monospace;color:red;font-size:24px;">'.$params['url'].'</p></center></div>';

//end-header

$url = $params['url'];

$opts = array('http' =>

    array(

        'method' => 'GET',

        'max_redirects' => '5',

        'ignore_errors' => '1'

    )

);

$context = stream_context_create($opts); //parse options

$stream = fopen($url, 'r', false, $context); //make the request

$string = stream_get_contents($stream); //stringify response

$page = $string; //parse response for relative urls, and converts to absolute urls

$_POST['fileName'] = $url;

$_SERVER['baseURL'] = $url;

$_POST['baseURL'] = $url;

      preg_match_all('!src=[\'"]?([^\'"\s]*)!si',$page,$src);

      foreach( $src[1] as $item )

      {

         if( preg_match('!^[a-zA-Z]+\:!',$item) ) { continue; }

         if( preg_match('!^\#\?!',$item) ) { continue; }

         extract(parse_url($_POST['baseURL']));

         if( strpos($item,'/')===0 ) { $path = ''; }

         if( $path ) { $path = preg_replace('!/[^/]*$!','',$path); }

         $abs = "$host$path/$item";

         while( preg_match('!/\w+/\.\./!',$abs) ) { $abs = preg_replace('!/\w+/\.\./!','/',$abs,1); }

         $abs = preg_replace('!/\.{0,2}/!','/',$abs);

         $item = preg_quote($item,'/');

         $page = preg_replace("!src=(['\"])?$item!i","src=\$1$scheme://$abs",$page);

      }

      preg_match_all('!href=[\'"]?([^\'"\s]*)!si',$page,$href);

      foreach( $href[1] as $item )

      {

         if( preg_match('!^[a-zA-Z]+\:!',$item) ) { continue; }

         if( preg_match('!^\#\?!',$item) ) { continue; }

         extract(parse_url($_POST['baseURL']));

         if( strpos($item,'/')===0 ) { $path = ''; }

         if( $path ) { $path = preg_replace('!/[^/]*$!','',$path); }

         $abs = "$host$path/$item";

         while( preg_match('!/\w+/\.\./!',$abs) ) { $abs = preg_replace('!/\w+/\.\./!','/',$abs,1); }

         $abs = preg_replace('!/\.{0,2}/!','/',$abs);

         $item = preg_quote($item,'/');

         $page = preg_replace("!href=(['\"])?$item!i","href=\$1$scheme://$abs",$page);

      } //end url parser

$dom = new DOMDocument();  //load document

$dom->loadHTML($page);    //assign response as document

$xpath = new DOMXPath($dom);   //eval doc for link tags href attribute

$hrefs = $xpath->evaluate("/html/head//link");

for ($i = 0; $i < $hrefs->length; $i++) {

        $href = $hrefs->item($i);

        $url = $href->getAttribute('href');

        //remove and set href attribute       

        $href->removeAttribute('href');

        $cur_v_comp = fopen($url, 'r', false, $context);

        $cur_v_comp = stream_get_contents($cur_v_comp);

        echo '<style>'.$cur_v_comp."</style>";

        $href->setAttribute("href", 'null');

}  //end link eval

$hrefs_a = $xpath->evaluate("/html/body//a");  //eval doc for a tags href attribute

for ($c = 0; $c < $hrefs_a->length; $c++) {

        $href2 = $hrefs_a->item($c);

        $url = $href2->getAttribute('href');

        //remove and set href attribute       

        $href2->removeAttribute('href');

        $newhref = 'https://prxysrvr.i10.repl.co/?url='.$url;

        $href2->setAttribute("href", $newhref);

} //end a eval

/*

$hrefs_s = $xpath->evaluate("/html/body//script");

echo $hrefs_s->length;

for ($u = 0; $u < $hrefs_s->length; $u++) {

        $href3 = $hrefs_s->item($u);

        $url = $href3->getAttribute('src');

        $response = fopen($url, 'r', false, $context);

        $response = stream_get_contents($response);

        echo '<script>'.$response."</script>";  //init check

        //remove and set href attribute       

        $href3->removeAttribute('src');

        $newhref = 'http://vclxx.ml/123.php/?url='.$url;

        $href3->setAttribute("src", $newhref);

} //end script eval

*/

$html_final=$dom->saveHTML();  // save html

//check if response is not empty, and display if not

if ($stream == false) {

  echo '<p style="font-size:34px;text-align:center;color:black;font-family:monospace;">Welcome&nbsp;<span style="font-family:arial;color:red;">to</span></p>';

  echo '<h1 style="text-align:center;font-family:monospace;font-size:48px;">';

  echo '<a href="/">VCLXX.ML</a>';

  echo '</h1>';

} else {

  echo($html_final);

}

fclose($stream); //close stream

?>

  </body>

</html>
