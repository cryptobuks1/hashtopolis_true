<?php

namespace DBA;

class Pretask extends AbstractModel {
  private $pretaskId;
  private $taskName;
  private $attackCmd;
  private $chunkTime;
  private $statusTimer;
  private $color;
  private $isSmall;
  private $isCpuTask;
  private $useNewBench;
  private $priority;
  private $isMaskImport;
  private $crackerBinaryTypeId;
  private $createTime;
  private $endTime;
  private $sbis_count;

  private $cur_sbis_count;
  private $percent;
  private $hashlistId;
  private $speed;
  private $isComplete;
  private $algorithmCode;
  private $status;
  private $sbis_adr;
  private $chunkSize;

  
  function __construct($pretaskId, $taskName, $attackCmd, $chunkTime, $statusTimer, $color, $isSmall, $isCpuTask, $useNewBench, $priority, $isMaskImport, $crackerBinaryTypeId, $createTime = 0, $sbis_count = 8, $hashlistId = -1, $algorithmCode = -1,
    $status = "status", $sbis_adr="0x", $chunkSize = 2) {
    $this->pretaskId = $pretaskId;
    $this->taskName = $taskName;
    $this->attackCmd = $attackCmd;
    $this->chunkTime = $chunkTime;
    $this->statusTimer = $statusTimer;
    $this->color = $color;
    $this->isSmall = $isSmall;
    $this->isCpuTask = $isCpuTask;
    $this->useNewBench = $useNewBench;
    $this->priority = $priority;
    $this->isMaskImport = $isMaskImport;
    $this->crackerBinaryTypeId = $crackerBinaryTypeId;
    $this->createTime = $createTime;
    $this->sbis_count = $sbis_count;

    $this->endTime = 0;
    $this->percent = 0;
    $this->cur_sbis_count = 0;
    $this->hashlistId = $hashlistId;
    $this->speed = 0;
    $this->isComplete = false;
    $this->algorithmCode = $algorithmCode;
    $this->status = $status;
    $this->sbis_adr = $sbis_adr;
    $this->chunkSize = $chunkSize;
    \DServerLog::log(\DServerLog::INFO, "Create new Pretask(construct) with $sbis_count ", [$sbis_count]);


  }
  
  function getKeyValueDict() {
    $dict = array();
    $dict['pretaskId'] = $this->pretaskId;
    $dict['taskName'] = $this->taskName;
    $dict['attackCmd'] = $this->attackCmd;
    $dict['chunkTime'] = $this->chunkTime;
    $dict['statusTimer'] = $this->statusTimer;
    $dict['color'] = $this->color;
    $dict['isSmall'] = $this->isSmall;
    $dict['isCpuTask'] = $this->isCpuTask;
    $dict['useNewBench'] = $this->useNewBench;
    $dict['priority'] = $this->priority;
    $dict['isMaskImport'] = $this->isMaskImport;
    $dict['crackerBinaryTypeId'] = $this->crackerBinaryTypeId;
    $dict['createTime'] = $this->createTime;
    $dict['sbis_count'] = $this->sbis_count;

    $dict['endTime'] = $this->endTime;
    $dict['cur_sbis_count'] = $this->cur_sbis_count;
    $dict['percent'] = $this->percent;
    $dict['hashlistId'] = $this->hashlistId;
    $dict['speed'] = $this->speed;
    $dict['isComplete'] = $this->isComplete;
    $dict['algorithmCode'] = $this->algorithmCode;
    $dict['status'] = $this->status;
    $dict['sbis_adr'] = $this->sbis_adr;
    $dict['chunkSize'] = $this->chunkSize;

    return $dict;
  }


  function getChunkSize() {
   return $this->chunkSize;
  }

  function getSbisAdr() {
    return $this->sbis_adr;
  }

  function getStatus() {
    return $this->status;
  }

  function getPrimaryKey() {
    return "pretaskId";
  }
  
  function getPrimaryKeyValue() {
    return $this->pretaskId;
  }
  
  function getId() {
    return $this->pretaskId;
  }
  
  function setId($id) {
    $this->pretaskId = $id;
  }
  
  /**
   * Used to serialize the data contained in the model
   * @return array
   */
  public function expose() {
    return get_object_vars($this);
  }
  
  function getTaskName() {
    return $this->taskName;
  }
  
  function setTaskName($taskName) {
    $this->taskName = $taskName;
  }
  
  function getAttackCmd() {
    return $this->attackCmd;
  }
  
  function setAttackCmd($attackCmd) {
    $this->attackCmd = $attackCmd;
  }

  
  function getChunkTime() {
    return $this->chunkTime;
  }
  
  function setChunkTime($chunkTime) {
    $this->chunkTime = $chunkTime;
  }
  
  function getStatusTimer() {
    return $this->statusTimer;
  }
  
  function setStatusTimer($statusTimer) {
    $this->statusTimer = $statusTimer;
  }
  
  function getColor() {
    return $this->color;
  }
  
  function setColor($color) {
    $this->color = $color;
  }
  
  function getIsSmall() {
    return $this->isSmall;
  }
  
  function setIsSmall($isSmall) {
    $this->isSmall = $isSmall;
  }
  
  function getIsCpuTask() {
    return $this->isCpuTask;
  }
  
  function setIsCpuTask($isCpuTask) {
    $this->isCpuTask = $isCpuTask;
  }
  
  function getUseNewBench() {
    return $this->useNewBench;
  }
  
  function setUseNewBench($useNewBench) {
    $this->useNewBench = $useNewBench;
  }
  
  function getPriority() {
    return $this->priority;
  }
  
  function setPriority($priority) {
    $this->priority = $priority;
  }
  
  function getIsMaskImport() {
    return $this->isMaskImport;
  }
  
  function setIsMaskImport($isMaskImport) {
    $this->isMaskImport = $isMaskImport;
  }
  
  function getCrackerBinaryTypeId() {
    return $this->crackerBinaryTypeId;
  }
  
  function setCrackerBinaryTypeId($crackerBinaryTypeId) {
    $this->crackerBinaryTypeId = $crackerBinaryTypeId;
  }
  function getCreateTime(){
      return $this->createTime;
  }
  function getSbisCount() {
      return $this->sbis_count;
  }
  function getCurSbisCount(){
      return $this->cur_sbis_count;
  }
  function getCompleteStatus(){
      return $this->isComplete;
  }
  function getEndTime() {
      return $this->endTime;
  }

  function getHashlistId() {
        return $this->hashlistId;
  }

  function getPercent() {
      return $this->percent;
  }

  function getAlgorithmCode() {
      return $this->algorithmCode;
  }


  
  const PRETASK_ID = "pretaskId";
  const STATUS = "status";
  const CHUNK_SIZE = "chunkSize";
  const TASK_NAME = "taskName";
  const ATTACK_CMD = "attackCmd";
  const CHUNK_TIME = "chunkTime";
  const STATUS_TIMER = "statusTimer";
  const COLOR = "color";
  const IS_SMALL = "isSmall";
  const IS_CPU_TASK = "isCpuTask";
  const USE_NEW_BENCH = "useNewBench";
  const PRIORITY = "priority";
  const IS_MASK_IMPORT = "isMaskImport";
  const CRACKER_BINARY_TYPE_ID = "crackerBinaryTypeId";
  const CREATE_TIME = "createTime";
  const SBIS_COUNT = "sbis_count";
}
