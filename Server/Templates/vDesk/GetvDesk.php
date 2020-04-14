<?php

use vDesk\Documentation\Code;
use vDesk\Pages\Functions;
//@todo Add download links to package phars.

?>
<h2>Get vDesk</h2>
<p class="Description">vDesk comes with a variety of preselected Packages composed in the official standard release.</p>
<p>For specific downloads and a list of bundled core-packages, visit the <a href="<?= Functions::URL("vDesk", "Page", "Packages") ?>">Packages</a> section.
</p>
<hr>
<h3>Downloads</h3>
<p>
    For a list of further downloads, visit the releases page of the official <a target="_blank" href="https://www.github.com/vDesk-Cloud/vDesk/releases/">GitHub</a>-repository.
</p>
<ul class="Downloads">
    <li>GitHub.com <a href="https://www.github.com/vDesk-Cloud/vDesk/releases/download/1.0.0/Setup.phar" download>Setup.phar</a></li>
    <li>vDesk.cloud <a href="<?= Functions::URL("Downloads", "Setup.phar") ?>" download>Setup.phar</a></li>
</ul>
<hr>
<h3>Requirements</h3>
<ul>
    <li>PHP >= 7.4</li>
    <li>MySQL >= 5.6 compatible SQL server</li>
    <li>Webserver (Apache 2.4 recommended)</li>
    <li>ECMAScript 6 compatible browser</li>
</ul>
<p>
    vDesk aims to run on minimal permissive systems, that means <a target="_blank" href="https://www.apachefriends.org">XAMPP</a> or any similar *AMP(P)-stack can be installed for a quick setup of the server-side environment.<br>
    However, this approach is not recommended for production use, without tweaking certain php.ini settings before.
</p>
<hr>
<h3>Installation</h3>
<p>
    Download and copy the Setup.phar into your desired target installation directory.<br>
</p>
<p>
    Open a console and move to the target directory <code class="Inline"><?= Code::Console("cd %TargetDir%") ?></code> (by replacing the part between the <code class="Inline"><?= Code::Console("%") ?></code>-characters with an absoulte path to the directory, in which you've copied the Setup.phar)<br>
    and execute <code class="Inline"><?= Code::Console("php Setup.phar") ?></code> to start the installer.
</p>
<p>
    Alternatively, execute <code class="Inline"><?= Code::Console("php /%TargetDir%/Setup.phar") ?></code>
</p>
<p>
    After the installation has been completed, you can login with the "System"-user and your specified password in the client located under <code class="Inline">http://%YourDomain%/Client/vDesk.html</code>
</p>
<section style="text-align: center">
    <aside onclick="this.classList.toggle('Fullscreen')">
        <img  src="<?= Functions::Image("Installation.png") ?>">
    </aside>
</section>
<p>
    Depending on the bundled packages of the current release,<br>
    there may packages that require further user-input in the manner of asking for the database-credentials or initial password of the system user.
</p>
<hr>
<h3>Installation of packages</h3>
<p>
    vDesk ships with a package system that allows the user to enhance running installations with additional features or to remove unneeded functionality.
</p>
<p>
    To install a package, open the main menu by clicking in the top left corner on the button labeled "vDesk".<br>
    Open the "Administration"-dialog and navigate to the "Packages"-tab.<br>
    Click on "Install Package" and select the package file to install.<br>
    The package will then appear in the list of installed packages.
</p>
<section style="text-align: center">
    <aside onclick="this.classList.toggle('Fullscreen')">
        <img  src="<?= Functions::Image("Packages.png") ?>">
    </aside>
</section>
<p>
    To uninstall a package, simply select the package you want to remove in the list of installed packages and click on "Uninstall Package".<br>
    <b>Note:</b> Performing this operation will uninstall every package depending on the package to remove.
</p>