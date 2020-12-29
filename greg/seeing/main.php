<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">


<?php

if ($sectionID==101) {

$title="Introduction";
$subtitle="The 'New' Visual Literacy";
$nextpagetitle="Nothing New, Always New";
$nextpageID=102;

} else if ($sectionID==102) {

$title="Introduction";
$subtitle="Nothing New, Always New";
$nextpagetitle="The Reception of Digitally Produced Images";
$nextpageID=201;

} else if ($sectionID==201) {

$title="The Reception of Digitally Produced Images";
$subtitle="Graphics Production and Editing";
$nextpagetitle="Pixels, Bits, and Meaning";
$nextpageID=202;

} else if ($sectionID==202) {

$title="The Reception of Digitally Produced Images";
$subtitle="Pixels, Bits, and Meaning";
$nextpagetitle="Image-maps and the Semantic Layers of Digital Images";
$nextpageID=301;

} else if ($sectionID==301) {

$title="Reading Hypermedia";
$subtitle="Image-maps and the Semantic Layers of Digital Images";
$nextpagetitle="Visual Click-Through and the Hypertext Link";
$nextpageID=302;

} else if ($sectionID==302) {

$title="Reading Hypermedia";
$subtitle="Visual Click-Through and the Hypertext Link";
$nextpagetitle="The Rhetoric of the Click-Through";
$nextpageID=303;

} else if ($sectionID==303) {

$title="Reading Hypermedia";
$subtitle="The Rhetoric of the Click-Through: Possible Ways of Reading";
$nextpagetitle="Beyond Metaphor";
$nextpageID=304;

} else if ($sectionID==304) {

$title="Reading Hypermedia";
$subtitle="Beyond Metaphor";
$nextpagetitle="Emerging Technologies, Emerging Conventions";
$nextpageID=305;

} else if ($sectionID==305) {

$title="Reading Hypermedia";
$subtitle="Emerging Technologies, Emerging Conventions";
$nextpagetitle="Why one cannot Conclude";
$nextpageID=401;

} else if ($sectionID==401) {

$title="Conclusion";
$subtitle="Why one cannot Conclude";
$nextpagetitle="";
$nextpageID=500;

} else if ($sectionID==500) {

$title="Works Cited";
$nextpagetitle="";

} else if ($sectionID==600) {

$title="Note";
$nextpagetitle="";

}
?>

<html>
<head>
<title>Seeing the Digital: <?php print("$title"); ?></title>
<link rel="stylesheet" href="style.css" type="text/css">
</head>

<body bgcolor="#FFFFFF" text="#000000" link="#663333" vlink="#9966CC" alink="#FF0000" marginwidth="0" marginheight="0" topmargin="0" leftmargin="0">

<div align=center>

<table width="100%" border="0" cellspacing="0" cellpadding="0" bgcolor="#CC6600">
<tr><td width="50%" align=left valign=middle>
	<table border="0" cellspacing="0" cellpadding="0"><tr><td valign=middle><img src="images/spacer.gif" width="5" height="17" border="0" alt=""></td><td valign=middle><font face="verdana, helvetica, arial, sans-serif" size=1 color="#FFFFFF">Seeing the Digital: Emerging Visual Literacies</font></td></tr></table>
</td><td width="50%" align=right valign=middle>
	<table border="0" cellspacing="0" cellpadding="0"><tr><td width=19 valign=middle><a href="mailto:greg@veen.com"><img src="images/email_orange.gif" width="15" height="15" border="0" alt="Email Gregory Veen"></a></td><td width=19 valign=middle><a href="main.php?sectionID=500&citation=all"><img src="images/workscited.gif" width="14" height="15" border="0" alt="Works Cited"></a></td><td width=19 valign=middle><a href="index.html"><img src="images/home_orange.gif" width="14" height="15" border="0" alt="Home"></td></tr></table>
</td></tr>
</table>

<!-- begin content table -->

<br>
<table border=0 cellpadding=0 cellspacing=0 width=580>	
<tr>
<td width=15>&nbsp;</td>
<td valign=top width=150>

			<!-- begin navigation table -->
			
			<table cellpadding=2 cellspacing=0 border="0" width=150>
				
			<tr>
			<td valign=top colspan=2><font face="verdana, helvetica, arial, sans-serif" size="1">Introduction</font></td></tr>
			<tr><td valign=top><img src="images/spacer.gif" width="1" height="5" border="0" alt=""><br><img src="images/box.gif" width="3" height="3" border="0" alt=""></td><td valign="top"><font face="verdana, helvetica, arial, sans-serif" size="1">
<?php 
if ($sectionID!=101) {
print("<a href=\"main.php?sectionID=101\">");
}
?>
			The 'New' Visual Literacy
<?php 
if ($sectionID!=101) { 
print("</a>");
} 
			?>
			</font></td>
			</tr>
			<tr><td valign=top><img src="images/spacer.gif" width="1" height="5" border="0" alt=""><br><img src="images/box.gif" width="3" height="3" border="0" alt=""></td><td valign="bottom"><font face="verdana, helvetica, arial, sans-serif" size="1">
<?php
if ($sectionID!=102) {
print("<a href=\"main.php?sectionID=102\">");
}
?>
Nothing New, Always New
<?php
if ($sectionID!=102) {
print("</a>");
}
?>
			</font></td>
			</tr>
			
			<tr><td colspan=2>&nbsp;</td></tr>

			<tr>
			<td valign=top colspan=2><font face="verdana, helvetica, arial, sans-serif" size="1">Digital Images</font></td></tr>
			<tr><td valign=top><img src="images/spacer.gif" width="1" height="5" border="0" alt=""><br><img src="images/box.gif" width="3" height="3" border="0" alt=""></td><td valign="top"><font face="verdana, helvetica, arial, sans-serif" size="1">
<?php
if ($sectionID!=201) {
print("<a href=\"main.php?sectionID=201\">");
}
?>
Graphics Production and Editing
<?php
if ($sectionID!=201) {
print("</a>");
}
?>
			</font></td>
			</tr>
			<tr><td valign=top><img src="images/spacer.gif" width="1" height="5" border="0" alt=""><br><img src="images/box.gif" width="3" height="3" border="0" alt=""></td><td valign="top"><font face="verdana, helvetica, arial, sans-serif" size="1">
<?php
if ($sectionID!=202) {
print("<a href=\"main.php?sectionID=202\">");
}
?>
Pixels, Bits, and Meaning
<?php
if ($sectionID!=202) {
print("</a>");
}
?>
			</font></td>
			</tr>
			
			<tr><td colspan=2>&nbsp;</td></tr>
			
			<tr>
			<td valign=top colspan=2><font face="verdana, helvetica, arial, sans-serif" size="1">Hypermedia</font></td></tr>
			<tr><td valign=top><img src="images/spacer.gif" width="5" height="5" border="0" alt=""><br><img src="images/box.gif" width="3" height="3" border="0" alt=""></td><td valign="top"><font face="verdana, helvetica, arial, sans-serif" size="1">
<?php if ($sectionID!=301) {
print("<a href=\"main.php?sectionID=301\">");
}
?>
Image-maps and Semantic Layers
<?php
if ($sectionID!=301) {
print("</a>");
}
?>
			</font></td>
			</tr>
			<tr><td valign=top><img src="images/spacer.gif" width="5" height="5" border="0" alt=""><br><img src="images/box.gif" width="3" height="3" border="0" alt=""></td><td valign="top"><font face="verdana, helvetica, arial, sans-serif" size="1">
<?php
if ($sectionID!=302) {
print("<a href=\"main.php?sectionID=302\">");
}
?>
Visual Click-through and the Hypertext Link
<?php
if ($sectionID!=302) {
print("</a>");
}
?>
			</font></td>
			</tr>
			<tr><td valign=top><img src="images/spacer.gif" width="5" height="5" border="0" alt=""><br><img src="images/box.gif" width="3" height="3" border="0" alt=""></td><td valign="top"><font face="verdana, helvetica, arial, sans-serif" size="1">
<?php
if ($sectionID!=303) {
print("<a href=\"main.php?sectionID=303\">");
}
?>
The Rhetoric of the Click-through: Possible Ways of Reading
<?php
if ($sectionID!=303) {
print("</a>");
}
?>
			</font></td>
			</tr>
			<tr><td valign=top><img src="images/spacer.gif" width="5" height="5" border="0" alt=""><br><img src="images/box.gif" width="3" height="3" border="0" alt=""></td><td valign="top"><font face="verdana, helvetica, arial, sans-serif" size="1">
<?php
if ($sectionID!=304) {
print("<a href=\"main.php?sectionID=304\">");
}
?>
Beyond Metaphor: Other Tropes and their Adaptations
<?php
if ($sectionID!=304) {
print("</a>");
}
?>
			</font></td>
			</tr>
			<tr><td valign=top><img src="images/spacer.gif" width="5" height="5" border="0" alt=""><br><img src="images/box.gif" width="3" height="3" border="0" alt=""></td><td valign="top"><font face="verdana, helvetica, arial, sans-serif" size="1">
<?php
if ($sectionID!=305) {
print("<a href=\"main.php?sectionID=305\">");
}
?>
Emerging Technologies, Emerging Conventions
<?php
if ($sectionID!=305) {
print("</a>");
}
?>
			</font></td>
			</tr>

			<tr><td colspan=2>&nbsp;</td></tr>

			<tr>
			<td valign=top colspan=2><font face="verdana, helvetica, arial, sans-serif" size="1">Conclusion</font></td></tr>
			<tr><td valign=top><img src="images/spacer.gif" width="1" height="5" border="0" alt=""><br><img src="images/box.gif" width="3" height="3" border="0" alt=""></td><td valign="top"><font face="verdana, helvetica, arial, sans-serif" size="1">
