<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "drupal7_mdta";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT src FROM test_html WHERE page_name = 'home'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        //echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
		$str_html = $row["src"];
    }
} else {
    echo "0 results";
}
$conn->close();

$str = '
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML+RDFa 1.0//EN"
  "http://www.w3.org/MarkUp/DTD/xhtml-rdfa-1.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" version="XHTML+RDFa 1.0" dir="ltr"
  xmlns:content="http://purl.org/rss/1.0/modules/content/"
  xmlns:dc="http://purl.org/dc/terms/"
  xmlns:foaf="http://xmlns.com/foaf/0.1/"
  xmlns:og="http://ogp.me/ns#"
  xmlns:rdfs="http://www.w3.org/2000/01/rdf-schema#"
  xmlns:sioc="http://rdfs.org/sioc/ns#"
  xmlns:sioct="http://rdfs.org/sioc/types#"
  xmlns:skos="http://www.w3.org/2004/02/skos/core#"
  xmlns:xsd="http://www.w3.org/2001/XMLSchema#">

<head profile="http://www.w3.org/1999/xhtml/vocab">
  <meta http-equiv="x-ua-compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!--[if IE]><![endif]-->
<!--[if IE]><meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
<![endif]--><meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="Generator" content="Drupal 7 (http://drupal.org)" />
<link rel="canonical" href="/mdta7/content/home" />
<link rel="shortlink" href="/mdta7/node/2" />
<link rel="shortcut icon" href="http://10.93.122.48:81/mdta7/misc/favicon.ico" type="image/vnd.microsoft.icon" />
  <title>Home | 10.93.122.48</title>
  <link type="text/css" rel="stylesheet" href="//10.93.122.48:81/mdta7/sites/default/files/advagg_css/css__K3RKCcVHtcnI3HRDCgkmtLwPuwUXazCMlS1oQt0vd28__6pv89-BVE2ru_ncvobh7RqVzijQfgxQ4fpQzT2m2i4o__p8tBpQHll9FlfC5HUM_9u3T_qdt-hi9F_3IF0ubARI8.css" media="all" />
  <script type="text/javascript" src="//10.93.122.48:81/mdta7/sites/default/files/advagg_js/js__6uFxPx-cGc0MRk1qapY_MSw8TKrQyQS4DVHOFTsEUEQ__jpt1sA9gklEtP7H4nj6U4yD4jvUCabjC-XwEc7ceklo__p8tBpQHll9FlfC5HUM_9u3T_qdt-hi9F_3IF0ubARI8.js"></script>
<script type="text/javascript">
<!--//--><![CDATA[//><!--
jQuery.extend(Drupal.settings, {"basePath":"\/mdta7\/","pathPrefix":"","ajaxPageState":{"theme":"mdta","theme_token":"s8eZwdnGroi8CR1dLHk08Wh1FzKSpGdh8TVXNn8pc5s","css":{"modules\/system\/system.base.css":1,"modules\/system\/system.menus.css":1,"modules\/system\/system.messages.css":1,"modules\/system\/system.theme.css":1,"sites\/all\/modules\/calendar\/css\/calendar_multiday.css":1,"modules\/comment\/comment.css":1,"sites\/all\/modules\/date\/date_api\/date.css":1,"modules\/field\/theme\/field.css":1,"modules\/node\/node.css":1,"modules\/search\/search.css":1,"modules\/user\/user.css":1,"sites\/all\/modules\/views\/css\/views.css":1,"sites\/all\/modules\/ckeditor\/css\/ckeditor.css":1,"sites\/all\/modules\/ctools\/css\/ctools.css":1,"sites\/all\/modules\/flexslider\/assets\/css\/flexslider_img.css":1,"sites\/all\/libraries\/flexslider\/flexslider.css":1,"themes\/mdta\/css\/agencyStyles.css":1,"themes\/mdta\/css\/style.css":1},"js":{"sites\/all\/modules\/flexslider\/assets\/js\/flexslider.load.js":1,"misc\/jquery.js":1,"misc\/jquery.once.js":1,"misc\/drupal.js":1,"sites\/all\/libraries\/flexslider\/jquery.flexslider-min.js":1,"themes\/mdta\/js\/base.js":1,"themes\/mdta\/js\/mdgov_mobileMenu.js":1}},"flexslider":{"optionsets":{"default":{"namespace":"flex-","selector":".slides \u003E li","easing":"swing","direction":"horizontal","reverse":false,"smoothHeight":false,"startAt":0,"animationSpeed":600,"initDelay":0,"useCSS":true,"touch":true,"video":false,"keyboard":true,"multipleKeyboard":false,"mousewheel":0,"controlsContainer":".flex-control-nav-container","sync":"","asNavFor":"","itemWidth":0,"itemMargin":0,"minItems":0,"maxItems":0,"move":0,"animation":"fade","slideshow":true,"slideshowSpeed":"7000","directionNav":false,"controlNav":false,"prevText":"Previous","nextText":"Next","pausePlay":false,"pauseText":"Pause","playText":"Play","randomize":false,"thumbCaptions":false,"thumbCaptionsBoth":false,"animationLoop":true,"pauseOnAction":true,"pauseOnHover":false,"manualControls":""}},"instances":{"flexslider-1":"default"}},"urlIsAjaxTrusted":{"\/mdta7\/":true}});
//--><!]]>
</script>
</head>
<body class="html front not-logged-in no-sidebars page-node page-node- page-node-2 node-type-page" >
  <div id="skip-link">
    <a href="#main-content" class="element-invisible element-focusable">Skip to main content</a>
  </div>
    <div class="container" id="MobileNav"><div id="mdgov_globalSiteWrapper">
	<div class="row-fluid">
		    <div id="block-block-1" class="block block-block">

    
  <div class="clearfix" id="mdgov_TopSliverBar">
