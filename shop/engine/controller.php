<?php
//error_reporting(!E_NOTICE);

function prepareVariables($page, $action) {

    $session = session_id() ?? "";
    $status = $_GET["status"] ?? ""; 

    $params["menu"] = getMenu(getCount($session));
    $params["name"] = getUser();
    $params["authorization"] = isAuthorized();

    switch ($page) {

        case "login": 
            $login = $_POST["login"];
            $pass = $_POST["pass"];

            if (authorization($login, $pass)) {

                if (isset($_POST["save"])) {
                    $hash = uniqid(rand(), true);
                    $id = $_SESSION["id"];
                    updateHash($hash, $id);
                    setcookie("hash", $hash, time() + 3600, "/");   
                }
                header("Location: " . $_SERVER["HTTP_REFERER"]);
                die();
            } else {
                die("Incorrect login or password");
            }
            break;
        
        case "logout": 
            setcookie("hash", "", time() - 1, "/");
            session_regenerate_id();
            session_destroy();
            header("Location: " . $_SERVER["HTTP_REFERER"]);
            die();
    
        case "index":
            $params["title"] = "Main";
            break;

        case "about":
            $params["title"] = "About Us";
            $params["phone"] = 123123;
            break;

        case "gallery":
        
            if (!empty($_FILES)) {
                $status = uploadImg();
                header("Location:/gallery/?status=$status");
                die();
            }

            $params["title"] = "Gallery";
            $params["images"] = getGallery();
            $params["message"] = getMessage($status);   
            break;

        case "image":

            $id = (int)$_GET["id"];
            updateViews($id);

            $params["title"] = "Image";
            $params["image"] = getImage($id);
            break;
        
        case "calculator": 
            $operation = $_GET["operation"] ?? "+";
            $arg1 = 0; 
            $arg2 = 0;

            if (!empty($_GET)) {
                $arg1 = $_GET["arg1"];
                $arg2 = $_GET["arg2"];
            }

            $params["title"] = "Calculator";
            $params["arg1"] = $arg1;
            $params["arg2"] = $arg2;
            $params["operation"] = $operation;
            $params["result"] = mathOperation($arg1, $arg2, $operation);
            break;
        
        case "catalog":

            $params["title"] = "Catalog";
            $params["items"] = getCatalog();

            if ($action == "buy") {
                $itemId = (int)$_POST["id"];
                $itemPrice = $_POST["price"];
                $userId = $_SESSION["id"];

                addToCart($itemId, $session, $itemPrice, $userId);
                header("Location: /catalog/");
                die();
            }
            break;

        case "cart":

            if ($action == "delete") {
                $cartId = (int)$_POST["id"];
                deleteFromCart($cartId, $session);
                header("Location: /cart/");
                die(); 
            }

            if ($action == "order") {
                $name = $_POST["name"];
                $surname = $_POST["surname"];
                $phone = $_POST["phone"];
                $userId = $_SESSION["id"];
                
                addOrder($name, $surname, $phone, $session, $userId);
                session_regenerate_id();
                header("Location: /catalog" );
                die();         
            }

            $params["count"] = getCount($session);
            $params["title"] = "Cart";
            $params["items"] = getCartItems($session);
            $params["sum"] = getSumItems($session);    
            break;

        case "item":

            $id = (int)$_GET["id"];
            updateItemViews($id);
            $item = getItem($id);

            $params["title"] = "Item";
            if (isset($item)) {
                $params["item"] = $item;
                $params["postTitle"] = $item["item_title"];

                if ($action == "buy") {
                    $price = $_POST["price"];
                    $userId = $_SESSION["id"];

                    addToCart($id, $session, $price, $userId);
                    header("Location: /item/?id=$id");
                    die();
                }
            }
            break;

        case "feedback":

            $name = $_POST["name"] ?? "";
            $text = $_POST["text"] ?? "";
            $id = $_GET['id'] ?? "";

            $feedback = doFeedbackAction($action, $name, $text, $id);
    
            $params["title"] = "Feedback";
            $params["feedback"] = getFeedback();
            $params["message"] = getFeedbackMessage($status);
            $params["buttonText"] = $feedback["buttonText"];
            $params["result"] = $feedback["result"];
            $params["actionFeedback"] = $feedback["actionFeedback"];
            break;

        case "my_orders":
            $params["title"] = "My orders";

            $login = getUser();
            $params["orders"] = getMyOrders($login);      
            break;

        case "admin":
            $admin = isAdmin();
            
            if(!$admin) {
                die("You are not authorized to view this page.");
            }

            $params["title"] = "Admin panel";
            $params["orders"] = getOrders();
            break;

        case "order_details":
            $admin = isAdmin();
                
            if(!$admin) {
                die("You are not authorized to view this page.");
            }

            $orderId = (int)$_GET["id"];
            $orderStatus = $_POST["status"] ?? getStatus($orderId);

            $params["title"] = "Order details";
            $params["postTitle"] = "Order #$orderId";
            $params["orders"] = getOneOrder($orderId);
            $params["id"] = $orderId;
            $params["status"] = $orderStatus;

            if ($action == "status") {
                setOrderStatus($orderStatus, $orderId);
            }
            break;

        case "install":

            insertGallery();
            header("Location:/");
            die();

        default: 
            echo "Error! 404!";
            die();
    }

    return $params;
}