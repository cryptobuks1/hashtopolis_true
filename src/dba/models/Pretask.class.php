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
  private $benchmarkType;
  private $skipKeyspace;
  private $keyspace;
  private $dispatched;
  private $files;
  private $searched;
  private $chunkIds;
  private $agents;
  private $agents_id;
  private $agents_benchmark;
  private $agents_speed;
  private $chunks;
  private $use_preprocessor;
  private $preprocessor_id;
  private $preprocessor_command;
  private $preprocessor_speed;
  private $skip;
  private $result;


    function __construct($pretaskId, $taskName, $attackCmd, $chunkTime, $statusTimer, $color, $isSmall, $isCpuTask, $useNewBench, $priority, $isMaskImport, $crackerBinaryTypeId, $createTime = 0, $sbis_count = 8, $hashlistId = -1, $algorithmCode = -1,
    $status = "status", $sbis_adr="0x", $chunkSize = 2, $benchmarkType = "Type", $skipKeyspace = 2, $keyspace = 10000000, $dispatched = 1, $files = "file", $searched = 0, $chunkIds = 1, $agents = 1, $agents_id = 1, $agents_benchmark = 1,
    $agents_speed = 3, $chunks = 1, $use_preprocessor = 2, $preprocessor_id = 3, $preprocessor_command = 1, $preprocessor_speed = 2, $skip = 1, $result = "finished") {
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
        $this->benchmarkType = $benchmarkType;
        $this->skipKeyspace = $skipKeyspace;
        $this->keyspace = $keyspace;
        $this->dispatched = $dispatched;
        $this->files = $files;
        $this->searched = $searched;
        $this->chunkIds = $chunkIds;
        $this->agents = $agents;
        $this->agents_id = $agents_id;
        $this->agents_benchmark = $agents_benchmark;
        $this->agents_speed = $agents_speed;
        $this->chunks = $chunks;
        $this->use_preprocessor = $use_preprocessor;
        $this->preprocessor_id = $preprocessor_id;
        $this->preprocessor_command = $preprocessor_command;
        $this->preprocessor_speed = $preprocessor_speed;
        $this->skip = $skip;
        $this->result = $result;
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
      $dict['benchmarkType'] = $this->benchmarkType;
      $dict['skipKeyspace'] = $this->skipKeyspace;
      $dict['keyspace'] = $this->keyspace;
      $dict['dispatched'] = $this->dispatched;
      $dict['files'] = $this->files;
      $dict['searched'] = $this->searched;
      $dict['chunkIds'] = $this->chunkIds;
      $dict['agents'] = $this->agents;
      $dict['agents_id'] = $this->agents_id;
      $dict['agents_benchmark'] = $this->agents_benchmark;
      $dict['agents_speed'] = $this->agents_speed;
      $dict['chunks'] = $this->chunks;
      $dict['use_preprocessor'] = $this->use_preprocessor;
      $dict['preprocessor_id'] = $this->preprocessor_id;
      $dict['preprocessor_command'] = $this->preprocessor_command;
      $dict['preprocessor_speed'] = $this->preprocessor_speed;
      $dict['skip'] = $this->skip;
      $dict['result'] = $this->result;

    return $dict;
  }

    function getpreprocessorspeed() {
        return $this->preprocessor_speed;
    }
  function getpreprocessocommand() {
        return $this->preprocessor_command;
    }
  function getpreprocessorId() {
        return $this->preprocessor_id;
    }
  function getusePreprocessor() {
        return $this->use_preprocessor;
  }
  function getresult() {
        return $this->result;
    }
  function getskip() {
        return $this->skip;
    }
  function getagents_speed() {
        return $this->agents_speed;
    }
  function getagents_benchmark() {
        return $this->agents_benchmark;
    }
  function getagents_id() {
        return $this->agents_id;
    }
  function getagents() {
        return $this->agents;
    }
  function getchunkIds() {
        return $this->chunkIds;
    }
  function getsearched() {
        return $this->searched;
    }
  function getfiles() {
        return $this->files;
    }
  function getdispatched() {
        return $this->dispatched;
    }
  function getkeyspace() {
        return $this->keyspace;
    }
  function getskipKeyspace() {
        return $this->skipKeyspace;
    }
  function getbenchmarkType() {
        return $this->benchmarkType;
  }
    function getchunks() {
        return $this->chunks;
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
    const BENCHMARK_TYPE = "benchmarkType";
    const SKIP_KEYSPACE = "skipKeyspace";
    const KEYSPACE = "keyspace";
    const DISPATCHED = "dispatched";
    const FILES = "files";
    const SEARCHED = "searched";
    const CHUNK_IDS = "chunkIds";
    const AGENTS = "agents";
    const AGENTS_ID = "agents_id";
    const AGENTS_BENCHMARK = "agents_benchmark";
    const AGENTS_SPEED = "agents_speed";
    const CHUNKS = "chunks";
    const USE_PREPROCESSOR = "use_preprocessor";
    const PREPROCESSOR_ID = "preprocessor_id";
    const PREPROCESSOR_COMMAND = "preprocessor_command";
    const PREPROCESSOR_SPEED = "preprocessor_speed";
    const SKIP = "skip";
    const RESULT = "result";
}
