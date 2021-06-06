<?php require __DIR__ . '/../../__connect_db.php';



// 1.列表, 2.加入, 3.變更數量, 4.移除項目
// 1.list, 2.add, 3.upgrade, 4.delete



switch ($action) {
     case 'add':
          if (!empty($pid)) {
               if (!empty($qty)) {
                    // 購物車內已有該商品資料 
                    if (!empty($_SESSION['cart'][$pid])) {
                         $_SESSION['cart'][$pid]['quantity'] = $qty;
                    } else {
                         // 如果是新加入的商品
                         $sql = SelectTable($pid);
                         $row = $pdo->query($sql)->fetch();

                         if (!empty($row)) {
                              $row['quantity'] = $qty;
                              $_SESSION['cart'][$row['sid']] = $row;
                         }
                    }
               } else {
                    unset($_SESSION['cart'][$pid]); //移除該項商品
               }
          }
          // $_SESSION['cart'][$pid] = $qty;

          break;

     case 'delete':
          if (!empty($pid)) {
               unset($_SESSION['cart'][$pid]); //移除該項商品

          }
          break;

     default:
}

function SelectTable($res)
{
     $a = preg_replace("/[^a-z.]/", "", $res);
     $sql = "";
     switch ($a) {
          case "cpu":
               $sql = "SELECT * FROM 01cpu WHERE sid = $res";
               break;
          case "mb":
               $sql = "SELECT * FROM 02mb WHERE sid = $res";
               break;
          case "vga":
               $sql = "SELECT * FROM 03vga WHERE sid = $res";
               break;
          case "ram":
               $sql = "SELECT * FROM 04ram WHERE sid = $res";
               break;
          case "hdd":
               $sql = "SELECT * FROM 05hdd WHERE sid = $res";
               break;
          case "ssd":
               $sql = "SELECT * FROM 06ssd WHERE sid = $res";
               break;
          case "ccase":
               $sql = "SELECT * FROM 07computercase WHERE sid = $res";
               break;
          case "power":
               $sql = "SELECT * FROM 09screen WHERE sid = $res";
               break;
          case "screen":
               $sql = "SELECT * FROM 08powersupply WHERE sid = $res";
               break;
          case "radi":
               $sql = "SELECT * FROM 10radiator WHERE sid = $res";
               break;
          case "therm":
               $sql = "SELECT * FROM 11thermalgrease WHERE sid = $res";
               break;
          case "fan":
               $sql = "SELECT * FROM 12fan WHERE sid = $res";
               break;
          case "water":
               $sql = "SELECT * FROM 13watercooled WHERE sid = $res";
               break;
          case "exhdd":
               $sql = "SELECT * FROM 14externalharddrive WHERE sid = $res";
               break;
          case "usb":
               $sql = "SELECT * FROM 15usb WHERE sid = $res";
               break;
          case "memo":
               $sql = "SELECT * FROM 16memorycard WHERE sid = $res";
               break;
          case "docu":
               $sql = "SELECT * FROM 17document_com  WHERE sid = $res";
               break;
          case "draw":
               $sql = "SELECT * FROM 18drawing_com WHERE sid = $res";
               break;
          case "game":
               $sql = "SELECT * FROM 19gaming_com WHERE sid = $res";
               break;
          default:
               exit;
     }
     return $sql;
}


echo json_encode($_SESSION['cart'], JSON_UNESCAPED_UNICODE);