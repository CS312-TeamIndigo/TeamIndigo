<?php
namespace Model;
use \File;
use \Debug;

class FuelFormExample extends \Model {

    public static function log_message($rows, $colors) {
        self::_file_exists_or_create();
        File::append(DOCROOT, 'fuelformfile.csv', implode(", ", array($rows, $colors)) . "\n");
        return true;
    }

    private static function _file_exists_or_create() {
        if (!File::exists(DOCROOT . '/fuelformfile.csv')) {
            File::create(DOCROOT, 'fuelformfile.csv');
        }
    }

}
?>