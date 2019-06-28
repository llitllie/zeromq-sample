<?php
$pContext = new ZMQContext();
$pFrontend = new ZMQSocket($pContext, ZMQ::SOCKET_ROUTER);
$pBackend = new ZMQSocket($pContext, ZMQ::SOCKET_DEALER);
$pFrontend->bind("tcp://*:5559");
$pBackend->bind("tcp://*:5560");
 
$pDevice = new ZMQDevice($pFrontend, $pBackend);
$pDevice->run();