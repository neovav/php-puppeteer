<?php
namespace Puppeteer;

class Devices
{
    const NAME = 'name';
    const USER_AGENT = 'userAgent';
    const VIEWPORT = 'viewport';

    private static $list = [
        'Blackberry PlayBook' => 'BLACKBERRY_PLAYBOOK',
        'Blackberry PlayBook landscape' => 'BLACKBERRY_PLAYBOOK_LANDSCAPE',
        'BlackBerry Z30' => 'BLACKBERRY_Z30',
        'BlackBerry Z30 landscape' => 'BLACKBERRY_Z30_LANDSCAPE',
        'Galaxy Note 3' => 'GALAXY_NOTE_3',
        'Galaxy Note 3 landscape' => 'GALAXY_NOTE_3_LANDSCAPE',
        'Galaxy Note II' => 'GALAXY_NOTE_II',
        'Galaxy Note II landscape' => 'GALAXY_NOTE_II_LANDSCAPE',
        'Galaxy S III' => 'GALAXY_S_III',
        'Galaxy S III landscape' => 'GALAXY_S_III_LANDSCAPE',
        'Galaxy S5' => 'GALAXY_S5',
        'Galaxy S5 landscape' => 'GALAXY_S5_LANDSCAPE',
        'iPad' => 'IPAD',
        'iPad landscape' => 'IPAD_LANDSCAPE',
        'iPad Mini' => 'IPAD_MINI',
        'iPad Mini landscape' => 'IPAD_MINI_LANDSCAPE',
        'iPad Pro' => 'IPAD_PRO',
        'iPad Pro landscape' => 'IPAD_PRO_LANDSCAPE',
        'iPhone 4' => 'IPHONE_4',
        'iPhone 4 landscape' => 'IPHONE_4_LANDSCAPE',
        'iPhone 5' => 'IPHONE_5',
        'iPhone 5 landscape' => 'IPHONE_5_LANDSCAPE',
        'iPhone 6' => 'IPHONE_6',
        'iPhone 6 landscape' => 'IPHONE_6_LANDSCAPE',
        'iPhone 6 Plus' => 'IPHONE_6_PLUS',
        'iPhone 6 Plus landscape' => 'IPHONE_6_PLUS_LANDSCAPE',
        'iPhone 7' => 'IPHONE_7',
        'iPhone 7 landscape' => 'IPHONE_7_LANDSCAPE',
        'iPhone 7 Plus' => 'IPHONE_7_PLUS',
        'iPhone 7 Plus landscape' => 'IPHONE_7_PLUS_LANDSCAPE',
        'iPhone 8' => 'IPHONE_8',
        'iPhone 8 landscape' => 'IPHONE_8_LANDSCAPE',
        'iPhone 8 Plus' => 'IPHONE_8_PLUS',
        'iPhone 8 Plus landscape' => 'IPHONE_8_PLUS_LANDSCAPE',
        'iPhone SE' => 'IPHONE_SE',
        'iPhone SE landscape' => 'IPHONE_SE_LANDSCAPE',
        'iPhone X' => 'IPHONE_X',
        'iPhone X landscape' => 'IPHONE_X_LANDSCAPE',
        'iPhone XR' => 'IPHONE_XR',
        'iPhone XR landscape' => 'IPHONE_XR_LANDSCAPE',
        'JioPhone 2' => 'JIOPHONE_2',
        'JioPhone 2 landscape' => 'JIOPHONE_2_LANDSCAPE',
        'Kindle Fire HDX' => 'KINDLE_FIRE_HDX',
        'Kindle Fire HDX landscape' => 'KINDLE_FIRE_HDX_LANDSCAPE',
        'LG Optimus L70' => 'LG_OPTIMUS_L70',
        'LG Optimus L70 landscape' => 'LG_OPTIMUS_L70_LANDSCAPE',
        'Microsoft Lumia 550' => 'MICROSOFT_LUMIA_550',
        'Microsoft Lumia 950' => 'MICROSOFT_LUMIA_950',
        'Microsoft Lumia 950 landscape' => 'MICROSOFT_LUMIA_950_LANDSCAPE',
        'Nexus 10' => 'NEXUS_10',
        'Nexus 10 landscape' => 'NEXUS_10_LANDSCAPE',
        'Nexus 4' => 'NEXUS_4',
        'Nexus 4 landscape' => 'NEXUS_4_LANDSCAPE',
        'Nexus 5' => 'NEXUS_5',
        'Nexus 5 landscape' => 'NEXUS_5_LANDSCAPE',
        'Nexus 5X' => 'NEXUS_5X',
        'Nexus 5X landscape' => 'NEXUS_5X_LANDSCAPE',
        'Nexus 6' => 'NEXUS_6',
        'Nexus 6 landscape' => 'NEXUS_6_LANDSCAPE',
        'Nexus 6P' => 'NEXUS_6P',
        'Nexus 6P landscape' => 'NEXUS_6P_LANDSCAPE',
        'Nexus 7' => 'NEXUS_7',
        'Nexus 7 landscape' => 'NEXUS_7_LANDSCAPE',
        'Nokia Lumia 520' => 'NOKIA_LUMIA_520',
        'Nokia Lumia 520 landscape' => 'NOKIA_LUMIA_520_LANDSCAPE',
        'Nokia N9' => 'NOKIA_N9',
        'Nokia N9 landscape' => 'NOKIA_N9_LANDSCAPE',
        'Pixel 2' => 'PIXEL_2',
        'Pixel 2 landscape' => 'PIXEL_2_LANDSCAPE',
        'Pixel 2 XL' => 'PIXEL_2_XL',
        'Pixel 2 XL landscape' => 'PIXEL_2_XL_LANDSCAPE',
    ];

    /**
     * Return constant name
     *
     * @param string $name
     * @return string
     *
     * @throws \Exception
     */
    public static function getConstantName(string $name) :string
    {
        if (!empty(self::$list[$name])) {
            throw new \Exception("Dont founded constant name for device name - $name");
        }

        return self::$list[$name];
    }

    /**
     * Return user agent name
     *
     * @param string $name
     * @return string
     *
     * @throws \Exception
     */
    public static function getUserAgent(string $name) :string
    {
        $constName = self::getConstantName($name);

        return constant("Puppeteer\Constants\DevicesUserAgents::$constName");
    }

    /**
     * Return view port for device
     *
     * @param string $name
     * @return string
     *
     * @throws \Exception
     */
    public static function getViewPort(string $name) :string
    {
        $constName = self::getConstantName($name);

        return constant("Puppeteer\Constants\DevicesViewPorts::$constName");
    }

    /**
     * Return data device
     *
     * @param string $name
     * @return array
     *
     * @throws \Exception
     */
    public static function data(string $name) :array
    {
        $constName = self::getConstantName($name);

        return [
            self::NAME => $name,
            self::USER_AGENT => constant("Puppeteer\Constants\DevicesUserAgents::$constName"),
            self::VIEWPORT => constant("Puppeteer\Constants\DevicesViewPorts::$constName"),
        ];
    }
}