<div class="hidden-desktop" id="mdgov_mobileNavButton"><a class="show" href="#"><em class="icon-white icon-align-justify"> </em> Menu </a> <a class="hide" href="#"><em class="icon-white icon-align-justify"> </em> Menu </a></div>
<div id="mdgov_sliverRight" style="font-size: xx-small;"><a class="hidden-phone" href="http://www.maryland.gov" style="padding: 0px 5px 0px 0px;" target="_blank">Maryland.gov</a> <a href="http://www.doit.state.md.us/phonebook/" style="padding: 0px 5px 0px 5px;" target="_blank">Phone Directory</a> <a href="http://www.maryland.gov/pages/agency_directory.aspx" style="padding: 0px 5px 0px 5px;" target="_blank">State Agencies</a> <a class="hidden-phone" href="http://www.maryland.gov/pages/online_services.aspx" style="padding: 0px 0px 0px 5px;" target="_blank">Online Services</a> <a href="#" onclick="showDisclaimer();" style="padding: 0px 0px 0px 10px;"><img alt="En Español" src="/mdta7/sites/default/files/images/en_espanol_button.png" style="width: 70px; height: 25px;" /></a></div>
</div>
</div>
	</div>
	<header id="headerBlock" class="headerBgImg clearfix">
		<div id="agency_branding" class="clearfix">
			<div id="mdgov_homeLink" class="span2 clearfix">
				<a href="http://www.maryland.gov/">
					<span class="hidden-accessible">Maryland.gov Home</span>
				</a>
			</div>
			<a href="/mdta7/" title="Home" rel="home" id="mdgov_agencyName">
				<img src="/mdta7/themes/mdta/images/agency-title-w-maryland-transportation-authority.png" alt="Home" />
			</a>		
			<div id="mdgov_enterpriseSearch">
				    <div id="block-block-2" class="block block-block">

    
  <div id="mdgov_agencyLogo"><a href="#"><img alt="Maryland Transportation Authority" src="/mdta7/sites/default/files/images/mdta-logo-41.png" /></a></div>
</div>
<div id="block-block-3" class="block block-block">

    
  <!-- Step 6: Configure Agency social media icons and links --><ul class="cl_base_hNav cl_socialNav"><li><a class="sm-twitter" href="http://twitter.com/TheMDTA" title="Twitter">Twitter</a></li>
