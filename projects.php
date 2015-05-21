<?php

require("page.php");

$projectpage = new Page();

$projectpage->title = "<title> Projects :: Marcela Melara, PhD student, CS Dept, Princeton University</title>\n";
$projectpage->content = "<span class=\"label_blue\">Current Research</span><hr class=\"line\"/>

<ul>
<p>
<li><div><i>Multisurf</i></div>
</li>
<div class=\"descrip\">
Advisors: Prof. Edward Felten, Prof. Nick Feamster<br/>
<br/>
This work is an extension of a course project started in Fall 2013. The goal is to design an application that can detect in-flight modifications to web pages visited via a browser by comparing a served web page from multiple network vantage points. More specifically, this application must be able to distinguish benign modifications (such as locality-specific data or ads) from malicious changes (such as malicious script injections) automatically on behalf of the user. The idea is to use machine learning to faciliate the automatic detection of malicious modifications.
</div>
</p>

<p>
<li><div><i>CONIKS: Practical Key Management for End Users</i></div>
</li>
<div class=\"descrip\">
Advisors: Prof. Edward Felten, Prof. Michael Freedman<br/>
<a href=\"http://coniks.org\">Project website</a><br/>
<a href=\"https://github.com/coniks-sys\">Open source code</a><br/>
<br/>
This was my Master's thesis project, which we have continued expanding. The goal is to design a key management system for end users that integrates into secure communication systems. In particular, our system provides consistency and privacy of name-to-key bindings using a tamper-evident data structure, making any violation of this consistency by malicious key servers efficiently detectable. Central to our system are four protocols for registering name-to-key bindings, checking the inclusion of name-to-key bindings in the key directory, monitoring that key bindings do not change unexpectedly over time, and auditing that the key server is presenting consistent views of its drectory to all participants in the system.
</div>
</p>
</ul>

<span class=\"label_blue\">Past Research</span><hr class=\"line\"/>
<ul>
<p>
<li><div><i>Web Transparency Project</i></div>
</li>
<div class=\"descrip\">
Advisor: Prof. Arvind Narayanan<br/>
<a href=\"http://webtransparency.org\">Project website</a><br/>
<br/>
This work is an extension of a course project started in Fall 2012. The goal is to survey web tracking practices via web browsing on mobile devices, and to compare these practices with the findings of the <a href=\"fourthparty.info\">FourthParty project</a>.
</div>
</p>

<p>
<li><div><i>ELARA: Environmental Liaison and Automated Recycling Assistant</i></div>
</li>
<div class=\"descrip\">
Advisor: Prof. John Vaughn<br/>
<br/>
This was my Honors project in CS at HWS. The primary goal was to design and create a system to improve environmental recycling, as many people often do a poor job at identifying the materials which can be recycled. Thus, my project included two approaches to help solve this issue: (1) leverage the general public's knowledge about recyclables at a website to help identify recyclable items (aka crowdsourcing), and (2) build a networked kiosk to help users separate their waste correctly. I did some preliminary work on this project over the summer of 2011.<br/>
Throughout my last two semesters as an undergraduate, I implemented the final design of the kiosk application, and built the hardware platform on which my program runs. Although I have graduated and completed this project with Honors, I plan to continue working on some aspects of this project during the next few years as well.
</div>
</p>

<p>
<li><div><i>Building Automatic and Scalable Tools for Improving Environmental Recycling</i>, May 2011 - July 2011</div>
</li>
<div class=\"descrip\">
Advisors: Prof. Marc Corliss, Prof. John Vaughn<br/>
<br/>
During this summer research project, I designed what is now the ELARA project. I first conducted extensive research on crowdsourcing to learn of ways to motivate a large crowd to become part of an online project. 
<br/>The second major component of this project was to design and build a hardware and software system that makes use of the crowd's knowledge about recycling to assist others in sorting garbage correctly. This system is comprised of a networked embedded computer with a Java application running on it representing a recycling assistant, and the system website which provides the space where users can contribute to the project and track of their recycling progress.
</div>
</p>

<p>
<li><div><i>Using FPGAs to create a Complete Computer System for the Classroom</i></div>
</li>
<div class=\"descrip\">
Advisor: Prof. Marc Corliss<br/>
<br/>
The primary objective of this project was to use a field-programmable gate array (FPGA), a software configurable device, to replace a simulator with an actual hardware platform students can easily use in several computer science courses. The motivation for this project was to help solve the often-arising problem in computer systems education students must work with overly complex commercial systems, or use unrealistic simulators/emulators when learning how a computer works and how to build one. In order to create this computer system, I designed and then implemented a 16-bit educational processor according to an ISA called Larc on an FPGA using Verilog. After the basic processor was working, I incrementally added support for I/O devices (keyboard, monitor and disk) and for an educational OS called Vireos. At the end of the summer, a Unix-based shell featuring all major functionalities of common shells such as redirection and piping, was able to run on my computer system.
<br/><br/>
Prof. Corliss and I published a paper in conjunction with this project at the 2011 SIGCSE Conference: \"Vireos: an Integrated, Bottom-up Educational Operating Systems Project with FPGA support\" (<a href=\"pubs/vireos.pdf\">pdf</a>)
</div>
</p>
</ul>

<br/>

<span class=\"label_blue\">Other Projects</span><hr class=\"line\"/>
<ul>
<p>
<li><div><i>Seneca7 web-based real-time Race Tracker</i>, Nov 2010 - April 2011</div>
</li>
<div class=\"descrip\">
Advisors: Prof. Marc Corliss, Jeff Henderson<br/>
<a href=\"http://www.seneca7.com\">Seneca7 website</a>
<br/>
<br/>
This project is part of a part-time internship I did in the Spring 2011 for a new local running relay race in Geneva, NY. The goal is to build a web-based tracking program that tracks each team in the Seneca7 relay race, displaying the team's position on the race course in real-time. 
The tracker uses timestamps collected when each team crosses a waypoint,
and computes an estimated velocity given past data points (using the Google Maps API). During the race, users are able to access the tracker via a web browser.
</div>
</p>

<p>
<li><div><i>The Seneca Saga</i>, Games4Girls competition 2010</div>
</li>
<div class=\"descrip\">
Won Honorable Mention<br/>
<br/>The goal is to create a computer game geared towards teenage girls.
In this Zelda-style RPG, a princess sets out on a journey to save her kindom from an 
evil wizard, who intends to spark a war between two neighboring kingdoms by kidnapping
the princess' brother.<br/>
The game plot was a collective effort by the competition team. I was additionally
involved with designing and programming one of the game levels, as well as with
setting the soundtrack for most game levels.
</div>
</p>
</ul>

\n";

$projectpage->Display();

?>
