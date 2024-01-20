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
  exit('Event not supported');
}

// Check if the repository matches your configuration
$repository = $data->repository->full_name;
if ($repository !== 'lazydesigner/poojamahajan') {
  http_response_code(204);
  exit('Repository not supported');
}

// Clone the repository or pull changes if already exists
$repoPath = '/home/astrlbbp/poojamahajan.com';
if (!file_exists($repoPath)) {
  shell_exec("git clone https://github.com/lazydesigner/poojamahajan.git {$repoPath}");
} else {
  shell_exec("cd {$repoPath} && git pull");
}

// Copy the files to your web directory
$webPath = '/home/astrlbbp/public_html/poojamahajan.com';
shell_exec("rm -rf {$webPath}/* && cp -r {$repoPath}/* {$webPath}/");

// Notify that the deployment was successful
http_response_code(200);
echo 'Deployment successful';
?>
