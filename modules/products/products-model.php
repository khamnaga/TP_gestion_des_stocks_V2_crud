<?php
include_once dirname(__FILE__) . "./../../libs/utiliy.php";

$db = connectDB("localhost","bdd_gestion_des_stocks","root","root");

function getProduct($id) {
	global $db;

	$sql = "SELECT * FROM products WHERE id = :id";
	$statement = $db->prepare($sql);
	$statement->bindParam("id", $id, PDO::PARAM_INT);
	$statement->execute();
	return $statement->fetch(PDO::FETCH_OBJ);
}

function getProducts() {
	global $db;
	$sql = "SELECt * FROM products";
	$exec = $db->query($sql);
	return $exec->fetchAll(PDO::FETCH_OBJ);

}

function createProduct(){
	global $db;
	$sql = "INSERT INTO products (nom, prix, created_at)
	 VALUES (:nom, :prix, :created_at)";

	 $statement = $db->prepare($sql);
	 $statement->bindParam(":nom, $_POST["nom"],PDO::PARAM_STR");
	 $statement->bindParam(":prix, $_POST["prix"],PDO::PARAM_INT");
	 $statement->bindParam(":created_at, $_POST["created_at"],PDO::PARAM_STR");

}

function updateProduct(){
	global $db;

	$sql = "UPDATE products SET nom = :nom, prix = :prix, created_at = :created_at
			WHERE id = :id";

	$statement = $db->prepare($sql);
	$statement->bindParam("id", $_POST["id"], PDO::PARAM_INT);
	$statement->bindParam("nom", $_POST["nom"], PDO::PARAM_STR);
	$statement->bindParam("prix", $_POST["prix"], PDO::PARAM_INT);
	$statement->bindParam("created_at", $_POST["created_at"], PDO::PARAM_INT);
	$check = $statement->execute();
}

function deleteProduct($ids){
	global $db;

	foreach ($_POST["delete_products_ids"] as $id) {
	 	$sql = "DELETE FROM products WHERE id = :id";
	 	$statement = $db->prepare($sql);
	 	$tatement->bindParam(":id" , $id, PDO::PARAM_INT);
	 	$res = $statement->execute();
	 	$msg_crud = ($res === true) ? "suppression ok" : "soucis suppression";

	}
    header("location:index.php");
}
