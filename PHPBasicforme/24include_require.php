<!-- ເອີ້ນໃຊ້ງານຕົວແປ ແລະ Function ຈາກ File ດ້ານນອກ

include() ເປັນ Function ສຳຫຼັບໂຫຼກ File ເຂົ້າມາທຳງານ ໂດຍຈະທຳງານຕັ້ງແຕ່ຕົ້ນຈົນຈົບໂປຣແກຣມ ຫາກຫາ ໄຟລ໌ ບໍ່ເຈີຈະແຈ້ງຂໍ້ຜິດພາດ (warning) ແລ້ວຂ້າມໄປທຳງານສ່ວນອືີ່ນ
include_one() ຄ້າຍຄືກັບ include() ແຕ່ຈະເອີ້ນໄຟລ໌ພຽງຄັ້ງດຽວ
require() -----------------/------------ແລະຈົບໂປຣແກຣມ
require_one() -------------------/------------------ -->

<?php
include "menu.php";
echo "_______";
include "footer.php";
?>