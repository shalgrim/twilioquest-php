<?php echo "798"; 

function isABotCheck($isABot = true)
{
  if ($isABot == true) {
    return true;
  }
  return false;
}

function passwordCheck($providedPassword, $actualPassword)
{
  if ($providedPassword != $actualPassword) {
    return false;
  }
  return true;
}

function securityAnswerCheck($providedAnswer, $actualAnswer)
{
  if (strpos($actualAnswer, $providedAnswer) === 0) {
    return true;
  }
  return false;
}

function passwordTriesHitLimit($tries)
{
  $limit = 5;
  if ($tries < $limit && $tries > 0) {
    return false;
  }
  return true;
}

?>
