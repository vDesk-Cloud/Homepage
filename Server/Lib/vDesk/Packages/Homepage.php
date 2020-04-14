<?php
declare(strict_types=1);

namespace vDesk\Packages;

use vDesk\Configuration\Settings;
use vDesk\Package;
use vDesk\Pages\IPackage;

/**
 * Package that installs the vDesk homepage.
 *
 * @package vDesk\Packages
 * @author  Kerry <DevelopmentHero@gmail.com>
 */
class Homepage extends Package implements IPackage {
    
    /**
     * The name of the Package.
     */
    public const Name = "Homepage";
    
    /**
     * The version of the Package.
     */
    public const Version = "1.0.0";
    
    /**
     * The name of the Package.
     */
    public const Vendor = "Kerry <DevelopmentHero@gmail.com>";
    
    /**
     * The name of the Package.
     */
    public const Description = "Package that the vDesk project website.";
    
    /**
     * The dependencies of the Package.
     */
    public const Dependencies = ["Pages" => "1.0.0"];
    
    /**
     * The files and directories of the Package.
     */
    public const Files = [
        self::Server => [
            self::Modules     => [
                "vDesk.php"
            ],
            self::Pages       => [
                "vDesk.php",
                "vDesk"
            ],
            self::Templates   => [
                "vDesk.php",
                "vDesk"
            ],
            self::Stylesheets => [
                "vDesk.css",
                "Packages.css"
            ],
            self::Images      => [
                "Packages",
                "Packages.png",
                "Installation.png",
                "me.jpg"
            ],
            self::Scripts     => [
                "vDesk.js"
            ]
        ]
    ];
    
    /**
     * @inheritDoc
     */
    public static function Install(\Phar $Phar, string $Path): void {
        //Create Package configuration.
        Settings::$Local["Homepage"]                    = new Settings\Local\Settings(
            [
                "Recipient" => "email-address"
            ],
            "Homepage"
        );
        Settings::$Local["Routes"]["vDesk/Page/{Page}"] = [
            "Module"  => "vDesk",
            "Command" => "Page"
        ];
        static::Deploy($Phar, $Path);
    }
    
    /**
     * @inheritDoc
     */
    public static function Uninstall(string $Path): void {
        static::Undeploy();
    }
}