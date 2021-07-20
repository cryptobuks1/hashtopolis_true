<?php

use DBA\AccessGroupAgent;
use DBA\Agent;
use DBA\QueryFilter;
use DBA\RegVoucher;
use DBA\Factory;

class APIRegisterAgent extends APIBasic {
  public function execute($QUERY = array()) {
    //check required values

    if (!PQueryRegister::isValid($QUERY)) {
      $this->sendErrorResponse(PActions::REGISTER, "Invalid registering query!");
      DServerLog::log(DServerLog::INFO, "Invalid registering query!");
    }

    $voucher = Util::randomString(10);

    AgentUtils::createVoucher($voucher);


    //create access token & save agent details
    $token = Util::randomString(10);
    $name = htmlentities($QUERY[PQueryRegister::AGENT_NAME], ENT_QUOTES, "UTF-8");
    try {
        $agent = new Agent(null, $name, "", -1, "", "", 0, 1, 0, $token, PActions::REGISTER, time(), Util::getIP(), null, 0, "");

        $agent = Factory::getAgentFactory()->save($agent);

        if ($agent != null) {
            $payload = new DataSet(array(DPayloadKeys::AGENT => $agent));
            NotificationHandler::checkNotifications(DNotificationType::NEW_AGENT, $payload);
            DServerLog::log(DServerLog::INFO, "Registered new agent", [$agent]);

            // assign agent to default group
            $accessGroup = AccessUtils::getOrCreateDefaultAccessGroup();
            $accessGroupAgent = new AccessGroupAgent(null, $accessGroup->getId(), $agent->getId());
            Factory::getAccessGroupAgentFactory()->save($accessGroupAgent);
            DServerLog::log(DServerLog::INFO, "Assigned agent to access group", [$agent, $accessGroup]);


            $id = $agent->getId();
            $sql = "INSERT INTO AgentAdditionalInfo values ($id, 8, '0x1, 0x2, 0x3')";
            $conn = new mysqli("localhost:3306", "root", "123456");
            $res = $conn->query($sql);
            DServerLog::log(DServerLog::INFO, "Data Base Change Status: $res" );





            $this->sendResponse(array(
                    PQueryRegister::ACTION => PActions::REGISTER,
                    PResponseRegister::RESPONSE => PValues::SUCCESS,
                    PResponseRegister::TOKEN => $token
                )
            );
        }
        else {
            //DServerLog::log(DServerLog::ERROR, "Saving of agent failed!", [$agent]);
            $this->sendErrorResponse(PActions::REGISTER, "Could not register you to server: Saving failed!");
        }
    } catch (Exception $e) {
        DServerLog::log(DServerLog::INFO, "" . $e);
    }


  }
}