<li><a class="sm-facebook" href="https://www.facebook.com/TheMDTA" title="Facebook">Facebook</a></li>
<li><a class="sm-flickr" href="https://www.flickr.com/photos/themdta/" title="Flickr">Flickr</a></li>
<li><a class="sm-all" href="http://www.maryland.gov/pages/social_media.aspx" title="MD Social Media Directory">Social Media Directory</a></li>
</ul></div>
			</div>			
		</div>
					<div id="mdgov_enterpriseSearch_home">
				    <div id="block-multiblock-1" class="block block-multiblock">

    
  <form onsubmit="if(this.search_block_form.value==&#039;Search&#039;){ alert(&#039;Please enter a search&#039;); return false; }" action="/mdta7/" method="post" id="search-block-form" accept-charset="UTF-8"><div><div class="container-inline">
      <h2 class="element-invisible">Search form</h2>
    <div class="form-item form-type-textfield form-item-search-block-form">
  <label class="element-invisible" for="edit-search-block-form--2">Search </label>
 <input title="Enter the terms you wish to search for." onblur="if (this.value == &#039;&#039;) {this.value = &#039;Search&#039;;}" onfocus="if (this.value == &#039;Search&#039;) {this.value = &#039;&#039;;}" placeholder="Search" type="text" id="edit-search-block-form--2" name="search_block_form" value="Search" size="15" maxlength="128" class="form-text" />
</div>
<div class="form-actions form-wrapper" id="edit-actions"><input type="submit" id="edit-submit" name="op" value="Search" class="form-submit" /></div><input type="hidden" name="form_build_id" value="form-EYqxjnmt6Q4vbGxBR18kBRdq8KpTX7pix8rAa2VBNwk" />
<input type="hidden" name="form_id" value="search_block_form" />
</div>
</div></form></div>
			</div>
			</header>
	<div id="mdgov_enterpriseNavigation" class="section layout-container clearfix">
		    <div id="block-menu-block-1" class="block block-menu-block">

    
  
<ul class="menu"><li class="first leaf menu-mlid-355"><a href="https://www.ezpassmd.com/en/home/index.shtml" title="">E-ZPASS®</a></li>
<li class="leaf has-children menu-mlid-350"><a href="/mdta7/content/toll-rates">Toll Rates</a></li>
<li class="leaf has-children menu-mlid-356"><a href="/mdta7/content/mdta-police" title="">MDTA Police</a></li>
<li class="leaf has-children menu-mlid-459"><a href="/mdta7/content/news-room">News Room</a></li>
<li class="leaf menu-mlid-494"><a href="/mdta7/content/traffic-cameras" title="">Traffic Cams</a></li>
<li class="last leaf has-children menu-mlid-461"><a href="/mdta7/content/toll-dollars-work" title="">Toll Dollars @ Work</a></li>
</ul></div>
	</div>
	<div id="mdgov_secondaryNav" class="section layout-container clearfix">
		    <div id="block-menu-block-2" class="block block-menu-block">

    
  
