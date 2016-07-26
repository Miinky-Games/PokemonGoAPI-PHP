<?php
// Generated by https://github.com/bramp/protoc-gen-php// Please include protocolbuffers before this file, for example:
//   require('protocolbuffers.inc.php');
//   require('POGOProtos/Inventory/EggIncubators.php');

namespace POGOProtos\Inventory {

  use Protobuf;
  use ProtobufEnum;
  use ProtobufIO;
  use ProtobufMessage;


  // message POGOProtos.Inventory.EggIncubators
  final class EggIncubators extends ProtobufMessage {

    private $_unknown;
    private $eggIncubator = null; // optional .POGOProtos.Inventory.EggIncubator egg_incubator = 1

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
          case 1: // optional .POGOProtos.Inventory.EggIncubator egg_incubator = 1
            if($wire !== 2) {
              throw new \Exception("Incorrect wire format for field $field, expected: 2 got: $wire");
            }
            $len = Protobuf::read_varint($fp, $limit);
            if ($len === false) throw new \Exception('Protobuf::read_varint returned false');
            $limit -= $len;
            $this->eggIncubator = new \POGOProtos\Inventory\EggIncubator($fp, $len);
            if ($len !== 0) throw new \Exception('new \POGOProtos\Inventory\EggIncubator did not read the full length');

            break;
          default:
            $limit -= Protobuf::skip_field($fp, $wire);
        }
      }
    }

    public function write($fp) {
      if ($this->eggIncubator !== null) {
        fwrite($fp, "\x0a", 1);
        Protobuf::write_varint($fp, $this->eggIncubator->size());
        $this->eggIncubator->write($fp);
      }
    }

    public function size() {
      $size = 0;
      if ($this->eggIncubator !== null) {
        $l = $this->eggIncubator->size();
        $size += 1 + Protobuf::size_varint($l) + $l;
      }
      return $size;
    }

    public function clearEggIncubator() { $this->eggIncubator = null; }
    public function getEggIncubator() { return $this->eggIncubator;}
    public function setEggIncubator(\POGOProtos\Inventory\EggIncubator $value) { $this->eggIncubator = $value; }

    public function __toString() {
      return ''
           . Protobuf::toString('egg_incubator', $this->eggIncubator, null);
    }

    // @@protoc_insertion_point(class_scope:POGOProtos.Inventory.EggIncubators)
  }

}