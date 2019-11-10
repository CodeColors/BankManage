<?php

function getAccountByUser($user, $accounts) {
  foreach($accounts as $account) {
    if($user['id'] == $account['user_id']) {
      return $account;
    }
  }
}

function getUserByAccount($account, $users){
  foreach($users as $user) {
    if($account['user_id'] == $user['id']) {
        return $user;
    }
  }
}
?>