<?php
if(version_compare(PHP_VERSION,'5.3.0','<')) die('require PHP > 5.3.0 !');
// ��������ģʽ ���鿪���׶ο��� ����׶�ע�ͻ�����Ϊfalse
define('APP_DEBUG',true);
//��ģ��
define('BIND_MODULE','Admin');
// ����Ӧ��Ŀ¼
define('APP_PATH','./MyBlog/');
// ����ThinkPHP����ļ�
require './ThinkPHP/ThinkPHP.php';