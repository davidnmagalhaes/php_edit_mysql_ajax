<?php
namespace Phppot;

use Phppot\Model\FAQ;
?>
<html>
<head>
<title>PHP MySQL Inline Editing using jQuery Ajax</title>
<link href="./assets/CSS/style.css" type="text/css" rel="stylesheet" />
<script src="./vendor/jquery/jquery-3.2.1.min.js"></script>
<script src="./assets/js/inlineEdit.js"></script>
</head>
<body>
    <table class="tbl-qa">
        <thead>
            <tr>
                <th class="table-header" width="10%">Q.No.</th>
                <th class="table-header">Question</th>
                <th class="table-header">Answer</th>
            </tr>
        </thead>
        <tbody>
<?php
require_once ("Model/FAQ.php");
$faq = new FAQ();
$faqResult = $faq->getFAQ();

foreach ($faqResult as $k => $v) {
    ?>
			  <tr class="table-row">
                <td><?php echo $k+1; ?></td>
                <td contenteditable="true"
                    onBlur="saveToDatabase(this,'question','<?php echo $faqResult[$k]["id"]; ?>')"
                    onClick="showEdit(this);"><?php echo $faqResult[$k]["question"]; ?></td>
                <td contenteditable="true"
                    onBlur="saveToDatabase(this,'answer','<?php echo $faqResult[$k]["id"]; ?>')"
                    onClick="showEdit(this);"><?php echo $faqResult[$k]["answer"]; ?></td>
            </tr>
		<?php
}
?>
		  </tbody>
    </table>
</body>
</html>
