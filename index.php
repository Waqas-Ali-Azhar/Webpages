<?php



require_once __DIR__.'/Facebook/autoload.php';

// $fb = new \Facebook\Facebook([
//   'app_id' => '300000430675485',
//   'app_secret' => '98cfa892094874413da70c655b43c6da',
//   'default_graph_version' => 'v2.10',
//   //'default_access_token' => '{access-token}', // optional
// ]);

// // Use one of the helper classes to get a Facebook\Authentication\AccessToken entity.
//   // $helper = $fb->getRedirectLoginHelper();
//   // $helper = $fb->getJavaScriptHelper();
// //   $helper = $fb->getCanvasHelper();
//   // $helper = $fb->getPageTabHelper();

// try {
//   // Get the \Facebook\GraphNodes\GraphUser object for the current user.
//   // If you provided a 'default_access_token', the '{access-token}' is optional.
//   //EAAEQ2UsaVh0BAHSDTkSRSQyJwfSeThJ7ZAjokl5INoDMeGSZAqHZA0RzzZB9s2j9wyqNfHDeu3TYhPXrjMiPr7CBk6bkuZCiVdx6HBFBLdQ8xykSZBuGlMGDrGrwUnFZAPW1Jp4BGGjeszIZBcUrguTRiWbmdqNPO0USx6qUVQeMu24wZAGMnksmbIZAWhgbaOrLIZD
//   $helper = $fb->getJavaScriptHelper();
//   $response = $fb->get('/me', '');
// } catch(\Facebook\Exceptions\FacebookResponseException $e) {
//   // When Graph returns an error
//   echo 'Graph returned an error: ' . $e->getMessage();
//   exit;
// } catch(\Facebook\Exceptions\FacebookSDKException $e) {
//   // When validation fails or other local issues
//   echo 'Facebook SDK returned an error: ' . $e->getMessage();
//   exit;
// }

// $me = $response->getGraphUser();
// echo 'Logged in as ' . $me->getName();
// 
// # login-callback.php
$fb = new \Facebook\Facebook([
  'app_id' => '231503037392924',
  'app_secret' => '9d62ee86f35b4682f5935fc38922f03b',
  'default_graph_version' => 'v2.10',
  //'default_access_token' => '{access-token}', // optional
]);

$helper = $fb->getRedirectLoginHelper();

$permissions = ['email']; // Optional permissions
$loginUrl = $helper->getLoginUrl('https://example.com/fb-callback.php', $permissions);

echo '<a href="' . htmlspecialchars($loginUrl) . '">Log in with Facebook!</a>';

?>