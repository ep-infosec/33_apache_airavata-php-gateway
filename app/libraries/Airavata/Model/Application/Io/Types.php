<?php
namespace Airavata\Model\Application\Io;

/**
 * Autogenerated by Thrift Compiler (0.10.0)
 *
 * DO NOT EDIT UNLESS YOU ARE SURE THAT YOU KNOW WHAT YOU ARE DOING
 *  @generated
 */
use Thrift\Base\TBase;
use Thrift\Type\TType;
use Thrift\Type\TMessageType;
use Thrift\Exception\TException;
use Thrift\Exception\TProtocolException;
use Thrift\Protocol\TProtocol;
use Thrift\Protocol\TBinaryProtocolAccelerated;
use Thrift\Exception\TApplicationException;


/**
 * Data Types supported in Airavata. The primitive data types
 * 
 */
final class DataType {
  const STRING = 0;
  const INTEGER = 1;
  const FLOAT = 2;
  const URI = 3;
  const URI_COLLECTION = 4;
  const STDOUT = 5;
  const STDERR = 6;
  static public $__names = array(
    0 => 'STRING',
    1 => 'INTEGER',
    2 => 'FLOAT',
    3 => 'URI',
    4 => 'URI_COLLECTION',
    5 => 'STDOUT',
    6 => 'STDERR',
  );
}

/**
 * Application Inputs. The paramters describe how inputs are passed to the application.
 * 
 * name:
 *   Name of the parameter.
 * 
 * value:
 *   Value of the parameter. A default value could be set during registration.
 * 
 * type:
 *   Data type of the parameter
 * 
 * applicationArguement:
 *   The argument flag sent to the application. Such as -p pressure.
 * 
 * standardInput:
 *   When this value is set, the parameter is sent as standard input rather than a parameter.
 *   Typically this is passed using redirection operator ">".
 * 
 * userFriendlyDescription:
 *   Description to be displayed at the user interface.
 * 
 * metaData:
 *   Any metadat. This is typically ignore by Airavata and is used by gateways for application configuration.
 * 
 * overrideFilename:
 *   Rename input file to given value when staging to compute resource.
 */
class InputDataObjectType {
  static $_TSPEC;

  /**
   * @var string
   */
  public $name = null;
  /**
   * @var string
   */
  public $value = null;
  /**
   * @var int
   */
  public $type = null;
  /**
   * @var string
   */
  public $applicationArgument = null;
  /**
   * @var bool
   */
  public $standardInput = null;
  /**
   * @var string
   */
  public $userFriendlyDescription = null;
  /**
   * @var string
   */
  public $metaData = null;
  /**
   * @var int
   */
  public $inputOrder = null;
  /**
   * @var bool
   */
  public $isRequired = null;
  /**
   * @var bool
   */
  public $requiredToAddedToCommandLine = null;
  /**
   * @var bool
   */
  public $dataStaged = null;
  /**
   * @var string
   */
  public $storageResourceId = null;
  /**
   * @var bool
   */
  public $isReadOnly = null;
  /**
   * @var string
   */
  public $overrideFilename = null;

