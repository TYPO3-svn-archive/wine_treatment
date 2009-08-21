<?php

/**
 * A repository for Products
 */
class Tx_WineTreatment_Domain_Repository_ProductRepository extends Tx_Extbase_Persistence_Repository {

	public function getOrderedByCategory($categoryUid) {
		$query = $this->createQuery();
		$query->getQuerySettings()->setRespectStoragePage(FALSE);
		return $query
			->matching($query->equals('category', $categoryUid))
			->setOrderings(array('name' => Tx_Extbase_Persistence_QueryInterface::ORDER_ASCENDING))
			->execute();
	}

}