<?php
if ($sectionID!=401) {
print("<a href=\"main.php?sectionID=401\">");
}
?>
Why one cannot Conclude
<?php
if ($sectionID!=401) {
print("</a>");
}
?>
			</font></td>
			</tr>

			<tr><td colspan=2><img src="images/spacer.gif" width="150" height="1" border="0" alt=""></td></tr>
	
			</table>

			<!-- end navigation table -->
			
</td>
<td width=15><img src="images/spacer.gif" width="15" height="1" border="0" alt=""></td>
<td valign=top><font face="Verdana, Arial, Helvetica" size="2"
color="#000000"><b><?php print ("$title") ?></b></font>
<font size="1" face="Verdana,Arial,Helvetica" color="#666666"><?php print ("<br>$subtitle"); ?>
<hr size=1>
<font face="Verdana, Arial, Helvetica" size="2">

<!-- begin content include -->


<?php

if ($sectionID==101) {

print("

<p>The way images are used and understood in today's dominant forms of communication is strikingly different than the way they were most often used and understood when printed text was the preferred site of public discourse in the West.  As Gunther Kress and Theo van Leeuwen <a href=\"main.php?sectionID=500&citation=kressvl1&returnID=$sectionID&anchorID=kressvl1\" name=\"kressvl1\">observe</a>, from sometime during the early modern period until relatively recently, images in public texts tended to be viewed either as individualized artistic expression or as uncoded replicas of reality--as objective snapshots that faithfully represented the world of objects.  Readers during this period, in other words, approached images with a particular kind of visual literacy, one in which images were for the most part viewed not as meaningful in themselves, but instead as pointers to the meaning of the \"real\" world or as illustrations of the text that surrounded them and directed their meaning.  Because meaning was to be found primarily in text, the ways that the characteristics of images might both reveal perspectives and be used to produce meaning--say, through specific arrangements of an image's visual elements--received little attention.  Images in this \"old\" visual literacy, to put it simply, did little meaning-making work.</p>

<p>As forms of communication have become increasingly visually-saturated, approaches to images have begun to change.  As Steven Johnson <a href=\"main.php?sectionID=500&citation=johnson&returnID=$sectionID&anchorID=johnson1\" name=\"johnson1\">points out</a>--and as just about anyone can see simply by surveying our contemporary landscape--images have now become an important part of our reality: our environments are now so visually saturated that images have become naturalized.  Images are so often a part of our meaning-making processes that we have come to see them as real in themselves--and capable of generating meanings--rather than as being somehow opposed to the real--capable only of representing or delivering the meaning of the real world.  Because images now mean more, viewers tend to pay more attention to how the images they encounter are structured--how individual graphical elements are arranged to suggest value or emphasis; how, in photographs, vectors can suggest particular types of action; and so on. Like the way in which literate readers recognize the rhetorical elements at work in a piece of writing, viewers who approach images with this \"new\" visual literacy tend to think of images as composed of a number of meaningful, and meaningfully arranged, elements.</p>

<p>This way of seeing, I will argue, is particularly evident in the use and reception of digital images in hypermedia environments like today's World Wide Web.  Resourceful uses of that environment's computer-generated images, hyperlinks, and dynamic display technologies are in fact resulting in the emergence of new sets of powerful visual meaning-making conventions--components of new forms of visual literacy that, in some cases, change viewers' approaches to all images, whether analog or digital.  An understanding of these literacies--like an understanding of literacy in print-dominated cultures--can help to reveal the ways visual communication in digital contexts works rhetorically: like printed text, digital images take part in processes that can both marginalize and include and that can work to inscribe dominant ideologies or to subvert them.</p>

");

} else if ($sectionID==102) {

print("

<p>I must make a qualification before beginning.  I do use the term \"new\" when describing this particular sort of visual literacy, but doing so can be misleading.  As a number of scholars have pointed out, a way of seeing similar in some ways to this \"new\" way of using images has been practiced for ages in so-called \"pre-literate\" cultures, those in which visual representation was not or has not been subsumed by the logic of verbal language. As Kress and van Leeuwen insightfully <a href=\"main.php?sectionID=500&citation=kressvl2&returnID=$sectionID&anchorID=kressvl2\" name=\"kressvl2\">point out</a>, \"Cultures which still retain the full use of both media of representation are, from the point of view of 'literate cultures', regarded as illiterate, impoverished, underdeveloped, when in fact they have a richer array of means of representation than that overtly and consciously available to literate cultures.\"  While I am not suggesting that today's emergence of new forms of visual literacy should be viewed as some sort of mythic return to pre-literate origins, I am suggesting that the meaningful ways of using images today are not entirely new, a point that Robert Horn makes so well when he compares the ancient Egyptians' use of elements like pictographs, ideographs, and determinatives to the ways contemporary Westerners are using images and text in magazines, textbooks, Websites, and so on.  The language of ancient Egypt, <a href=\"main.php?sectionID=500&citation=horn1&returnID=$sectionID&anchorID=horn1\" name=\"horn1\">says Horn</a>, was \"the first fully developed visual language in the West.\"  Using the term \"new\" to describe the visual literacies emerging today, then, inevitably misses something.</p>

<p>An act like seeing is, moreover, <i>always</i> new and <i>always</i> different.  One of the key insights of the broadly \"postmodern\" critique of essentialism has been that the nature of such acts always depends upon and is specific to the contexts and social relations in which they take place.  Insofar as these contexts and relations change--which they certainly do from culture to culture and even from viewer to viewer--labeling one way of seeing \"new\" and another \"old\" makes little sense.  Even those acts of seeing that we might say rely on an \"old\" visual literacy are \"new\" each time they occur because they never occur in a contextual vacuum.  Using the categories of \"old\" and \"new\" is in this account, then, either inaccurate or simply redundant: individual instances of the old really <i>are</i> new, so refering to literacies as new does not in the end do much to distinguish them from those literacies referred to as old.</p>

<p>That qualification being made, I do however suggest that a kind of \"operational\" adoption of the distinction--that is, between (broadly speaking) \"old\" and \"new\" visual literacy, between a visual literacy that treats images as immediating conduits of meaning and a visual literacy that treats images as inherently mediating locations of meaning--can enable some valuable and informative types of analysis.  The distinction allows one to begin to map the different ways an approach to images as meaning-productive is increasingly characterizing acts of meaning-making that employ today's newest communications technologies.  As a result, the distinction enables the identification of processes of signification that an analysis free of the distinction would likely overlook.</p>

");

} else if ($sectionID==201) {

print("

<p>An approach to the visual that treats images as constructed artifacts rather than as objective windows is increasingly apparent today in the use and reception of digital images.  The notion that images are constructed from constituent meaningful elements is foregrounded when images are digital: the ease with which specific elements from digital images can be cut and pasted and modified using today's image editing software draws attention both to their own status as individual carriers of meaning and to the ways in which the meaning of the composition in which those elements appear is in some ways conditioned by their combined synthesis, by how they are arranged.  After the arrival of image editing and production software like Adobe Photoshop (see Figure 2.1), the presence and appearance of any graphical element in an image becomes newly significant, simply because it could have so easily been seamlessly cut out or modified.  Applications like Photoshop not only offer an impressive array of <i>inscription</i> tools (many of which rely on metaphors that refer to traditional technologies of art--paint brushes, pencils, canvas cropping devices, and so on).  They also make possible the addition and modification of \"natural\" qualities like highlights, shadows, and surface textures as independent variables (managed, in an extension of the physical metaphor, as \"layers\").  Some applications--Photoshop included--can even generate \"realistic\"-looking objects that are nevertheless entirely digitally-rendered.  Now, an image of a sphere (or a cloud, or a dinosaur) may look \"real\", but it doesn't necessarily correspond to an \"actual\" object in the \"real\" world.  Even viewers who have never had much reason to concern themselves with the so-called modern crisis of representation find themselves now encountered by a literal instantiation of the theoretical bankruptcy of correspondence.</p>

<div align=\"center\"><table border=0 cellpadding=0 cellspacing=0><tr><td valign=bottom><a href=\"http://www.adobe.com/prodindex/photoshop/main.html\"><img src=\"images/tools.gif\" width=\"59\" height=\"163\" border=\"0\" alt=\"Tools\"></a></td><td width=20>&nbsp;</td><td valign=bottom><a href=\"http://www.adobe.com/prodindex/photoshop/main.html\"><img src=\"images/layers.gif\" width=\"216\" height=\"187\" border=\"0\" alt=\"Layers\"></a></td></tr>
<tr><td><tr><td colspan=3><img src=\"images/spacer.gif\" width=\"1\" height=\"3\" border=\"0\" alt=\"\"><br><font size=\"1\" face=\"Verdana,Arial,Helvetica\" color=\"#666666\">Figure 2.1<br>Adobe Photoshop tools (left) and layers (right)</font></td></tr></table></div>

<p>As a number of \"postphotography\" theorists have pointed out, this effectively spells the end of photography--or, more accurately, of a specific way of perceiving photography's ability to represent \"reality\" faithfully.  As Roy Ascott <a href=\"main.php?sectionID=500&citation=ascott&returnID=$sectionID&anchorID=ascott1\" name=\"ascott1\">suggests</a>, digital technology's undercutting of the photograph's status as trustworthy purveyor of reality diverts our interest away from what photographs <i>mean</i> and redirects it toward <i>how</i> they mean--how they are meaningfully constructed rather than how they point or correspond to a meaning.  As Ascott states in reference to art photography, in an era of postphotographic practice \"empathy with an artwork's evocation of a given state, or a given fragment of the here and now, is of less importance to us than a vivid involvement, through our interaction with the photodata image, in the construction of a reality, of multiple realities.  In postphotographic practice, the lust for verisimilitude gives way to the love of construction.\"  After photography--that is, once any image is of potentially digital and hence constructed origin--even \"photo-realistic\" images share the status that new visual literacies recognize in simpler, more obviously <i>drawn</i> images.  Images are meaningfully-arranged constructions, not translations.</p>

");

} else if ($sectionID==202) {

print("

<p>The way in which digital images are increasingly viewed as being constituted by elements combined in a way that reveals a particular perspective at work is also bolstered by many viewers' awareness that digital images literally <i>are</i> composed of constituent parts--the individual screen pixels, the dots they're made of, represented at the code-level by the digital bits of data that give \"digital\" images their name.  Granted, the fact that digital images are composed of bit-controlled pixels may at first actually seem to grant them a kind of perceived immediacy, a direct connection to the represented thing that circumvents interference from subjectivities: as Jay David Bolter and Richard Grusin <a href=\"main.php?sectionID=500&citation=boltergrusin&returnID=$sectionID&anchorID=boltergrusin1\" name=\"boltergrusin1\">point out</a>, by automating the process of image production, computers, like cameras, can seem to remove the human agent from that process.  Because so much of what goes into the production of a digital image is the machine-level processing of essentially redundant numerical data, a knowledge of digital image production processes may lead some to perceive such images as in fact quite objective, offering the viewer a kind of immediate experience of what the images point to, rather than, as I'm suggesting, an experience that's explicitly mediated by emerging conventions of visual representation rhetorically deployed by graphic designers.  When it comes down to it, a bit is after all just a bit, a monad-like thing that has no meaning in isolation.</p>

<p>But it is precisely this characteristic that allows bits to be deliberately coded, combined in ways that result in the display of pixels that form the meaningful components of an image.  \"Pixels,\" <a href=\"main.php?sectionID=500&citation=kurtz&returnID=$sectionID&anchorID=kurtz1\" name=\"kurtz1\">says Glenn Kurtz</a>, \"are electronic pointillism.\"  And the processes of automatic bit-routing set in motion when a designer uses a graphics application to render clouds, for example, are in the end just more layers of mediation in the process of making images, which has always been to some degree mediated: using digital rendering tools is more like using a brush instead of fingers when painting than it is some sort of wholesale removal of subjectivities from image production.  Just as paint brushes produce certain kinds of strokes, digital filters and rendering tools have certain display effects--\"strokes\" that now happen to be bigger and more complex.  This is a question of scale: the unit of inscription has changed, not inscription itself.</p>

<p>A growing understanding among viewers of these kinds of characteristics of digital images (and of the implications they have for potentially <i>all</i> images being produced today) leads viewers, then, to a realization that images are inherently meaning productive rather than merely meaning conductive: images do not just transparently point to the \"real\", objectively delivering some corresponding meaning; they are \"real\" in themselves, made of parts consciously arranged to convey a particular message.  The use--and awarenesses of the use--of digital imaging technologies thus reconfirms, participates in, and extends the emerging visual literacies that have responded to the increasing presence and importance of images in public practices of signification.  Uses of these technologies have, in short, helped further to change our understanding of images by affording us new ways of making meaning with images.</p>


");

} else if ($sectionID==301) {

print("

<p>This new way of approaching images has been further confirmed and, in fact, made more obvious by the arrival of the hypermedia image-map.  An image-map, of course, is more than just a \"map\": image-maps aren't just digital versions of the visual representations of physical, geographic space we normally call maps.  \"Image-map\" is a technical term used in hypermedia development communities to refer to the background programming or coding maneuver of dividing Web page images into invisibly mapped regions that are each hyperlinked to distinct destinations: other Web pages, multimedia files, etc.  Figure 3.1 below demonstrates the basic technical characteristics of an image-map: each of this image's quadrants are linked (independently of the others) to specific referents.</p>

<div align=\"center\">
<table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"160\">
<tr><td><a href=\"\"><img src=\"images/basic_map2.gif\" width=\"160\" height=\"140\" border=\"0\" alt=\"\" usemap=\"#basic\"></a></td></tr>
<tr><td><img src=\"images/spacer.gif\" width=\"1\" height=\"3\" border=\"0\" alt=\"\"><br><font size=\"1\" face=\"Verdana,Arial,Helvetica\" color=\"#666666\">Figure 3.1<br>Basic image-map</font></td></tr>
</table>
</div>

<map name=\"basic\">
<area name=\"yellow\" alt=\"yellow\" href=\"yellow.php?returnID=$sectionID\" coords=\"1,1,79,69\">
<area name=\"red\" alt=\"red\" href=\"red.php?returnID=$sectionID\" coords=\"81,1,159,69\">
<area name=\"blue\" alt=\"blue\" href=\"blue.php?returnID=$sectionID\" coords=\"1,71,79,139\">
<area name=\"green\" alt=\"green\" href=\"green.php?returnID=$sectionID\" coords=\"81,71,159,139\">
</map>

<p>When regions of an image are clickable in this way--that is, when clicking on a specific image element serves up some specific data--that image has forever lost any semblance of being objective, non-coded, neutral or perspective-free.  Its structured status is literalized.  Its constituent parts clearly mean something, because, when prompted, they offer a statement--the other Web page or the audio file, for example, that the clickable region links to.</p></p>

<p>The Web's image-mapping capabilities, moreover, tend to change the way users of the Web view <i>all</i> screen images: on the Web, any image could potentially be an image-map, so all screen images tend to be viewed not merely naturalistically--as objective windows to the real--but as composed of significant elements that might be clickable and that are therefore meaningful.  Because so many images on the Web <i>are</i> linked, when one encounters an image that is <i>not</i>, the very lack of a link may cause one to re-examine that image.  In other words, encountering a non-linked element in an environment whose texts so often point away from themselves prompts renewed attention to that non-linked element, to the meaning it, itself, produces.  In such ways, the possibility of the link, as I will argue in more depth in a moment, is now acting as a catalyst in the development of new types of hypermedia-specific visual literacy.</p>

<p>Even though a clickable element in an image-map is granted a certain significance by the data to which it is linked (I call this an element's \"click-through\" meaning), it also has meaning simply as a visual element: it still functions as a visual element within the grammar of the image in which it appears. The meaning of an image-map, then, is a product of the intersection of several different semantic layers: the meaning of the image as image or as visual artifact, which might include notions of how the image is the deposit of social relationships; the significance of visual elements as constituents of the image (the hallmark of the \"new\" visual literacy); the click-through meaning of elements; and the significance of any overlaid or surrounding text.</p>

<p>The least understood of these semantic layers--if only because it is the most recently deployed component of visual language--is clearly the click-through.  Understanding acts of visual signification in digital contexts requires a more precise understanding of both this technology and its uses, plus the meaning-making conventions emerging from the intersection of the two.</p>

");

} else if ($sectionID==302) {

print("

<p>Given that perhaps the defining characteristic of hypermedia is the link--and, in fact, the link is the mechanism that the term \"click-through\" in many ways refers to--a theoretical understanding of how links work could yield useful results when applied to the question of visual click-through meaning.  The array of analytical tools possibly adaptable to this question is actually quite rich, as much has been written about the hyperlink.  The problem, of course, is that very little of this theory and criticism gives images enough attention.</p>

<p>Though some <a href=\"main.php?sectionID=500&citation=burnett&returnID=$sectionID&anchorID=burnett1\" name=\"burnett1\">theoretical discussions of hypertext</a> have suggested that the label \"hypertext\" refers not just to linked alphanumeric data but also to linked texts that include images and other media, few theoretical studies of hypertext's linking capabilities have actually addressed the specific characteristics of hyperlinks whose linked elements include <i>images</i>.  Until relatively recently, in fact, most of them have tended to focus almost exclusively on hyper<i>text</i>--in the narrow alphanumeric sense.</p>

<p>George Landow's <i><a href=\"main.php?sectionID=500&citation=landow&returnID=$sectionID&anchorID=landow\" name=\"landow\">Hyper/Text/Theory</a></i>, a compelling edition of essays published in 1994, is a representative example of this tendency.  To its credit, the collection contains contributions that, for the most part, do successfully underscore the notion that hypertext is a new medium with its own unique characteristics: it is not simply a neutral tool one can use to express the same meanings that the medium of printed text can produce.  Accordingly, much of the book's first section is devoted to definitions--to just what it is that we mean when we talk about hypertext.  Espen Aarseth's and Gunnar Liestøl's ontologies of hypertext and hypertextual narrative and Terence Harpold's phenomenology of the hypertext link, for example, synthesize various strands of the richly diverse field of hypertext theory, acknowledging \"how preoccupied writers on the subject have been with defining hypermedia in opposition to traditional media\" (Liestøl 110), while at the same time avoiding the essentialist trap of reducing the immense variety of hypertextual practices to a fixed definition of \"hypertext.\"  In an attempt both to retain a critical vocabulary with which to describe the new phenomenon of hypertext and to do justice to its newness, then, many of this book's contributors stress that the differences between different types or modes of hypertext may be bigger than the differences between hypertextuality and print-based textuality.  As Aarseth puts it, this emphasis on the similarities between the technologies of print and hypertext enables the \"new materials\" (hypertext, the hyperlink, and the theories they spawn) to be used to reevaluate and modify the \"old perspectives\" (our assumptions about print, text, and communication) (84).</p>

<p>Yet it is precisely this emphasis--the contributors' tendency to focus on the features of hypertext for the most part only insofar as they cast a new light on print--that demonstrates one of the ways in which many studies of hypertext and the hyperlink conflate \"hypertext\" and \"hypermedia\" and thereby short-change the question of the visual.  In the end, most of the contributors to <i>Hyper/Text/Theory</i>, whether explicitly or not, bow to the primacy of print--or at least to the attempt to extend its logic to a textual context that is no longer solely alphanumeric.  The growing significance of nontextual elements (such as images) in today's hypermedia seem to be de-emphasized or even overlooked in many of their analyses.  This may be, in part, because the hypertext systems that informed these essays (published as they were in 1994) lacked the expanded image display capacities available in today's systems.  It may also be that their complicity with the ethos of print culture leads them to see the text of hypermedia as more significant than its \"packaging.\"  As contributor Stuart Moulthrop explicitly acknowledges in his discussion of the purported political dimensions of hypertext, critical theorizing about hypertext today often leads \"right back to the striated [and alphanumerically saturated] space of the library--where most humanists have always been most comfortable in the first place\" (312).</p>

<p><i>Hyper/Text/Theory</i> demonstrates the way that the field of hypertext theory has been (sometimes self-critically) characterized by an attempt to approach hypermedia using an \"old\" visual literacy that privileges verbal meaning and marginalizes visual meaning.  This does not mean that this body of theory is entirely unusable for the question of visual click-through meaning, however.  The essential observation concerning the growing importance of images in the West's processes of signification is precisely that images are increasingly functioning in a linguistic way: as the titles they give their work indicate, \"new visual literacy\" thinkers like Gunther Kress and Theo van Leeuwen (<i><a href=\"main.php?sectionID=500&citation=kressvl3&returnID=$sectionID&anchorID=kressvl3\" name=\"kressvl3\">Reading Images</a></i>) and Robert Horn (<i><a href=\"main.php?sectionID=500&citation=horn2&returnID=$sectionID&anchorID=horn2\" name=\"horn2\">Visual Language</a></i>) suggest that images are more and more being viewed as meaning-productive and as functioning rhetorically.  If they are correct, then applying the insights of alphanumeric-oriented hypertext theory to hypermedia questions like visual click-through meaning may yield insights as valuable as those gained by applying verbal-oriented rhetorical theory to images in general.  If images are functioning in increasingly language-like ways, in other words, then one may be able to apply language-preoccupied notions of the hyperlink to linked images in potentially useful ways.</p>

");

} else if ($sectionID==303) {

print("

<p>Nicholas Burbules' recent <a href=\"main.php?sectionID=500&citation=burbules&returnID=$sectionID&anchorID=burbules1\" name=\"burbules1\">study</a> of the hypertext link and critical literacy is one particularly promising source of hypertext link theory that might usefully be applied to linked images.  Burbules suggests that the experience of reading hypertext can promote a signficant kind of critical literacy, a way of reading that involves paying close attention to the use and placement of links and to the assumptions these practices reveal.  According to Burbules, once the link is problematized--once readers, that is, view the link more as productive of meaning in itself than as a neutral medium between two meaningful points--readers can see links as \"associative relations that change, redefine, and enhance or restrict access to the information they comprise\" (103).  Links, in this view, do not just carry readers from one text to another, remaining independent of the reader's experience of meaning-making; links are, in fact, active participants in that experience.</p>

<p>This approach to links bears significant similarities to the approach to images associated with the \"new\" visual literacy.  In both cases, <i>surfaces</i> are considered at least as meaningful as <i>depth</i>: the mediating mechanism itself, whether a link or an image, becomes a real site for the production of meaning rather than remaining a transparent connector or window.  It is this similarity which suggests that an approach to hypertext links like Burbules' is also in some important ways a suitable way to approach images that contain or function as links: the rhetorical inscription of links into images is a practice that can find (and, I suggest, is finding) a welcome home among the growing repertoire of visual grammar tools that are also increasingly viewed as functioning rhetorically.  Likewise, a way of reading hypermedia that is aware of how links are used rhetorically would be (and again I suggest, is becoming) open to considering how images (and especially <i>linked</i> images) might also be used rhetorically.  My suggestion here is that the awareness reader/viewers have of the increasingly stronger role images now perform in meaning-making processes helps to denaturalize their experience of the visual click-through in ways inevitably similar to their increasingly sophisticated approaches to links in general. Put simply, the \"new visual literacy\" that those like Kress and van Leeuwen describe and the practice of \"critical hyperreading\" that those like Burbules describe are a perfect match.  In visually saturated, massively networked hypermedia environments like the Web, they are in fact working together to form something like a \"visual hyperliteracy.\"  

<p>In his study, Burbules suggests some questions to consider when critically confronting links.  \"A thoughtful hyperreader,\" he says--and we might substitute hyperviewer--\"asks why links are made from certain points and not others; where those links lead; and what values are entailed in such decisions.  But beyond this, links create significations themselves: they are not simply the neutral medium of passing from point A to point B.\" (110)  Applying this approach to linked images might lead us to ask questions like the following:</p>

<p><ul>
<li>What meaning is generated when one part of an image-map is a link and another is not?  
<li>What meaning is generated when one <i>image</i> is a link and another is not?  
<li>What claim is being made, implicit or otherwise, about the meaning of an image (or particular region of an image-map) by linking it to some particular information?  And vice versa: what claim is being made about the meaning of the destination of a link by linking to it from an image (or a particular region of an image-map)?
</ul></p>

<p>The details of Burbules' description of how hypertext links work rhetorically suggests one way of framing such questions.  According to Burbules, links can be read as rhetorical tropes--as language-like forms that have specific meaning effects.  Links can be read as metaphors, for example, \"when apparently unrelated textual elements are associated: a link from a page listing Political Organisations to a page on the Catholic Church might puzzle, outrage, or be ignored--but considered as a metaphor it might make a reader think about politics and religion in a different way\" (111). This sort of practice of association clearly constitutes a rhetorical use of metaphor, which, as Martha Kolln <a href=\"main.php?sectionID=500&citation=kolln&returnID=$sectionID&anchorID=kolln1\" name=\"kolln1\">points out</a>, is a deliberate bypassing of heirarchies of meaning, involving a transfer of meaning from one branch to another significantly different branch.  Just as, for example, calling an <i>interstate highway</i> a <i>river</i> changes the meaning of an <i>interstate highway</i> by transfering to it some of the meaning of <i>river</i> (and also, but somewhat less so, the other way around), so also suggesting a meaningful similarity between the <i>Catholic Church</i> and the notion of a <i>political organization</i> using a hypertext link in the context Burbules describes would make a claim (in some contexts, provocative) about the Church's meaning.</p>

<p>Visual click-throughs can also work rhetorically as metaphors. Obviously, this is most evident when the images involved are stylized icons that function explicity as interface elements.  Like the now rather pervasive and naturalized \"desktop\" operating system metaphor (i.e., \"this process of encountering your data is in some important ways similar to using a physical desktop\"), hypermedia interface icons use the familiar characteristics of the physical things they depict to help describe the destination they link to.  The \"home\" metaphor is by far the most common (and, for that reason, one of the most metonymically powerful) uses of this kind of hypermedia rhetoric.  By linking back to the first page users encounter when visiting a Website, icons like those shown below in Figure 3.2 (built into Netscape Navigator [left] and Internet Explorer [right] and often appropriated for use as Website icons) transfer some of the meaning of the concept of a <i>home</i> to the meaning of the <i>front page</i>, or <i>home page</i>, of a site: it is a starting point, a familiar space, a kind of base that should contain general, foundational information.</p>

<div align=center><table border=\"0\" cellspacing=\"0\" cellpadding=\"0\">
<tr><td valign=bottom><img src=\"images/home_nn.gif\" width=\"23\" height=\"20\" border=\"0\" alt=\"Netscape Navigator\">&nbsp;&nbsp;<img src=\"images/home_ie.gif\" width=\"19\" height=\"20\" border=\"0\" alt=\"Internet Explorer\"></td></tr>
<td><img src=\"images/spacer.gif\" width=\"1\" height=\"1\" border=\"0\" alt=\"\"><br><font size=\"1\" face=\"Verdana,Arial,Helvetica\" color=\"#666666\">Figure 3.2<br>Home page icons</font></td></tr></table></div>

<p>One could certainly critique the narrowly Western way such icons represent the concept of <i>home</i> and the way this invokes heirarchical information categories.  As Gunther Kress <a href=\"main.php?sectionID=500&citation=kress&returnID=$sectionID&anchorID=kress1\" name=\"kress1\">suggests</a>, the visual is \"as much formed by differences of culture as the verbal is\" (57).  But even a less critical approach no longer views such images essentialistically, as mere objective vehicles for conveying meaning: the fact that the icons are linked gives them a kind of agency in the meaning-making process.  Here, image and link work together with what viewers know about homes to produce meaning.</p>

<p>The same is the case of uses of linked icons that represent--and comment upon--actions.  The icon/word combinations shown below in Figure 3.3, for example, function as user interface elements in a Web-based email application.  These elements do not solely \"point\" to the action they are linked to--the linked text alone could do that.  They also change the notion of <i>deleting an email message</i> by likening it to the notion of <i>discarding a physical piece of paper</i>, and they make understandable the multi-layered action of accessing a mail server via various transfer protocols and rendering complex data displayable in a Web browser: it's called \"getting mail\", and, in the end, it's something like transfering paper documents into a physical file folder.</p>

<div align=center><table border=\"0\" cellspacing=\"0\" cellpadding=\"0\">
<tr>
<td valign=bottom><img src=\"images/getmail.gif\" width=\"32\" height=\"44\" border=\"0\" alt=\"Get mail\">&nbsp;&nbsp;	<img src=\"images/delete.gif\" width=\"24\" height=\"46\" border=\"0\" alt=\"Delete\"></td></tr>
<tr><td><img src=\"images/spacer.gif\" width=\"1\" height=\"3\" border=\"0\" alt=\"\"><br><font size=\"1\" face=\"Verdana,Arial,Helvetica\" color=\"#666666\">Figure 3.3<br><a href=\"http://www.deskpilot.com\">DeskPilot</a> email icons</font></td></tr>
</table></div>

<p>Visual click-through metaphors similarly make understandable the immensely complex sets of digital transactions that power today's ecommerce Websites.  Many of these sites use the now-familiar shopping cart or shopping bag icons as links that enable users to see the list of products they have chosen during a shopping session (see Figures 3.4 and 3.5 below).  This hypermedia metaphor suggests important similarities between physical shopping carts/bags and the layers of coded electric impulses that work behind the scenes to make possible an experience of Web-driven commodity consumption.  When at a brick-and-mortar store, shoppers can review their orders by looking in their carts or bags;  on the Web, shoppers need only click on the cart or bag icon to exectue the string of operations that will display the products they have selected while shopping.</p>

<div align=center><table border=\"0\" cellspacing=\"0\" cellpadding=\"0\">
<tr>
<td valign=bottom><img src=\"images/shoppingcart.gif\" width=\"140\" height=\"121\" border=\"0\" alt=\"Shopping cart, beyond.com\"></td><td>&nbsp;&nbsp;&nbsp;</td><td valign=bottom><img src=\"images/shoppingbag.gif\" width=\"174\" height=\"87\" border=\"0\" alt=\"Shopping bag, gazoontite.com\"></td></tr>
<tr><td><img src=\"images/spacer.gif\" width=\"1\" height=\"3\" border=\"0\" alt=\"\"><br><font size=\"1\" face=\"Verdana,Arial,Helvetica\" color=\"#666666\">Figure 3.4<br>Shopping cart, <a href=\"http://www.beyond.com\">beyond.com</a></font></td><td>&nbsp;&nbsp;&nbsp;</td><td><img src=\"images/spacer.gif\" width=\"1\" height=\"3\" border=\"0\" alt=\"\"><br><font size=\"1\" face=\"Verdana,Arial,Helvetica\" color=\"#666666\">Figure 3.5<br>Shopping bag, <a href=\"http://www.gazoontite.com\">gazoontite.com</a></font></td></tr>
</table></div>

<p>The increasingly widespread deployment of this kind of consumption-enabling hypermedia rhetoric demonstrates an important way in which the hypermedia click-through has been appropriated as a site for the making of ideologies of consumption.  (The term <i>click-through</i> is, in fact, <a href=\"http://www.advertising.com/glossary/index.html#c\">well established in the Web advertising world</a>.  The click-through rate is a factor used to determine the effectiveness of Web-based advertising: how many users actually click on a particular ad banner, for example?)  A careful reading of ecommerce hypermedia rhetoric reveals the ways in which it positions users as particular types of subjects.  To be sure, the use of hypermedia rhetoric as a tool for making the processes underlying digital commerce seamless and understandable seems to grant users a certain agency: the Web's product selection is virtually limitless, and online retailers compete fiercely for the patronage of users who have an immense power to choose--the next ecommerce site is just a click or a keystroke away, after all.  But it is exactly this kind of hyperconsumption that <a href=\"main.php?sectionID=600&returnID=$sectionID&anchorID=can\" name=\"can\">can</a> objectify users as consumers, as subjects who freely accept their role in the engine of late capitalist production and consumption.  Once appropriated by commodity culture, the click-through may indeed be the ultimate act of consumption: it is quick, painless, and--now in select cities--it can <a href=\"http://www.kozmo.com/\">deliver products to your door in under an hour</a>.</p>

");

} else if ($sectionID==304) {

print("

<p>The hypermedia click-through metaphor that uses abstracted, iconic images is not the only rhetorical tool made available by the convergence of the \"new\" visual literacy and emerging ways of reading links rhetorically.  The trope of synecdoche--generally, substituting a part of something for its whole and vice versa--wields considerable power in hypermedia environments, where the very structure of links themselves (i.e., a small element representing and pointing to larger elements or sets of elements) suggests relations of categorical inclusion.  Again, Burbules gives a hypertextual example of this trope that demonstrates its importance:  \"a list of 'Human Rights Violations' may include links to pages dealing with corporal punishment in schools, or vice versa. This relating of categorical wholes to particular instances, or of parts to wholes, is vitally important.  The power to register superordinate categories to which particulars are subsumed is a special way of influencing people's conceptual and normative thinking\" (112).</p></p>

<p>The excerpt shown below from the front door of the <a href=\"http://www.usc.edu\">University of Southern California's Website</a> demonstrates an application of this rhetorical trope using linked images.  Each of the photographic images in this excerpt link to specific sections of the site--most of which are not accessible through the front page's text links (not shown below).  The region of the image that depicts <a href=\"http://www.usc.edu/info/about/alumni.html\" onmouseover=\"msoverl(3)\" onmouseout=\"msoutl(3)\">a man sitting along a winding sidewalk</a>, for example, links to a page dedicated to alumni of the university.  Given the associating characteristics of the hyperlink mechanism and the fact that this image links to what it does, the one man depicted--presumably himself a USC alumnus--stands in for the broad category of USC alumni.</p>

<script language=\"Javascript\">

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
		
		right = new MakeArray(4)
		
		right[1].src = \"images/usc_images/right011.gif\"
		right[2].src = \"images/usc_images/right022.gif\"
		right[3].src = \"images/usc_images/right033.gif\"
		right[4].src = \"images/usc_images/right044.gif\"
		
		left = new MakeArray(4)
		
		left[1].src = \"images/usc_images/left5011.gif\"
		left[2].src = \"images/usc_images/left5022.gif\"
		left[3].src = \"images/usc_images/left5033.gif\"
		left[4].src = \"images/usc_images/left5044.gif\"
		
     	}
     	
     	
        function MakeArray(n) {
        this.length = n 
        for (var i = 1; i<=n; i++) {
		this[i] = new Image()
		
		}
		
		return this
		
		}
		
        function msoverr(num) {
		document.images[5].src = right[num].src
		
		}
		
		function msoutr(num) {
		document.images[5].src = \"images/usc_images/right0.gif\"
		
		}                   

        function msoverl(num) {
		document.images[27].src = left[num].src
		
		}
		
		function msoutl(num) {
		document.images[27].src = \"images/usc_images/left5.gif\"
		
		}                   

// end hide script from old browsers --->

</SCRIPT>

<MAP name=leftmap>
<AREA coords=0,0,59,59 target=\"_blank\" href=\"http://www.usc.edu/info/world.html\" shape=RECT>
<AREA coords=0,60,59,117 target=\"_blank\" href=\"http://www.usc.edu/info/arts.html\" shape=RECT>
<AREA coords=0,119,59,176 target=\"_blank\" href=\"http://www.usc.edu/info/about/alumni.html\" shape=RECT>
<AREA coords=0,178,59,237 target=\"_blank\" href=\"http://www.usc.edu/info/about/spirit.html\" shape=RECT>
</MAP>

<MAP name=rightmap>
<AREA coords=0,0,59,59 target=\"_blank\" href=\"http://www.usc.edu/info/about/history.html\" shape=RECT>
<AREA coords=0,60,59,117 target=\"_blank\" href=\"http://www.usc.edu/info/about/students.html\" shape=RECT>
<AREA coords=0,119,59,176 target=\"_blank\" href=\"http://www.usc.edu/info/about/tommy/tommy0.html\" shape=RECT>
<AREA coords=0,178,59,237 target=\"_blank\" href=\"http://www.usc.edu/info/about/HSC.html\" shape=RECT>
</MAP>

<div align=\"center\"><table border=0 cellpadding=0 cellspacing=0>
<tr><td valign=top><img src=\"images/usc_images/topfiller.gif\" width=\"59\" height=\"9\" border=\"0\" alt=\"\"><br><img src=\"images/usc_images/left5.gif\" width=\"59\" height=\"237\" border=\"0\" alt=\"\" useMap=#leftmap></td>
<td valign=top><a href=\"http://www.usc.edu/webcast/events/commencement/2000/\" target=\"_blank\"><img src=\"images/usc_images/commencement0.gif\" width=\"120\" height=\"94\" border=\"0\" alt=\"\"></a><br><a href=\"http://www.usc.edu/info/welcome/welcome0.html\" target=\"_blank\"><img src=\"images/usc_images/Logo.gif\" width=\"120\" height=\"152\" border=\"0\" alt=\"\"></a></td>
<td valign=top><img src=\"images/usc_images/topfiller.gif\" width=\"59\" height=\"9\" border=\"0\" alt=\"\"><br><img src=\"images/usc_images/right0.gif\" width=\"59\" height=\"237\" border=\"0\" alt=\"\" useMap=#rightmap></td></tr>
<tr><td colspan=3><img src=\"images/spacer.gif\" width=\"1\" height=\"3\" border=\"0\" alt=\"\"><br><font size=\"1\" face=\"Verdana,Arial,Helvetica\" color=\"#666666\">Figure 3.6<br>Excerpt from front page of usc.edu</font></td></tr>
</table></div>

<p>This synecdochic association--like using the term <i>hand</i> for <i>sailor</i>, for example--is certainly an effective way to communicate concisely: in the context of their jobs, sailors essentialy are defined as sailors by the utility of their hands; the meaning produced by the depiction of the USC alumnus as he is figured here (i.e., content, satisfied!) defines the rest of the alumni body within the context of USC's Website (positioned as it is as a presentation of the university's image to the world).</p>

<p>But sailors are much more than their hands: while that part of the body may characterize a sailor functionally, it can't possibly represent those aspects of a sailor's meaning that have nothing to do with the function of hands.  Similarly, the social and cultural diversity of USC's body of alumni cannot justly be represented by a single smiling man.  The synecdochic visual click-through, then, has real potential for marginalization and exclusion.  Excercising the rhetorical power of links always entails this risk.</p>

<p>Given this risk imposed by the nature of the medium itself, USC's Website actually comes across as a rather adept use of hypermedia rhetoric--a fact that makes it a particularly appropriate part of an analysis of emerging ways of using hypermedia in meaningful ways.  To begin with, the site's visual click-throughs certainly avoid the inscription of ideologies of race and gender that they so easily could have fallen prey to: the diverse bodies of USC alumni and students are not here rhetorically homogenized by linked images of the traditionally collegiate Anglo-American male, for example.  The site also takes advantage of one of the medium's integrated technologies in an attempt to avoid the possible forms of rhetorical homogenization toward which the constraints of the medium might otherwise lead.  Every time the page is requested from USC's Web server by a Web browser application--in other words, each time a user visits the site--a section of code delivers a randomly-selected set of images (from a bank of six) to serve as the page's linked photographs.  As a result, the linked image that synecdochically stands in for USC's alumni body may depict a different member of that diverse group each time a user encounters the page (see Figure 3.7).  A user's odds of seeing a depiction repeated from one visit to the next become one in six instead of a rigid one in one.</p>

<div align=\"center\"><table border=0 cellpadding=0 cellspacing=0>
<tr><td valign=top><img src=\"images/usc_images/alumni_malegrad.gif\" width=\"59\" height=\"58\" border=\"0\" alt=\"\"><img src=\"images/spacer.gif\" width=\"8\" height=\"1\" border=\"0\" alt=\"\"><img src=\"images/usc_images/alumni_womanworking.gif\" width=\"59\" height=\"58\" border=\"0\" alt=\"\"><img src=\"images/spacer.gif\" width=\"8\" height=\"1\" border=\"0\" alt=\"\"><img src=\"images/usc_images/alumni_womengrads.gif\" width=\"59\" height=\"58\" border=\"0\" alt=\"\"><img src=\"images/spacer.gif\" width=\"8\" height=\"1\" border=\"0\" alt=\"\"><img src=\"images/usc_images/alumni_mansitting.gif\" width=\"59\" height=\"58\" border=\"0\" alt=\"\"><img src=\"images/spacer.gif\" width=\"8\" height=\"1\" border=\"0\" alt=\"\"><img src=\"images/usc_images/alumni_grads.gif\" width=\"59\" height=\"58\" border=\"0\" alt=\"\"><img src=\"images/spacer.gif\" width=\"8\" height=\"1\" border=\"0\" alt=\"\"><img src=\"images/usc_images/alumni_womangrad.gif\" width=\"59\" height=\"58\" border=\"0\" alt=\"\"></td></tr>
<tr><td colspan=3><img src=\"images/spacer.gif\" width=\"1\" height=\"3\" border=\"0\" alt=\"\"><br><font size=\"1\" face=\"Verdana,Arial,Helvetica\" color=\"#666666\">Figure 3.7<br>Bank of possible USC alumni images</font></td></tr>
</table></div>

<p>Here USC takes advantage of the dynamic content-generation capacities of the medium to literally code representations of heterogeneity into the system itself.  Granted, just as the manuever cannot guarantee that a user will not encounter an image repeated in consecutive visits, it also never achieves an ultimately exhaustive representation of USC's alumni diversity: fewer than ten alumni are alternately depicted--nothing close to the immense, and annually growing, size of the alumni body.  Depicting every last member of that group would in fact be a nearly impossible task, requiring editors to pore over enormous archives of photographs--hardly worth the effort, considering the fact that such totalization may in fact be epistemically impossible: as some theorists contend, language to some extent always excludes; acts of naming arrest infintely complex flows of meaning in inevitably impoverished ways.</p>

<p>But even when seen as a <i>gesture</i> toward diversity--rather than as an ultimately exhaustive expression of it--USC's revolving image system could certainly be said to mitigate the always possible (side)effect of the synecdochic hypermedia click-through--a univocal denial of diversity, a reduction of real complexities to a simplified fragment made narrowly representative.  In exploiting the characteristics of the medium to avoid such marginalizing rhetoric, USC's site therefore demonstrates a kind of literacy that could never be achieved as effectively in the static medium of print: marks of ink on paper can't possibly change each time readers turn to a page--<a href=\"http://www.research.ibm.com/journal/sj/363/jacobson.html\">not quite yet</a>, at least.  This emerging literacy combines an increasingly used and understood way of making meaning with images with a similarly increasingly used and understood way of making meaning with links and content-generation technologies in networked digital environments.</p>

");

} else if ($sectionID==305) {

print("

<p>The diversity-coded synecdochic visual click-through that USC uses is of course just one example of how new forms of visual literacy are emerging through resourceful uses of the Web's intricate architecture.  As new hypermedia technologies are put to use, new hypermedia-specific ways of making meaning develop.  Thanks to certain <a href=\"http://www.zdnet.com/anchordesk/story/story_4612.html\">Web development rivalries</a> and the desire of many in the industry to create the <a href=\"http://www.salon.com/tech/feature/1999/09/28/mac_linux/index.html\">next insanely great thing</a>, hypermedia's design \"vocabulary\" continuously changes and expands--often on a month-to-month (or even more frequent) basis.  While some <a href=\"http://www.help.com/cat/4/384/tip/3697.html?tag=st.cn.sr.hp.2\">attempted additions</a> to this rapidly-growing vocabulary have understandably failed to stick, others have become well-established and, in some cases, so widely employed that they now seem like natural characteristics of the Web--components, in other words, of the Web's emerging meaning-making conventions.  <!-- As in all languages, the naturalization of successful new technologies enables the emergence of meaning-making conventions. --></p>

<p>The ability to script images to change visually when a user's mouse passes over them, for example, lacked widespread and consistent support in Web browser applications when it was first introduced.  But even though, as a result, developers were forced to devise intricate ways of making these \"mouseovers\" or \"rollovers\" work in the browsers that implemented them and harmless to the browsers that didn't, they used them anyway and the practice caught on.  Today, in fact, encountering a professionally designed site that does not use some version of this device is increasingly rare.  Mouseovers now perform a variety of semantic roles.  Granted, in the way they are most commonly used--to highlight the menu buttons that a user's mouse passes over--their addition to or enrichment of an image's meaning is small: the mouseover functions only as what <a href=\"http://hotwired.lycos.com/webmonkey/98/23/index3a.html?tw=design\">some developers</a> call a \"soft click\", informing the user that a button is indeed \"on\".  In some cases, though, the mouseover device functions in a very nuanced and meaningful way, collaborating with an image's visual grammar, context, and click-through meanings in complex processes of signification.  The results can range from summary-like previews of a visual link's destination to intricate constructions that both change the meaning of the link/destination pages and produce indepentent meanings.</p>

<p>The entry page of the Website for Edmonton-based industrial design firm Pure Design serves as a particularly revealing example of this more \"advanced\" meaningful use of the mouseover device.  [<a href=\"puredesign.html\" target=\"_blank\">See the example.</a>]  The page, consisting of two linked images above a line of text, introduces the site's essentially two-part organization: a mapped region of the left hand image bearing the text \"PURE FORM\" links to the area of the site that describes the firm's industrial design philosophies and introduces its featured designers, while the right hand image (bearing the text \"SHOP PURE\") links to the site's ecommerce area, where users can browse and purchase the various chairs, tables and accessories that the firm designs and manufactures.  The relationship between the representational content of the two images points to the nuanced statement that the page makes: each image is a waist-down shot of a person sitting in a chair, and the two chairs face in opposite directions, suggesting a kind of opposition between the two \"pure\" notions of \"form\" and \"shop[ping]\".  The page's use of mouseovers transforms this suggestion of opposition into something more like a logical either/or disjunction.  When a user's mouse passes over the \"PURE FORM\" region of the left hand image, the moused-over image changes color and comes into sharper focus as the right hand image simultaneously disappears.  The same thing happens the other way around: when the user's mouse passes over \"SHOP PURE\", the right-facing SHOP PURE image changes color and comes into sharper focus as the left-facing PURE FORM image disappears.</p>

<p>Perhaps the site's designers did not <i>intend</i> such a stark distinction, but this use of images, text, links, and mouseovers does nevertheless suggest a disjunction between, broadly speaking, art and commerce--an either/or that conceptualizes \"cultural\" production and the exchange of ideas in opposition to the business of commodity exchange.  The suggestion is that choosing one precludes choosing the other: the vanishing of either linked image underscores the reality that the user can click-through only one of the links.  The images' click-through meanings help support this message.  After clicking through the PURE FORM image, the user will arrive at a page whose dominant and initially eye-catching elements include a line of text that reads \"INDIVIDUALS AND IDEAS\", heading a list of the firm's designers.  After clicking through the entry page's SHOP PURE image, by contrast, the user will arrive at a page whose grayscale lack of color draws attention to the text that is the largest and most independent: \"PRODUCT INDEX.\"  My point here is not necessarily to critique the assumptions that some might say underlie this message--a humanist conception of designer-centric creative individuality and a corresponding Romantic notion of art unconstrained by petty economic concerns. (One could, after all, point out that the line of text beneath the entry page's two linked images does offer some explanatory instructions that at least suggest a connection between the two halves of the disjunction: \"PURE FORM FOR INSPIRATION ... SHOP PURE IF YOU'VE GOT IT.\")  My aim is, rather, to explore how it is that such assumptions might be inscribed within hypermedia--in other words, to point to the elements of visual hypermedia vocabulary at work here and how they participate in hypermedia-specific ways of making meaning and thereby contribute to emerging new visual literacies.</p>

<p>I call the kind of mouseover used by Pure Design a <i>hypermedia disjunction</i>.  As the Pure Design site illustrates, the use of the link mechanism and dynamic mouseover image display (and removal) can suggest a logical either/or structure.  Figure 3.9 below absracts this device for a clearer illustration of the processes at work.  The two images, combined with an embedded mouseover script, present an \"either A or B\" structure that is clarified once dynamically exercised: once either image is moused-over, \"A and B\" becomes a condition of either \"A, not B\" or \"B, not A\".</p>

<script language=\"Javascript\">

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
		a[1].src = \"images/anorb.gif\"
		
		b = new MakeArray(1)
		b[1].src = \"images/anorb.gif\"
		
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
		document.images[27].src = \"images/b.gif\"
		
		}                   

        function msoverb(num) {
		document.images[26].src = b[num].src
		
		}
		
		function msoutb(num) {
		document.images[26].src = \"images/a.gif\"
		
		}                   

// end hide script from old browsers --->

</SCRIPT>

<table border=\"0\" cellpadding=\"0\" cellspacing=\"0\">
<tr><td width=100>&nbsp;</td><td><a href=\"#\" onmouseover=\"msovera(1)\" onmouseout=\"msouta(1)\"><img src=\"images/a.gif\" width=\"35\" height=\"35\" border=\"0\" alt=\"A, not B\"></a>&nbsp;<a href=\"#\" onmouseover=\"msoverb(1)\" onmouseout=\"msoutb(1)\"><img src=\"images/b.gif\" width=\"35\" height=\"35\" border=\"0\" alt=\"B, not A\"></a></td></tr>
<tr><td width=100>&nbsp;</td><td><img src=\"images/spacer.gif\" width=\"1\" height=\"3\" border=\"0\" alt=\"\"><br><font size=\"1\" face=\"Verdana,Arial,Helvetica\" color=\"#666666\">Figure 3.9<br>Hypermedia Disjunction</font></td></tr>
</table>

<p>The hypermedia disjunction can, moreover, be made even clearer than the already quite unambiguous example of Figure 3.9.  As Pure Design's entry page demonstrates, scripted mouseover image color and focus changes can highlight and emphasize the non-excluded half of a disjunction.  As illustrated in Figure 3.10, this can underscore an either/or premise.  To put it simply, this mouseover device presents an initial condition of \"mabye A and maybe B\" that once exercised becomes either \"definitely A, not B!\" or \"definitely B, not A!\".</p>

<script language=\"Javascript\">

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
		agray[1].src = \"images/anorb.gif\"
		
		bgray = new MakeArray(1)
		b[1].src = \"images/anorb.gif\"
		
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
		document.images[29].src = \"images/a.gif\"
		
		}
		
		function msoutagray(num) {
		document.images[30].src = \"images/bgray.gif\"
		document.images[29].src = \"images/agray.gif\"
		
		}                   

        function msoverbgray(num) {
		document.images[29].src = b[num].src
		document.images[30].src = \"images/b.gif\"
		
		}
		
		function msoutbgray(num) {
		document.images[29].src = \"images/agray.gif\"
		document.images[30].src = \"images/bgray.gif\"

		
		}                   

// end hide script from old browsers --->

</SCRIPT>

<table border=\"0\" cellpadding=\"0\" cellspacing=\"0\">
<tr><td width=100>&nbsp;</td><td><a href=\"#\" onmouseover=\"msoveragray(1)\" onmouseout=\"msoutagray(1)\"><img src=\"images/agray.gif\" width=\"35\" height=\"35\" border=\"0\" alt=\"A, not B\"></a>&nbsp;<a href=\"#\" onmouseover=\"msoverbgray(1)\" onmouseout=\"msoutbgray(1)\"><img src=\"images/bgray.gif\" width=\"35\" height=\"35\" border=\"0\" alt=\"B, not A\"></a></td></tr>
<tr><td width=100>&nbsp;</td><td><img src=\"images/spacer.gif\" width=\"1\" height=\"3\" border=\"0\" alt=\"\"><br><font size=\"1\" face=\"Verdana,Arial,Helvetica\" color=\"#666666\">Figure 3.10<br>Hypermedia Focused Disjunction</font></td></tr>
</table>

<p>Combined with the ways that image elements can work (and work together) rhetorically, this use of the dynamic scripting capacities afforded by the Web's architecture results in a sophisticated component of hypermedia-specific vocabulary.  The practice can of course be used gratuitously, as some say the abundance of mouseover menu buttons on the Web demonstrates.  But it can also produce complex meanings that intersect with assumptions fundamental to the cultures in which it occurs, as examples like Pure Design's entry page begin to demonstrate.</p>

");

} else if ($sectionID==401) {

print("

<p>Examples like the ones I have discussed here--from digital image editing and iconography to hypermedia rhetoric and forms like disjunction--demonstrate that the use and reception of digital images in hypermedia environments can have powerful meaning effects.  Like more \"traditional\" print-based forms of signification, visual hypermedia signification is capable of participating in a broad range of semic and ideological processes, from perpetuating essentialist categories and excluding marginal elements to inscribing or gesturing toward diversity.  However, though these processes may be similar to those intersected by forms of communication that more explicitly privilege (verbal) language, digital images can do things that are impossible in those other forms.</p>

<p>Even the relatively few examples I have explored here show that interactions between the \"new\" visual literacy and hypermedia have enacted new processes of signification, new ways to communicate.  The form of the visual click-through metaphor, the first example of hypermedia-specific meaning-making I examined here, combines the rhetorical capacities of images with those of the hyperlink mechanism to provide users with distincly coded metaphors that help them navigate through vast quantities of data (at times, of course, in ways some might deem politically suspect).  Similarly, images and links colaborate in the device I labeled the synecdochic visual click-through: in this case, the rhetorical trope of synecdoche is exercised in the intersection of the representational capacity of images, the distinct associative characteristics of the hyperlink, and (in its more rhetorically cautious instances) the Web's dynamic content display technologies.  Increasingly meaningful uses of other similar hypermedia dynamic display technologies, in fact, yield perhaps the best examples of emerging meaning-making conventions that are specific to hypermedia and that participate in the \"new\" visual literacy: it is here that that the production of meaning most clearly relies on features distinct to the medium.  For instance, the hypermedia disjunction--my last example--exploits the distinctly hypermedia mouseover device to dynamically alter images in ways that enable the inscription of either/or logical disjunctions.</p>

<p>That said, my coverage of the emerging meaning-making conventions specific to hypermedia is far from exhaustive.  In fact, it could never possibly <i>be</i> exhaustive: as new hypermedia technologies are put to use and enduring ones are adapted, new ways of making meaning will emerge.  Hypermedia-specific visual literacies in particular, then, help illustrate an important aspect of the qualification with which I prefaced my analysis: literacies do not have fixed, essential definitions; they are constantly in flux.  They are, in fact, always new and always emerging.</p>

");

} else if ($sectionID==500) {

if ($citation=='all') {

print("

<b>Ascott, Roy.</b> \"Photography at the Interface.\"  <i>Electronic Culture: Technology and Visual Representation.</i>  Ed. Timothy Druckrey.  New York: Aperture, 1996: 165-171.

<p><b>Beyond.com.</b>  1 May 2000.  <a href=\"http://www.beyond.com\">http://www.beyond.com</a></p>

<p><b>Berst, Jesse.</b>  \"Browser Upstarts Take Aim.\"  <i>ZDNet.</i>  27 March 2000. 1 May 2000.  <a href=\"http://www.zdnet.com/anchordesk/story/story_4612.html\">http://www.zdnet.com/anchordesk/story/story_4612.html</a></p>

<p><b>Bolter, Jay David and Richard Grusin.</b>  \"Remediation.\"  <i>Configurations</i> 4.3 (1996) 311-358.</p>

<p><b>Burbules, Nicholas.</b>  \"The rhetorics of the web: hyperreading and critical literacy.\"  <i>Page to Screen: Taking Literacy into the Electronic Era.</i>  Ed. Ilana Snyder.  London and New York: Routledge, 1998.</p>

<p><a href=\"burnett\"></a><b>Burnett, Kathleen.</b>  \"Toward a Theory of Hypertextual Design.\"  <i>Postmodern Culture</i> Volume 3, Number 2 (January 1993)</p>

<p><b>Dayneko, Dave and Theis Barenkopf Dinesen.</b>  \"Four Ways to Create a Mouseover.\"  <i>Webmonkey.</i> 20 June 1998. 1 May 2000.  <a href=\"http://hotwired.lycos.com/webmonkey/98/23/index3a.html?tw=design\">http://hotwired.lycos.com/webmonkey/98/23/index3a.html?tw=design</a></p>

<p><b>Gazoontite.com.</b>  1 May 2000.  <a href=\"http://www.gazoontite.com\">http://www.gazoontite.com</a></p>

<p><b>\"Glossary.\"</b>  <i>Advertising.com.</i> 1 May 2000.  <a href=\"http://www.advertising.com/glossary/index.html\">http://www.advertising.com/glossary/index.html</a></p>

<p><b>Horn, Robert E.</b> <i>Visual Language: Global Communication for the 21st Century.</i> Bainbridge Island, Washington: MacroVU, Inc., 1998.</p>

<p><b>Jacobson, Joseph</b>, et. al.  \"The last book.\"  <i>Systems Journal.</i>  26 March 1997. 1 May 2000.  <a href=\"http://www.research.ibm.com/journal/sj/363/jacobson.html\">http://www.research.ibm.com/journal/sj/363/jacobson.html</a></p>

<p><b>Johnson, Steven.</b>  <i>Interface Cutlure: How New Technology Transforms the Way we Create & Communicate.</i>  San Francisco: Harper, 1997.</p>

<p><b>Kolln, Martha.</b>  <i>Rhetorical Grammar: Grammatical Choices, Rhetorical Effects.</i>  Third Edition.  Boston: Allyn and Bacon, 1996.</p>

<p><b>\"Kozmo.com Splash Page.\"</b>  <i>Kozmo.com.</i>  1 May 2000.  <a href=\"http://www.kozmo.com\">http://www.kozmo.com</a></p>

<p><b>Kress, Gunther.</b> \"Visual and verbal modes of representation in electronically mediated communication; the potentials of new forms of text.\" <i>Page to Screen: Taking Literacy into the Electronic Era.</i>  London and New York: Routledge, 1998.</p>

<p><b>Kress, Gunther and Theo vanLeeuwen.</b>  <i>Reading Images: The Grammar of Visual Design.</i>  London and New York: Routledge, 1996.</p>

<p><b>Kurtz, Glenn A.</b> \"The Aesthetics of Scale.\" <i>Artweek</i> 28:2 (February 1997): 12-13.</p>

<p><b>Landow, George P.</b>, Ed.  <i>Hyper/Text/Theory.</i>  Baltimore: The Johns Hopkins University Press, 1994.</p>

<p><b>Leonard, Andrew.</b>  \"Do penguins eat apples?\"  <i>Salon.com.</i>  28 September 1999, 1 May 2000.  <a href=\"http://www.salon.com/tech/feature/1999/09/28/mac_linux/index.html\">http://www.salon.com/tech/feature/1999/09/28/mac_linux/index.html</a></p>

<p><b>Napier, Mark.</b>  \"Shredder.\"  <i>Potatoland.org.</i>  1998.  1 May 2000.  <a href=\"http://www.potatoland.org/shredder/shredder.html\">http://www.potatoland.org/shredder/shredder.html</a></p>

<p><b>\"Say it With a Marquee.\"</b>  <i>CNET Help.com.</i> 1 May 2000.  <a href=\"http://www.help.com/cat/4/384/tip/3697.html?tag=st.cn.sr.hp.2\">http://www.help.com/cat/4/384/tip/3697.html?tag=st.cn.sr.hp.2</a></p>

<p><b>\"University of Southern California.\"</b>  <i>USC.edu.</i>  1 May 2000.  <a href=\"http://www.usc.edu\">http://www.usc.edu</a></p>

<p><b>\"Welcome to Deskpilot.\"</b> 1 May 2000.  <a href=\"http://www.deskpilot.com\">http://www.deskpilot.com</a></p>

");

} else {

	if ($citation=='johnson') {
	
	print("
	
	<b>Johnson, Steven.</b>  <i>Interface Cutlure: How New Technology Transforms the Way we Create & Communicate.</i>  San Francisco: Harper, 1997: 30.
	
	");

	} else if ($citation=='burnett') {
	
	print("
	
	<b>Burnett, Kathleen.</b>  \"Toward a Theory of Hypertextual Design.\"  <i>Postmodern Culture</i> Volume 3, Number 2 (January 1993)

	");
	
	} else if ($citation=='landow') {
	
	print("
	
	<b>Landow, George P.</b>, Ed.  <i>Hyper/Text/Theory.</i>  Baltimore: The Johns Hopkins University Press, 1994.
	
	");

	} else if ($citation=='kressvl1') {
	
	print("
	
	<b>Kress, Gunther and Theo vanLeeuwen.</b>  <i>Reading Images: The Grammar of Visual Design.</i>  London and New York: Routledge, 1996: 15-42.
	
	");

	} else if ($citation=='kressvl2') {
	
	print("
	
	<b>Kress, Gunther and Theo vanLeeuwen.</b>  <i>Reading Images: The Grammar of Visual Design.</i>  London and New York: Routledge, 1996: 20.
	
	");

	} else if ($citation=='kressvl3') {
	
	print("
	
	<b>Kress, Gunther and Theo vanLeeuwen.</b>  <i>Reading Images: The Grammar of Visual Design.</i>  London and New York: Routledge, 1996.
	
	");
	
	} else if ($citation=='horn1') {
	
	print("
	
	<b>Horn, Robert E.</b> <i>Visual Language: Global Communication for the 21st Century.</i> Bainbridge Island, Washington: MacroVU, Inc., 1998: 25.
	
	");

	} else if ($citation=='horn2') {
	
	print("
	
	<b>Horn, Robert E.</b> <i>Visual Language: Global Communication for the 21st Century.</i> Bainbridge Island, Washington: MacroVU, Inc., 1998.
	
	");
	
	} else if ($citation=='burbules') {
	
	print("
	
	<b>Burbules, Nicholas.</b>  \"The rhetorics of the web: hyperreading and critical literacy.\"  <i>Page to Screen: Taking Literacy into the Electronic Era.</i>  Ed. Ilana Snyder.  London and New York: Routledge, 1998.
	
	");
	
	} else if ($citation=='kolln') {
	
	print("
	
	<b>Kolln, Martha.</b>  <i>Rhetorical Grammar: Grammatical Choices, Rhetorical Effects.</i>  Third Edition.  Boston: Allyn and Bacon, 1996: 214.
	
	");
	
	} else if ($citation=='kress') {
	
	print("
	
	<b>Kress, Gunther.</b> \"Visual and verbal modes of representation in electronically mediated communication; the potentials of new forms of text.\" <i>Page to Screen: Taking Literacy into the Electronic Era.</i>  London and New York: Routledge, 1998.
	
	");
	
	} else if ($citation=='kurtz') {
	
	print("
	
	<b>Kurtz, Glenn A.</b> \"The Aesthetics of Scale.\" <i>Artweek</i> 28:2 (February 1997): 13.
	
	");
	
	} else if ($citation=='ascott') {
	
	print("
	
	<b>Ascott, Roy.</b> \"Photography at the Interface.\"  <i>Electronic Culture: Technology and Visual Representation.</i>  Ed. Timothy Druckrey.  New York: Aperture, 1996: 168.
	
	");
	
	} else if ($citation=='boltergrusin') {
	
	print("
	
	<b>Bolter, Jay David and Richard Grusin.</b>  \"Remediation.\"  <i>Configurations</i> 4.3 (1996) 311-358.
	
	");
	
	}
	
	print("
	
	<p><img src=\"images/arrow_l.gif\" width=\"10\" height=\"10\" border=\"0\" alt=\"Back to text\"><font size=\"1\" face=\"Verdana,Arial,Helvetica\"><a href=\"main.php?sectionID=$returnID#$anchorID\">Back to text</a> |</font>
	
	");
		
}

if ($citation!='all') {

print("

<font size=\"1\" face=\"Verdana,Arial,Helvetica\"><a href=\"main.php?sectionID=$sectionID&citation=all\">Full list of works cited</a></font><a href=\"main.php?sectionID=$sectionID&citation=all\"><img src=\"images/arrow_r.gif\" width=\"10\" height=\"10\" border=\"0\" alt=\"Full list of works cited\"></a></p>

");

}

} else if ($sectionID==600) {

print("

<p>I stress that the technologies of hyperconsumption <i>can</i> ideologically position users as passive in order to avoid suggesting that they <i>necessarily</i> do so.  A non-reductionistic account of ideology and subjectivity would acknowledge that the workings of hegemonic or dominant cultures can engender the possibility of their own opposition.  Perhaps Mark Napier's <a href=\"http://www.potatoland.org/shredder/shredder.html\">Shredder</a>, when <a href=\"http://www.potatoland.org/cgi-bin/shred.pl?http://www.beyond.com\">applied to</a> a site like <a href=\"http://www.beyond.com\">beyond.com</a>, points to an example of this process.</p>
<p><img src=\"images/arrow_l.gif\" width=\"10\" height=\"10\" border=\"0\" alt=\"Back to text\"><font size=\"1\" face=\"Verdana,Arial,Helvetica\"><a href=\"main.php?sectionID=$returnID#$anchorID\">Back to text</a></font></p>

");
}
?>


<!-- end content include -->

<!-- begin footer -->

<?


if ($sectionID!=401) {
 if ($sectionID!=500) {
  if ($sectionID!=600) {
print ("<p><font size=\"1\" face=\"Verdana,Arial,Helvetica\"><a href=\"main.php?sectionID=$nextpageID\">Next: $nextpagetitle</a></font><a href=\"main.php?sectionID=$nextpageID\"><img src=\"images/arrow_r.gif\" width=\"10\" height=\"10\" border=\"0\" alt=\"\"></a></p>");
  }
 }
}

?>

<hr size=1>

<font face="Verdana, Arial, Geneva" size=1 color="#666666"><b>Seeing the Digital: Emerging Visual Literacies</b><br>
Gregory Veen | Department of English | University of Washington</font>
<br>
<img src="images/spacer.gif" width="430" height="1" border="0" alt="">

<!-- end footer -->

</td>
<td width=15>&nbsp;</td>
</tr>
</table>

</div>
</BODY>
</HTML>

