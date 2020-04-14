<?php
declare(strict_types=1);

namespace Modules;

use Pages\vDesk\About;
use Pages\vDesk\Contact;
use Pages\vDesk\Index;
use vDesk\Configuration\Settings;
use vDesk\IO\DirectoryInfo;
use vDesk\IO\FileInfo;
use vDesk\IO\Path;
use vDesk\Modules\Module;
use vDesk\Pages\Page;
use vDesk\Pages\Request;

/**
 * Module for serving the tutorial files of the Package.
 *
 * @package Modules
 * @author  Kerry <DevelopmentHero@gmail.com>
 */
class vDesk extends Module {
    
    /**
     * The index function of the Module.
     *
     * @return \Pages\Documentation A Page that represents the current overview of available tutorials.
     */
    public static function Index(): Page {
        return new Page(
            [
                "Pages"   => static::GetPages(),
                "Current" => new Index()
            ],
            ["vDesk"],
            ["vDesk"],
            ["vDesk"]
        );
    }
    
    /**
     * Gets the currently installed Pages.
     *
     * @return array
     */
    public static function GetPages(): array {
        return (new DirectoryInfo(Settings::$Local["Pages"]["Pages"] . Path::Separator . "vDesk"))
            ->GetFiles()
            ->Map(static fn(FileInfo $Page): string => "\\Pages\\vDesk\\{$Page->Name}")
            ->Map(static fn(string $Page): Page => new $Page())
            ->ToArray();
    }
    
    /**
     * Sends the contents of the contact-form to a specified recipient email-address.
     *
     * @param null|string $Name    The name of the sender.
     * @param null|string $Topic   The topic of the message.
     * @param null|string $Email   The e-mail address for replies.
     * @param null|string $Message The message to send.
     *
     * @return \vDesk\Pages\Page A page representing the transmission of the message.
     */
    public static function Send(?string $Name = null, ?string $Topic = null, ?string $Email = null, ?string $Message = null): Page {
        $Name    ??= Request::$Parameters["Name"];
        $Topic   ??= Request::$Parameters["Topic"];
        $Email   ??= Request::$Parameters["Email"];
        $Message ??= Request::$Parameters["Message"];
        
        $Content = <<<Content
Name: $Name,
Topic: $Topic,
Email: $Email,
Message
_________
$Message
Content;
        
        return new Contact(
            [
                "Pages"   => static::GetPages(),
                "Current" => new Contact([
                    "Success" => \mail(Settings::$Local["Homepage"]["Recipient"], $Topic, $Content, ["From" => "noreply@vdesk.cloud"])
                ])
            ],
            ["vDesk"],
            ["vDesk"],
        );
    }
    
    /**
     * Displays a specified Page.
     *
     * @param string|null $Page The Page to display.
     *
     * @return \Pages\Documentation The requested tutorial.
     */
    public static function Page(string $Page = null): Page {
        $Page  ??= Request::$Parameters["Page"];
        $Class = "\\Pages\\vDesk\\{$Page}";
        return new $Class(
            [
                "Current" => new $Class(),
                "Pages"   => static::GetPages(),
            ],
            ["vDesk"],
        );
    }
    
}