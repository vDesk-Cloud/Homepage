<?php
use vDesk\Pages\Functions;
use vDesk\Pages\Request;
?>
<script>
    const TryTo = () => "Development";

    function ParseThis() {
        return "Hero@";
    }

    const Stupid = {SpamBot: `gmail.com`};
</script>
<h2>Contact</h2>
<p>
    If you want to provide any feedback or just want to send me a message, you can either send the author an e-mail to <a id="Address">(Enable JavaScript)</a><br>
    or use the contact form below.
</p>
<script>
    const Address = document.getElementById("Address");
    Address.href = `mailto:${TryTo()}${ParseThis()}${Stupid.SpamBot}`;
    Address.textContent = `${TryTo()}${ParseThis()}${Stupid.SpamBot}`;
</script>
<h3>Leave a message</h3>
<form action="<?= Functions::URL("vDesk", "Page", "Contact", "Send") ?>" method="post">
    <fieldset>
        <p>
            <label for="Name">What's your name?</label><br>
            <input required id="Name" name="Name" type="text" placeholder="Name">
        </p>
        <p>
            <label for="Topic">The reason you are contacting me?</label><br>
            <input required id="Topic" name="Topic" type="text" placeholder="Topic" value="<?= Request::$Parameters["Topic"] ?? "" ?>">
        </p>
        <p>
            <label for="Email">How can i contact you?</label><br>
            <input required id="Email" name="Email" type="email" placeholder="Email">
        </p>
        <p>
            <label for="Message">What do you want to tell me?</label><br>
            <textarea required id="Message" name="Message" placeholder="Your message"><?= Request::$Parameters["Message"] ?? "" ?></textarea>
        </p>
        <p>
            <button type="submit">Send</button>
        </p>
    </fieldset>
</form>
<?php if($Success ?? false): ?>
<script>
    alert("Your message has been successfully sent!\r\n\r\nThank's for your reply!");
</script>
<?php endif; ?>
