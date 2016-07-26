<?php
// Generated by https://github.com/bramp/protoc-gen-php// Please include protocolbuffers before this file, for example:
//   require('protocolbuffers.inc.php');
//   require('POGOProtos/Networking/Requests/Messages/EquipBadgeMessage.php');

namespace POGOProtos\Networking\Requests\Messages {

  use Protobuf;
  use ProtobufEnum;
  use ProtobufIO;
  use ProtobufMessage;


  // message POGOProtos.Networking.Requests.Messages.EquipBadgeMessage
  final class EquipBadgeMessage extends ProtobufMessage {

    private $_unknown;
    private $badgeType = BadgeType::BADGE_UNSET; // optional .POGOProtos.Enums.BadgeType badge_type = 1

    public function __construct($in = null, &$limit = PHP_INT_MAX) {
      parent::__construct($in, $limit);
    }

    public function read($fp, &$limit = PHP_INT_MAX) {
      $fp = ProtobufIO::toStream($fp, $limit);
      while(!feof($fp) && $limit > 0) {
        $tag = Protobuf::read_varint($fp, $limit);
        if ($tag === false) break;
        $wire  = $tag & 0x07;
        $field = $tag >> 3;
        switch($field) {
          case 1: // optional .POGOProtos.Enums.BadgeType badge_type = 1
            if($wire !== 0) {
              throw new \Exception("Incorrect wire format for field $field, expected: 0 got: $wire");
            }
            $tmp = Protobuf::read_varint($fp, $limit);
            if ($tmp === false) throw new \Exception('Protobuf::read_varint returned false');
            $this->badgeType = $tmp;

            break;
          default:
            $limit -= Protobuf::skip_field($fp, $wire);
        }
      }
    }

    public function write($fp) {
      if ($this->badgeType !== BadgeType::BADGE_UNSET) {
        fwrite($fp, "\x08", 1);
        Protobuf::write_varint($fp, $this->badgeType);
      }
    }

    public function size() {
      $size = 0;
      if ($this->badgeType !== BadgeType::BADGE_UNSET) {
        $size += 1 + Protobuf::size_varint($this->badgeType);
      }
      return $size;
    }

    public function clearBadgeType() { $this->badgeType = BadgeType::BADGE_UNSET; }
    public function getBadgeType() { return $this->badgeType;}
    public function setBadgeType($value) { $this->badgeType = $value; }

    public function __toString() {
      return ''
           . Protobuf::toString('badge_type', $this->badgeType, BadgeType::BADGE_UNSET);
    }

    // @@protoc_insertion_point(class_scope:POGOProtos.Networking.Requests.Messages.EquipBadgeMessage)
  }

}