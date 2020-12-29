<p>The diversity-coded synecdochic visual click-through that USC uses is of course just one example of how new forms of visual literacy are emerging through resourceful uses of the Web's intricate architecture.  As new hypermedia technologies are put to use, new hypermedia-specific ways of making meaning develop.  Thanks to certain <a href="http://www.zdnet.com/anchordesk/story/story_4612.html">Web development rivalries</a> and the desire of many in the industry to create the <a href="http://www.salon.com/tech/feature/1999/09/28/mac_linux/index.html">next insanely great thing</a>, hypermedia's design "vocabulary" continuously changes and expands--often on a month-to-month (or even more frequent) basis.  While some <a href="http://www.help.com/cat/4/384/tip/3697.html?tag=st.cn.sr.hp.2">attempted additions</a> to this rapidly-growing vocabulary have understandably failed to stick, others have become well-established and, in some cases, so widely employed that they now seem like natural characteristics of the Web--components, in other words, of the Web's emerging meaning-making conventions.  <!-- As in all languages, the naturalization of successful new technologies enables the emergence of meaning-making conventions. --></p>

<p>The ability to script images to change visually when a user's mouse passes over them, for example, lacked widespread and consistent support in Web browser applications when it was first introduced.  But even though, as a result, developers were forced to devise intricate ways of making these "mouseovers" or "rollovers" work in the browsers that implemented them and harmless to the browsers that didn't, they used them anyway and the practice caught on.  Today, in fact, encountering a professionally designed site that does not use some version of this device is increasingly rare.  Mouseovers now perform a variety of semantic roles.  Granted, in the way they are most commonly used--to highlight the menu buttons that a user's mouse passes over--their addition to or enrichment of an image's meaning is small: the mouseover functions only as what <a href="http://hotwired.lycos.com/webmonkey/98/23/index3a.html?tw=design">some developers</a> call a "soft click", informing the user that a button is indeed "on".  In some cases, though, the mouseover device functions in a very nuanced and meaningful way, collaborating with an image's visual grammar, context, and click-through meanings in complex processes of signification.  The results can range from summary-like previews of a visual link's destination to intricate constructions that both change the meaning of the link/destination pages and produce indepentent meanings.</p>

<p>The entry page of the Website for Edmonton-based industrial design firm Pure Design serves as a particularly revealing example of this more "advanced" meaningful use of the mouseover device.  [<a href="puredesign.html" target="_blank">See the example.</a>]  The page, consisting of two linked images above a line of text, introduces the site's essentially two-part organization: a mapped region of the left hand image bearing the text "PURE FORM" links to the area of the site that describes the firm's industrial design philosophies and introduces its featured designers, while the right hand image (bearing the text "SHOP PURE") links to the site's ecommerce area, where users can browse and purchase the various chairs, tables and accessories that the firm designs and manufactures.  The relationship between the representational content of the two images points to the nuanced statement that the page makes: each image is a waist-down shot of a person sitting in a chair, and the two chairs face in opposite directions, suggesting a kind of opposition between the two "pure" notions of "form" and "shop[ping]".  The page's use of mouseovers transforms this suggestion of opposition into something more like a logical either/or disjunction.  When a user's mouse passes over the "PURE FORM" region of the left hand image, the moused-over image changes color and comes into sharper focus as the right hand image simultaneously disappears.  The same thing happens the other way around: when the user's mouse passes over "SHOP PURE", the right-facing SHOP PURE image changes color and comes into sharper focus as the left-facing PURE FORM image disappears.</p>

