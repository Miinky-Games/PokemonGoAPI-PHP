<?php
// Generated by https://github.com/bramp/protoc-gen-php// Please include protocolbuffers before this file, for example:
//   require('protocolbuffers.inc.php');
//   require('POGOProtos/Inventory/ItemType.php');

namespace POGOProtos\Inventory {

  use Protobuf;
  use ProtobufEnum;
  use ProtobufIO;
  use ProtobufMessage;

  // enum POGOProtos.Inventory.ItemType
  abstract class ItemType extends ProtobufEnum {
    const ITEM_TYPE_NONE = 0;
    const ITEM_TYPE_POKEBALL = 1;
    const ITEM_TYPE_POTION = 2;
    const ITEM_TYPE_REVIVE = 3;
    const ITEM_TYPE_MAP = 4;
    const ITEM_TYPE_BATTLE = 5;
    const ITEM_TYPE_FOOD = 6;
    const ITEM_TYPE_CAMERA = 7;
    const ITEM_TYPE_DISK = 8;
    const ITEM_TYPE_INCUBATOR = 9;
    const ITEM_TYPE_INCENSE = 10;
    const ITEM_TYPE_XP_BOOST = 11;
    const ITEM_TYPE_INVENTORY_UPGRADE = 12;

    public static $_values = array(
      0 => "ITEM_TYPE_NONE",
      1 => "ITEM_TYPE_POKEBALL",
      2 => "ITEM_TYPE_POTION",
      3 => "ITEM_TYPE_REVIVE",
      4 => "ITEM_TYPE_MAP",
      5 => "ITEM_TYPE_BATTLE",
      6 => "ITEM_TYPE_FOOD",
      7 => "ITEM_TYPE_CAMERA",
      8 => "ITEM_TYPE_DISK",
      9 => "ITEM_TYPE_INCUBATOR",
      10 => "ITEM_TYPE_INCENSE",
      11 => "ITEM_TYPE_XP_BOOST",
      12 => "ITEM_TYPE_INVENTORY_UPGRADE",
    );

    public static function isValid($value) {
      return array_key_exists($value, self::$_values);
    }

    public static function toString($value) {
      checkArgument(is_int($value), 'value must be a integer');
      if (array_key_exists($value, self::$_values))
        return self::$_values[$value];
      return 'UNKNOWN';
    }
  }

}