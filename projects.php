<?php

require("page.php");

$projectpage = new Page();

$projectpage->title = "<title> Projects :: Marcela Melara, PhD student, CS Dept, Princeton University</title>\n";
$projectpage->content = "<span class=\"label_blue\">Current Research</span><hr class=\"line\"/>

<div class=\"inner\">

<p>
<div class=\"project_name\">Stormship</div>
<div class=\"descrip\">
This work is an extension of a course project started in Fall 2013. The goal is to design a tool that can detect malicious scripts included in web pages served over HTTP. The first step to finding anomalous and suspicious scripts is to compare individual web pages as seen from multiple geo-locations. The next step will be to use the results of our initial data analysis to build a training set for our machine learning-based tool, which will learn to distinguish benign scripts from malicious ones based on individual users' web browsing behavior.
</div>
</p>

</div>

<br/>

<span class=\"label_blue\">Past Research</span><hr class=\"line\"/>

<div class=\"inner\">

<p>
<div class=\"project_name\">Web Transparency Project</div>
<div class=\"descrip\">
This work is an extension of a course project started in Fall 2012. The goal is to survey web tracking practices on mobile devices, and to compare these practices with the findings of the <a href=\"fourthparty.info\">FourthParty project</a>, which surveyed web tracking on desktops.
<br/>
<a href=\"http://webtransparency.org\">Project website</a>
</div>
</p>

<p>
<div class=\"project_name\">ELARA: Environmental Liaison and Automated Recycling Assistant</div>
<div class=\"descrip\">
This was my Honors project at HWS. The primary goal is to design and create a system to improve environmental recycling, as many people often do a poor job at identifying the materials which can be recycled. Thus, my project included two approaches to help solve this issue: (1) leverage the general public's knowledge about recyclables at a website to help identify recyclable items (aka crowdsourcing), and (2) build a networked kiosk to help users separate their waste correctly. I did some preliminary work on this project over the summer of 2011.<br/>
Throughout my last two semesters as an undergraduate, I implemented the final design of the kiosk application, and built the hardware platform on which my program runs. Although I have graduated and completed this project with Honors, I plan to continue working on some aspects of this project during the next few years as well.
</div>
</p>

<p>
<div class=\"project_name\">Using FPGAs to create a Complete Computer System for the Classroom</div>
<div class=\"descrip\">
The primary objective of this project was to use a field-programmable gate array (FPGA), a software configurable device, to replace a simulator with an actual hardware platform students can easily use in several computer science courses. The motivation for this project was to help solve the often-arising problem in computer systems education students must work with overly complex commercial systems, or use unrealistic simulators/emulators when learning how a computer works and how to build one. In order to create this computer system, I designed and then implemented a 16-bit educational processor according to an ISA called Larc on an FPGA using Verilog. After the basic processor was working, I incrementally added support for I/O devices (keyboard, monitor and disk) and for an educational OS called Vireos. At the end of the project, a Unix-based shell featuring all major functionalities of common shells such as redirection and piping, was able to run on my computer system.
</div>
</p>

</div>

<br/>

<span class=\"label_blue\">Other Projects</span><hr class=\"line\"/>

<div class=\"inner\">

<p>
<div class=\"project_name\">Seneca7 web-based real-time Race Tracker</div>
<div class=\"descrip\">
This project is part of a part-time internship I did in the Spring 2011 for a new local running relay race in Geneva, NY. The goal is to build a web-based tracking program that tracks each team in the Seneca7 relay race, displaying the team's position on the race course in real-time. 
The tracker uses timestamps collected when each team crosses a waypoint,
and computes an estimated velocity given past data points (using the Google Maps API). During the race, users are able to access the tracker via a web browser.
</div>
</p>

<p>
<div class=\"project_name\"><i>The Seneca Saga</i>, Games4Girls competition 2010
</div>
<div class=\"descrip\">
Won Honorable Mention<br/>
The goal is to create a computer game geared towards teenage girls.
In this Zelda-style RPG, a princess sets out on a journey to save her kindom from an 
evil wizard, who intends to spark a war between two neighboring kingdoms by kidnapping
the princess' brother.<br/>
The game plot was a collective effort by the competition team. I was additionally
involved with designing and programming one of the game levels, as well as with
setting the soundtrack for most game levels.
</div>
</p>

</div>

\n";

$projectpage->Display();

?>
