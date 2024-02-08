
<?php

function getBebrai(): array
{
    if (!file_exists(__DIR__ . '/bebrai.json')) {
        $bebrai = [];
        $bebrai = json_encode($bebrai);
        file_put_contents(__DIR__ . '/bebrai.json', $bebrai);
    }
    return json_decode(file_get_contents(__DIR__ . '/bebrai.json'), 1);
}

function setBebrai(array $bebrai): void
{
    $bebrai = json_encode($bebrai);
    file_put_contents(__DIR__ . '/bebrai.json', $bebrai);
}
function setNauja(): void
{
    $bebrai = json_decode(file_get_contents(__DIR__ . '/bebrai.json'), 1);

    $nr = rand(100000000000, 999999999999);
    $nauja = ['juodieji' => 0, 'rudieji' => 0, 'id' => $nr];
    $bebrai[] = $nauja;
    $bebrai = json_encode($bebrai);
    file_put_contents(__DIR__ . '/bebrai.json', $bebrai);
}


function router()
{

    $route = $_GET['route'] ?? '';

    if ('GET' == $_SERVER['REQUEST_METHOD'] && '' === $route) {
        auth();
        pirmasPuslapis();
    } elseif ('GET' == $_SERVER['REQUEST_METHOD'] && 'nauja' === $route) {
        auth();
        rodytiNaujaPuslapi();
    } elseif ('POST' == $_SERVER['REQUEST_METHOD'] && 'nauja' === $route) {
        auth();
        sukurtiNaujaUztvanka();
    } elseif ('POST' == $_SERVER['REQUEST_METHOD'] && 'destroy' === $route && isset($_GET['id'])) {
        sugriautiUztvanka($_GET['id']);
    } elseif ('POST' == $_SERVER['REQUEST_METHOD'] && 'prideti-juodus' == $route && isset($_GET['id'])) {
        auth();
        pridetiJuodus($_GET['id']);
    } elseif ('POST' == $_SERVER['REQUEST_METHOD'] && 'atimti-juodus' == $route && isset($_GET['id'])) {
        auth();
        atimtiJuodus($_GET['id']);
    } elseif ('POST' == $_SERVER['REQUEST_METHOD'] && 'prideti-rudus' == $route && isset($_GET['id'])) {
        auth();
        pridetiRudus($_GET['id']);
    } elseif ('POST' == $_SERVER['REQUEST_METHOD'] && 'atimti-rudus' == $route && isset($_GET['id'])) {
        auth();
        atimtiRudus($_GET['id']);
    } elseif ('GET' == $_SERVER['REQUEST_METHOD'] && 'login' == $route) {
        rodytiLogin();
    } elseif ('GET' == $_SERVER['REQUEST_METHOD'] && 'home' == $route) {
        rodytiHome();
    } elseif ('POST' == $_SERVER['REQUEST_METHOD'] && 'login' == $route) {
        darytiLogin();
    } elseif ('POST' == $_SERVER['REQUEST_METHOD'] && 'logout' == $route) {
        auth();
        darytiLogout();
    } else {
        echo 'page not found';
        die;
    }
}

function darytiLogout()
{
    unset($_SESSION['login'], $_SESSION['name']);

    header('Location: ' . URL . '?route=home');
    die;
}



function isLog()
{

    return isset($_SESSION['login']) && $_SESSION['login'] = 1;
}
function auth()
{
    if (!isset($_SESSION['login']) || $_SESSION['login'] != 1) {
        header('Location: ' . URL . '?route=login');
        die;
    }
}
function rodytiHome()
{

    require __DIR__ . '/view/home.php';
}
function rodytiLogin()
{

    require __DIR__ . '/view/login.php';
}
function darytiLogin()
{
    $users = json_decode(file_get_contents(__DIR__ . '/users.json'), 1);
    $name = $_POST['name'] ?? '';

    $pass = md5($_POST['pass']) ?? '';

    foreach ($users as $user) {
        if ($user['name'] == $name) {

            if ($user['pass'] == $pass) {

                $_SESSION['login'] = 1;

                $_SESSION['name'] = $name;
                addMessage('success', 'sekmingai prisijungta');
                header('Location:' . URL);
                die;
            }
        }
    }
    addMessage('danger', ' neprisijungta');
    header('Location:' . URL . '?route=login');
    die;
}

function  pridetiJuodus(int $id)
{
    $bebrai = getBebrai();
    foreach ($bebrai as &$bebras) {

        if ($id == $bebras['id']) {
            $bebras['juodieji'] += (int)$_POST['j_plus'];
            break;
        }
    }

    setBebrai($bebrai);
    header('Location:' . URL);
};

function atimtiJuodus(int $id)
{
    $bebrai = getBebrai();
    foreach ($bebrai as &$bebras) {
        if ($id == $bebras['id']) {
            if ((int)$_POST['j_minus'] > $bebras['juodieji']) {

                addMessage('danger', 'tiek nera');
                header('Location:' . URL);
                die;
            }

            $bebras['juodieji'] -= (int)$_POST['j_minus'];
            setBebrai($bebrai);
            addMessage('success', 'atemimas');
            header('Location:' . URL);
            die;
        }
    }
    addMessage('danger', 'nera uztvankos');
    header('Location:' . URL);
    die;
};

function pridetiRudus(int $id)
{
    $bebrai = getBebrai();
    foreach ($bebrai as &$bebras) {

        if ($id == $bebras['id']) {
            $bebras['rudieji'] += (int)$_POST['r_plus'];
            break;
        }
    }

    setBebrai($bebrai);
    header('Location:' . URL);
};

function atimtiRudus(int $id)
{
    $bebrai = getBebrai();
    foreach ($bebrai as &$bebras) {
        if ($id == $bebras['id']) {
            if ((int)$_POST['r_minus'] > $bebras['rudieji']) {

                addMessage('danger', 'tiek nera');
                header('Location:' . URL);
                die;
            }

            $bebras['rudieji'] -= (int)$_POST['r_minus'];
            setBebrai($bebrai);
            addMessage('success', 'atemimas');
            header('Location:' . URL);
            die;
        }
    }
    addMessage('danger', 'nera uztvankos');
    header('Location:' . URL);
    die;
};


function destroy(int $id)
{
    $bebrai = getBebrai();
    foreach ($bebrai as $key => $bebras) {
        if ($id == $bebras['id']) {
            unset($bebrai[$key]);
            break;
        }
    }
    setBebrai($bebrai);
    addMessage('danger', 'sugriauta uztvanka');
    header('Location: ' . URL);
}



function pirmasPuslapis()
{
    $bebrai = getBebrai();
    require __DIR__ . '/view/pirmas.php';
}

function rodytiNaujaPuslapi()
{
    require __DIR__ . '/view/naujas.php';
}


function sukurtiNaujaUztvanka()
{
    setNauja();
    addMessage('success', 'sukurta nauja uztvanka');
    header('Location:' . URL);
}
function sugriautiUztvanka(int $id)
{
    destroy($id);

    header('Location:' . URL);
}

function addMessage(string $type, string $msg): void

{
    $_SESSION['msg'][] = ['type' => $type, 'msg' => $msg];
}
function clearMessages(): void

{
    $_SESSION['msg'] = [];
}
function showMessages(): void

{
    $messages = $_SESSION['msg'];
    clearMessages();
    require __DIR__ . '/view/msg.php';
}




?>