<ul class="menu"><li class="first expanded menu-mlid-357"><span title="" class="nolink">MDTA</span><ul class="menu"><li class="first leaf has-children menu-mlid-361"><a href="http://10.93.122.48:81/mdta7/content/about-mdta#overlay-context=content/about-mdta" title="">About the MDTA</a></li>
<li class="leaf menu-mlid-482"><a href="http://www.mdta.maryland.gov/Meeting_Schedules/Meetings_and_Minutes.html" title="">MDTA Meetings and Minutes</a></li>
<li class="leaf menu-mlid-483"><a href="/mdta7/content/mdta-police" title="">MDTA Police</a></li>
<li class="leaf menu-mlid-484"><a href="http://www.mdta.maryland.gov/Emergency/Emergency_Info.html" title="">Emergency Information</a></li>
<li class="leaf menu-mlid-485"><a href="/mdta7/content/news-room" title="">News Room</a></li>
<li class="leaf menu-mlid-486"><a href="http://www.mdta.maryland.gov/Capital_Projects/projects_and_studies.cfm" title="">Toll Dollars @ Work</a></li>
<li class="leaf menu-mlid-488"><a href="http://www.mdta.maryland.gov/Business/Business_Main.html" title="">Business with MDTA</a></li>
<li class="leaf menu-mlid-489"><a href="http://www.mdta.maryland.gov/Partnerships/tp3Overview.html" title="">Public-Private Partnerships</a></li>
<li class="leaf menu-mlid-490"><a href="https://www.governmentjobs.com/careers/mdotmd" title="">Employment Opportunities</a></li>
<li class="leaf menu-mlid-491"><a href="http://www.mdta.maryland.gov/Environment/Home.html" title="">Environment</a></li>
<li class="last leaf menu-mlid-492"><a href="http://www.mdot.maryland.gov/newMDOT/Policy_Affairs/pia.html" title="">Public Information Act (PIA)</a></li>
</ul></li>
<li class="last expanded menu-mlid-358"><span title="" class="nolink">Facilities</span><ul class="menu"><li class="first leaf menu-mlid-493"><a href="http://www.mdta.maryland.gov/Toll_Facilities/facilities.html" title="">Toll Facilities</a></li>
<li class="leaf menu-mlid-366"><a href="/mdta7/content/toll-rates-redirect" title="">Toll Rates</a></li>
<li class="leaf menu-mlid-460"><a href="/mdta7/content/traffic-cameras">Traffic Cameras</a></li>
<li class="leaf menu-mlid-495"><a href="http://www.mdta.maryland.gov/News/Traffic_Advisories_and_Emergency_Alerts_Index.html" title="">Traffic Advisories</a></li>
<li class="last leaf menu-mlid-496"><a href="http://www.mdta.maryland.gov/MD_I-95_Travel_Plazas/Home.html" title="">I-95 Travel Plazas</a></li>
</ul></li>
</ul></div>
	</div>
	<main>
		<a id="main-content"></a>
							<div class="tabs">
			  			</div>
												    <div id="block-views-home-rotator-block" class="block block-views">

    
  <div class="view view-home-rotator view-id-home_rotator view-display-id-block home-rotator view-dom-id-6123579a6158db3f8b519186273f789c">
        
  
  
      <div class="view-content">
      <div  id="flexslider-1" class="flexslider">
  <ul class="slides"><li>  
  <div class="views-field views-field-field-images">        <div class="field-content"><a href="http://www.mdta.maryland.gov/News/Documents/jfk%20barrack%20safety%20fair%202016.pdf" title="" target="_blank" rel="" class=""><img typeof="foaf:Image" src="http://10.93.122.48:81/mdta7/sites/default/files/images/rotator_images/Safety_Fair_Banner_2016_v2.jpg" width="320" height="280" alt="I-95 Safety Fair Saturday 09-10-2016 10 a.m. - 2 p.m." /></a></div>  </div></li>
<li>  
  <div class="views-field views-field-field-images">        <div class="field-content"><a href="http://www.kintera.org/faf/home/default.asp?ievent=1160755" title="" target="_blank" rel="" class=""><img typeof="foaf:Image" src="http://10.93.122.48:81/mdta7/sites/default/files/images/rotator_images/SOMD_FMT_Tunnel_Run_2016_v3a.jpg" width="320" height="280" alt="Fort McHenry Tunnel Run Sept. 18, 2016 for Special Olympics" /></a></div>  </div></li>
<li>  
  <div class="views-field views-field-field-images">        <div class="field-content"><a href="http://www.mdta.maryland.gov/Capital_Projects/I-895_Patapsco_Flats.html" title="" target="_self" rel="" class=""><img typeof="foaf:Image" src="http://10.93.122.48:81/mdta7/sites/default/files/images/rotator_images/PatapscoBanner_320x280-01.jpg" width="320" height="280" alt="I-895 Northbound Roadwork Expect Delays in Peak Times" /></a></div>  </div></li>
<li>  
  <div class="views-field views-field-field-images">        <div class="field-content"><a href="http://www.baybridge.maryland.gov/traffic-cameras#camera-999" title="" target="_self" rel="" class=""><img typeof="foaf:Image" src="http://10.93.122.48:81/mdta7/sites/default/files/images/rotator_images/Birds_Eye_View.jpg" width="320" height="280" alt="A birds eye view of Bay Bridge traffic" /></a></div>  </div></li>
<li>  
  <div class="views-field views-field-field-images">        <div class="field-content"><a href="https://www.ezpassmd.com/en/home/index.shtml" title="" target="_blank" rel="" class=""><img typeof="foaf:Image" src="http://10.93.122.48:81/mdta7/sites/default/files/images/rotator_images/Transponder_Drop.jpg" width="320" height="280" alt="E-ZPass Thingamabob Price Drop" /></a></div>  </div></li>
</ul></div>
    </div>
  
  
  
  
  
  
