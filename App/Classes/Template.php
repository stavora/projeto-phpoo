<?php

namespace App\Classes;

class Template {

	private function loader() {
		$folderView = realpath(__DIR__ . '/..');
		return new \Twig\Loader\FilesystemLoader([$folderView . '/Views/site', $folderView . '/Views/admin']);
	}

	public function init() {
		return new \Twig\Environment($this->loader(), [
			'debug' => true,
			// 'cache' => ''
			'auto_reload' => true,
		]);
	}
}

