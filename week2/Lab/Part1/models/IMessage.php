<?php
/**
 *
 * @author 001301554
 */
interface IMessage {
    public function addMessage($key, $msg);
    public function removeMessage($key);
    public function getAllMessages();
}
