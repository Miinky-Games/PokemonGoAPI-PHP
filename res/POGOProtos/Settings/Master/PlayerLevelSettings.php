<?php
// Generated by https://github.com/bramp/protoc-gen-php// Please include protocolbuffers before this file, for example:
//   require('protocolbuffers.inc.php');
//   require('POGOProtos/Settings/Master/PlayerLevelSettings.php');

namespace POGOProtos\Settings\Master {

  use Protobuf;
  use ProtobufEnum;
  use ProtobufIO;
  use ProtobufMessage;

  // message POGOProtos.Settings.Master.PlayerLevelSettings
  final class PlayerLevelSettings extends ProtobufMessage {

    private $_unknown;
    private $rankNum = array(); // repeated int32 rank_num = 1
    private $requiredExperience = array(); // repeated int32 required_experience = 2
    private $cpMultiplier = array(); // repeated float cp_multiplier = 3
    private $maxEggPlayerLevel = 0; // optional int32 max_egg_player_level = 4
    private $maxEncounterPlayerLevel = 0; // optional int32 max_encounter_player_level = 5

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
          case 1: // repeated int32 rank_num = 1
            if($wire !== 2 && $wire !== 0) {
              throw new \Exception("Incorrect wire format for field $field, expected: 2 or 0 got: $wire");
            }
            if ($wire === 0) {
              $tmp = Protobuf::read_signed_varint($fp, $limit);
              if ($tmp === false) throw new \Exception('Protobuf::read_varint returned false');
              if ($tmp < Protobuf::MIN_INT32 || $tmp > Protobuf::MAX_INT32) throw new \Exception('int32 out of range');$this->rankNum[] = $tmp;
            } elseif ($wire === 2) {
              $len = Protobuf::read_varint($fp, $limit);
              while ($len > 0) {
                $tmp = Protobuf::read_signed_varint($fp, $len);
                if ($tmp === false) throw new \Exception('Protobuf::read_varint returned false');
                if ($tmp < Protobuf::MIN_INT32 || $tmp > Protobuf::MAX_INT32) throw new \Exception('int32 out of range');$this->rankNum[] = $tmp;
              }
            }

            break;
          case 2: // repeated int32 required_experience = 2
            if($wire !== 2 && $wire !== 0) {
              throw new \Exception("Incorrect wire format for field $field, expected: 2 or 0 got: $wire");
            }
            if ($wire === 0) {
              $tmp = Protobuf::read_signed_varint($fp, $limit);
              if ($tmp === false) throw new \Exception('Protobuf::read_varint returned false');
              if ($tmp < Protobuf::MIN_INT32 || $tmp > Protobuf::MAX_INT32) throw new \Exception('int32 out of range');$this->requiredExperience[] = $tmp;
            } elseif ($wire === 2) {
              $len = Protobuf::read_varint($fp, $limit);
              while ($len > 0) {
                $tmp = Protobuf::read_signed_varint($fp, $len);
                if ($tmp === false) throw new \Exception('Protobuf::read_varint returned false');
                if ($tmp < Protobuf::MIN_INT32 || $tmp > Protobuf::MAX_INT32) throw new \Exception('int32 out of range');$this->requiredExperience[] = $tmp;
              }
            }

            break;
          case 3: // repeated float cp_multiplier = 3
            if($wire !== 2 && $wire !== 5) {
              throw new \Exception("Incorrect wire format for field $field, expected: 2 or 5 got: $wire");
            }
            if ($wire === 5) {
              $tmp = Protobuf::read_float($fp, $limit);
              if ($tmp === false) throw new \Exception('Protobuf::read_float returned false');
              $this->cpMultiplier[] = $tmp;
            } elseif ($wire === 2) {
              $len = Protobuf::read_varint($fp, $limit);
              while ($len > 0) {
                $tmp = Protobuf::read_float($fp, $len);
                if ($tmp === false) throw new \Exception('Protobuf::read_float returned false');
                $this->cpMultiplier[] = $tmp;
              }
            }

            break;
          case 4: // optional int32 max_egg_player_level = 4
            if($wire !== 0) {
              throw new \Exception("Incorrect wire format for field $field, expected: 0 got: $wire");
            }
            $tmp = Protobuf::read_signed_varint($fp, $limit);
            if ($tmp === false) throw new \Exception('Protobuf::read_varint returned false');
            if ($tmp < Protobuf::MIN_INT32 || $tmp > Protobuf::MAX_INT32) throw new \Exception('int32 out of range');$this->maxEggPlayerLevel = $tmp;

            break;
          case 5: // optional int32 max_encounter_player_level = 5
            if($wire !== 0) {
              throw new \Exception("Incorrect wire format for field $field, expected: 0 got: $wire");
            }
            $tmp = Protobuf::read_signed_varint($fp, $limit);
            if ($tmp === false) throw new \Exception('Protobuf::read_varint returned false');
            if ($tmp < Protobuf::MIN_INT32 || $tmp > Protobuf::MAX_INT32) throw new \Exception('int32 out of range');$this->maxEncounterPlayerLevel = $tmp;

