<?php
// Generated by https://github.com/bramp/protoc-gen-php// Please include protocolbuffers before this file, for example:
//   require('protocolbuffers.inc.php');
//   require('POGOProtos/Data/AssetDigestEntry.php');

namespace POGOProtos\Data {

  use Protobuf;
  use ProtobufEnum;
  use ProtobufIO;
  use ProtobufMessage;

  // message POGOProtos.Data.AssetDigestEntry
  final class AssetDigestEntry extends ProtobufMessage {

    private $_unknown;
    private $assetId = ""; // optional string asset_id = 1
    private $bundleName = ""; // optional string bundle_name = 2
    private $version = 0; // optional int64 version = 3
    private $checksum = 0; // optional uint32 checksum = 4
    private $size = 0; // optional int32 size = 5
    private $key = ""; // optional bytes key = 6

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
          case 1: // optional string asset_id = 1
            if($wire !== 2) {
              throw new \Exception("Incorrect wire format for field $field, expected: 2 got: $wire");
            }
            $len = Protobuf::read_varint($fp, $limit);
            if ($len === false) throw new \Exception('Protobuf::read_varint returned false');
            $tmp = Protobuf::read_bytes($fp, $len, $limit);
            if ($tmp === false) throw new \Exception("read_bytes($len) returned false");
            $this->assetId = $tmp;

            break;
          case 2: // optional string bundle_name = 2
            if($wire !== 2) {
              throw new \Exception("Incorrect wire format for field $field, expected: 2 got: $wire");
            }
            $len = Protobuf::read_varint($fp, $limit);
            if ($len === false) throw new \Exception('Protobuf::read_varint returned false');
            $tmp = Protobuf::read_bytes($fp, $len, $limit);
            if ($tmp === false) throw new \Exception("read_bytes($len) returned false");
            $this->bundleName = $tmp;

            break;
          case 3: // optional int64 version = 3
            if($wire !== 0) {
              throw new \Exception("Incorrect wire format for field $field, expected: 0 got: $wire");
            }
            $tmp = Protobuf::read_signed_varint($fp, $limit);
            if ($tmp === false) throw new \Exception('Protobuf::read_varint returned false');
            if ($tmp < Protobuf::MIN_INT64 || $tmp > Protobuf::MAX_INT64) throw new \Exception('int64 out of range');$this->version = $tmp;

            break;
          case 4: // optional uint32 checksum = 4
            if($wire !== 0) {
              throw new \Exception("Incorrect wire format for field $field, expected: 0 got: $wire");
            }
            $tmp = Protobuf::read_varint($fp, $limit);
            if ($tmp === false) throw new \Exception('Protobuf::read_varint returned false');
            if ($tmp < Protobuf::MIN_UINT32 || $tmp > Protobuf::MAX_UINT32) throw new \Exception('uint32 out of range');$this->checksum = $tmp;

            break;
          case 5: // optional int32 size = 5
            if($wire !== 0) {
              throw new \Exception("Incorrect wire format for field $field, expected: 0 got: $wire");
            }
            $tmp = Protobuf::read_signed_varint($fp, $limit);
            if ($tmp === false) throw new \Exception('Protobuf::read_varint returned false');
            if ($tmp < Protobuf::MIN_INT32 || $tmp > Protobuf::MAX_INT32) throw new \Exception('int32 out of range');$this->size = $tmp;

            break;
          case 6: // optional bytes key = 6
            if($wire !== 2) {
              throw new \Exception("Incorrect wire format for field $field, expected: 2 got: $wire");
            }
            $len = Protobuf::read_varint($fp, $limit);
            if ($len === false) throw new \Exception('Protobuf::read_varint returned false');
            $tmp = Protobuf::read_bytes($fp, $len, $limit);
            if ($tmp === false) throw new \Exception("read_bytes($len) returned false");
            $this->key = $tmp;

            break;
          default:
            $limit -= Protobuf::skip_field($fp, $wire);
        }
      }
    }

    public function write($fp) {
      if ($this->assetId !== "") {
        fwrite($fp, "\x0a", 1);
        Protobuf::write_varint($fp, strlen($this->assetId));
        fwrite($fp, $this->assetId);
      }
      if ($this->bundleName !== "") {
        fwrite($fp, "\x12", 1);
        Protobuf::write_varint($fp, strlen($this->bundleName));
        fwrite($fp, $this->bundleName);
      }
      if ($this->version !== 0) {
        fwrite($fp, "\x18", 1);
        Protobuf::write_varint($fp, $this->version);
      }
      if ($this->checksum !== 0) {
        fwrite($fp, " ", 1);
        Protobuf::write_varint($fp, $this->checksum);
      }
      if ($this->size !== 0) {
        fwrite($fp, "(", 1);
        Protobuf::write_varint($fp, $this->size);
      }
      if ($this->key !== "") {
        fwrite($fp, "2", 1);
        Protobuf::write_varint($fp, strlen($this->key));
        fwrite($fp, $this->key);
      }
    }

    public function size() {
      $size = 0;
      if ($this->assetId !== "") {
        $l = strlen($this->assetId);
        $size += 1 + Protobuf::size_varint($l) + $l;
      }
      if ($this->bundleName !== "") {
        $l = strlen($this->bundleName);
        $size += 1 + Protobuf::size_varint($l) + $l;
      }
      if ($this->version !== 0) {
        $size += 1 + Protobuf::size_varint($this->version);
      }
      if ($this->checksum !== 0) {
        $size += 1 + Protobuf::size_varint($this->checksum);
      }
      if ($this->size !== 0) {
        $size += 1 + Protobuf::size_varint($this->size);
      }
      if ($this->key !== "") {
        $l = strlen($this->key);
        $size += 1 + Protobuf::size_varint($l) + $l;
      }
      return $size;
    }

    public function clearAssetId() { $this->assetId = ""; }
    public function getAssetId() { return $this->assetId;}
    public function setAssetId($value) { $this->assetId = $value; }

    public function clearBundleName() { $this->bundleName = ""; }
    public function getBundleName() { return $this->bundleName;}
    public function setBundleName($value) { $this->bundleName = $value; }

    public function clearVersion() { $this->version = 0; }
    public function getVersion() { return $this->version;}
    public function setVersion($value) { $this->version = $value; }

    public function clearChecksum() { $this->checksum = 0; }
    public function getChecksum() { return $this->checksum;}
    public function setChecksum($value) { $this->checksum = $value; }

    public function clearSize() { $this->size = 0; }
    public function getSize() { return $this->size;}
    public function setSize($value) { $this->size = $value; }

    public function clearKey() { $this->key = ""; }
    public function getKey() { return $this->key;}
    public function setKey($value) { $this->key = $value; }

    public function __toString() {
      return ''
           . Protobuf::toString('asset_id', $this->assetId, "")
           . Protobuf::toString('bundle_name', $this->bundleName, "")
           . Protobuf::toString('version', $this->version, 0)
           . Protobuf::toString('checksum', $this->checksum, 0)
           . Protobuf::toString('size', $this->size, 0)
           . Protobuf::toString('key', $this->key, "");
    }

    // @@protoc_insertion_point(class_scope:POGOProtos.Data.AssetDigestEntry)
  }

}