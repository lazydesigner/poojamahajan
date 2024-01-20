<?php
// Get the POST data from the GitHub webhook
$postData = file_get_contents('php://input');

// Check if the data is valid JSON
if (!$postData || !($data = json_decode($postData))) {
  // Log or echo the decoded JSON data
  http_response_code(400);
  exit('Bad Request');
}

// Check if the webhook event is "push"
if ($data->event_type !== 'push') { 
  http_response_code(204);
  echo 'Pata NAhi';
  exit('Event not supported');
}

// Check if the repository matches your configuration
$repository = $data->repository->full_name;
if ($repository !== 'lazydesigner/poojamahajan') {
  http_response_code(204);
  echo 'Yaha Pe HA';
  exit('Repository not supported');
}

// Clone the repository or pull changes if already exists
$repoPath = '/home/astrlbbp/poojamahajan.com';
if (!file_exists($repoPath)) {
  $cloneCommand = "git clone https://github.com/lazydesigner/poojamahajan.git {$repoPath}";
  $cloneOutput = shell_exec($cloneCommand);
  error_log("Clone Command: $cloneCommand", 0);
  error_log("Clone Output: $cloneOutput", 0);
} else {
  $pullCommand = "cd {$repoPath} && git pull";
  $pullOutput = shell_exec($pullCommand);
  error_log("Pull Command: $pullCommand", 0);
  error_log("Pull Output: $pullOutput", 0);
}

// Copy the files to your web directory
$webPath = '/home/astrlbbp/public_html/poojamahajan.com';
$copyCommand = "rm -rf {$webPath}/* && cp -r {$repoPath}/* {$webPath}/";
$copyOutput = shell_exec($copyCommand);
error_log("Copy Command: $copyCommand", 0);
error_log("Copy Output: $copyOutput", 0);

// Notify that the deployment was successful
http_response_code(200);
echo 'Deployment successful';
?>
