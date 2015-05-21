<?php

require("page.php");

$homepage = new Page();

$homepage->title = "<title> Home :: Marcela Melara, PhD student, CS Dept, Princeton University</title>\n";
$homepage->content = "<span class=\"label_blue\">About me</span><hr class=\"line\"/>
<p>
I am currently a first-year PhD student in the Computer Science Department at Princeton University working with <a href=\"http://www.cs.princeton.edu/~felten\">Ed Felten</a>. My research interests are security, systems, networks, and applied cryptography. 
</p>

<p>
Previously, I recevied my M.S.E in Computer Science from Princeton in June 2014, and was co-advised by Ed Felten and <a href=\"http://www.cs.princeton.edu/~mfreed\">Mike Freedman</a>. My Master's thesis was on a key management system for end-to-end encrypted communications.</p>

<p>I received my B.S. in Computer Science, with a Minor in Physics from <a href=\"http://www.hws.edu\">Hobart and William Smith Colleges</a> (HWS) in Geneva, NY in May 2012. I worked on two major research projects in Systems. In particular, I worked on a Computer Architecture project (LARC) and an Embedded Computing/Systems Engineering project (ELARA). I primarily worked with <a href=\"http://math.hws.edu/vaughn\">John Vaughn</a> and <a href=\"http://math.hws.edu/web/faculty/corliss\">Marc Corliss</a>. 
</p>

<br/>

<span class=\"label_blue\">Research</span><hr class=\"line\"/>
<p>
<ul>

<li><div><i>Multisurf</i>, Oct 2013 - present</div>
</li>
<div class=\"descrip\">
Detect in-flight modifications to web pages, and differentiate malicious changes from
regular dynamic web page content (e.g., malicious script injection vs. locality-based
ads).
</br>

</div>

<li><div><i>CONIKS: Key Management for Secure Communication</i>, Jan 2013 - present</div>
</li>
<div class=\"descrip\">
This was my MSE thesis project, which I have continued expanding.<br/>
Design and build a practical key verification service for end-user public encryption keys.
We achieve this via publicly-auditable, privacy preserving key directories that 
periodically generate cryptographic &quot;snapshots&quot; of the current state making it
possible for CONIKS clients to efficiently detect spurious keys or inconsistent views
of any one key directory.<br/>
<a href=\"http://www.coniks.org\">CONIKS website</a>  <a href=\"https://github.com/coniks-sys\">CONIKS code</a>
</div>

<li><div><i>Web Transparency Project: Mobile Web Tracking Survey</i>, Oct 2012 - April 2013</div>
</li>
<div class=\"descrip\">
Compare tracking practices of desktop web browsing with those of mobile web browsing,
and determine mobile-specific tracking characteristics.<br/>
<a href=\"http://webtransparency.org\">Web Transparency website</a>
</div>

<li><div><i>ELARA: Environmental Liaison and Automated Recycling Assistant</i>, Aug 2011 - April 2012</div>
</li>
<div class=\"descrip\">
This was my Senior Honors thesis project.<br/>
Design and build an automated recycling system which assists users in recycling 
when discarding waste at dedicated kiosks by informing the user if their item is
recyclable, compostable, or landfill garbage. Information about waste items
is collected via crowdsourcing, and used by the kiosks.
</div>

<li><div><i>Using FPGAs to create a Complete Computer System for the Classroom</i>, June 2010 - Aug 2010</div>
</li>
<div class=\"descrip\">
Implement a 16-bit intruction set architecture designed for educational purposes on an 
FPGA, which supports a simple operating system and basic peripheral devices.
</div>

</ul>
</p>

<p>
Below is a list of other computer science projects I worked on througout my time at HWS:</p>
<p>
<ul>

<li><div><i>Seneca7 web-based real-time Race Tracker</i>, Nov 2010 - April 2011</div>
</li>
<div class=\"descrip\">
Build a web-based tracking program that tracks each team in the Seneca7 relay race,
displaying the team's position on the race course in real-time. 
The tracker uses timestamps collected when each team crosses a waypoint,
and computes an estimated velocity given past data points.<br/>
<a href=\"http://www.seneca7.com\">Seneca7 website</a>
</div>
<li><div><i>The Seneca Saga (for Games4Girls competition)</i>, Oct 2009 - April 2010</div>
</li>
<div class=\"descrip\">
Won Honorable Mention.<br/>
In this Zelda-style RPG, a princess sets out on a journey to save her kindom from an 
evil wizard, who intends to spark a war between two neighboring kingdoms by kidnapping
the princess' brother.<br/>
The game plot was a collective effort by the competition team. I was additionally
involved with designing and programming one of the game levels, as well as with
setting the soundtrack for most game levels.
</div>

