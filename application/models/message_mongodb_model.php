<?php
class Message_mongodb_model extends CI_Model
{
    var $SERVICE_MESSAGE;
    public function __construct() 
    {
        parent::__construct();
        $this->SERVICE_MESSAGE = SERVICE_PATH . "message/";
    } 
    
    public function add_message($user_id_list,$sender_id,$message){
        $this->curl->create($this->SERVICE_MESSAGE . 'addMessage');
        $this->curl->post(array("userIdList" => json_encode($user_id_list),"senderId" => $sender_id, "message" => $message));
        return json_decode($this->curl->execute());
    }
    public function add_message_by_group_id($group_id, $sender_info, $message){
        $this->curl->create($this->SERVICE_MESSAGE . 'addMessageByGroupId');
        $this->curl->post(array("groupId" => $group_id,"senderInfo" => json_encode($sender_info), "message" => $message));
        return json_decode($this->curl->execute());
    }
    public function get_message_summary_list($user_id, $offset, $limit){
        $this->curl->create($this->SERVICE_MESSAGE . 'getMessageSummaryList');
        $this->curl->post(array("userId" => $user_id, "offset" => $offset, "limit" => $limit));
        return json_decode($this->curl->execute());
    }
    public function get_message_list($group_id,$offset,$limit){
        $this->curl->create($this->SERVICE_MESSAGE . 'getMessageList');
        $this->curl->post(array("groupId" => $group_id,"offset" => $offset, "limit" => $limit));
        return json_decode($this->curl->execute());
    }
   
}

