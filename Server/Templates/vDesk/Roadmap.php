<?php

use vDesk\Pages\Functions;

?>
<h2>Roadmap</h2>
<p>
    This is an enumeration of planned features for the future.<br>
    If you miss a feature or have any good ideas, you're welcome to contact the author or <a href="<?= Functions::URL("vDesk", "Page", "Contribute") ?>">Contribute</a> to the
    project:
</p>
<hr>
<h3>General features</h3>
<ul>
    <li>Updater module and patch server</li>
    <li>Workflowengine with drag&drop editor</li>
    <li>Taskdispatcher to automate processes</li>
    <li>Mobile client</li>
    <li>Version control package</li>
    <li>Graphical installer</li>
    <li>PostgreSQL-, MSSQL- and Oracle-database support</li>
    <li>Process-based execution without the need of a webserver and clustered hosting of modules</li>
    <li>Template system</li>
    <li>Custom dialog boxes</li>
    <li>E-Mail client</li>
</ul>
<hr>
<h3 id="Archive">Archive</h3>
<ul>
    <li>Import/export of entire directory structures</li>
    <li>Streaming of files</li>
    <li>Mounting points for different Archives or filesystems like IPFS</li>
    <li>API for adding custom elements to the Archive</li>
    <li>Versioncontrol for Archive files</li>
    <li>Sharing files and folders via temporary links</li>
    <li>Rich text editor for html-, code- and</li>
    <li>Contextmenu API for creation of new files</li>
    <li>Contextmenu option for creation of text files</li>
    <li>Contextmenu option for creation of PHP files</li>
    <li>Contextmenu option for creation of JavaScript files</li>
    <li>CSV-Editor with inline value editing, adding and dropping rows and columns</li>
    <li>Plugin for displaying directory contents in a separate window</li>
</ul>
<hr>
<h3 id="Pinboard">Pinboard</h3>
<ul>
    <li>Coordinate system that translates the position of Pinboard elements according the screen resolution</li>
    <li>API for attachable custom elements</li>
    <li>Formatting notes with HTML</li>
</ul>
<hr>
<h3 id="Calendar">Calendar</h3>
<ul>
    <li>CalDAV-import/-export of events</li>
    <li>Meetings with participation status tracking</li>
    <li>Configurable reminder notifications for upcoming events and meetings</li>
    <li>Customizable events text color</li>
    <li>Rich text editor for events</li>
    <li>Contextmenu option for attaching events and meetings to the Pinboard</li>
</ul>
<hr>
<h3 id="Contacts">Contacts</h3>
<ul>
    <li>CarDAV-import/-export of private and business contacts</li>
    <li>Contextmenu option for attaching private and business contacts to the Pinboard</li>
</ul>
<hr>
<h3 id="Messenger">Messenger</h3>
<ul>
    <li>AccessControlList based custom chatrooms</li>
    <li>Contextmenu option for attaching conversations to the Pinboard(?)</li>
    <li>Configurable notifications for new messages</li>
</ul>
<hr>
<h3 id="Colors">Colors</h3>
<ul>
    <li>Replacing icons with colorizable vectorgraphics. Luckily, the people from</li>
</ul>
<hr>
<h3 id="Security">Security</h3>
<ul>
    <li>Option to inherit permissions from existing groups</li>
</ul>
<hr>
<h3 id="Search">Search</h3>
<ul>
    <li>Querylanguage for the generic search to enable searching for multiple values</li>
    <li>Specific package versions as dependencies</li>
</ul>
<hr>
<h3 id="Packages">Packages</h3>
<ul>
    <li>Creating setups and packages bundled with the dependencies of a package file</li>
</ul>
<hr>
<h3 id="Events">Events</h3>
<ul>
    <li>Configurable storage of eventlisteners in separate directory</li>
    <li>Make the Archive package a "soft" dependency</li>
</ul>
<hr>
<h3 id="Modules">Modules</h3>
<ul>
    <li>Clustered hosting of modules</li>
    <li>Process based execution of modules</li>
</ul>