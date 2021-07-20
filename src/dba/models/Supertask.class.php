<?php

namespace DBA;

class Supertask extends AbstractModel {
  private $supertaskId;
  private $supertaskName;

  private $priority;
  private $sbis_count;
  private $status;
  private $percent;
  private $create_time;
  private $finish_time;
  private $result;
  
  function __construct($supertaskId, $supertaskName,
    $priority = 1, $pmsn_count = 8, $status = "created", $percent = 10, $create_time = 0, $finish_time = 0, $result = "file") {
    $this->supertaskId = $supertaskId;
    $this->supertaskName = $supertaskName;

    $this->priority = $priority;
    $this->sbis_count = $pmsn_count;
    $this->status = $status;
    $this->percent = $percent;
    $this->create_time = $create_time;
    $this->finish_time = $finish_time;
    $this->result = $result;
  }
  
  function getKeyValueDict() {
    $dict = array();
    $dict['supertaskId'] = $this->supertaskId;
    $dict['supertaskName'] = $this->supertaskName;

    $dict['priority'] = $this->priority;
    $dict['sbis_count'] = $this->sbis_count;
    $dict['status'] = $this->status;
    $dict['percent'] = $this->percent;
    $dict['create_time'] = $this->create_time;
    $dict['finish_time'] = $this->finish_time;
    $dict['result'] = $this->result;


    
    return $dict;
  }
  
  function getPrimaryKey() {
    return "supertaskId";
  }
  
  function getPrimaryKeyValue() {
    return $this->supertaskId;
  }
  
  function getId() {
    return $this->supertaskId;
  }
  
  function setId($id) {
    $this->supertaskId = $id;
  }
  
  /**
   * Used to serialize the data contained in the model
   * @return array
   */
  public function expose() {
    return get_object_vars($this);
  }
  
  function getSupertaskName() {
    return $this->supertaskName;
  }
  
  function setSupertaskName($supertaskName) {
    $this->supertaskName = $supertaskName;
  }

  function getPriority() {
        return $this->priority;
  }

  function getSbisCount() {
        return $this->sbis_count;
  }
  function getPercent(){
      return $this->percent;
  }
  function getStatus() {
        return $this->status;
  }

  function getCreateTime() {
        return $this->create_time;
  }

  function getFinishTime() {
        return $this->finish_time;
  }

  function getResult() {
        return $this->result;
  }
  
  const SUPERTASK_ID = "supertaskId";
  const SUPERTASK_NAME = "supertaskName";
  const PRIORITY = "priority";
  const SBIS_COUNT = "sbis_count";
  const STATUS = "status";
  const PERCENT = "percent";
  const ALGORITHM_CODE = "algorithm_code";
  const CREATE_TIME = "create_time";
  const FINISH_TIME = "finish_time";
  const RESULT = "result";
}