</ul>
</p>

<br/>

<p>For more extensive descriptions of all my projects, please visit my <a href=\"projects.php\">research & projects</a> page.</p>

<br/>

<span class=\"label_blue\">Publications</span><hr class=\"line\"/>
<p>
CONIKS: Preserving Secure Communication with Untrusted Identity Providers (<a href=\"pubs/mse-thesis.pdf\">pdf</a>) <br/>
<span class=\"label_gray\">M. Melara. Master's Thesis. Princeton University, Department of Computer Science. Advisor: Edward W. Felten. 2014.</span>
</p>
<p>
Shining the Floodlights on Mobile Web Tracking — A Privacy Survey (<a href=\"pubs/s2p2.pdf\">pdf</a>)
<br/>
<span class=\"label_gray\">C. Eubank, M. Melara, D. Perez Botero, A. Narayanan. W2SP 2013.</span>
<br/>
<br/>
ELARA: Environmental Liaison and Automated Recycling Assistant (<a href=\"pubs/honors-thesis.pdf\">pdf</a>) <br/>
<span class=\"label_gray\">M. Melara. Senior Honors Thesis. HWS Dept. of Math and CS 2012.</span>
<br/>
<br/>
Using FPGAs to Create a Complete Computer System for the Classroom (<a href=\"pubs/nycwic-pres.pdf\">pres</a>) 
<br/>
<span class=\"label_gray\">M. Melara. NYCWiC 2011. </span>
<br/>
<br/>
Vireos: an Integrated, Bottom-Up Educational Operating Systems Project with FPGA support (<a href=\"pubs/vireos.pdf\">pdf</a>) 
<br/>
<span class=\"label_gray\">M. Corliss, M. Melara. SIGCSE 2011.</span>
</p>

<br/>

<p>A more detailed list of publications and course papers can be found <a href=\"pubs.php\">here</a>.</p>

<br/>

<span class=\"label_blue\">Teaching</span><hr class=\"line\"/>
<p>
COS 461 Computer Networks. Instructor: Michael Freedman. Princeton University, Spring 2014.
</p>
<p>
COS 318 Operating Systems. Instructors: Kai Li, Andy Bavier. Princeton University, Fall 2013.
</p>
<p> 
CPSC 124 Introduction to Programming. Instructor: Carol Critchlow. HWS, Spring 2012.
</p>
<p> 
CPSC 124 Introduction to Programming. Instructor: David Eck. HWS, Fall 2011.
</p>
<p>
FRE 227 French in Review II: Lire et &Eacute;crire. Instructor: Marie-France &Eacute;tienne. HWS, Fall 2009 and Spring 2011.
</p>
<p>
MATH 131 Calculus II. Instructor: Kevin Mitchell. HWS, Fall 2009.
</p>
<p>
SPAN 121 Intermediate Spanish I. Instructor: Jorge Torres-Lumsden. HWS, Spring 2009.
</p>
<p>
SPAN 121 Intermediate Spanish I. Instructor: Juan Liebana. HWS, Fall 2008.
</p>

<br/>

<span class=\"label_blue\">Personal</span><hr class=\"line\"/>
<p>
I am from Miami, Florida, but I lived in a rural town near Munich, Germany for eleven years.
I grew up in a bilingual household (Spanish-English), am fluent in German, and
I studied French for 9 years.
</p>

<p>
In terms of hobbies, I am interested in a wide variety of sports: 
I play tennis (competitively during middle
school and high school), I have a black belt (first Dan WTF) in Taekwondo, and
enjoy alpine skiing in the winter. More
recently I have begun practicing Yoga and rock climbing. Topics I like to read about
include science (broadly defined), green living and renewable energy, and
gender issues. Other interests I have are fanatsy/sci-fi books/TV shows/games, 
hiking/camping and cooking.
</p>

<br/>

</div>

\n";

$homepage->Display();

?>
