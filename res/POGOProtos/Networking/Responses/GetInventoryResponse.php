<?php
// Generated by https://github.com/bramp/protoc-gen-php// Please include protocolbuffers before this file, for example:
//   require('protocolbuffers.inc.php');
//   require('POGOProtos/Networking/Responses/GetInventoryResponse.php');

namespace POGOProtos\Networking\Responses {

  use Protobuf;
  use ProtobufEnum;
  use ProtobufIO;
  use ProtobufMessage;


  // message POGOProtos.Networking.Responses.GetInventoryResponse
  final class GetInventoryResponse extends ProtobufMessage {

    private $_unknown;
    private $success = false; // optional bool success = 1
    private $inventoryDelta = null; // optional .POGOProtos.Inventory.InventoryDelta inventory_delta = 2

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
          case 1: // optional bool success = 1
            if($wire !== 0) {
              throw new \Exception("Incorrect wire format for field $field, expected: 0 got: $wire");
            }
            $tmp = Protobuf::read_varint($fp, $limit);
            if ($tmp === false) throw new \Exception('Protobuf::read_varint returned false');
            $this->success = ($tmp > 0) ? true : false;

            break;
          case 2: // optional .POGOProtos.Inventory.InventoryDelta inventory_delta = 2
            if($wire !== 2) {
              throw new \Exception("Incorrect wire format for field $field, expected: 2 got: $wire");
            }
            $len = Protobuf::read_varint($fp, $limit);
            if ($len === false) throw new \Exception('Protobuf::read_varint returned false');
            $limit -= $len;
            $this->inventoryDelta = new \POGOProtos\Inventory\InventoryDelta($fp, $len);
            if ($len !== 0) throw new \Exception('new \POGOProtos\Inventory\InventoryDelta did not read the full length');

            break;
          default:
            $limit -= Protobuf::skip_field($fp, $wire);
        }
      }
    }

    public function write($fp) {
      if ($this->success !== false) {
        fwrite($fp, "\x08", 1);
        Protobuf::write_varint($fp, $this->success ? 1 : 0);
      }
      if ($this->inventoryDelta !== null) {
        fwrite($fp, "\x12", 1);
        Protobuf::write_varint($fp, $this->inventoryDelta->size());
        $this->inventoryDelta->write($fp);
      }
    }

    public function size() {
      $size = 0;
      if ($this->success !== false) {
        $size += 2;
      }
      if ($this->inventoryDelta !== null) {
        $l = $this->inventoryDelta->size();
        $size += 1 + Protobuf::size_varint($l) + $l;
      }
      return $size;
    }

    public function clearSuccess() { $this->success = false; }
    public function getSuccess() { return $this->success;}
    public function setSuccess($value) { $this->success = $value; }

    public function clearInventoryDelta() { $this->inventoryDelta = null; }
    public function getInventoryDelta() { return $this->inventoryDelta;}
    public function setInventoryDelta(\POGOProtos\Inventory\InventoryDelta $value) { $this->inventoryDelta = $value; }

    public function __toString() {
      return ''
           . Protobuf::toString('success', $this->success, false)
           . Protobuf::toString('inventory_delta', $this->inventoryDelta, null);
    }

    // @@protoc_insertion_point(class_scope:POGOProtos.Networking.Responses.GetInventoryResponse)
  }

}