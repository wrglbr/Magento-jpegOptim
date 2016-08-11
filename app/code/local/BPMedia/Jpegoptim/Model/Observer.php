<?php
set_time_limit(0);
class BPMedia_Jpegoptim_Model_Observer
{
  public function optimize(Varien_Event_Observer $observer) {
    if(Mage::getStoreConfig('jpegoptim/setting/enable')){
    $ProductImageDir = Mage::getBaseDir('media').DS.'catalog'.DS.'product';
    $productMediaGallery = $observer->getProduct()->getMediaGallery();
    $images = $productMediaGallery['images'];
    foreach($images as $image){
              $pImage = $ProductImageDir.$image['file'];
              exec('/usr/local/bin/jpegoptim --strip-all ' . $pImage, $result);
						  Mage::log($result, null, 'jpegoptim.log');
             


                        }
}

}
}


