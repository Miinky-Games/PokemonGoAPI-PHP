<?php
// Generated by https://github.com/bramp/protoc-gen-php// Please include protocolbuffers before this file, for example:
//   require('protocolbuffers.inc.php');
//   require('POGOProtos/Networking/Responses/GetSuggestedCodenamesResponse.php');

namespace POGOProtos\Networking\Responses {

  use Protobuf;
  use ProtobufEnum;
  use ProtobufIO;
  use ProtobufMessage;

  // message POGOProtos.Networking.Responses.GetSuggestedCodenamesResponse
  final class GetSuggestedCodenamesResponse extends ProtobufMessage {

    private $_unknown;
    private $codenames = array(); // repeated string codenames = 1
    private $success = false; // optional bool success = 2

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
          case 1: // repeated string codenames = 1
            if($wire !== 2) {
              throw new \Exception("Incorrect wire format for field $field, expected: 2 got: $wire");
            }
            $len = Protobuf::read_varint($fp, $limit);
            if ($len === false) throw new \Exception('Protobuf::read_varint returned false');
            $tmp = Protobuf::read_bytes($fp, $len, $limit);
            if ($tmp === false) throw new \Exception("read_bytes($len) returned false");
            $this->codenames[] = $tmp;

            break;
          case 2: // optional bool success = 2
            if($wire !== 0) {
              throw new \Exception("Incorrect wire format for field $field, expected: 0 got: $wire");
            }
            $tmp = Protobuf::read_varint($fp, $limit);
            if ($tmp === false) throw new \Exception('Protobuf::read_varint returned false');
            $this->success = ($tmp > 0) ? true : false;

            break;
          default:
            $limit -= Protobuf::skip_field($fp, $wire);
        }
      }
    }

    public function write($fp) {
      foreach($this->codenames as $v) {
        fwrite($fp, "\x0a", 1);
        Protobuf::write_varint($fp, strlen($v));
        fwrite($fp, $v);
      }
      if ($this->success !== false) {
        fwrite($fp, "\x10", 1);
        Protobuf::write_varint($fp, $this->success ? 1 : 0);
      }
    }

    public function size() {
      $size = 0;
      foreach($this->codenames as $v) {
        $l = strlen($v);
        $size += 1 + Protobuf::size_varint($l) + $l;
      }
      if ($this->success !== false) {
        $size += 2;
      }
      return $size;
    }

    public function clearCodenames() { $this->codenames = array(); }
    public function getCodenamesCount() { return count($this->codenames); }
    public function getCodenames($index) { return $this->codenames[$index]; }
    public function getCodenamesArray() { return $this->codenames; }
    public function setCodenames($index, array $value) {$this->codenames[$index] = $value; }
    public function addCodenames(array $value) { $this->codenames[] = $value; }
    public function addAllCodenames(array $values) { foreach($values as $value) {$this->codenames[] = $value; }}

    public function clearSuccess() { $this->success = false; }
    public function getSuccess() { return $this->success;}
    public function setSuccess($value) { $this->success = $value; }

    public function __toString() {
      return ''
           . Protobuf::toString('codenames', $this->codenames, "")
           . Protobuf::toString('success', $this->success, false);
    }

    // @@protoc_insertion_point(class_scope:POGOProtos.Networking.Responses.GetSuggestedCodenamesResponse)
  }

}