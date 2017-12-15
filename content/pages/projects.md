Title: Projects
URL: projects.html
save_as: projects.html
page-order: 2

<div class="left">
<h4 class="text-primary">Intra-Process Sandboxing for the IoT</h4><hr class="line"/>
<div class="inner">
<p>
IoT application developers rely very heavily on third-party libraries
to reduce development time and effort. Despite their best
effort, developers may still <i>unintentionally</i> include malicious
third-party code, which may attempt to leak private sensor data to an
unintended remote server. To address this problem, we are designing a new
in-kernel sandbox that controls access to system resources at the granularity
of libraries without running them in separate processes. More specifically,
whenever an IoT application attempts to access a system resource, our
sandbox enforces a developer-supplied library access policy for that
resource. Using the application runtime's current callstack as the context
for the access, our sandbox determines whether to allow the access
according to the permissions given to the libraries found in the callstack.
</p>
<p>
To effectively solve this problem, we must also overcome a few other
challenges. (1) In order to ensure the validity of access control
decisions, we must protect the integrity of the runtime callstack against
potentially malicious libraries that may tamper with the runtime's memory.
This requires isolating the runtime's core memory from the application's
and libraries' memories.
(2) Dynamic language features and mechanisms such as reflection,
multi-threading, and asynchronous operations, may change the application
runtime's callstack dynamically. Our callstack-based access control system
must therefore be able to determine the correct permissions for the
current resource access context in the face of such dynamic features to
guarantee valid access control decisions.
</p>
</div>

<br/>

<h4 class="text-primary">Stormship: Detecting Malicious Script Injections in Web Pages</h4><hr class="line"/>
<div class="inner">
<p>
There are many parties and organizations that can see which websites we
visit, because they sit on the path between web clients, and the web
servers hosting the sites we request.
For instance, Internet Service Providers (ISPs) are
responsible for transmitting our web traffic, but reports have shown that
they may also inject ads into users’ requested web pages to increase revenue.
Other parties such as CDNs, enterprise software, client-side software,
and even malicious adversaries, may also intercept our web traffic for a
wide variety of reasons. Thus, we aim to study in-flight web page
modifications today, and to develop a browser-side tool that detects
<i>malicious</i> web page modifications automatically.
</p>
<p>
In a preliminary measurement study, we have found that page properties such
as the number of scripts included in a web page HTML source vary greatly
between different geographic locations. Our next step is to more closely
characterize the changes made to web pages in-transit between the server and
browser. To this end, we are conducting a second measurement study that will
help us determine what types of modifications are made to web pages in-flight
and which on-path parties are responsible for making these modifications.
With the results of these two studies, we will build a browser-side tool
that can automatically classify whether detected web page modifications
are of malicious nature, and warn the user.
</p>
</div>

<br/>

<h4 class="text-primary">CONIKS: Key Transparency for End Users</h4><hr class="line"/>
<div class="inner">
<p>
In recent years, online communication service providers have developed
new applications that have brought end-to-end encrypted communications
to the masses with an excellent user experience. However, these services
must make an important trade-off between added security and usability:
They must either entirely manage their users' encryption keys on their behalf
making them vulnerable to key server compromise and MITM attacks,
or leave key management to the users and ask them to verify each other's
keys themselves. Unfortunately, despite new techniques that have made
manual key verification more user-friendly, the vast majority of users still
do not take these steps to guarantee the security of their communications.
</p>
<p>
To address this problem, we designed <a class="text-info" href="https://coniks.cs.princeton.edu">CONIKS</a>, a key management system for end
users that improves the security and privacy of end-to-end secure
communication services. By having communication service providers maintain
tamper-evident and publicly auditable key directories on behalf of their
users, CONIKS allows secure communication clients to verify users' keys
automatically so users do not have to worry about the underlying encryption
or trust their service provider to be well-behaved.
</p>
</div>

<br/>

<p>As a Master's student and undergraduate, I also worked on several <a class="text-info" href="prior-projects.html">prior projects</a>.
</p>
</div>
