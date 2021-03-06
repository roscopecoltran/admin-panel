<?php
// This is autogenerated config file. You should not change it manually.

return function (CM_Config_Node $config) {
    $config->CM_Mail->types = array();
    $config->CM_Mail->types[1] = 'CM_Mail';
    $config->CM_Mail->types[2] = 'CM_Mail_Welcome';
    
    $config->CM_Action_Abstract->types = array();
    $config->CM_Action_Abstract->types[3] = 'CM_Action_Email';
    
    $config->CM_Model_Abstract->types = array();
    $config->CM_Model_Abstract->types[5] = 'CM_Model_Language';
    $config->CM_Model_Abstract->types[6] = 'CM_Model_Location';
    $config->CM_Model_Abstract->types[7] = 'CM_Model_Splitfeature';
    $config->CM_Model_Abstract->types[8] = 'CM_Model_Splittest';
    $config->CM_Model_Abstract->types[9] = 'CM_Model_SplittestVariation';
    $config->CM_Model_Abstract->types[10] = 'CM_Model_User';
    $config->CM_Model_Abstract->types[11] = 'CM_Model_Splittest_RequestClient';
    $config->CM_Model_Abstract->types[12] = 'CM_Model_Splittest_User';
    $config->CM_Model_Abstract->types[13] = 'CM_Model_Stream_Publish';
    $config->CM_Model_Abstract->types[14] = 'CM_Model_Stream_Subscribe';
    $config->CM_Model_Abstract->types[15] = 'CM_Model_StreamChannel_Message';
    $config->CM_Model_Abstract->types[16] = 'CM_Model_StreamChannel_Video';
    $config->CM_Model_Abstract->types[17] = 'CM_Model_StreamChannel_Message_User';
    $config->CM_Model_Abstract->types[18] = 'CM_Model_StreamChannelArchive_Video';
    $config->CM_Model_Abstract->types[27] = 'CM_Model_Location_City';
    $config->CM_Model_Abstract->types[28] = 'CM_Model_Location_Country';
    $config->CM_Model_Abstract->types[29] = 'CM_Model_Location_State';
    $config->CM_Model_Abstract->types[30] = 'CM_Model_Location_Zip';
    $config->CM_Model_Abstract->types[36] = 'CM_Model_LanguageKey';
    
    $config->CM_Paging_ContentList_Abstract->types = array();
    $config->CM_Paging_ContentList_Abstract->types[19] = 'CM_Paging_ContentList_Badwords';
    
    $config->CM_Paging_Log_Abstract->types = array();
    $config->CM_Paging_Log_Abstract->types[20] = 'CM_Paging_Log_Error';
    $config->CM_Paging_Log_Abstract->types[21] = 'CM_Paging_Log_Fatal';
    $config->CM_Paging_Log_Abstract->types[22] = 'CM_Paging_Log_JsError';
    $config->CM_Paging_Log_Abstract->types[23] = 'CM_Paging_Log_Mail';
    $config->CM_Paging_Log_Abstract->types[24] = 'CM_Paging_Log_Warn';
    
    $config->CM_Site_Abstract->types = array();
    $config->CM_Site_Abstract->types[37] = 'AP_Site_AdminPanel';
    
    $config->CM_Stream_Adapter_Abstract->types = array();
    $config->CM_Stream_Adapter_Abstract->types[25] = 'CM_Stream_Adapter_Message_SocketRedis';
    $config->CM_Stream_Adapter_Abstract->types[26] = 'CM_Stream_Adapter_Video_Wowza';
    
    
    $config->CM_Mail->type = 1;
    $config->CM_Mail_Welcome->type = 2;
    $config->CM_Action_Email->type = 3;
    $config->CM_Model_Language->type = 5;
    $config->CM_Model_Location->type = 6;
    $config->CM_Model_Splitfeature->type = 7;
    $config->CM_Model_Splittest->type = 8;
    $config->CM_Model_SplittestVariation->type = 9;
    $config->CM_Model_User->type = 10;
    $config->CM_Model_Splittest_RequestClient->type = 11;
    $config->CM_Model_Splittest_User->type = 12;
    $config->CM_Model_Stream_Publish->type = 13;
    $config->CM_Model_Stream_Subscribe->type = 14;
    $config->CM_Model_StreamChannel_Message->type = 15;
    $config->CM_Model_StreamChannel_Video->type = 16;
    $config->CM_Model_StreamChannel_Message_User->type = 17;
    $config->CM_Model_StreamChannelArchive_Video->type = 18;
    $config->CM_Paging_ContentList_Badwords->type = 19;
    $config->CM_Paging_Log_Error->type = 20;
    $config->CM_Paging_Log_Fatal->type = 21;
    $config->CM_Paging_Log_JsError->type = 22;
    $config->CM_Paging_Log_Mail->type = 23;
    $config->CM_Paging_Log_Warn->type = 24;
    $config->CM_Stream_Adapter_Message_SocketRedis->type = 25;
    $config->CM_Stream_Adapter_Video_Wowza->type = 26;
    $config->CM_Model_Location_City->type = 27;
    $config->CM_Model_Location_Country->type = 28;
    $config->CM_Model_Location_State->type = 29;
    $config->CM_Model_Location_Zip->type = 30;
    $config->CM_Model_LanguageKey->type = 36;
    $config->AP_Site_AdminPanel->type = 37;
    
    $config->CM_Class_Abstract->typesMaxValue = 37;
    
    $config->CM_Action_Abstract->verbs = array();
    $config->CM_Action_Abstract->verbs[CM_Action_Abstract::CREATE] = 1;
    $config->CM_Action_Abstract->verbs[CM_Action_Abstract::UPDATE] = 2;
    $config->CM_Action_Abstract->verbs[CM_Action_Abstract::DELETE] = 3;
    $config->CM_Action_Abstract->verbs[CM_Action_Abstract::ONLINE] = 4;
    $config->CM_Action_Abstract->verbs[CM_Action_Abstract::OFFLINE] = 5;
    $config->CM_Action_Abstract->verbs[CM_Action_Abstract::VIEW] = 6;
    $config->CM_Action_Abstract->verbs[CM_Action_Abstract::VISIBLE] = 7;
    $config->CM_Action_Abstract->verbs[CM_Action_Abstract::INVISIBLE] = 8;
    $config->CM_Action_Abstract->verbs[CM_Action_Abstract::PUBLISH] = 9;
    $config->CM_Action_Abstract->verbs[CM_Action_Abstract::UNPUBLISH] = 10;
    $config->CM_Action_Abstract->verbs[CM_Action_Abstract::SUBSCRIBE] = 11;
    $config->CM_Action_Abstract->verbs[CM_Action_Abstract::UNSUBSCRIBE] = 12;
    $config->CM_Action_Abstract->verbs[CM_Action_Abstract::SEND] = 14;
    $config->CM_Action_Abstract->verbsMaxValue = 14;
};
