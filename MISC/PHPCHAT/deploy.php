<?
  include './config.php';
  mysql_connect($host, $username, $password);
  mysql_select_db($database);
  mysql_query('DROP TABLE IF EXISTS chat_room');
  mysql_query('CREATE TABLE chat_room (room_id INTEGER UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY, message_id INTEGER UNSIGNED NOT NULL, room CHAR(16) NOT NULL, INDEX (room ASC))');
  mysql_query('DROP TABLE IF EXISTS chat_message');
  mysql_query('CREATE TABLE chat_message (room_id INTEGER UNSIGNED NOT NULL, message_id INTEGER UNSIGNED NOT NULL, MESSAGE TEXT NOT NULL, INDEX (room_id ASC, message_id ASC))');
  mysql_close();
?>