  public function __construct($vals=null) {
    if (!isset(self::$_TSPEC)) {
      self::$_TSPEC = array(
        1 => array(
          'var' => 'name',
          'type' => TType::STRING,
          ),
        2 => array(
          'var' => 'value',
          'type' => TType::STRING,
          ),
        3 => array(
          'var' => 'type',
          'type' => TType::I32,
          ),
        4 => array(
          'var' => 'applicationArgument',
          'type' => TType::STRING,
          ),
        5 => array(
          'var' => 'standardInput',
          'type' => TType::BOOL,
          ),
        6 => array(
          'var' => 'userFriendlyDescription',
          'type' => TType::STRING,
          ),
        7 => array(
          'var' => 'metaData',
          'type' => TType::STRING,
          ),
        8 => array(
          'var' => 'inputOrder',
          'type' => TType::I32,
          ),
        9 => array(
          'var' => 'isRequired',
          'type' => TType::BOOL,
          ),
        10 => array(
          'var' => 'requiredToAddedToCommandLine',
          'type' => TType::BOOL,
          ),
        11 => array(
          'var' => 'dataStaged',
          'type' => TType::BOOL,
          ),
        12 => array(
          'var' => 'storageResourceId',
          'type' => TType::STRING,
          ),
        13 => array(
          'var' => 'isReadOnly',
          'type' => TType::BOOL,
          ),
        14 => array(
          'var' => 'overrideFilename',
          'type' => TType::STRING,
          ),
        );
    }
    if (is_array($vals)) {
      if (isset($vals['name'])) {
        $this->name = $vals['name'];
      }
      if (isset($vals['value'])) {
        $this->value = $vals['value'];
      }
      if (isset($vals['type'])) {
        $this->type = $vals['type'];
      }
      if (isset($vals['applicationArgument'])) {
        $this->applicationArgument = $vals['applicationArgument'];
      }
      if (isset($vals['standardInput'])) {
        $this->standardInput = $vals['standardInput'];
      }
      if (isset($vals['userFriendlyDescription'])) {
        $this->userFriendlyDescription = $vals['userFriendlyDescription'];
      }
      if (isset($vals['metaData'])) {
        $this->metaData = $vals['metaData'];
      }
      if (isset($vals['inputOrder'])) {
        $this->inputOrder = $vals['inputOrder'];
      }
      if (isset($vals['isRequired'])) {
        $this->isRequired = $vals['isRequired'];
      }
      if (isset($vals['requiredToAddedToCommandLine'])) {
        $this->requiredToAddedToCommandLine = $vals['requiredToAddedToCommandLine'];
      }
      if (isset($vals['dataStaged'])) {
        $this->dataStaged = $vals['dataStaged'];
      }
      if (isset($vals['storageResourceId'])) {
        $this->storageResourceId = $vals['storageResourceId'];
      }
      if (isset($vals['isReadOnly'])) {
        $this->isReadOnly = $vals['isReadOnly'];
      }
      if (isset($vals['overrideFilename'])) {
        $this->overrideFilename = $vals['overrideFilename'];
      }
    }
  }

  public function getName() {
    return 'InputDataObjectType';
  }

