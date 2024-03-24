<? require_once($_SERVER['DOCUMENT_ROOT'] . "/bitrix/modules/main/include/prolog_before.php");

if(!$_REQUEST['token']) {
	die();
}

if($_REQUEST['action']) {
    $action = $_REQUEST['action'];
    switch ($action) {
        case "SENDQUESTION":
            sendLetterAboutQuestion();
            break;
    }
}

function sendLetterAboutQuestion() {
    $name     = $_POST['name'];
    $email    = $_POST['email'];
    $question = $_POST['question'];

    if(empty($email)) {
        $result['ERROR'][] = "Заполните имя";
    }
    if(empty($name)) {
        $result['ERROR'][] = "Заполните email";
    }
    if(empty($question)) {
        $result['ERROR'][] = "Заполните ваш вопрос";
    }

    if(!($result['ERROR'])) {
        $arEventName = "SENDQUESTION";
        $arEventFields = array(
            "EMAIL_TO" => "afisha.kansk@mail.ru",
            "NAME"     => $name,
            "EMAIL"    => $email,
            "QUESTION"  => $question
        );
        $arSite = "s1";
        if(CEvent::Send($arEventName, $arSite,$arEventFields)) {
            $result['SUCCESS'] = "<div style='color:green'>Спасибо, ваше сообщение успешно отправлено, наш специалист ответит вам в ближайшее время</div>";
        } else {
            $result['ERROR'] = "При отправке сообщения произошла ошибка, пожалуйста, попробуйте еще раз";
        }
    }
    echo json_encode($result);
}

