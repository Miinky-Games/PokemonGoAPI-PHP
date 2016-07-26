<?php
// Generated by https://github.com/bramp/protoc-gen-php// Please include protocolbuffers before this file, for example:
//   require('protocolbuffers.inc.php');
//   require('POGOProtos/Inventory/PokemonFamily.php');

namespace POGOProtos\Inventory {

  use POGOProtos\Enums\PokemonFamilyId;
  use Protobuf;
  use ProtobufEnum;
  use ProtobufIO;
  use ProtobufMessage;


  // message POGOProtos.Inventory.PokemonFamily
  final class PokemonFamily extends ProtobufMessage {

    private $_unknown;
    private $familyId = PokemonFamilyId::FAMILY_UNSET; // optional .POGOProtos.Enums.PokemonFamilyId family_id = 1
    private $candy = 0; // optional int32 candy = 2

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
          case 1: // optional .POGOProtos.Enums.PokemonFamilyId family_id = 1
            if($wire !== 0) {
              throw new \Exception("Incorrect wire format for field $field, expected: 0 got: $wire");
            }
            $tmp = Protobuf::read_varint($fp, $limit);
            if ($tmp === false) throw new \Exception('Protobuf::read_varint returned false');
            $this->familyId = $tmp;

            break;
          case 2: // optional int32 candy = 2
            if($wire !== 0) {
              throw new \Exception("Incorrect wire format for field $field, expected: 0 got: $wire");
            }
            $tmp = Protobuf::read_signed_varint($fp, $limit);
            if ($tmp === false) throw new \Exception('Protobuf::read_varint returned false');
            if ($tmp < Protobuf::MIN_INT32 || $tmp > Protobuf::MAX_INT32) throw new \Exception('int32 out of range');$this->candy = $tmp;

            break;
          default:
            $limit -= Protobuf::skip_field($fp, $wire);
        }
      }
    }

    public function write($fp) {
      if ($this->familyId !== PokemonFamilyId::FAMILY_UNSET) {
        fwrite($fp, "\x08", 1);
        Protobuf::write_varint($fp, $this->familyId);
      }
      if ($this->candy !== 0) {
        fwrite($fp, "\x10", 1);
        Protobuf::write_varint($fp, $this->candy);
      }
    }

    public function size() {
      $size = 0;
      if ($this->familyId !== PokemonFamilyId::FAMILY_UNSET) {
        $size += 1 + Protobuf::size_varint($this->familyId);
      }
      if ($this->candy !== 0) {
        $size += 1 + Protobuf::size_varint($this->candy);
      }
      return $size;
    }

    public function clearFamilyId() { $this->familyId = PokemonFamilyId::FAMILY_UNSET; }
    public function getFamilyId() { return $this->familyId;}
    public function setFamilyId($value) { $this->familyId = $value; }

    public function clearCandy() { $this->candy = 0; }
    public function getCandy() { return $this->candy;}
    public function setCandy($value) { $this->candy = $value; }

    public function __toString() {
      return ''
           . Protobuf::toString('family_id', $this->familyId, PokemonFamilyId::FAMILY_UNSET)
           . Protobuf::toString('candy', $this->candy, 0);
    }

    // @@protoc_insertion_point(class_scope:POGOProtos.Inventory.PokemonFamily)
  }

}