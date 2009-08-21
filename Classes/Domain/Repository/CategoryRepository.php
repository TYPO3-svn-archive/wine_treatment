<?php

/**
 * Repository for Categories
 */
class Tx_WineTreatment_Domain_Repository_CategoryRepository extends Tx_Extbase_Persistence_Repository {

	/**
	 * Removes the category's products before removing the category itself.
	 *
	 * @param int $category
	 * @return void
	 */
	public function remove($category) {

		if ($category instanceof Tx_WineTreatment_Domain_Model_Category) {

			foreach ($category->getProducts() as $product) {
				$product->removeAllSpecialInformation();
				$product->removeAllWine();
				$product->removeAllUsages();
				$product->removeAllFunctions();
			}

		}

	}

	public function getOrdered() {
		$query = $this->createQuery(FALSE);
		$query->setOrderings(array('name' => Tx_Extbase_Persistence_QueryInterface::ORDER_ASCENDING));
		$result = $query->execute();
		$this->persistenceManager->getSession()->registerReconstitutedObjects($result);
		return $result;
	}

}

