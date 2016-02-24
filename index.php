<?php

require("page.php");

$homepage = new Page();

$homepage->title = "<title> Home :: Marcela Melara, PhD student, CS Dept, Princeton University</title>\n";
$homepage->content = "<span class=\"label_blue\">About me</span><hr class=\"line\"/>
<div class=\"inner\">
<p>
I am a second-year PhD student in the Computer Science Department at Princeton University working with <a href=\"http://www.cs.princeton.edu/~mfreed\">Mike Freedman</a> and <a href=\"http://www.cs.princeton.edu/~felten\">Ed Felten</a>. In my research, I seek to build systems that provide strong security while operating in untrusted environments.
</p>

<p>Previously, I recevied my M.S.E. in Computer Science from Princeton in June 2014, and was co-advised by Ed Felten and Mike Freedman. My Master's thesis was on <a href=\"http://coniks.org\">CONIKS</a>, a practical key management system for end users, which is run by untrusted key servers.</p>

<p>I received my B.S. in Computer Science, with a Minor in Physics from <a href=\"http://www.hws.edu\">Hobart and William Smith Colleges</a> (HWS) in Geneva, NY in May 2012. 
</p>
</div>

<br/>

<span class=\"label_blue\">Current Research</span><hr class=\"line\"/>
<div class=\"inner\">
<p>
<div class=\"project_name\">Stormship</div>
Design and build a tool to detect malicious scripts injected into web pages served via HTTP. 
</p>

<p>For descriptions of all my projects, current and past, please visit my <a href=\"projects.php\">research & projects</a> page.</p>
</div>

<br/>

<span class=\"label_blue\">Publications</span><hr class=\"line\"/>
<div class=\"inner\">
<p>
CONIKS: Bringing Key Transparency to End Users (<a 
href=\"pubs/sec15-paper-melara.pdf\">pdf</a>) (<a href=\"pubs/coniks_usenix15_pres.pdf\">slides</a>)<br/>
<span class=\"label_gray\">M. Melara, A. Blankstein, J. Bonneau, E. Felten, M. Freedman. Usenix Security 2015</span>
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
I am from Miami, Florida, though I lived in Germany for over a decade as well. 
I enjoy playing and practicing a wide variety of sports including tennis, 
taekwondo, yoga, rock climbing and alpine skiing. 
Other interests I have are cooking and playing board games.
</p>

<br/>

</div>

\n";

$homepage->Display();

?>
