<?
// host = postgre.cvs0xwx2zhxj.ap-northeast-2.rds.amazonaws.com:5432
// dbname = myprogre
// user = dukhyun
// password = WJ94Jcc8VUzEXkja8M
$dbconn = pg_connect("host=postgre.cvs0xwx2zhxj.ap-northeast-2.rds.amazonaws.com:5432 dbname=myprogre user=dukhyun password=WJ94Jcc8VUzEXkja8M") or die('Could not connect: ' . pg_last_error());
