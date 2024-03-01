<?php

    /**
     * Class to handle Control Status
     */
    class ControlStatus
    {
        
        public $id = null;
        
        public $status = null;
        public function __construct( $data=array() ) {
            if ( isset( $data['id']) && !empty( $data['id']) ) $this->_id = (int) $data['id'];
            if ( isset( $data['status'] )  && !empty( $data['status'] )) $this->status = $data['status'];
        }

        public function storeFormValues ( $params ) {
            // Store all the parameters
            $this->__construct( $params );
        }

        public static function getcurrentControlStatus(){
            //creating sql query
            $conn = new PDO( DB_DSN, DB_USERNAME, DB_PASSWORD );
            $sql = "SELECT * FROM control_status";
            $st = $conn->prepare( $sql );
            $st->execute();
            $row = $st->fetchAll(PDO::FETCH_ASSOC);
            // $row = $st->fetch();
            $conn = null;
            if ( $row ) return ( $row);
        }
    }