</div></div>
<div id="block-views-traffic-advisories-block" class="block block-views">

    <h2>Traffic Advisories</h2>
  
  <div class="view view-traffic-advisories view-id-traffic_advisories view-display-id-block blog-items-block view-dom-id-fae663dfe4b5532553046969e0831b0e">
        
  
  
      <div class="view-content">
        <div class="views-row views-row-1 views-row-odd views-row-first">
      
  <div class="views-field views-field-title">        <span class="field-content"><a href="/mdta7/blog-category/traffic-advisories-blog/i-895-baltimore-harbor-tunnel-lane-closures-week-june-20-2016">(I-895) Baltimore Harbor Tunnel Lane Closures for the Week of June 20, 2016</a></span>  </div>  
  <div class="views-field views-field-created">        <span class="field-content">Thu, 06/30/2016 - 14:02</span>  </div>  </div>
  <div class="views-row views-row-2 views-row-even">
      
  <div class="views-field views-field-title">        <span class="field-content"><a href="/mdta7/blog-category/traffic-advisories-blog/bay-bridge-us-50301-lane-closures-and-traffic-patterns-scheduled-week-june-19-25-2016">Bay Bridge (US 50/301) Lane Closures and Traffic Patterns Scheduled for the Week of June 19 - 25, 2016</a></span>  </div>  
  <div class="views-field views-field-created">        <span class="field-content">Thu, 06/30/2016 - 13:12</span>  </div>  </div>
  <div class="views-row views-row-3 views-row-odd views-row-last">
      
  <div class="views-field views-field-title">        <span class="field-content"><a href="/mdta7/blog-category/traffic-advisories-blog/i-895-baltimore-harbor-tunnel-lane-closures-week-june-27-2016">(I-895) Baltimore Harbor Tunnel Lane Closures for the Week of June 27, 2016</a></span>  </div>  
  <div class="views-field views-field-created">        <span class="field-content">Thu, 06/30/2016 - 13:11</span>  </div>  </div>
    </div>
  
  
  
      
<div class="more-link">
  <a href="/mdta7/traffic-advisories">
    More Traffic Advisories &gt;&gt;  </a>
</div>
  
  
  
</div></div>
<div id="block-block-6" class="block block-block">

    
  <div class="span6" id="tweets"><a class="twitter-timeline" data-widget-id="296655512076947456" href="https://twitter.com/TheMDTA">Tweets by @TheMDTA</a> 
<script>
<!--//--><![CDATA[// ><!--
!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?\'http\':\'https\';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.async=true;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");
//--><!]]>
</script></div>
</div>
<div id="block-views-news-items-block" class="block block-views">

    <h2>News Items</h2>
  
  <div class="view view-news-items view-id-news_items view-display-id-block blog-items-block view-dom-id-2990819fce8324336e4a46f16a81d449">
        
  
  
      <div class="view-content">
        <div class="views-row views-row-1 views-row-odd views-row-first">
      
  <div class="views-field views-field-title">        <span class="field-content"><a href="/mdta7/blog-category/news-items-blog/mdta-crews-ready-winter-storm-feb-8-9-2016">MDTA CREWS READY FOR WINTER STORM: FEB. 8-9, 2016</a></span>  </div>  
  <div class="views-field views-field-created">        <span class="field-content">Thu, 06/30/2016 - 14:00</span>  </div>  </div>
  <div class="views-row views-row-2 views-row-even">
      
  <div class="views-field views-field-title">        <span class="field-content"><a href="/mdta7/blog-category/news-items-blog/message-baltimore-harbor-tunnel">A Message from the Baltimore Harbor Tunnel</a></span>  </div>  
  <div class="views-field views-field-created">        <span class="field-content">Thu, 06/30/2016 - 13:08</span>  </div>  </div>
  <div class="views-row views-row-3 views-row-odd views-row-last">
      
  <div class="views-field views-field-title">        <span class="field-content"><a href="/mdta7/blog-category/news-items-blog/spring-2016-travel-tips">Spring of 2016 Travel Tips</a></span>  </div>  
  <div class="views-field views-field-created">        <span class="field-content">Thu, 06/30/2016 - 13:07</span>  </div>  </div>
    </div>
  
  
  
      
<div class="more-link">
  <a href="/mdta7/news-items">
    More News Items &gt;&gt;  </a>
</div>
  
  
  