  public function read($input)
  {
    $xfer = 0;
    $fname = null;
    $ftype = 0;
    $fid = 0;
    $xfer += $input->readStructBegin($fname);
    while (true)
    {
      $xfer += $input->readFieldBegin($fname, $ftype, $fid);
      if ($ftype == TType::STOP) {
        break;
      }
      switch ($fid)
      {
        case 1:
          if ($ftype == TType::STRING) {
            $xfer += $input->readString($this->name);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 2:
          if ($ftype == TType::STRING) {
            $xfer += $input->readString($this->value);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 3:
          if ($ftype == TType::I32) {
            $xfer += $input->readI32($this->type);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 4:
          if ($ftype == TType::STRING) {
            $xfer += $input->readString($this->applicationArgument);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 5:
          if ($ftype == TType::BOOL) {
            $xfer += $input->readBool($this->standardInput);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 6:
          if ($ftype == TType::STRING) {
            $xfer += $input->readString($this->userFriendlyDescription);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 7:
          if ($ftype == TType::STRING) {
            $xfer += $input->readString($this->metaData);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 8:
          if ($ftype == TType::I32) {
            $xfer += $input->readI32($this->inputOrder);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 9:
          if ($ftype == TType::BOOL) {
            $xfer += $input->readBool($this->isRequired);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 10:
          if ($ftype == TType::BOOL) {
            $xfer += $input->readBool($this->requiredToAddedToCommandLine);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 11:
          if ($ftype == TType::BOOL) {
            $xfer += $input->readBool($this->dataStaged);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 12:
          if ($ftype == TType::STRING) {
            $xfer += $input->readString($this->storageResourceId);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 13:
          if ($ftype == TType::BOOL) {
            $xfer += $input->readBool($this->isReadOnly);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 14:
          if ($ftype == TType::STRING) {
            $xfer += $input->readString($this->overrideFilename);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        default:
          $xfer += $input->skip($ftype);
          break;
      }
      $xfer += $input->readFieldEnd();
    }
    $xfer += $input->readStructEnd();
    return $xfer;
  }

  public function write($output) {
    $xfer = 0;
    $xfer += $output->writeStructBegin('InputDataObjectType');
    if ($this->name !== null) {
      $xfer += $output->writeFieldBegin('name', TType::STRING, 1);
      $xfer += $output->writeString($this->name);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->value !== null) {
      $xfer += $output->writeFieldBegin('value', TType::STRING, 2);
      $xfer += $output->writeString($this->value);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->type !== null) {
      $xfer += $output->writeFieldBegin('type', TType::I32, 3);
      $xfer += $output->writeI32($this->type);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->applicationArgument !== null) {
      $xfer += $output->writeFieldBegin('applicationArgument', TType::STRING, 4);
      $xfer += $output->writeString($this->applicationArgument);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->standardInput !== null) {
      $xfer += $output->writeFieldBegin('standardInput', TType::BOOL, 5);
      $xfer += $output->writeBool($this->standardInput);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->userFriendlyDescription !== null) {
      $xfer += $output->writeFieldBegin('userFriendlyDescription', TType::STRING, 6);
      $xfer += $output->writeString($this->userFriendlyDescription);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->metaData !== null) {
      $xfer += $output->writeFieldBegin('metaData', TType::STRING, 7);
      $xfer += $output->writeString($this->metaData);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->inputOrder !== null) {
      $xfer += $output->writeFieldBegin('inputOrder', TType::I32, 8);
      $xfer += $output->writeI32($this->inputOrder);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->isRequired !== null) {
      $xfer += $output->writeFieldBegin('isRequired', TType::BOOL, 9);
      $xfer += $output->writeBool($this->isRequired);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->requiredToAddedToCommandLine !== null) {
      $xfer += $output->writeFieldBegin('requiredToAddedToCommandLine', TType::BOOL, 10);
      $xfer += $output->writeBool($this->requiredToAddedToCommandLine);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->dataStaged !== null) {
      $xfer += $output->writeFieldBegin('dataStaged', TType::BOOL, 11);
      $xfer += $output->writeBool($this->dataStaged);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->storageResourceId !== null) {
      $xfer += $output->writeFieldBegin('storageResourceId', TType::STRING, 12);
      $xfer += $output->writeString($this->storageResourceId);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->isReadOnly !== null) {
      $xfer += $output->writeFieldBegin('isReadOnly', TType::BOOL, 13);
      $xfer += $output->writeBool($this->isReadOnly);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->overrideFilename !== null) {
      $xfer += $output->writeFieldBegin('overrideFilename', TType::STRING, 14);
      $xfer += $output->writeString($this->overrideFilename);
      $xfer += $output->writeFieldEnd();
    }
    $xfer += $output->writeFieldStop();
    $xfer += $output->writeStructEnd();
    return $xfer;
  }

}

/**
 * Application Outputs. The paramters describe how outputs generated by the application.
 * 
 * name:
 *   Name of the parameter.
 * 
 * value:
 *   Value of the parameter.
 * 
 * type:
 *   Data type of the parameter
 * 
 * applicationArguement:
 *   The argument flag sent to the application. Such as -p pressure.
 * 
 * standardInput:
 *   When this value is set, the parameter is sent as standard input rather than a parameter.
 *   Typically this is passed using redirection operator ">".
 * 
 * userFriendlyDescription:
 *   Description to be displayed at the user interface.
 * 
 * metaData:
 *   Any metadat. This is typically ignore by Airavata and is used by gateways for application configuration.
 * 
 */
class OutputDataObjectType {
  static $_TSPEC;

  /**
   * @var string
   */
  public $name = null;
  /**
   * @var string
   */
  public $value = null;
  /**
   * @var int
   */
  public $type = null;
  /**
   * @var string
   */
  public $applicationArgument = null;
  /**
   * @var bool
   */
  public $isRequired = null;
  /**
   * @var bool
   */
  public $requiredToAddedToCommandLine = null;
  /**
   * @var bool
   */
  public $dataMovement = null;
  /**
   * @var string
   */
  public $location = null;
  /**
   * @var string
   */
  public $searchQuery = null;
  /**
   * @var bool
   */
  public $outputStreaming = null;
  /**
   * @var string
   */
  public $storageResourceId = null;
  /**
   * @var string
   */
  public $metaData = null;

  public function __construct($vals=null) {
    if (!isset(self::$_TSPEC)) {
      self::$_TSPEC = array(
        1 => array(
          'var' => 'name',
          'type' => TType::STRING,
          ),
        2 => array(
          'var' => 'value',
          'type' => TType::STRING,
          ),
        3 => array(
          'var' => 'type',
          'type' => TType::I32,
          ),
        4 => array(
          'var' => 'applicationArgument',
          'type' => TType::STRING,
          ),
        5 => array(
          'var' => 'isRequired',
          'type' => TType::BOOL,
          ),
        6 => array(
          'var' => 'requiredToAddedToCommandLine',
          'type' => TType::BOOL,
          ),
        7 => array(
          'var' => 'dataMovement',
          'type' => TType::BOOL,
          ),
        8 => array(
          'var' => 'location',
          'type' => TType::STRING,
          ),
        9 => array(
          'var' => 'searchQuery',
          'type' => TType::STRING,
          ),
        10 => array(
          'var' => 'outputStreaming',
          'type' => TType::BOOL,
          ),
        11 => array(
          'var' => 'storageResourceId',
          'type' => TType::STRING,
          ),
        12 => array(
          'var' => 'metaData',
          'type' => TType::STRING,
          ),
        );
    }
    if (is_array($vals)) {
      if (isset($vals['name'])) {
        $this->name = $vals['name'];
      }
      if (isset($vals['value'])) {
        $this->value = $vals['value'];
      }
      if (isset($vals['type'])) {
        $this->type = $vals['type'];
      }
      if (isset($vals['applicationArgument'])) {
        $this->applicationArgument = $vals['applicationArgument'];
      }
      if (isset($vals['isRequired'])) {
        $this->isRequired = $vals['isRequired'];
      }
      if (isset($vals['requiredToAddedToCommandLine'])) {
        $this->requiredToAddedToCommandLine = $vals['requiredToAddedToCommandLine'];
      }
      if (isset($vals['dataMovement'])) {
        $this->dataMovement = $vals['dataMovement'];
      }
      if (isset($vals['location'])) {
        $this->location = $vals['location'];
      }
      if (isset($vals['searchQuery'])) {
        $this->searchQuery = $vals['searchQuery'];
      }
      if (isset($vals['outputStreaming'])) {
        $this->outputStreaming = $vals['outputStreaming'];
      }
      if (isset($vals['storageResourceId'])) {
        $this->storageResourceId = $vals['storageResourceId'];
      }
      if (isset($vals['metaData'])) {
        $this->metaData = $vals['metaData'];
      }
    }
  }

  public function getName() {
    return 'OutputDataObjectType';
  }

  public function read($input)
  {
    $xfer = 0;
    $fname = null;
    $ftype = 0;
    $fid = 0;
    $xfer += $input->readStructBegin($fname);
    while (true)
    {
      $xfer += $input->readFieldBegin($fname, $ftype, $fid);
      if ($ftype == TType::STOP) {
        break;
      }
      switch ($fid)
      {
        case 1:
          if ($ftype == TType::STRING) {
            $xfer += $input->readString($this->name);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 2:
          if ($ftype == TType::STRING) {
            $xfer += $input->readString($this->value);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 3:
          if ($ftype == TType::I32) {
            $xfer += $input->readI32($this->type);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 4:
          if ($ftype == TType::STRING) {
            $xfer += $input->readString($this->applicationArgument);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 5:
          if ($ftype == TType::BOOL) {
            $xfer += $input->readBool($this->isRequired);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 6:
          if ($ftype == TType::BOOL) {
            $xfer += $input->readBool($this->requiredToAddedToCommandLine);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 7:
          if ($ftype == TType::BOOL) {
            $xfer += $input->readBool($this->dataMovement);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 8:
          if ($ftype == TType::STRING) {
            $xfer += $input->readString($this->location);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 9:
          if ($ftype == TType::STRING) {
            $xfer += $input->readString($this->searchQuery);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 10:
          if ($ftype == TType::BOOL) {
            $xfer += $input->readBool($this->outputStreaming);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 11:
          if ($ftype == TType::STRING) {
            $xfer += $input->readString($this->storageResourceId);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 12:
          if ($ftype == TType::STRING) {
            $xfer += $input->readString($this->metaData);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        default:
          $xfer += $input->skip($ftype);
          break;
      }
      $xfer += $input->readFieldEnd();
    }
    $xfer += $input->readStructEnd();
    return $xfer;
  }

  public function write($output) {
    $xfer = 0;
    $xfer += $output->writeStructBegin('OutputDataObjectType');
    if ($this->name !== null) {
      $xfer += $output->writeFieldBegin('name', TType::STRING, 1);
      $xfer += $output->writeString($this->name);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->value !== null) {
      $xfer += $output->writeFieldBegin('value', TType::STRING, 2);
      $xfer += $output->writeString($this->value);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->type !== null) {
      $xfer += $output->writeFieldBegin('type', TType::I32, 3);
      $xfer += $output->writeI32($this->type);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->applicationArgument !== null) {
      $xfer += $output->writeFieldBegin('applicationArgument', TType::STRING, 4);
      $xfer += $output->writeString($this->applicationArgument);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->isRequired !== null) {
      $xfer += $output->writeFieldBegin('isRequired', TType::BOOL, 5);
      $xfer += $output->writeBool($this->isRequired);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->requiredToAddedToCommandLine !== null) {
      $xfer += $output->writeFieldBegin('requiredToAddedToCommandLine', TType::BOOL, 6);
      $xfer += $output->writeBool($this->requiredToAddedToCommandLine);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->dataMovement !== null) {
      $xfer += $output->writeFieldBegin('dataMovement', TType::BOOL, 7);
      $xfer += $output->writeBool($this->dataMovement);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->location !== null) {
      $xfer += $output->writeFieldBegin('location', TType::STRING, 8);
      $xfer += $output->writeString($this->location);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->searchQuery !== null) {
      $xfer += $output->writeFieldBegin('searchQuery', TType::STRING, 9);
      $xfer += $output->writeString($this->searchQuery);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->outputStreaming !== null) {
      $xfer += $output->writeFieldBegin('outputStreaming', TType::BOOL, 10);
      $xfer += $output->writeBool($this->outputStreaming);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->storageResourceId !== null) {
      $xfer += $output->writeFieldBegin('storageResourceId', TType::STRING, 11);
      $xfer += $output->writeString($this->storageResourceId);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->metaData !== null) {
      $xfer += $output->writeFieldBegin('metaData', TType::STRING, 12);
      $xfer += $output->writeString($this->metaData);
      $xfer += $output->writeFieldEnd();
    }
    $xfer += $output->writeFieldStop();
    $xfer += $output->writeStructEnd();
    return $xfer;
  }

}