<p>Perhaps the site's designers did not <i>intend</i> such a stark distinction, but this use of images, text, links, and mouseovers does nevertheless suggest a disjunction between, broadly speaking, art and commerce--an either/or that conceptualizes "cultural" production and the exchange of ideas in opposition to the business of commodity exchange.  The suggestion is that choosing one precludes choosing the other: the vanishing of either linked image underscores the reality that the user can click-through only one of the links.  The images' click-through meanings help support this message.  After clicking through the PURE FORM image, the user will arrive at a page whose dominant and initially eye-catching elements include a line of text that reads "INDIVIDUALS AND IDEAS", heading a list of the firm's designers.  After clicking through the entry page's SHOP PURE image, by contrast, the user will arrive at a page whose grayscale lack of color draws attention to the text that is the largest and most independent: "PRODUCT INDEX."  My point here is not necessarily to critique the assumptions that some might say underlie this message--a humanist conception of designer-centric creative individuality and a corresponding Romantic notion of art unconstrained by petty economic concerns. (One could, after all, point out that the line of text beneath the entry page's two linked images does offer some explanatory instructions that at least suggest a connection between the two halves of the disjunction: "PURE FORM FOR INSPIRATION ... SHOP PURE IF YOU'VE GOT IT.")  My aim is, rather, to explore how it is that such assumptions might be inscribed within hypermedia--in other words, to point to the elements of visual hypermedia vocabulary at work here and how they participate in hypermedia-specific ways of making meaning and thereby contribute to emerging new visual literacies.</p>

<p>I call the kind of mouseover used by Pure Design a <i>hypermedia disjunction</i>.  As the Pure Design site illustrates, the use of the link mechanism and dynamic mouseover image display (and removal) can suggest a logical either/or structure.  Figure 3.9 below absracts this device for a clearer illustration of the processes at work.  The two images, combined with an embedded mouseover script, present an "either A or B" structure that is clarified once dynamically exercised: once either image is moused-over, "A and B" becomes a condition of either "A, not B" or "B, not A".</p>

<script language="Javascript">

<!--- Hide script from old browsers

		function MM_preloadImages() { //v1.2
  		if (document.images) {
    	var imgFiles = MM_preloadImages.arguments;
   	    var preloadArray = new Array();
        for (var i=0; i<imgFiles.length; i++) {
        preloadArray[i] = new Image;
        preloadArray[i].src = imgFiles[i];
    	}
  		}
		}

		
		{
		
		a = new MakeArray(1)
		a[1].src = "images/anorb.gif"
		
		b = new MakeArray(1)
		b[1].src = "images/anorb.gif"
		
     	}
     	
     	
        function MakeArray(n) {
        this.length = n 
        for (var i = 1; i<=n; i++) {
		this[i] = new Image()
		
		}
		
		return this
		
		}
		
        function msovera(num) {
		document.images[27].src = a[num].src
		
		}
		
		function msouta(num) {
		document.images[27].src = "images/b.gif"
		
		}                   

        function msoverb(num) {
		document.images[26].src = b[num].src
		
		}
		
		function msoutb(num) {
		document.images[26].src = "images/a.gif"
		
		}                   

// end hide script from old browsers --->

</SCRIPT>

<table border="0" cellpadding="0" cellspacing="0">
<tr><td width=100>&nbsp;</td><td><a href="#" onmouseover="msovera(1)" onmouseout="msouta(1)"><img src="images/a.gif" width="35" height="35" border="0" alt="A, not B"></a>&nbsp;<a href="#" onmouseover="msoverb(1)" onmouseout="msoutb(1)"><img src="images/b.gif" width="35" height="35" border="0" alt="B, not A"></a></td></tr>
<tr><td width=100>&nbsp;</td><td><img src="images/spacer.gif" width="1" height="3" border="0" alt=""><br><font size="1" face="Verdana,Arial,Helvetica" color="#666666">Figure 3.9<br>Hypermedia Disjunction</font></td></tr>
</table>

<p>The hypermedia disjunction can, moreover, be made even clearer than the already quite unambiguous example of Figure 3.9.  As Pure Design's entry page demonstrates, scripted mouseover image color and focus changes can highlight and emphasize the non-excluded half of a disjunction.  As illustrated in Figure 3.10, this can underscore an either/or premise.  To put it simply, this mouseover device presents an initial condition of "mabye A and maybe B" that once exercised becomes either "definitely A, not B!" or "definitely B, not A!".</p>

<script language="Javascript">

<!--- Hide script from old browsers

		function MM_preloadImages() { //v1.2
  		if (document.images) {
    	var imgFiles = MM_preloadImages.arguments;
   	    var preloadArray = new Array();
        for (var i=0; i<imgFiles.length; i++) {
        preloadArray[i] = new Image;
        preloadArray[i].src = imgFiles[i];
    	}
  		}
		}

		
		{
		
		agray = new MakeArray(1)
		agray[1].src = "images/anorb.gif"
		
		bgray = new MakeArray(1)
		b[1].src = "images/anorb.gif"
		
     	}
     	
     	
        function MakeArray(n) {
        this.length = n 
        for (var i = 1; i<=n; i++) {
		this[i] = new Image()
		
		}
		
		return this
		
		}
		
        function msoveragray(num) {
		document.images[30].src = a[num].src
		document.images[29].src = "images/a.gif"
		
		}
		
		function msoutagray(num) {
		document.images[30].src = "images/bgray.gif"
		document.images[29].src = "images/agray.gif"
		
		}                   

        function msoverbgray(num) {
		document.images[29].src = b[num].src
		document.images[30].src = "images/b.gif"
		
		}
		
		function msoutbgray(num) {
		document.images[29].src = "images/agray.gif"
		document.images[30].src = "images/bgray.gif"

		
		}                   

// end hide script from old browsers --->

</SCRIPT>

<table border="0" cellpadding="0" cellspacing="0">
<tr><td width=100>&nbsp;</td><td><a href="#" onmouseover="msoveragray(1)" onmouseout="msoutagray(1)"><img src="images/agray.gif" width="35" height="35" border="0" alt="A, not B"></a>&nbsp;<a href="#" onmouseover="msoverbgray(1)" onmouseout="msoutbgray(1)"><img src="images/bgray.gif" width="35" height="35" border="0" alt="B, not A"></a></td></tr>
<tr><td width=100>&nbsp;</td><td><img src="images/spacer.gif" width="1" height="3" border="0" alt=""><br><font size="1" face="Verdana,Arial,Helvetica" color="#666666">Figure 3.10<br>Hypermedia Focused Disjunction</font></td></tr>
</table>

<p>Combined with the ways that image elements can work (and work together) rhetorically, this use of the dynamic scripting capacities afforded by the Web's architecture results in a sophisticated component of hypermedia-specific vocabulary.  The practice can of course be used gratuitously, as some say the abundance of mouseover menu buttons on the Web demonstrates.  But it can also produce complex meanings that intersect with assumptions fundamental to the cultures in which it occurs, as examples like Pure Design's entry page begin to demonstrate.</p>
