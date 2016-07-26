<?php
// Generated by https://github.com/bramp/protoc-gen-php// Please include protocolbuffers before this file, for example:
//   require('protocolbuffers.inc.php');
//   require('POGOProtos/Data/Capture/CaptureProbability.php');

namespace POGOProtos\Data\Capture {

  use Protobuf;
  use ProtobufEnum;
  use ProtobufIO;
  use ProtobufMessage;


  // message POGOProtos.Data.Capture.CaptureProbability
  final class CaptureProbability extends ProtobufMessage {

    private $_unknown;
    private $pokeballType = array(); // repeated .POGOProtos.Inventory.ItemId pokeball_type = 1
    private $captureProbability = array(); // repeated float capture_probability = 2
    private $reticleDifficultyScale = 0; // optional double reticle_difficulty_scale = 12

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
          case 1: // repeated .POGOProtos.Inventory.ItemId pokeball_type = 1
            if($wire !== 2 && $wire !== 0) {
              throw new \Exception("Incorrect wire format for field $field, expected: 2 or 0 got: $wire");
            }
            if ($wire === 0) {
              $tmp = Protobuf::read_varint($fp, $limit);
              if ($tmp === false) throw new \Exception('Protobuf::read_varint returned false');
              $this->pokeballType[] = $tmp;
            } elseif ($wire === 2) {
              $len = Protobuf::read_varint($fp, $limit);
              while ($len > 0) {
                $tmp = Protobuf::read_varint($fp, $len);
                if ($tmp === false) throw new \Exception('Protobuf::read_varint returned false');
                $this->pokeballType[] = $tmp;
              }
            }

            break;
          case 2: // repeated float capture_probability = 2
            if($wire !== 2 && $wire !== 5) {
              throw new \Exception("Incorrect wire format for field $field, expected: 2 or 5 got: $wire");
            }
            if ($wire === 5) {
              $tmp = Protobuf::read_float($fp, $limit);
              if ($tmp === false) throw new \Exception('Protobuf::read_float returned false');
              $this->captureProbability[] = $tmp;
            } elseif ($wire === 2) {
              $len = Protobuf::read_varint($fp, $limit);
              while ($len > 0) {
                $tmp = Protobuf::read_float($fp, $len);
                if ($tmp === false) throw new \Exception('Protobuf::read_float returned false');
                $this->captureProbability[] = $tmp;
              }
            }

            break;
          case 12: // optional double reticle_difficulty_scale = 12
            if($wire !== 1) {
              throw new \Exception("Incorrect wire format for field $field, expected: 1 got: $wire");
            }
            $tmp = Protobuf::read_double($fp, $limit);
            if ($tmp === false) throw new \Exception('Protobuf::read_double returned false');
            $this->reticleDifficultyScale = $tmp;

            break;
          default:
            $limit -= Protobuf::skip_field($fp, $wire);
        }
      }
    }

    public function write($fp) {
      foreach($this->pokeballType as $v) {
        fwrite($fp, "\x08", 1);
        Protobuf::write_varint($fp, $v);
      }
      foreach($this->captureProbability as $v) {
        fwrite($fp, "\x15", 1);
        Protobuf::write_float($fp, $v);
      }
      if ($this->reticleDifficultyScale !== 0) {
        fwrite($fp, "a", 1);
        Protobuf::write_double($fp, $this->reticleDifficultyScale);
      }
    }

    public function size() {
      $size = 0;
      foreach($this->pokeballType as $v) {
        $l = strlen($v);
        $size += 1 + Protobuf::size_varint($l) + $l;
      }
      foreach($this->captureProbability as $v) {
        $l = strlen($v);
        $size += 1 + Protobuf::size_varint($l) + $l;
      }
      if ($this->reticleDifficultyScale !== 0) {
        $size += 9;
      }
      return $size;
    }

    public function clearPokeballType() { $this->pokeballType = array(); }
    public function getPokeballTypeCount() { return count($this->pokeballType); }
    public function getPokeballType($index) { return $this->pokeballType[$index]; }
    public function getPokeballTypeArray() { return $this->pokeballType; }
    public function setPokeballType($index, array $value) {$this->pokeballType[$index] = $value; }
    public function addPokeballType(array $value) { $this->pokeballType[] = $value; }
    public function addAllPokeballType(array $values) { foreach($values as $value) {$this->pokeballType[] = $value; }}

    public function clearCaptureProbability() { $this->captureProbability = array(); }
    public function getCaptureProbabilityCount() { return count($this->captureProbability); }
    public function getCaptureProbability($index) { return $this->captureProbability[$index]; }
    public function getCaptureProbabilityArray() { return $this->captureProbability; }
    public function setCaptureProbability($index, array $value) {$this->captureProbability[$index] = $value; }
    public function addCaptureProbability(array $value) { $this->captureProbability[] = $value; }
    public function addAllCaptureProbability(array $values) { foreach($values as $value) {$this->captureProbability[] = $value; }}

    public function clearReticleDifficultyScale() { $this->reticleDifficultyScale = 0; }
    public function getReticleDifficultyScale() { return $this->reticleDifficultyScale;}
    public function setReticleDifficultyScale($value) { $this->reticleDifficultyScale = $value; }

    public function __toString() {
      return ''
           . Protobuf::toString('pokeball_type', $this->pokeballType, ItemId::ITEM_UNKNOWN)
           . Protobuf::toString('capture_probability', $this->captureProbability, 0)
           . Protobuf::toString('reticle_difficulty_scale', $this->reticleDifficultyScale, 0);
    }

    // @@protoc_insertion_point(class_scope:POGOProtos.Data.Capture.CaptureProbability)
  }

}