</div></div>
<div id="block-system-main" class="block block-system">

    
  <div id="node-2" class="node node-page clearfix" about="/mdta7/content/home" typeof="foaf:Document">

  
      <span property="dc:title" content="Home" class="rdf-meta element-hidden"></span><span property="sioc:num_replies" content="0" datatype="xsd:integer" class="rdf-meta element-hidden"></span>
  
  <div class="content">
    <div class="field field-name-body field-type-text-with-summary field-label-hidden"><div class="field-items"><div class="field-item even" property="content:encoded"><div class="clear">
<h3>Customer Service Promise</h3>
<p><a href="http://governor.maryland.gov/2016/06/09/governor-larry-hogan-launches-customer-service-initiative/" target="_blank"><img alt=" Customer Service Promise Link" src="/mdta7/sites/default/files/images/customer_promise500.jpg" style="width: 175px; height: 271px;" /></a> <br /><a href="http://governor.maryland.gov/2016/06/09/governor-larry-hogan-launches-customer-service-initiative/" target="_blank"><span style="color: rgb(0, 0, 238); text-decoration: underline;">Follow link to view</span></a></p>
</div>
</div></div></div>  </div>

  
  
</div>
</div>
	</main>
			<div id="secondary_content_Block" class="clearfix row-fluid">
			    <div id="block-block-4" class="block block-block">

    
  <div class="span4 clearfix" id="governorBlock"><a href="http://governor.maryland.gov/announcement.html"><img alt="Governor\'s Office" src="/mdta7/sites/default/files/images/governor_agy.jpg" /></a></div>
<div class="span4" id="secondary_middle_col_lt"><img alt="E-ZPass logo" class="sec_item_img" src="/mdta7/sites/default/files/images/E-ZPass_Logo_With_Transponder.jpg" /><h3><a href="http://www.ezpassmd.com/" target="_blank"><em>E‑ZPASS<sup>®</sup></em></a></h3>
<p>Save time with an <em>E‑ZPass</em>.</p>
</div>
<div class="span4" id="secondary_right_col"><img alt="Toll Rate Calculator" class="sec_item_img" src="/mdta7/sites/default/files/images/toll-rate-calculator-110.png" /><h3><a href="http://www.mdta.maryland.gov/toll-rate-calculator">Toll Rate Calculator</a></h3>
<p>Toll rates by vehicles, times, and facilities.</p>
</div>
</div>
		</div>
		<footer id="footer_block">
		    <div id="block-multiblock-2" class="block block-multiblock">

    
  <!-- Step 6: Configure Agency social media icons and links --><ul class="cl_base_hNav cl_socialNav"><li><a class="sm-twitter" href="http://twitter.com/TheMDTA" title="Twitter">Twitter</a></li>
<li><a class="sm-facebook" href="https://www.facebook.com/TheMDTA" title="Facebook">Facebook</a></li>
<li><a class="sm-flickr" href="https://www.flickr.com/photos/themdta/" title="Flickr">Flickr</a></li>
<li><a class="sm-all" href="http://www.maryland.gov/pages/social_media.aspx" title="MD Social Media Directory">Social Media Directory</a></li>
</ul></div>
<div id="block-menu-menu-footer" class="block block-menu">

    
  <ul class="menu"><li class="first leaf"><a href="mailto:mdta@mdta.maryland.gov" title="">Contact Us</a></li>
<li class="leaf"><a href="http://www.mdta.maryland.gov/privacy-information" title="">Privacy</a></li>
<li class="last leaf"><a href="http://www.mdta.maryland.gov/privacy-information#accessibility" title="">Accessibility</a></li>
</ul></div>
<div id="block-block-5" class="block block-block">

    
  <div id="footer_left">
<h3><em>E-ZPass</em> and Video Tolling Customer Service - Toll Free: 1 (888) 321-6824</h3>
<p>Management Offices:<br />
2310 Broening Highway, Baltimore, MD 21224<br />
Local: (410) 537-1000 - Out of Area: 1 (866) 713-1596</p>
</div>
</div>
	</footer>
</div>  <script type="text/javascript" src="//10.93.122.48:81/mdta7/sites/default/files/advagg_js/js__9VOFA0ojDRe-jzLYqMfhS65SJRxkYxfImCkNhDzFTGY__303WIuiWT3VWvFC6uhfqIZq0KlK2nYVnjfIOpqHEtUU__p8tBpQHll9FlfC5HUM_9u3T_qdt-hi9F_3IF0ubARI8.js"></script>
</body>
</html>
';

echo $str_html;

echo $str;

phpinfo();