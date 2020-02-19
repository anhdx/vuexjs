<?php
namespace App\Repositories;


interface BaseRepository{

	function getAllUser();
	function getUserById(int $id);
	function store(array $data);
	function update(array $data, $id);
	function delete(int $id);
}