            break;
          default:
            $limit -= Protobuf::skip_field($fp, $wire);
        }
      }
    }

    public function write($fp) {
      foreach($this->rankNum as $v) {
        fwrite($fp, "\x08", 1);
        Protobuf::write_varint($fp, $v);
      }
      foreach($this->requiredExperience as $v) {
        fwrite($fp, "\x10", 1);
        Protobuf::write_varint($fp, $v);
      }
      foreach($this->cpMultiplier as $v) {
        fwrite($fp, "\x1d", 1);
        Protobuf::write_float($fp, $v);
      }
      if ($this->maxEggPlayerLevel !== 0) {
        fwrite($fp, " ", 1);
        Protobuf::write_varint($fp, $this->maxEggPlayerLevel);
      }
      if ($this->maxEncounterPlayerLevel !== 0) {
        fwrite($fp, "(", 1);
        Protobuf::write_varint($fp, $this->maxEncounterPlayerLevel);
      }
    }

    public function size() {
      $size = 0;
      foreach($this->rankNum as $v) {
        $l = strlen($v);
        $size += 1 + Protobuf::size_varint($l) + $l;
      }
      foreach($this->requiredExperience as $v) {
        $l = strlen($v);
        $size += 1 + Protobuf::size_varint($l) + $l;
      }
      foreach($this->cpMultiplier as $v) {
        $l = strlen($v);
        $size += 1 + Protobuf::size_varint($l) + $l;
      }
      if ($this->maxEggPlayerLevel !== 0) {
        $size += 1 + Protobuf::size_varint($this->maxEggPlayerLevel);
      }
      if ($this->maxEncounterPlayerLevel !== 0) {
        $size += 1 + Protobuf::size_varint($this->maxEncounterPlayerLevel);
      }
      return $size;
    }

    public function clearRankNum() { $this->rankNum = array(); }
    public function getRankNumCount() { return count($this->rankNum); }
    public function getRankNum($index) { return $this->rankNum[$index]; }
    public function getRankNumArray() { return $this->rankNum; }
    public function setRankNum($index, array $value) {$this->rankNum[$index] = $value; }
    public function addRankNum(array $value) { $this->rankNum[] = $value; }
    public function addAllRankNum(array $values) { foreach($values as $value) {$this->rankNum[] = $value; }}

    public function clearRequiredExperience() { $this->requiredExperience = array(); }
    public function getRequiredExperienceCount() { return count($this->requiredExperience); }
    public function getRequiredExperience($index) { return $this->requiredExperience[$index]; }
    public function getRequiredExperienceArray() { return $this->requiredExperience; }
    public function setRequiredExperience($index, array $value) {$this->requiredExperience[$index] = $value; }
    public function addRequiredExperience(array $value) { $this->requiredExperience[] = $value; }
    public function addAllRequiredExperience(array $values) { foreach($values as $value) {$this->requiredExperience[] = $value; }}

    public function clearCpMultiplier() { $this->cpMultiplier = array(); }
    public function getCpMultiplierCount() { return count($this->cpMultiplier); }
    public function getCpMultiplier($index) { return $this->cpMultiplier[$index]; }
    public function getCpMultiplierArray() { return $this->cpMultiplier; }
    public function setCpMultiplier($index, array $value) {$this->cpMultiplier[$index] = $value; }
    public function addCpMultiplier(array $value) { $this->cpMultiplier[] = $value; }
    public function addAllCpMultiplier(array $values) { foreach($values as $value) {$this->cpMultiplier[] = $value; }}

    public function clearMaxEggPlayerLevel() { $this->maxEggPlayerLevel = 0; }
    public function getMaxEggPlayerLevel() { return $this->maxEggPlayerLevel;}
    public function setMaxEggPlayerLevel($value) { $this->maxEggPlayerLevel = $value; }

    public function clearMaxEncounterPlayerLevel() { $this->maxEncounterPlayerLevel = 0; }
    public function getMaxEncounterPlayerLevel() { return $this->maxEncounterPlayerLevel;}
    public function setMaxEncounterPlayerLevel($value) { $this->maxEncounterPlayerLevel = $value; }

    public function __toString() {
      return ''
           . Protobuf::toString('rank_num', $this->rankNum, 0)
           . Protobuf::toString('required_experience', $this->requiredExperience, 0)
           . Protobuf::toString('cp_multiplier', $this->cpMultiplier, 0)
           . Protobuf::toString('max_egg_player_level', $this->maxEggPlayerLevel, 0)
           . Protobuf::toString('max_encounter_player_level', $this->maxEncounterPlayerLevel, 0);
    }

    // @@protoc_insertion_point(class_scope:POGOProtos.Settings.Master.PlayerLevelSettings)
  }

}