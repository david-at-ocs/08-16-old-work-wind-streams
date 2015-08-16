<?php
function validateForm($data)
{
    $errors = array();

    if(empty($data['name']))
    {
        $errors['name'] = '<p class="error">You must complete the name field</p>';
    }
    elseif(!preg_match('/[-a-z\'` ]+/i', $data['name']))
    {
        $errors['name'] = '<p class="error">The name you entered is not valid</p>';
    }

    if(empty($data['email']))
    {
        $errors['email'] = '<p class="error">You must complete the email field</p>';
    }
    elseif(!filter_var($data['email'], FILTER_VALIDATE_EMAIL))
    {
        $errors['email'] = '<p class="error">The email address you entered is not valid</p>';
    }

    if(empty($data['message']))
    {
        $errors['message'] = '<p class="error">You must enter a message</p>';
    }

    return $errors;
}


function processTheForm($to)
{
    $result = array();
    if($_SERVER['REQUEST_METHOD'] == 'POST' && empty($_POST['middle-name']))
    {
        $errors = validateForm($_POST);
        $_POST['message'] = strip_tags($_POST['message']);
        $subject= strip_tags($_POST['subject']);

        if(empty($subject))
        {
            $subject = 'Message from '.$_POST['name'];
        }

        if(empty($errors))
        {
            $headers = 'From: ' . "{$_POST['name']} <{$_POST['email']}>" . "\r\n";

            $mailTpl = file_get_contents('mail-template.tpl.php');
            $mailTpl = str_replace(array('[name]', '[email]', '[message]'),
                array($_POST['name'], $_POST['email'], $_POST['message']), $mailTpl);


            if(mail($to, $subject, $mailTpl, $headers))
            {
                unset($_POST['name'], $_POST['email'], $_POST['subject'], $_POST['message']);
                $result['mail_error'] = false;
            }
            else
            {
                $result['mail_error'] = true;
            }
        }

        $result['errors'] = $errors;
    }

    return $result;
}