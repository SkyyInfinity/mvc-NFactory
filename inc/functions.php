<?php
// D E B U G ///////////////////////////////////////////////////////////////////
function debug($array) {
	echo '<pre style="height:150px;overflow-y: scroll;font-size:.8em;padding: 10px; font-family: Consolas, Monospace; background-color: #000; color: #fff;">';
	print_r($array);
	echo '</pre>';
}
// R E D I R E C T I O N ///////////////////////////////////////////////////////
function redirect($page) {
  header("Location: $page");
}
// R E D I R E C T I O N   T E M P O ///////////////////////////////////////////
function redirectTempo($value, $page) {
  header("refresh:$value;url=$page");
}
// P A G I N A T I O N /////////////////////////////////////////////////////////
function pagination($id, $page, $num, $count) {
  ?><ul><?php
    if($page > 1) {
      ?><li class="pagination"><a class="back-to-home" href="single.php?id=<?php echo $id ?>&page=<?php echo $page - 1; ?>">Précedent</a></li><?php
    }
    if($page * $num < $count) {
      ?><li class="pagination"><a class="back-to-home" href="single.php?id=<?php echo $id ?>&page=<?php echo $page + 1; ?>">Suivant</a></li><?php
    }
  ?></ul><?php
}
// C L E A N   X S S /////////////////////////////////////////////////////////////////
function cleanXss($element) {
  return trim(strip_tags($element));
}
// V A L I D A T I O N   T E X T /////////////////////////////////////////////////////
function validationText($errors, $data, $key, $min, $max) {
  if(!empty($data)) {
    if(mb_strlen($data) < $min) {
      $errors[$key] = 'Le champ doit être plus grand que ' . $min . ' caractères.';
    } elseif(mb_strlen($data) > $max) {
      $errors[$key] = 'Le champ doit être plus petit que ' . $max . ' caractères.';
    }
  } else {
    $errors[$key] = 'Veuillez renseigner ce champ.';
  }
  return $errors;
}
// V A L I D A T I O N   E M A I L ///////////////////////////////////////////////////
function validationEmail($errors, $data, $key) {
  if(!empty($data)) {
    if(!filter_var($data, FILTER_VALIDATE_EMAIL)) {
      $errors[$key] = 'L\'email doit être un email valide.';
    }
  } else {
    $errors[$key] = 'Veuillez renseigner ce champ.';
  }
  return $errors;
}
// V A L I D A T I O N   P A S S W O R D /////////////////////////////////////////////
function validationPassword($errors, $data, $key, $min, $max) {
  $majuscule        = preg_match('@[A-Z]@', $password);
  $minuscule        = preg_match('@[a-z]@', $password);
  $chiffre          = preg_match('@[0-9]@', $password);
  $caractereSpecial = preg_match('@[^\w]@', $password);

  if(!empty($data)) {
    if(mb_strlen($data) < $min) {
      $errors[$key] = 'Le mot de passe doit être plus grand que ' . $min . ' caractères.';
    } elseif(mb_strlen($data) > $max) {
      $errors[$key] = 'Le mot de passe doit être plus petit que ' . $max . ' caractères.';
    } elseif(!$majuscule || !$minuscule || !$chiffre || !$caractereSpecial) {
      $errors[$key] = 'Le mot de passe doit contenir au moins une majuscule, une minuscule, un chiffre et un caractére spécial.';
    }
  } else {
    $errors[$key] = 'Veuillez renseigner ce champ.';
  }
}
// G E N E R A T E   R A N D O M   S T R I N G ///////////////////////////////////////
function generateRandomString($length = 10) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}
// F O R M A T A G E   D A T E ///////////////////////////////////////////////////////
function formatDate($dateValue) {
  return date('d/m/Y H:i', strtotime($dateValue));
}
// F O R M A T A G E   D A T E   W H I T H O U T   M I N U T E ///////////////////////
function formatDateWithoutMinute($dateValue) {
  return date('d/m/Y', strtotime($dateValue));
}
// I S   L O G G E D /////////////////////////////////////////////////////////////////
function isLogged(){
  if(!empty($_SESSION['user'])) {
    if(!empty($_SESSION['user']['id']) && is_numeric($_SESSION['user']['id'])) {
      if(!empty($_SESSION['user']['pseudo'])) {
        if(!empty($_SESSION['user']['role'])) {
          if($_SESSION['user']['role'] == 'abonne' || $_SESSION['user']['role'] == 'admin') {
            if(!empty($_SESSION['user']['ip']) && $_SESSION['user']['ip'] == $_SERVER['REMOTE_ADDR']) {
              return true;
            }
          }
        }
      }
    }
  }
  return false;
}
// L O G O U T ///////////////////////////////////////////////////////////////////////
function logout($page) {
    session_start();
    $_SESSION['user'] = [];
    session_destroy();
    header('Location: ' . $page);
}
// S H O W   J S O N /////////////////////////////////////////////////////////////////
function showJson($data) {
  header("Content-type: application/json");
  $json = json_encode($data, JSON_PRETTY_PRINT);
  if($json) {
    die($json);
  } else {
    die('Error in json encoding');
  }
}

////////////////////Additional functions /////////////////////////
function validDate($errors,$value,$key){
  // PENSER A METTRE max="9999-12-31" comme attribut dans l'input date
  if(!empty($value)){
    $now = New DateTime("now");
    $datelimit = New DateTime("now");
    $datelimit->sub(new DateInterval('P120Y'));
    $date = New DateTime($value);


    $dateformate = $date->format('m-d-Y');
    $datexplode = explode('-', $dateformate);
    $month = $datexplode[0];
    $day = $datexplode[1];
    $year = $datexplode[2];

    if (checkdate($month, $day, $year) == true){
      if ($date < $datelimit == true) {
        $errors[$key] = 'Maître yoda vous n\'êtes pas...';
      }
      if ($date > $now == true) {
        $errors[$key] = 'Veuillez renseigner une date passée';
      }
    // SI checkdate renvoie false
    }
    else {
      $errors[$key] = 'Veuillez renseigner une date valide';
    }
  }
  // SI DATE EST VIDE
  else {
    $errors[$key] = 'Veuillez renseigner une date';
  }
  return $errors;
}


function validPostal($errors,$value,$key){
  if(!empty($value)){
    if(!is_numeric($value) || strlen($value) != 5) {
      $errors[$key] = 'Veuillez renseigner un code postal à 5 chiffres';
    }
  }
  else {
    $errors[$key] = 'Veuillez renseigner un code postal';
  }
  return $errors;
}


function validPostalNull($errors,$value,$key){
  if(strlen($value) == 0) {
    return $errors;
  }
  if(!is_numeric($value) || strlen($value) != 5) {
    $errors[$key] = 'Veuillez renseigner un code postal à 5 chiffres';
  }
  return $errors;
}


  function validNumber($errors,$value,$key,$min,$max){
      if ($value < $min) {
        $errors[$key] = 'Veuillez renseigner '.$min.' minimum .';
      }elseif ($value > $max) {
        $errors[$key] = 'Veuillez renseigner moins de '.$max.' .';
      }

    return $errors;
  }

  function validPhoneNumber($errors,$value,$key){
    if(!empty($value)){
      if(!is_numeric($value) || strlen($value) != 10) {
        $errors[$key] = 'Veuillez renseigner un Numéro de télephone valide';
      }
    }
    else {
      $errors[$key] = 'Veuillez renseigner ce champ';
    }
    return $errors;
  }

	function emptyError($errors,$value,$key){
	  if(empty($value)){
	    $errors[$key] = 'Ce champ ne doit pas être vide.';
	  }
	  return $errors;
	}
