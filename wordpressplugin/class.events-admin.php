<?php
namespace nexrage_events;
interface AdminInterface {
   function createHtml();
}
class Events_Admin implements AdminInterface{
    private function registerPostType(){
        echo 'success';
    }
}

?>