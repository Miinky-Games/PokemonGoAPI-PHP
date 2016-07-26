<?php
// Generated by https://github.com/bramp/protoc-gen-php// Please include protocolbuffers before this file, for example:
//   require('protocolbuffers.inc.php');
//   require('POGOProtos/Settings/Master/BadgeSettings.php');

namespace POGOProtos\Settings\Master {

  use Protobuf;
  use ProtobufEnum;
  use ProtobufIO;
  use ProtobufMessage;


  // message POGOProtos.Settings.Master.BadgeSettings
  final class BadgeSettings extends ProtobufMessage {

    private $_unknown;
    private $badgeType = BadgeType::BADGE_UNSET; // optional .POGOProtos.Enums.BadgeType badge_type = 1
    private $badgeRank = 0; // optional int32 badge_rank = 2
    private $targets = array(); // repeated int32 targets = 3

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
          case 2: // optional int32 badge_rank = 2
            if($wire !== 0) {
              throw new \Exception("Incorrect wire format for field $field, expected: 0 got: $wire");
            }
            $tmp = Protobuf::read_signed_varint($fp, $limit);
            if ($tmp === false) throw new \Exception('Protobuf::read_varint returned false');
            if ($tmp < Protobuf::MIN_INT32 || $tmp > Protobuf::MAX_INT32) throw new \Exception('int32 out of range');$this->badgeRank = $tmp;

            break;
          case 3: // repeated int32 targets = 3
            if($wire !== 2 && $wire !== 0) {
              throw new \Exception("Incorrect wire format for field $field, expected: 2 or 0 got: $wire");
            }
            if ($wire === 0) {
              $tmp = Protobuf::read_signed_varint($fp, $limit);
              if ($tmp === false) throw new \Exception('Protobuf::read_varint returned false');
              if ($tmp < Protobuf::MIN_INT32 || $tmp > Protobuf::MAX_INT32) throw new \Exception('int32 out of range');$this->targets[] = $tmp;
            } elseif ($wire === 2) {
              $len = Protobuf::read_varint($fp, $limit);
              while ($len > 0) {
                $tmp = Protobuf::read_signed_varint($fp, $len);
                if ($tmp === false) throw new \Exception('Protobuf::read_varint returned false');
                if ($tmp < Protobuf::MIN_INT32 || $tmp > Protobuf::MAX_INT32) throw new \Exception('int32 out of range');$this->targets[] = $tmp;
              }
            }

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
      if ($this->badgeRank !== 0) {
        fwrite($fp, "\x10", 1);
        Protobuf::write_varint($fp, $this->badgeRank);
      }
      foreach($this->targets as $v) {
        fwrite($fp, "\x18", 1);
        Protobuf::write_varint($fp, $v);
      }
    }

    public function size() {
      $size = 0;
      if ($this->badgeType !== BadgeType::BADGE_UNSET) {
        $size += 1 + Protobuf::size_varint($this->badgeType);
      }
      if ($this->badgeRank !== 0) {
        $size += 1 + Protobuf::size_varint($this->badgeRank);
      }
      foreach($this->targets as $v) {
        $l = strlen($v);
        $size += 1 + Protobuf::size_varint($l) + $l;
      }
      return $size;
    }

    public function clearBadgeType() { $this->badgeType = BadgeType::BADGE_UNSET; }
    public function getBadgeType() { return $this->badgeType;}
    public function setBadgeType($value) { $this->badgeType = $value; }

    public function clearBadgeRank() { $this->badgeRank = 0; }
    public function getBadgeRank() { return $this->badgeRank;}
    public function setBadgeRank($value) { $this->badgeRank = $value; }

    public function clearTargets() { $this->targets = array(); }
    public function getTargetsCount() { return count($this->targets); }
    public function getTargets($index) { return $this->targets[$index]; }
    public function getTargetsArray() { return $this->targets; }
    public function setTargets($index, array $value) {$this->targets[$index] = $value; }
    public function addTargets(array $value) { $this->targets[] = $value; }
    public function addAllTargets(array $values) { foreach($values as $value) {$this->targets[] = $value; }}

    public function __toString() {
      return ''
           . Protobuf::toString('badge_type', $this->badgeType, BadgeType::BADGE_UNSET)
           . Protobuf::toString('badge_rank', $this->badgeRank, 0)
           . Protobuf::toString('targets', $this->targets, 0);
    }

    // @@protoc_insertion_point(class_scope:POGOProtos.Settings.Master.BadgeSettings)
  }

}