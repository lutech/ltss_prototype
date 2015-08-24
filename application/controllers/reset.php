<?php

class Reset extends CI_Controller {

    public function all() {
        setcookie('confirmation', '', time()+36000000, '/');

        //DDA Eligbility Application
        setcookie('ddaeligibilityapplicationstatus', '', time()+36000000, '/');
        setcookie('ddaeligibilityapplicationactive', '', time()+36000000, '/');
        setcookie('ddaeligibilityapplicationlastmodifiedby', '', time()+36000000, '/');
        setcookie('ddaeligibilityapplicationlastmodifieddate', '', time()+36000000, '/');
        setcookie('ddaeligibilityapplicationapplicationdate', '', time()+36000000, '/');
        setcookie('ddaeligibilityapplicationcompletiondate', '', time()+36000000, '/');
        setcookie('ddaeligibilityapplicationdatecurrentstatusattained', '', time()+36000000, '/');

        //DDA Application Packet
        setcookie('ddaapplicationpacketstatus', '', time()+36000000, '/');
        setcookie('ddaapplicationpacketactive', '', time()+36000000, '/');
        setcookie('ddaapplicationpacketprogramtype', '', time()+36000000, '/');
        setcookie('ddaapplicationpacketcreatedby', '', time()+36000000, '/');
        setcookie('ddaapplicationpacketcreatedate', '', time()+36000000, '/');
        setcookie('ddaapplicationpacketcompletedate', '', time()+36000000, '/');

        //DDA Emergnecy Situation
        setcookie('ddaemergencysituationstatus', '', time()+36000000, '/');
        setcookie('ddaemergencysituationactive', '', time()+36000000, '/');
        setcookie('ddaemergencysituationlastmodifiedby', '', time()+36000000, '/');
        setcookie('ddaemergencysituationlastmodifieddate', '', time()+36000000, '/');
        setcookie('ddaemergencysituationcreatedate', '', time()+36000000, '/');

        $this->load->helper('url');
        $url = base_url().'index.php/';
        header( "Location: $url" );
    }

    //DDA Eligbility Application
    public function ddaeligibilityapplication() {
        setcookie('confirmation', '', time()+36000000, '/');
        setcookie('ddaeligibilityapplicationstatus', '', time()+36000000, '/');
        setcookie('ddaeligibilityapplicationactive', '', time()+36000000, '/');
        setcookie('ddaeligibilityapplicationlastmodifiedby', '', time()+36000000, '/');
        setcookie('ddaeligibilityapplicationlastmodifieddate', '', time()+36000000, '/');
        setcookie('ddaeligibilityapplicationapplicationdate', '', time()+36000000, '/');
        setcookie('ddaeligibilityapplicationcompletiondate', '', time()+36000000, '/');
        setcookie('ddaeligibilityapplicationdatecurrentstatusattained', '', time()+36000000, '/');

        $this->load->helper('url');
        $url = base_url().'index.php/ddaapplication/summary';
        header( "Location: $url" );
    }

    //DDA Application Packet
    public function ddaapplicationpacket() {
        setcookie('confirmation', '', time()+36000000, '/');
        setcookie('ddaapplicationpacketstatus', '', time()+36000000, '/');
        setcookie('ddaapplicationpacketactive', '', time()+36000000, '/');
        setcookie('ddaapplicationpacketprogramtype', '', time()+36000000, '/');
        setcookie('ddaapplicationpacketcreatedby', '', time()+36000000, '/');
        setcookie('ddaapplicationpacketcreatedate', '', time()+36000000, '/');
        setcookie('ddaapplicationpacketcompletedate', '', time()+36000000, '/');

        $this->load->helper('url');
        $url = base_url().'index.php/applicationpacket/history';
        header( "Location: $url" );
    }

    //DDA Emergnecy Situation
    public function ddaemergencysituation() {
        setcookie('confirmation', '', time()+36000000, '/');
        setcookie('ddaemergencysituationstatus', '', time()+36000000, '/');
        setcookie('ddaemergencysituationactive', '', time()+36000000, '/');
        setcookie('ddaemergencysituationlastmodifiedby', '', time()+36000000, '/');
        setcookie('ddaemergencysituationlastmodifieddate', '', time()+36000000, '/');
        setcookie('ddaemergencysituationcreatedate', '', time()+36000000, '/');

        $this->load->helper('url');
        $url = base_url().'index.php/ddaapplication/summary';
        header( "Location: $url" );
    }
}