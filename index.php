<?php

require("page.php");

$homepage = new Page();

$homepage->title = "<title> Home :: Marcela Melara, PhD student, CS Dept, Princeton University</title>\n";
$homepage->content = "<span class=\"label_blue\">About me</span><hr class=\"line\"/>
<div class=\"inner\">
<p>
I am a second-year PhD student in the Computer Science Department at Princeton University working with <a href=\"http://www.cs.princeton.edu/~felten\">Ed Felten</a> and <a href=\"http://www.cs.princeton.edu/~mfreed\">Mike Freedman</a>. My research interests are security, systems, networks, and applied cryptography. 
</p>

<p>
Previously, I recevied my M.S.E in Computer Science from Princeton in June 2014, and was co-advised by Ed Felten and Mike Freedman. My Master's thesis was on a key management system for end-to-end encrypted communication.</p>

<p>I received my B.S. in Computer Science, with a Minor in Physics from <a href=\"http://www.hws.edu\">Hobart and William Smith Colleges</a> (HWS) in Geneva, NY in May 2012. I worked on two major research projects in Systems with <a href=\"http://math.hws.edu/vaughn\">John Vaughn</a> and <a href=\"http://math.hws.edu/web/faculty/corliss\">Marc Corliss</a>. 
</p>
</div>

<br/>

<span class=\"label_blue\">Current Research</span><hr class=\"line\"/>
<div class=\"inner\">
<p>
<div class=\"project_name\">Multisurf</div>
Detect in-flight modifications to web pages, and differentiate malicious changes from
regular dynamic web page content (e.g., malicious script injection vs. locality-based
ads).
</p>

<p>
<div class=\"project_name\">CONIKS: Practical Key Management for End Users</div>
This was my MSE thesis project, which I have continued expanding.<br/>
Design and build a practical key verification service for end-user public encryption keys.
We achieve this via publicly-auditable, privacy preserving key directories that 
periodically generate cryptographic &quot;snapshots&quot; of the current state making it
possible for CONIKS clients to detect spurious keys or inconsistent views
of any one key directory in an efficient manner.<br/>
<a href=\"http://www.coniks.org\">Project website</a> <br/>
<a href=\"https://github.com/coniks-sys\">Open source code</a>
</p>

<p>For more extensive descriptions of all my projects, please visit my <a href=\"projects.php\">research & projects</a> page.</p>
</div>

<br/>

<span class=\"label_blue\">Publications</span><hr class=\"line\"/>
<div class=\"inner\">
<p>
Bringing Deployable Key Transparency to End Users <br/>
<span class=\"label_gray\">M. Melara, A. Blankstein, J. Bonneau, E. Felten, M. Freedman. <i class=\"label_green\">To appear in</i> Usenix Security 2015</span>
</p>
<p>
CONIKS: Preserving Secure Communication with Untrusted Identity Providers (<a href=\"pubs/mse-thesis.pdf\">pdf</a>) <br/>
<span class=\"label_gray\">M. Melara. Master's Thesis. Princeton University, Department of Computer Science. <br/> Advisor: Edward W. Felten. 2014.</span>
</p>
<p>
Shining the Floodlights on Mobile Web Tracking — A Privacy Survey (<a href=\"pubs/s2p2.pdf\">pdf</a>)
<br/>
<span class=\"label_gray\">C. Eubank, M. Melara, D. Perez Botero, A. Narayanan. W2SP 2013.</span>
</p>

<p>A more detailed list of publications and course papers can be found <a href=\"publications.php\">here</a>.</p>
</div>

<br/>

<span class=\"label_blue\">Personal</span><hr class=\"line\"/>
<div class=\"inner\">
<p>
I am from Miami, Florida, but I lived in a rural town near Munich, Germany for eleven years.
I grew up in a bilingual household (Spanish-English), am fluent in German, and
I studied French for 9 years.
</p>

<p>
In terms of hobbies, I am interested in a wide variety of sports: 
I play tennis (competitively during middle
school and high school), I have a black belt in Taekwondo (first Dan WTF), and
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
