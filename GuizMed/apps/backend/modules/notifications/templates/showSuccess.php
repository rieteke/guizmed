{
   "notifications":{
	"incoming":[
        <?php $bolin = true; ?>
        <?php foreach($incommings as $incomming ): ?>
        <?php if($bolin ==true){
            $bolin=false;
        }else{
            echo ',';
        }?>
	   {
		"id":"<?php echo $incomming->getNotificationId(); ?>",
		"fName":"<?php echo $incomming->getOldUser()->getFname(); ?>",
		"lName":"<?php echo $incomming->getOldUser()->getLname(); ?>",
		"accepted":"<?php echo $incomming->getAccepted(); ?>",
		"checked":"<?php echo $incomming->getChecked(); ?>"
	   }
       <?php endforeach; ?>
	],
	"outgoing":[
        <?php $bolout = true; ?>
        <?php foreach($outcommings as $outcomming ): ?>
        <?php if($bolout ==true){
            $bolout=false;
        }else{
            echo ',';
        }?>
	   {
		"id":"<?php echo $outcomming->getNotificationId(); ?>",
		"fName":"<?php echo $outcomming->getNewUser()->getFname(); ?>",
		"lName":"<?php echo $outcomming->getNewUser()->getLname(); ?>",
		"accepted":"<?php echo $outcomming->getAccepted(); ?>",
		"checked":"<?php echo $outcomming->getChecked(); ?>"
	   }
       <?php endforeach; ?>
	]
   }
}